<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog;
use App\Models\News;
use App\Models\Page;
use App\Models\User;
use App\Models\Event;
use App\Models\People;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\Research;
use App\Models\PeopleList;
use App\Models\GalleryItem;
use App\Models\HomeSection;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\PeopleQualification;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    // Homepage
    public function homepage()
    {
        $sliders = Slider::active()->get();
        $home_sections = HomeSection::where(['status' => 1])->orderBy('position', 'ASC')->get();
        // $fund_raisers= Fundraiser::where(['status'=>1])->OrderBy('id','DESC')->get();
        $news = News::where(['status' => 1])->OrderBy('position', 'ASC')->take(4)->get();
        $events = Event::where(['status' => 1])->OrderBy('position', 'ASC')->take(5)->get();
        $researchs = Research::where(['status' => 1])->OrderBy('created_at', 'ASC')->take(5)->get();
        $categories = Category::where('category_id', null)->where('for', 'donation')->latest('id')->get();


        return view('front.index', compact('sliders', 'home_sections', 'news', 'events', 'researchs', 'categories'));
    }

    public function contactUs()
    {
        return view('front.contactUs');
    }

     // Volunteer Registration Function
     public function volunteerRegistration()
     {
        return view('front.volunteer.index');
     }
    /*
     * method for single home section page
     * */
    public function singleHomeSection(HomeSection $homeSection)
    {
        return view('front.singleHomeSection', compact('homeSection'));
    }

    public function commonPage($slug)
    {
        $page = Page::where('slug', $slug)->first();
        if ($page->template) {
            return view('front.' . $page->template, compact('page'));
        }
        return view('front.page', compact('page'));
    }

    public function singleAlumni($slug)
    {
        $researches = \App\Models\Alumni::where(['batch_no' => $slug])->paginate(12);

        return view('front.alumni.single-alumni', compact('researches', 'slug'));
    }

    public function singleBlog($blog)
    {
        $blog = Blog::where('title', $blog)->first();

        return view('front.blog.singleNews', compact('blog'));
    }



    public function galleries()
    {
        $galleries = Gallery::active()->get();
        return view('front.gallery.galleries', compact('galleries'));
    }
    public function gallery($gallery)
    {
        $gallery = Gallery::where('name', $gallery)->first();
        return view('front.gallery.gallery', compact('gallery'));
    }

    public function singlePeople($slug)
    {
        $people = PeopleList::where('slug', $slug)->first();


        $people_qualifications = PeopleQualification::with('PeopleQualificationCategories', 'PeopleQualificationCategories.PeopleQualificationValues')->where('people_list_id', $people->id)->get();


        return view('front.people.single', compact('people', 'people_qualifications'));
    }

    public function singleResearch($slug)
    {
        $research = Research::where('slug', $slug)->first();

        return view('front.research.single', compact('research'));
    }

    public function singleNews($slug)
    {
        $news = News::where('slug', $slug)->first();

        return view('front.news.single', compact('news'));
    }

    public function singleEvent($slug)
    {
        $event = Event::where('title', $slug)->first();

        return view('front.event.single', compact('event'));
    }

    public function peopleList($name)
    {
        $people_category = People::where('type', $name)->first();

       $peoples = PeopleList::where('people_id', $people_category->id)->orderBy(DB::raw('-`serial`'), 'desc')->paginate(10);

        return view('front.people.people-list', compact('peoples'));
    }

    public function singleNotice($slug)
    {
        $notice = \App\Models\NoticeBoard::where('slug', $slug)->first();

        return view('front.notice.single', compact('notice'));
    }


    public function search(Request $request)
    {
        $search = $request->search;

        $search = News::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();


        return view('front.search', compact('search'));
    }
}
