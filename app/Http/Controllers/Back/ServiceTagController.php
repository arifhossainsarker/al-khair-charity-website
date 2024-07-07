<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceTagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('back.service.tags.index',compact('tags'));
    }

    public function create()
    {
        return view('back.service.tags.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:191',
            'position'=>'required|numeric',
            'icon'=>'image|mimes:jpg,png,ico,jpeg',
        ]);
        $data = $request->only(['name','position']);
        if ($request->file('icon')){
            $file = $request->file('icon');
            $photo = time() . '.' . $file->getClientOriginalExtension();
            $destination = public_path('/uploads/service/tag');
            File::makeDirectory($destination, $mode = 0775, true, true);
            $file->move($destination, $photo);
            $data +=[
                'icon'=>'/uploads/service/tag/'.$photo
            ];
        }
        try {
            Tag::create($data);
            return redirect()->back()->with('success-alert', 'Created successfully.');
        }catch (\Exception $e){
            return redirect()->back()->with('error-alert', 'Invalid Request.');
        }
    }

    public function edit(Tag $tag)
    {
        return view('back.service.tags.edit',compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name'=>'required|string|max:191',
            'position'=>'required|numeric',
            'icon'=>'image|mimes:jpg,png,ico,jpeg',
        ]);
        $data = $request->only(['name','position']);
        if ($request->file('icon')){
            $file = $request->file('icon');
            $photo = time() . '.' . $file->getClientOriginalExtension();
            $destination = public_path('/uploads/service/tag');
            File::makeDirectory($destination, $mode = 0775, true, true);
            $file->move($destination, $photo);
            $data +=[
                'icon'=>'/uploads/service/tag/'.$photo
            ];
        }
        try {
            $tag->update($data);
            return redirect()->back()->with('success-alert', 'Updated successfully.');
        }catch (\Exception $e){
            return redirect()->back()->with('error-alert', 'Invalid Request.');
        }
    }

    public function remove(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('back.tag.index')->with('success-alert', 'Removed successfully.');
    }
}
