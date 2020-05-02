<?php

namespace App\Http\Controllers;


use App\Category;
use App\Gallery;
use App\Module;
use App\Product;
use App\Project;
use App\Slide;
use App\Tag;
use App\Testimonial;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use Illuminate\Support\Facades\Route;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       /* $this->middleware('auth');*/
        parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
/*dd(setting('social-media'));*/
        $mod1 = Module::whereHas('position', function($q){
            $q->where('name', '=', 'top-1');
        })->whereHas('pages', function($q){
            $q->where('title', '=', 'Home');
        })->first();

        $mod2 = Module::whereHas('position', function($q){
            $q->where('name', '=', 'top-2');
        })->whereHas('pages', function($q){
            $q->where('title', '=', 'Home');
        })->first();

        $mod3 = Module::whereHas('position', function($q){
            $q->where('name', '=', 'top-3');
        })->whereHas('pages', function($q){
            $q->where('title', '=', 'Home');
        })->get();

        $mod4 = Module::whereHas('pages', function($q){
            $q->where('title', '=', 'Home');
        })->whereName('Our Projects')->first();

        $tags = Tag::all();
        $projects = Project::take(6)->get();
        $testimonials = Testimonial::get();
        $logoes = Gallery::whereName('clients-logo')->first();


        $slides = Slide::with('translations')->get();
        return view('index',compact('slides','mod1','mod2','mod3','mod4','tags','projects','testimonials','logoes'));
    }
    public function products($locale ,$slug)
    {
        $category = Category::where('slug','=',$slug)->first();
        $tags = Tag::all();

        $products = Product::where('cat_id','=',$category->id)->paginate(12);
        return view('products',compact('products','category','tags'));
    }
    public function tagProducts($locale ,$id)
    {
        $tag = Tag::where('id','=',$id)->first();
        $tags = Tag::all();

        $products = $tag->products()->get();

        return view('tagProducts',compact('products','tag','tags'));
    }
    public function product($locale ,$slug,$id)
    {

        $category = Category::where('slug','=',$slug)->first();

        $product = Product::where('id','=',$id)->first();
        $tags = $product->tags()->get();
        return view('product-details',compact('product','category','tags'));
    }
    public function ShowService($locale ,$slug){

        $service = Post::where('slug','=',$slug)->first();
        return view('showService',compact('service'));
    }
    public function ShowEvent($locale ,$slug){

        $service = Post::where('slug','=',$slug)->first();
        return view('showService',compact('service'));
    }
    public function events()
    {
        $category = Category::where('name','=','events')->first();

        $events = Post::where('category_id','=',$category->id)->get();
        return view('Events',compact('events','category'));
    }
    public function contact()
    {

        return view('contact-form');
    }
    public function contactSubmit(Request $request)
    {
        $this->validate($request, [
        'name' => 'required',
        'subject' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ]);
        $emails = ['tootiagroup@gmail.com', 'masmaleki@gmail.com'];
        \Mail::send('contactus',
            array(
                'name' => $request->post('name'),
                'email' => $request->post('email'),
                'phone' => $request->post('phone'),
                'subject' => $request->post('subject'),
                'user_message' => $request->post('message')
            ),

            function($message) use ($request)
            {
                $message->from('info@tootiagroup.ge');
                $message->to('tootiagroup@gmail.com', 'Admin')->bcc('masmaleki@gmail.com','WebMaster')->subject($request->post('subject'));
            });
        return back()->with('status', 'Thanks for contacting us!');
    }

}
