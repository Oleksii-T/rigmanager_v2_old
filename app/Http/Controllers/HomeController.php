<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Partner;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $new_posts = Post::where('is_active', 1)->orderBy('created_at', 'desc')->take(7)->get();
        
        $urgent_posts = Post::where(['is_active'=>1,'is_urgent'=>1])->orderBy('created_at', 'desc')->get();
        $urgent_posts = $urgent_posts->diff($new_posts);
        if ($urgent_posts->isNotEmpty() && $urgent_posts->count()>8) {
            $urgent_posts = $urgent_posts->random(8);
        }
        
        $partners = Partner::inRandomOrder()->take(7)->get();
        $diff = 7 - $partners->count();
        for ($i=$diff; $i > 0; $i--) {
            $partners[] = false;
        }

        $masterEquipments = partition(Category::equipments()->whereNull('category_id')->get(), 3);
        $masterServices = partition(Category::services()->whereNull('category_id')->get(), 3);

        return view('home.home', compact('new_posts', 'urgent_posts', 'partners', 'masterEquipments', 'masterServices'));
    }

    public function faq()
    {
        return view('home.faq');
    }

    public function plans()
    {
        return view('home.plans');
    }

    public function contacts()
    {
        return view('home.contacts');
    }

    public function contactUs(ContactUsRequest $request)
    {
        Mail::to(env("MAIL_TO_ADDRESS"))->send(new fromUserNotification($request->name, $request->subject, $request->text, $request->email, auth()->user()));
        Session::flash('message-success', __('messages.messageSent'));
        return redirect(route('home'));
    }

    public function terms()
    {
        return view('home.terms');
    }

    public function catalog()
    {
        $masterEquipments = Category::equipments()->whereNull('category_id')->get();
        $masterServices = partition(Category::services()->whereNull('category_id')->get(), 3);

        return view('home.catalog', compact('masterEquipments', 'masterServices'));
    }

    public function privacy()
    {
        return view('home.privacy');
    }

    public function sitemap()
    {
        return view('home.sitemap');
    }

    public function import()
    {
        return view('home.import_rules');
    }

    public function blog()
    {
        $blogs = Blog::all()->paginate(env('POSTS_PER_PAGE'));
        return view('home.blog', compact('blogs'));
    }

    public function blogArticle($locale, $article=null)
    {
        $a = $article ? $article : $locale;
        $blog = Blog::whereSlug($a)->first();
        return view('home.blog-article', compact('blog'));
    }

    public function aboutUs()
    {
        return view('home.about_us');
    }
}
