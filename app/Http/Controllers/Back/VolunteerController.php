<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $volunteer = Volunteer::all();

        return view('back.volunteer.index', compact('volunteer'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('back.volunteer.create');
    }

    /**
     * @param \App\Http\Requests\PeopleStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $v_data = [
            'name_title' => 'required',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'country' => 'required',
            'gender' => 'required',
            'disability' => 'required',

        ];


        $request->validate($v_data);

        $volunteer = new Volunteer();
        $volunteer->name_title = $request->name_title;
        $volunteer->first_name = $request->first_name;
        $volunteer->last_name = $request->last_name;
        $volunteer->email = $request->email;
        $volunteer->phone = $request->phone;
        $volunteer->dob = $request->dob;
        $volunteer->address = $request->address;
        $volunteer->street_address = $request->street_address;
        $volunteer->address_line_2 = $request->address_line_2;
        $volunteer->city = $request->city;
        $volunteer->state = $request->state;
        $volunteer->zip_code = $request->zip_code;
        $volunteer->country = $request->country;
        $volunteer->gender = $request->gender;
        $volunteer->disability = $request->disability;
        $volunteer->disability_desc = $request->disability_desc;
        $volunteer->ethnicity = $request->ethnicity;
        $volunteer->volunteered_exp = $request->volunteered_exp;
        $volunteer->occupation = $request->occupation;
        $volunteer->volunteering_area_int = $request->volunteering_area_int;
        $volunteer->ref_name = $request->ref_name;
        $volunteer->ref_relation = $request->ref_relation;
        $volunteer->ref_email = $request->ref_email;
        $volunteer->ref_mobile = $request->ref_mobile;
        $volunteer->emg_name = $request->emg_name;
        $volunteer->emg_relation = $request->emg_relation;
        $volunteer->emg_email = $request->emg_email;
        $volunteer->emg_phone = $request->emg_phone;
        $volunteer->criminal_bg = $request->criminal_bg;

        $volunteer->save();

        return redirect()->back()->with('success-alert', 'Volunteer created successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\People $person
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Volunteer $volunteer)
    {
        return view('back.volunteer.show', compact('volunteer'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\People $person
     * @return \Illuminate\Http\Response
     */
    public function edit($volunteer)
    {
        $volunteer = Volunteer::findOrFail($volunteer);
        return view('back.volunteer.edit', compact('volunteer'));
    }


    /**
     * @param \App\Http\Requests\PeopleUpdateRequest $request
     * @param \App\Models\People $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $volunteer)
    {
        $v_data = [
            'name_title' => 'required',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'country' => 'required',
            'gender' => 'required',
            'disability' => 'required',

        ];


        $request->validate($v_data);

        $volunteer = Volunteer::findOrFail($volunteer);
        $volunteer->name_title = $request->name_title;
        $volunteer->first_name = $request->first_name;
        $volunteer->last_name = $request->last_name;
        $volunteer->email = $request->email;
        $volunteer->phone = $request->phone;
        $volunteer->dob = $request->dob;
        $volunteer->address = $request->address;
        $volunteer->street_address = $request->street_address;
        $volunteer->address_line_2 = $request->address_line_2;
        $volunteer->city = $request->city;
        $volunteer->state = $request->state;
        $volunteer->zip_code = $request->zip_code;
        $volunteer->country = $request->country;
        $volunteer->gender = $request->gender;
        $volunteer->disability = $request->disability;
        $volunteer->disability_desc = $request->disability_desc;
        $volunteer->ethnicity = $request->ethnicity;
        $volunteer->volunteered_exp = $request->volunteered_exp;
        $volunteer->occupation = $request->occupation;
        $volunteer->volunteering_area_int = $request->volunteering_area_int;
        $volunteer->ref_name = $request->ref_name;
        $volunteer->ref_relation = $request->ref_relation;
        $volunteer->ref_email = $request->ref_email;
        $volunteer->ref_mobile = $request->ref_mobile;
        $volunteer->emg_name = $request->emg_name;
        $volunteer->emg_relation = $request->emg_relation;
        $volunteer->emg_email = $request->emg_email;
        $volunteer->emg_phone = $request->emg_phone;
        $volunteer->criminal_bg = $request->criminal_bg;

        $volunteer->save();

        return redirect()->back()->with('success-alert', 'Volunteer Update successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\People $person
     * @return \Illuminate\Http\Response
     */
    public function destroy($volunteer)
    {
        $volunteer = Volunteer::findOrFail($volunteer);
        $volunteer->delete();

        return redirect()->back()->with('success-alert', 'Volunteer deleted successfully.');
    }
}
