<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Repositories\MediaRepo;
use Illuminate\Http\Request;

class AlumniController extends Controller
{

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $alumnies = Alumni::get();

        return view('back.alumni.index', compact('alumnies'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('back.alumni.create');
    }

    /**
     * @param \App\Http\Requests\ResearchStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $v_data = [
            'name' => 'required|max:255',
            'email' => 'required',
            'student_id' => 'required'
            // 'description' => 'required',
        ];

        if ($request->file('image')) {
            $v_data['image'] = 'mimes:jpg,png,jpeg,gif';
        }

        $request->validate($v_data);

        $alumni = new Alumni();
        $alumni->name = $request->name;
        $alumni->email = $request->email;
        $alumni->student_id = $request->student_id;
        $alumni->designation = $request->designation;
        $alumni->batch_no = $request->batch_no;
        $alumni->description = $request->description;

        if ($request->file('image')) {
            $uploaded_file = MediaRepo::upload($request->file('image'));
            $alumni->image = $uploaded_file['file_name'];
            $alumni->image_path = $uploaded_file['file_path'];
            $alumni->media_id = $uploaded_file['media_id'];
        }

        $alumni->save();

        return redirect()->back()->with('success-alert', 'Alumni created successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Research $research
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Alumni $alumni)
    {
        return view('back.alumni.show', compact('research'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Research $research
     * @return \Illuminate\Http\Response
     */
    public function edit($alumni)
    {
        $alumni = Alumni::findOrFail($alumni);
        return view('back.alumni.edit', compact('alumni'));
    }

    /**
     * @param \App\Http\Requests\ResearchUpdateRequest $request
     * @param \App\Models\Research $research
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $alumni)
    {

        $v_data = [
            'name' => 'required|max:255',
            'email' => 'required',
            'student_id' => 'required'
            // 'description' => 'required',
        ];

        if ($request->file('image')) {
            $v_data['image'] = 'mimes:jpg,png,jpeg,gif';
        }

        $request->validate($v_data);

        $alumni = Alumni::findOrFail($alumni);
        $alumni->name = $request->name;
        $alumni->email = $request->email;
        $alumni->student_id = $request->student_id;
        $alumni->designation = $request->designation;
        $alumni->batch_no = $request->batch_no;
        $alumni->description = $request->description;

        if ($request->file('image')) {
            $uploaded_file = MediaRepo::upload($request->file('image'));
            $alumni->image = $uploaded_file['file_name'];
            $alumni->image_path = $uploaded_file['file_path'];
            $alumni->media_id = $uploaded_file['media_id'];
        }

        $alumni->save();

        return redirect()->back()->with('success-alert', 'Alumni Update successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Research $research
     * @return \Illuminate\Http\Response
     */
    public function destroy($alumni)
    {
        $alumni = Alumni::findOrFail($alumni);
        $alumni->delete();

        return redirect()->route('back.alumni.index')->with('success-alert', 'Alumni deleted successfully.');
    }
}
