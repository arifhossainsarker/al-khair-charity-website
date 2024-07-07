<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\PeopleStoreRequest;
use App\Http\Requests\PeopleUpdateRequest;
use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $people = People::all();

        return view('back.person.index', compact('people'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * @param \App\Http\Requests\PeopleStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' =>  'required|max:255'
        ]);
        $people = new People();
        $people->type = $request->type;
        $people->position = $request->position;
        $people->save();

        return redirect()->back()->with('success-alert', 'People category created successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\People $person
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Person $person)
    {

    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\People $person
     * @return \Illuminate\Http\Response
     */
    public function edit($people)
    {
        $peoples = People::all();
        $people = People::where('id', $people)->first();
        return view('back.person.edit', compact('peoples','people'));
    }

    /**
     * @param \App\Http\Requests\PeopleUpdateRequest $request
     * @param \App\Models\People $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $people)
    {
        $request->validate([
            'type' =>  'required|max:255'
        ]);
        $people = People::where('id', $people)->first();
        $people->type = $request->type;
        $people->position = $request->position;
        $people->save();

        return redirect()->back()->with('success-alert', 'People category update successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\People $person
     * @return \Illuminate\Http\Response
     */
    public function destroy($people)
    {
        $people = People::where('id', $people)->first();
        $people->delete();

        return redirect()->back()->with('success-alert', 'People deleted successfully.');
    }
}
