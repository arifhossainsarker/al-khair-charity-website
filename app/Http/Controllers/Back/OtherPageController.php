<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\News;
use App\Models\Research;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class OtherPageController extends Controller
{
    public function dashboard()
    {
        $news = News::count();
        $research = Research::count();
        $volunteer = Volunteer::count();
        $donation = Donation::count();

        return view('back.dashboard', compact('news', 'research', 'volunteer', 'donation'));
    }
}
