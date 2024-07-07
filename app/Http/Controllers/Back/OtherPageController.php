<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\News;
use App\Models\People;
use App\Models\Research;
use Illuminate\Http\Request;

class OtherPageController extends Controller
{
    public function dashboard()
    {
        $news = News::count();
        $research = Research::count();
        $people = People::count();
        $alumni = Alumni::count();

        return view('back.dashboard', compact('news', 'research', 'people', 'alumni'));
    }
}
