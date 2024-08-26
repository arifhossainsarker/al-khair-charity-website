<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;
use App\Models\RequestContact;
use App\Traits\EmailSentTraits;

class ContactUsController extends Controller
{
    use EmailSentTraits;

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:191',
            'email' => 'required|email',
            'subject' => 'required|string|max:191',
            'message' => 'required',
        ]);
        $message = '<p>Message Form Contact Us</p>' . "<span>Name : " . $request->name . "</span> <br>" . "<span> Email : " . $request->email . "</span> <br>"
            . "<span> Subject : " . $request->subject . "</span> <br>" . "<p> Message : " . $request->message . "</p>";
        $this->simpleEmail($request->subject, "Admin", env('ADMIN_NOTIFY_MAIL'), $message);

        $requestContact = new RequestContact();
        $requestContact->name = $request->name;
        $requestContact->email = $request->email;
        $requestContact->phone = $request->phone;
        $requestContact->subject = $request->subject;
        $requestContact->message = $request->message;
        $requestContact->save();

        // return redirect()->back()->with('success-alert2', 'Thank you for contacting with us.');
        return view('front.mail-successful');
    }

    public function volunteer(Request $request)
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

        return view('front.mail-successful');
    }
}
