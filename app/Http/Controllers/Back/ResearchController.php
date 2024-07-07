<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResearchStoreRequest;
use App\Http\Requests\ResearchUpdateRequest;
use App\Models\Research;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Repositories\MediaRepo;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $research = Research::all();

        return view('back.research.index', compact('research'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('back.research.create');
    }

    /**
     * @param \App\Http\Requests\ResearchStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $v_data = [
            'title' => 'required|max:255',
            'description' => 'required',
        ];

        if($request->file('image')){
            $v_data['image'] = 'mimes:jpg,png,jpeg,gif';
        }

        $request->validate($v_data);

        $research = new Research();
        $research->title = $request->title;
        $research->slug = Str::slug($request->title);
        $research->sub_title = $request->sub_title;
        $research->description = $request->description;
        $research->video = $request->video;

        if($request->file('image')){
            $uploaded_file = MediaRepo::upload($request->file('image'));
            $research->image = $uploaded_file['file_name'];
            $research->image_path = $uploaded_file['file_path'];
            $research->media_id = $uploaded_file['media_id'];
        }

        // Upload Video
        // if ($request->file('video')) {
        //     $file = $request->file('video');
        //     $fileName = time().'_'.$request->file('video')->getClientOriginalName();

        //     $destination = public_path('uploads/blog/video');
        //     $file->move($destination, $fileName);

        //     $research->video = $fileName;
        // }

        // if($request->video_embade_code){
        //     $research->video_embade_code = $request->video_embade_code;
        // }

        if ($request->file('pdf_file')) {
            $file = $request->file('pdf_file');
            $fileName = time().'_'.$request->file('pdf_file')->getClientOriginalName();
            $path = public_path() . '/uploads/research/pdf';
            File::makeDirectory($path, $mode = 0777, true, true);
            $destination = public_path('/uploads/research/pdf');
            $file->move($destination, $fileName);
            $research->pdf_file = '/uploads/research/pdf/'.$fileName;
        }

        $research->save();

        return redirect()->back()->with('success-alert', 'Research created successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Research $research
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Research $research)
    {
        return view('back.research.show', compact('research'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Research $research
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Research $research)
    {
        return view('back.research.edit', compact('research'));
    }

    /**
     * @param \App\Http\Requests\ResearchUpdateRequest $request
     * @param \App\Models\Research $research
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Research $research)
    {
        $v_data = [
            'title' => 'required|max:255',
            'description' => 'required',
        ];

        if($request->file('image')){
            $v_data['image'] = 'mimes:jpg,png,jpeg,gif';
        }

        $request->validate($v_data);

        $research->title = $request->title;
        $research->slug = Str::slug($request->title);
        $research->sub_title = $request->sub_title;
        $research->description = $request->description;
        $research->video = $request->video;

        if($request->file('image')){
            $uploaded_file = MediaRepo::upload($request->file('image'));
            $research->image = $uploaded_file['file_name'];
            $research->image_path = $uploaded_file['file_path'];
            $research->media_id = $uploaded_file['media_id'];
        }

        if ($request->file('pdf_file')) {
            $file = $request->file('pdf_file');
            $fileName = time().'_'.$request->file('pdf_file')->getClientOriginalName();
            $path = public_path() . '/uploads/research/pdf';
            File::makeDirectory($path, $mode = 0777, true, true);
            $destination = public_path('/uploads/research/pdf');
            $file->move($destination, $fileName);
            $research->pdf_file = '/uploads/research/pdf/'.$fileName;
        }

        $research->save();

        return redirect()->back()->with('success-alert', 'Research Update successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Research $research
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Research $research)
    {
        $research->delete();

        return redirect()->route('back.research.index')->with('success-alert', 'Research deleted successfully.');
    }
}

