<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
    public function index()
    {
        $service_types = ServiceType::all();
        return view('back.service.serviceType.index',compact('service_types'));
    }

    public function create()
    {
        return view('back.service.serviceType.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:191',
            'position'=>'required|numeric',
            'description'=>'',
        ]);
        $data = $request->only(['name','position','description']);
        try {
            ServiceType::create($data);
            return redirect()->back()->with('success-alert', 'Created successfully.');
        }catch (\Exception $e){
            return redirect()->back()->with('error-alert', 'Invalid Request.');
        }
    }

    public function edit(ServiceType $serviceType)
    {
        return view('back.service.serviceType.edit',compact('serviceType'));
    }

    public function update(Request $request, ServiceType $serviceType)
    {
        $request->validate([
            'name'=>'required|string|max:191',
            'position'=>'required|numeric',
            'description'=>'',
        ]);
        $data = $request->only(['name','position','description']);
        try {
            $serviceType->update($data);
            return redirect()->back()->with('success-alert', 'Updated successfully.');
        }catch (\Exception $e){
            return redirect()->back()->with('error-alert', 'Invalid Request.');
        }
    }

    public function remove(ServiceType $serviceType)
    {
        $serviceType->delete();
        return redirect()->route('back.serviceType.index')->with('success-alert', 'Removed successfully.');
    }
}
