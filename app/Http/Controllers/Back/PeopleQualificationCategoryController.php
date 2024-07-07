<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\PeopleQualificationCategoryStoreRequest;
use App\Http\Requests\PeopleQualificationCategoryUpdateRequest;
use App\Models\PeopleQualificationCategory;
use App\Models\PeopleQualification;
use Illuminate\Http\Request;

class PeopleQualificationCategoryController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $peopleQualificationCategories = PeopleQualificationCategory::all();

        return view('back.peopleQualificationCategory.index', compact('peopleQualificationCategories'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('back.peopleQualificationCategory.create');
    }

    /**
     * @param \App\Http\Requests\PeopleQualificationCategoryStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'people_qualification_id' => 'required'
        ]);

        $peopleQualificationCategory = new PeopleQualificationCategory();
        $peopleQualificationCategory->people_qualification_id = $request->people_qualification_id;
        $peopleQualificationCategory->title = $request->title;
        $peopleQualificationCategory->position = $request->position;
        $peopleQualificationCategory->save();

        return redirect()->back()->with('success-alert', 'Qualification tab category created successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PeopleQualificationCategory $peopleQualificationCategory
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, PeopleQualificationCategory $peopleQualificationCategory)
    {
        return view('back.peopleQualificationCategory.show', compact('peopleQualificationCategory'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PeopleQualificationCategory $peopleQualificationCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, PeopleQualificationCategory $peopleQualificationCategory)
    {
        $qualification_categories = PeopleQualificationCategory::with('PeopleQualification')->get();
        $people_qualifications = PeopleQualification::get();
        return view('back.peopleQualificationCategory.edit', compact('peopleQualificationCategory', 'qualification_categories', 'people_qualifications'));
    }

    /**
     * @param \App\Http\Requests\PeopleQualificationCategoryUpdateRequest $request
     * @param \App\Models\PeopleQualificationCategory $peopleQualificationCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeopleQualificationCategory $peopleQualificationCategory)
    {
        $request->validate([
            'title' => 'required|max:255',
            'people_qualification_id' => 'required'
        ]);

        $peopleQualificationCategory->people_qualification_id = $request->people_qualification_id;
        $peopleQualificationCategory->title = $request->title;
        $peopleQualificationCategory->position = $request->position;
        $peopleQualificationCategory->save();

        return redirect()->back()->with('success-alert', 'Qualification tab category update successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PeopleQualificationCategory $peopleQualificationCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, PeopleQualificationCategory $peopleQualificationCategory)
    {
        $peopleQualificationCategory->delete();

        return redirect()->back()->with('success-alert', 'Delete successfully.');
    }
}
