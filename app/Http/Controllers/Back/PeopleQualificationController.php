<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\PeopleQualificationStoreRequest;
use App\Http\Requests\PeopleQualificationUpdateRequest;
use App\Models\PeopleQualification;
use Illuminate\Http\Request;

class PeopleQualificationController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $peopleQualifications = PeopleQualification::all();

        return view('back.peopleQualification.index', compact('peopleQualifications'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('back.peopleQualification.create');
    }

    /**
     * @param \App\Http\Requests\PeopleQualificationStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'
            => 'required|max:255'
        ]);

        $qualification_tab = new PeopleQualification();
        $qualification_tab->people_list_id = $request->people_list_id;
        $qualification_tab->title = $request->title;
        $qualification_tab->position = $request->position;
        $qualification_tab->save();

        return redirect()->back()->with('success-alert', 'Qualification Tab created successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PeopleQualification $peopleQualification
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, PeopleQualification $peopleQualification)
    {
        return view('back.peopleQualification.show', compact('peopleQualification'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PeopleQualification $peopleQualification
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, PeopleQualification $peopleQualification)
    {
        $people_qualifications = PeopleQualification::get();
        return view('back.peopleQualification.edit', compact('peopleQualification', 'people_qualifications'));
    }

    /**
     * @param \App\Http\Requests\PeopleQualificationUpdateRequest $request
     * @param \App\Models\PeopleQualification $peopleQualification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeopleQualification $peopleQualification)
    {
        $request->validate([
            'title' => 'required|max:255'
        ]);

        $peopleQualification->people_list_id = $request->people_list_id;
        $peopleQualification->title = $request->title;
        $peopleQualification->position = $request->position;
        $peopleQualification->save();

        return redirect()->back()->with('success-alert', 'Qualification Tab update successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PeopleQualification $peopleQualification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, PeopleQualification $peopleQualification)
    {
        $peopleQualification->delete();

        return redirect()->back()->with('success-alert', 'deleted successfully.');
    }
}
