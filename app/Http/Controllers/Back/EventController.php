<?php

namespace App\Http\Controllers\Back;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use App\Models\Category;
use App\Models\EventAttribute;
use App\Repositories\MediaRepo;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest('id')->get();
        return view('back.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('for', 'news')->active()->get();
        return view('back.event.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $v_data = [
            'title' => 'required|max:255',
            'start_date' => 'required',
            'description' => 'required'
        ];

        if ($request->file('image')) {
            $v_data['image'] = 'mimes:jpg,png,jpeg,gif';
        }
        if ($request->video) {
            $v_data['video'] = 'required';
        }
        $request->validate($v_data);

        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->start_date = Carbon::parse($request->start_date);
        $event->end_date = Carbon::parse($request->end_date);
        $event->position = $request->position;
        $event->location_address = $request->location_address;
        $event->location_map = $request->location_map;
        $event->meta_title = $request->meta_title;
        $event->meta_description = $request->meta_description;
        $event->meta_tags = $request->meta_tags;
        $event->feature_type = $request->feature_type;
        $event->video = $request->video;

        if ($request->file('image')) {
            $uploaded_file = MediaRepo::upload($request->file('image'));
            $event->image = $uploaded_file['file_name'];
            $event->image_path = $uploaded_file['file_path'];
            $event->media_id = $uploaded_file['media_id'];
        }

        $event->save();

        // $a_type = [];
        // foreach ($request->attribute_title as $key => $type) {
        //     $attributes = [];
        //     foreach ($request->attribute_title[$key] as $key2 => $lb) {
        //         $attributes[] = [
        //             'label' => $lb,
        //             'attribute_title' => $request->attribute_title[$key][$key2],
        //             'attribute_description' => $request->attribute_description[$key][$key2],
        //             'attribute_url' => $request->attribute_url[$key][$key2],
        //             'attribute_position' => $request->attribute_position[$key][$key2]
        //         ];
        //     }
        //     $a_type[] = [
        //         'event_id' => $event->id,
        //         'attributes' => json_encode($attributes),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ];

        //     EventAttribute::insert($a_type);
        // }

        return redirect()->back()->with('success-alert', 'Event created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('back.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        dd($event);
        $v_data = [
            'title' => 'required|max:255',
            'start_date' => 'required',
            'description' => 'required'
        ];

        if ($request->file('image')) {
            $v_data['image'] = 'mimes:jpg,png,jpeg,gif';
        }
        if ($request->video) {
            $v_data['video'] = 'required';
        }
        $request->validate($v_data);

        $event = Event::findOrFail($event->id);
        $event->title = $request->title;
        $event->description = $request->description;
        $event->start_date = Carbon::parse($request->start_date);
        $event->end_date = Carbon::parse($request->end_date);
        $event->position = $request->position;
        $event->location_address = $request->location_address;
        $event->location_map = $request->location_map;
        $event->meta_title = $request->meta_title;
        $event->meta_description = $request->meta_description;
        $event->meta_tags = $request->meta_tags;
        $event->feature_type = $request->feature_type;
        $event->video = $request->video;

        if ($request->file('image')) {
            $uploaded_file = MediaRepo::upload($request->file('image'));
            $event->image = $uploaded_file['file_name'];
            $event->image_path = $uploaded_file['file_path'];
            $event->media_id = $uploaded_file['media_id'];
        }

        $event->save();

        // $a_type = [];
        // foreach ($request->attribute_title as $key => $type) {
        //     $attributes = [];
        //     foreach ($request->attribute_title[$key] as $key2 => $lb) {
        //         $attributes[] = [
        //             'label' => $lb,
        //             'attribute_title' => $request->attribute_title[$key][$key2],
        //             'attribute_description' => $request->attribute_description[$key][$key2],
        //             'attribute_url' => $request->attribute_url[$key][$key2],
        //             'attribute_position' => $request->attribute_position[$key][$key2]
        //         ];
        //     }
        //     $a_type[] = [
        //         'event_id' => $event->id,
        //         'attributes' => json_encode($attributes),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ];

        //     EventAttribute::insert($a_type);
        // }

        return redirect()->back()->with('success-alert', 'Event Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {

        $event = Event::findOrFail($event->id);
        $event->delete();

        return redirect()->back()->with('success-alert', 'Event Delete successfully.');
    }
}
