<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\PeopleListStoreRequest;
use App\Http\Requests\PeopleListUpdateRequest;
use App\Models\PeopleList;
use App\Repositories\MediaRepo;
use Illuminate\Http\Request;
use App\Models\People;
use App\Models\PeopleQualification;
use App\Models\PeopleQualificationValue;
use App\Models\PeopleQualificationCategory;
use Illuminate\Support\Str;

class PeopleListController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $peopleLists = PeopleList::with('People')->get();

        return view('back.peopleList.index', compact('peopleLists'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $peoples = People::where('status', 1)->get();

        return view('back.peopleList.create', compact('peoples'));
    }

    /**
     * @param \App\Http\Requests\PeopleListStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $v_data = [
            'name' => 'required|max:255',
            'email' => 'required',
            // 'phone' => 'required',
            'designation' => 'required',
            // 'bio' => 'required',
            'people_id' => 'required',
            // 'image' => 'required|mimes:jpg,png,jpeg,gif'
        ];

        if ($request->file('image')) {
            $v_data['image'] = 'mimes:jpg,png,jpeg,gif';
        }

        $request->validate($v_data);

        $peopleList = new PeopleList();
        $peopleList->name = $request->name;
        $peopleList->slug = Str::slug($request->name) . '-' . Str::random(5);
        $peopleList->email = $request->email;
        $peopleList->phone = $request->phone;
        $peopleList->designation = $request->designation;
        $peopleList->bio = $request->bio;
        $peopleList->people_id = $request->people_id;
        $peopleList->department = $request->department;
        $peopleList->website_link = $request->website_link;
        $peopleList->research_interest = $request->research_interest;
        $peopleList->address = $request->address;
        $peopleList->serial = $request->serial;


        if ($request->file('image')) {
            $uploaded_file = MediaRepo::upload($request->file('image'));
            $peopleList->image = $uploaded_file['file_name'];
            $peopleList->image_path = $uploaded_file['file_path'];
            $peopleList->media_id = $uploaded_file['media_id'];
        }

        $peopleList->save();


        return redirect()->back()->with('success-alert', 'People created successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PeopleList $peopleList
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, PeopleList $peopleList)
    {
        // return view('back.peopleList.show', compact('peopleList'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PeopleList $peopleList
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, PeopleList $peopleList)
    {
        $peoples = People::where('status', 1)->get();
        $people_qualifications = PeopleQualification::with('PeopleQualificationCategories', 'PeopleQualificationCategories.PeopleQualificationValues')->where('people_list_id', $peopleList->id)->get();

        $qualification_categories = PeopleQualificationCategory::with('PeopleQualification')->get();


        // $peopleQualificationValues = PeopleQualificationValue::with('PeopleQualificationCategory')->get();

        return view('back.peopleList.edit', compact('peopleList', 'peoples', 'people_qualifications', 'qualification_categories'));
    }

    public function people_category(Request $request)
    {
        $people_qualification = PeopleQualificationCategory::where('people_qualification_id', $request->people_qualification_id)->get();

        return response()->json($people_qualification);
    }

    /**
     * @param \App\Http\Requests\PeopleListUpdateRequest $request
     * @param \App\Models\PeopleList $peopleList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeopleList $peopleList)
    {
        $v_data = [
            'name' => 'required|max:255',
            'email' => 'required',
            // 'phone' => 'required',
            'designation' => 'required',
            // 'bio' => 'required',
            'people_id' => 'required'
        ];

        if ($request->file('image')) {
            $v_data['image'] = 'mimes:jpg,png,jpeg,gif';
        }

        $request->validate($v_data);

        $peopleList->name = $request->name;
        $peopleList->slug = Str::slug($request->name) . '-' . Str::random(5);
        $peopleList->email = $request->email;
        $peopleList->phone = $request->phone;
        $peopleList->designation = $request->designation;
        $peopleList->bio = $request->bio;
        $peopleList->people_id = $request->people_id;
        $peopleList->department = $request->department;
        $peopleList->website_link = $request->website_link;
        $peopleList->research_interest = $request->research_interest;
        $peopleList->address = $request->address;
        $peopleList->serial = $request->serial;

        if ($request->file('image')) {
            $uploaded_file = MediaRepo::upload($request->file('image'));
            $peopleList->image = $uploaded_file['file_name'];
            $peopleList->image_path = $uploaded_file['file_path'];
            $peopleList->media_id = $uploaded_file['media_id'];
        }

        $peopleList->save();


        return redirect()->back()->with('success-alert', 'People Update successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PeopleList $peopleList
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, PeopleList $peopleList)
    {
        $peopleList->delete();

        return redirect()->back()->with('success-alert', 'People Delete successfully.');
    }


    public function removeImage($id)
    {
        $peopleList = PeopleList::where('id', $id)->first();
        $peopleList->image = null;
        $peopleList->image_path = null;
        $peopleList->media_id = null;
        $peopleList->save();

        return redirect()->back()->with('success-alert', 'Images deleted successfully.');
    }

    public function qualificationUpdateAjax(Request $request)
    {
        $qualification = PeopleQualification::find($request->id);
        $qualification->title = $request->title;
        $qualification->save();

        return 'true';
    }

    public function qualificationPositionUpdateAjax(Request $request)
    {
        $qualification = PeopleQualification::find($request->id);
        $qualification->position = $request->position;
        $qualification->save();

        return 'true';
    }

    public function qualificationCategoryUpdateAjax(Request $request)
    {
        $qualification_category = PeopleQualificationCategory::find($request->id);
        $qualification_category->title = $request->title;
        $qualification_category->save();

        return 'true';
    }

    public function qualificationCategoryPositionUpdateAjax(Request $request)
    {
        $qualification_category = PeopleQualificationCategory::find($request->id);
        $qualification_category->position = $request->position;
        $qualification_category->save();

        return 'true';
    }

    public function qualificationCategoryValueUpdateAjax(Request $request)
    {
        $qualification_category_value = PeopleQualificationValue::find($request->id);
        $qualification_category_value->value = $request->title;
        $qualification_category_value->save();

        return 'true';
    }
    public function qualificationCategoryValuePositionUpdateAjax(Request $request)
    {
        $qualification_category_value = PeopleQualificationValue::find($request->id);
        $qualification_category_value->position = $request->position;
        $qualification_category_value->save();

        return 'true';
    }
}
