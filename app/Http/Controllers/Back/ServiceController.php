<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceMaterial;
use App\Models\ServiceSlot;
use App\Models\ServiceType;
use App\Models\SlotAvailability;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('back.service.index',compact('services'));
    }

    public function create()
    {
        $service_types=ServiceType::where(['status'=>1])->orderBy('position','ASC')->get();
        $taggs=Tag::where(['status'=>1])->orderBy('position','ASC')->get();
        return view('back.service.create',compact('service_types','taggs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_type_id'=>'required|not_in:0|exists:service_types,id',
            'title'=>'required|string|max:191',
            'sub_title'=>'max:191',
            'is_video'=>'required|not_in:-1|numeric',
            'image' => 'image|mimes:jpg,png,jpeg,gif',
            'video' => 'mimes:mp4',
            'short_description'=>'required',
            'description'=>'required',
            'date'=>'',
            'amount'=>'required|not_in:-1',
            'tags'=>'required',
            'expire_date'=>'',
        ]);
        $data = $request->except(['image','video']);
        if ($request->amount <1){
            $data +=['is_free'=>1];
        }

        if($request->file('image')){

            $file = $request->file('image');
            $photo = time() . '.' . $file->getClientOriginalExtension();
            $destination = public_path('/uploads/service/image');
            File::makeDirectory($destination, $mode = 0775, true, true);
            $file->move($destination, $photo);
            $data +=[
                'image'=>'/uploads/service/image/'.$photo
            ];
        }
        if ($request->file('video')){
            $file = $request->file('video');
            $fileName = time().'_'.$request->file('video')->getClientOriginalName();

            $destination = public_path('uploads/service/video');
            $file->move($destination, $fileName);
            $data +=[
                'video'=>$fileName,
            ];
        }
        try {
            Service::create($data);
            return response()->json(['status'=>'success','message'=>'Successfully created'],200);
        }catch (\Exception $e){
            return response()->json(['status'=>'error','message'=>'Invalid request'],404);
        }
    }

    public function edit(Service $service)
    {
        $service_types=ServiceType::where(['status'=>1])->orderBy('position','ASC')->get();
        $taggs=Tag::where(['status'=>1])->orderBy('position','ASC')->get();
        return view('back.service.edit',compact('service','service_types','taggs'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'service_type_id'=>'required|not_in:0|exists:service_types,id',
            'title'=>'required|string|max:191',
            'sub_title'=>'max:191',
            'is_video'=>'required|not_in:-1|numeric',
            'image' => 'image|mimes:jpg,png,jpeg,gif',
            'video' => 'mimes:mp4',
            'short_description'=>'required',
            'description'=>'required',
            'date'=>'',
            'amount'=>'required|not_in:-1',
            'tags'=>'required',
            'expire_date'=>'',
        ]);
        $data = $request->except(['image','video']);

        if($request->file('image')){

            $file = $request->file('image');
            $photo = time() . '.' . $file->getClientOriginalExtension();
            $destination = public_path('/uploads/service/image');
            File::makeDirectory($destination, $mode = 0775, true, true);
            $file->move($destination, $photo);
            $data +=[
                'image'=>'/uploads/service/image/'.$photo
            ];
        }
        if ($request->file('video')){
            $file = $request->file('video');
            $fileName = time().'_'.$request->file('video')->getClientOriginalName();

            $destination = public_path('uploads/service/video');
            $file->move($destination, $fileName);
            $data +=[
                'video'=>$fileName,
            ];
        }
        try {
            $service->update($data);
            return response()->json(['status'=>'success','message'=>'Successfully updated'],200);
        }catch (\Exception $e){
            return response()->json(['status'=>'error','message'=>'Invalid request'],404);
        }
    }

    public function remove(Service $service)
    {
        $service->delete();
        return redirect()->route('back.service.index')->with('success-alert', 'Removed successfully.');
    }

    public function serviceUser(Service $service)
    {
        $user_services = $service->userServices;

        return view('back.service.users.index',compact('user_services','service'));
    }

    public function materials(Service $service)
    {
        $service_materials = $service->serviceMaterials;

        return view('back.service.materials.index',compact('service','service_materials'));
    }

    public function materialStore(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'service_id'=>'required|exists:services,id',
            'doc'=>'mimes:pdf,docx,pptx,xlsx',
            'video'=>'mimes:mp4'
        ]);
        $data = $request->only(['title','service_id','is_video']);
        // Upload PDF
        if ($request->file('doc')) {
            $file = $request->file('doc');
            $fileName = time().'_'.$request->file('doc')->getClientOriginalName();
            $extension = $request->file('doc')->getClientOriginalExtension();
            $destination = public_path('uploads/service/doc');
            File::makeDirectory($destination, $mode = 0777, true, true);
            $file->move($destination, $fileName);
            $data +=[
                'type'=>$extension=='pdf'?'pdf':'office',
                'doc'=>'uploads/service/doc/'.$fileName
            ];
        }
        // Upload Video
        if ($request->file('video')) {
            $file = $request->file('video');
            $fileName = time().'_'.$request->file('video')->getClientOriginalName();

            $destination = public_path('uploads/service/video');
            File::makeDirectory($destination, $mode = 0777, true, true);
            $file->move($destination, $fileName);

            $data +=[
                'type'=>'video',
                'video'=>'uploads/service/video/'.$fileName
            ];
        }
        ServiceMaterial::create($data);
        return redirect()->back()->with('success-alert', 'Successfully created.');
    }

    public function materialRemove(ServiceMaterial $serviceMaterial)
    {
        $serviceMaterial->delete();
        return redirect()->back()->with('success-alert', 'Removed successfully.');
    }

    public function slots(){
        $slots = ServiceSlot::latest('id')->get();

        return view('back.service.slots', compact('slots'));
    }
    public function slotsCreate(Request $request){
        $request->validate([
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        if(strtotime($request->end_time) < strtotime($request->start_time)){
            return redirect()->back()->with('error-alert', 'Invalid time!');
        }

        if(strtotime($request->end_time) == strtotime($request->start_time)){
            return redirect()->back()->with('error-alert', 'Invalid time!');
        }

        $slot = new ServiceSlot;
        $slot->start_time = $request->start_time;
        $slot->end_time = $request->end_time;
        $slot->save();

        return redirect()->back()->with('success-alert', 'Slot created successfully.');
    }
    public function slotsDelete($id){
        $slot = ServiceSlot::findOrFail($id);
        $slot->delete();

        return redirect()->back()->with('success-alert', 'Slot deleted successfully.');
    }

    public function availableSlots(Request $request){
        $month = $request->month ?? date('Y-m');

        $date = Carbon::parse($month);
        $days = $date->daysInMonth;

        $services = Service::where(['add_type'=>2])->active()->get();
        $slots = ServiceSlot::get();

        $date = Carbon::parse($month);

        $availabe_slots = SlotAvailability::with('Service', 'ServiecSlot')->whereMonth('date', $date)->get();

        $datas = array();
        for($i = 1; $i <= $days; $i++){
            $datas[$i] = [];
        }

        foreach($availabe_slots as $availabe_slot){
            $day_int = (int)date('d', strtotime($availabe_slot->date));

            $datas[$day_int][] = $availabe_slot;
        }

        // dd($datas);

        return view('back.service.availableSlots', compact('datas', 'services', 'slots'));
    }
    public function addAvailability(Request $request){
        $request->validate([
            'date' => 'required',
            'service' => 'required',
            'slot' => 'required',
            'availability' => 'required'
        ]);

        $slot = ServiceSlot::find($request->slot);

        $availability = new SlotAvailability;
        $availability->slot_id = $request->slot;
        $availability->start_time = $slot->start_time;
        $availability->end_time = $slot->end_time;
        $availability->service_id = $request->service;
        $availability->quantity = $request->availability;
        $availability->available_quantity = $request->availability;
        $availability->date = $request->date;
        $availability->save();

        return redirect()->back()->with('success-alert', 'Slot added successfully.');
    }

    public function deleteAvailability($id){
        $availability = SlotAvailability::findOrFail($id);
        if($availability->available_quantity != $availability->quantity){
            return redirect()->back()->with('error-alert2', 'Can not delete this slot! The slot already booked.');
        }
        $availability->delete();

        return redirect()->back()->with('success-alert', 'Slot deleted successfully.');
    }

    public function copyAvailability(Request $request){
        $request->validate([
            'currenct_month' => 'required',
            'copy_from' => 'required',
        ]);
        // $copy_year = date('Y', strtotime($request->copy_from));
        // dd($copy_year);

        $availabilities = SlotAvailability::whereMonth('date', Carbon::parse($request->copy_from))->get();
        // dd($availabilities);

        foreach($availabilities as $availability){
            $new_availability = new SlotAvailability;
            $new_availability->slot_id = $availability->slot_id;
            $new_availability->start_time = $availability->start_time;
            $new_availability->end_time = $availability->end_time;
            $new_availability->service_id = $availability->service_id;
            $new_availability->quantity = $availability->quantity;
            $new_availability->available_quantity = $availability->quantity;

            // $copy_year = date('Y', $request->copy_from);
            // $copy_month = date('m', $request->copy_from);
            $copy_day = date('d', strtotime($availability->date));
            $current_year = date('Y', strtotime($request->currenct_month));
            $current_month = date('m', strtotime($request->currenct_month));

            $new_availability->date = "$current_year-$current_month-$copy_day";

            $new_availability->save();
        }

        return redirect()->back()->with('success-alert', 'Stock copy successfully.');
    }

    public function slotsEditAjax(Request $request){
        $slot = ServiceSlot::find($request->slot_id);

        return view('back.service.slotsEditAjax', compact('slot'));
    }

    public function slotsUpdateAjax(Request $request){
        $request->validate([
            'start_time' => 'required',
            'end_time' => 'required'
        ]);

        $slot = ServiceSlot::find($request->slot_id);
        $slot->start_time = $request->start_time;
        $slot->end_time = $request->end_time;
        $slot->save();

        return redirect()->back()->with('success-alert', 'Slot updated successfully.');
    }

}
