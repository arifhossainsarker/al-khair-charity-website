<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Repositories\MediaRepo;
use Illuminate\Http\Request;

class DonationController extends Controller
{

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $donations = Donation::get();

        return view('back.donation.index', compact('donations'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('back.donation.create');
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
            'phone' => 'required',
            'amount' => 'required',
            'payment_method' => 'required'

        ];


        $request->validate($v_data);

        $donation = new Donation();
        $donation->name = $request->name;
        $donation->email = $request->email;
        $donation->phone = $request->phone;
        $donation->address = $request->address;
        $donation->description = $request->description;
        $donation->amount = $request->amount;
        $donation->payment_method = $request->payment_method;

        $donation->save();

        return redirect()->back()->with('success-alert', 'Donation created successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Research $research
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Donation $donation)
    {
        return view('back.donation.show', compact('donation'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Research $research
     * @return \Illuminate\Http\Response
     */
    public function edit($donation)
    {
        $donation = Donation::findOrFail($donation);
        return view('back.donation.edit', compact('donation'));
    }

    /**
     * @param \App\Http\Requests\ResearchUpdateRequest $request
     * @param \App\Models\Research $research
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $donation)
    {

        $v_data = [
            'name' => 'required|max:255',
            'email' => 'required',
            'phone' => 'required',
            'amount' => 'required',
            'payment_method' => 'required'
        ];


        $request->validate($v_data);

        $donation = Donation::findOrFail($donation);
        $donation->name = $request->name;
        $donation->email = $request->email;
        $donation->phone = $request->phone;
        $donation->address = $request->address;
        $donation->description = $request->description;
        $donation->amount = $request->amount;
        $donation->payment_method = $request->payment_method;


        $donation->save();

        return redirect()->back()->with('success-alert', 'Donation Update successfully.');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Research $research
     * @return \Illuminate\Http\Response
     */
    public function destroy($donation)
    {
        $donation = Donation::findOrFail($donation);
        $donation->delete();

        return redirect()->route('back.donation.index')->with('success-alert', 'Donation deleted successfully.');
    }
}
