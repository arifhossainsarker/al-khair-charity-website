<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\PeopleQualificationValueStoreRequest;
use App\Http\Requests\PeopleQualificationValueUpdateRequest;
use App\Models\PeopleQualificationValue;
use App\Models\PeopleQualificationCategory;
use Illuminate\Http\Request;

class PeopleQualificationValueController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $peopleQualificationValues = PeopleQualificationValue::all();

        return view('peopleQualificationValue.index', compact('peopleQualificationValues'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('peopleQualificationValue.create');
    }

    /**
     * @param \App\Http\Requests\PeopleQualificationValueStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'value' => 'required|max:255',
            'people_qualification_category_id' => 'required'
        ]);

        $peopleQualificationValue = new PeopleQualificationValue();
        $peopleQualificationValue->people_qualification_id = $request->people_qualification_id;
        $peopleQualificationValue->people_qualification_category_id = $request->people_qualification_category_id;
        $peopleQualificationValue->value = $request->value;
        $peopleQualificationValue->position = $request->position;
        $peopleQualificationValue->save();

        return redirect()->back()->with('success-alert', 'Qualification category value created successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PeopleQualificationValue $peopleQualificationValue
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, PeopleQualificationValue $peopleQualificationValue)
    {
        return view('peopleQualificationValue.show', compact('peopleQualificationValue'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PeopleQualificationValue $peopleQualificationValue
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, PeopleQualificationValue $peopleQualificationValue)
    {
        $qualification_categories = PeopleQualificationCategory::where('people_qualification_id',$peopleQualificationValue->people_qualification_id)->with('PeopleQualification')->get();
        $peopleQualificationValues = PeopleQualificationValue::with('PeopleQualificationCategory')->get();
        return view('back.peopleQualificationValue.edit', compact('peopleQualificationValue', 'qualification_categories', 'peopleQualificationValues'));
    }

    /**
     * @param \App\Http\Requests\PeopleQualificationValueUpdateRequest $request
     * @param \App\Models\PeopleQualificationValue $peopleQualificationValue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeopleQualificationValue $peopleQualificationValue)
    {
        $request->validate([
            'value' => 'required|max:255',
            'people_qualification_category_id' => 'required'
        ]);

        $peopleQualificationValue->people_qualification_category_id = $request->people_qualification_category_id;
        $peopleQualificationValue->value = $request->value;
        $peopleQualificationValue->position = $request->position;
        $peopleQualificationValue->save();

        return redirect()->back()->with('success-alert', 'Qualification category value update successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PeopleQualificationValue $peopleQualificationValue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, PeopleQualificationValue $peopleQualificationValue)
    {
        $peopleQualificationValue->delete();

        return redirect()->back()->with('success-alert', 'Delete successfully.');
    }
}
