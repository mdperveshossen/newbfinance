<?php

namespace App\Http\Controllers;

use App\about_btn_link;
use App\About_detail;
use App\Aboutmethod;
use App\Aboutserv;
use App\Faqheader;
use App\Faqquestion;
use App\Homeabout;
use App\Homebanner;
use App\Homesocial;
use App\Logo;
use App\Risk;
use App\Roadmap;
use App\Subscriber;
use App\Team;
use App\Team_heading;
use App\Testimonial;
use App\Visitor_message;
use App\Whynewb;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index', [
            'banner' => Homebanner::find(5),
            'about' => Homeabout::find(1),
            'why_newb' => Whynewb::all(),
            'road_map' => Roadmap::all(),
            'socials' => Homesocial::all(),
            'risk' => Risk::find(1),
            'teams' => Team::latest()->get(),
            'logo' => Logo::find(1),
            'team_heading' => Team_heading::find(1),
            'btn1' => about_btn_link::find(1),
            'btn2' => about_btn_link::find(2),
            'btn3' => about_btn_link::find(3),
            'btn4' => about_btn_link::find(4),
            'btn5' => about_btn_link::find(5),
            'btn7' => about_btn_link::find(7),
        ]);
    }
    public function about(){
        return view('frontend.about', [
            'teams' => Team::latest()->get(),
            'team_heading' => Team_heading::find(1),
            'logo' => Logo::find(1),
            'services' => Aboutserv::all(),
            'methods' => Aboutmethod::all(),
            'detail' => About_detail::find(1)
        ]);
    }
    public function testimonial(){
        return view('frontend.testimonial', [
            'testimonials' => Testimonial::latest()->get(),
            'logo' => Logo::find(1)
        ]);
    }
    public function faq(){
        return view('frontend.faq', [
            'detail' => Faqheader::find(1),
            'faqs' => Faqquestion::all(),
            'logo' => Logo::find(1)
        ]);
    }
    public function visitormessagepost(Request $request){
        Visitor_message::insert($request->except('_token') + [
            'created_at' => Carbon::now(),
        ]);
        return back()->with('message_send', 'Message send successfully :)');
    }
    public function subscriberemail(Request $request){
        Subscriber::insert($request->except('_token') + [
            'created_at' => Carbon::now(),
        ]);
        return back()->with('subscriber', 'You Subscription is Done :)');
    }
}
