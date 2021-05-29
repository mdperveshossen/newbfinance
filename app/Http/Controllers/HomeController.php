<?php

namespace App\Http\Controllers;

use App\about_btn_link;
use App\About_detail;
use App\Logo;
use App\Subscriber;
use Illuminate\Http\Request;
use App\User;
use App\Visitor_message;
use Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home.home',[
            'users' => User::all(),
        ]);
    }
    public function userdelete($id){

        if(User::find($id)->profile_photo != 'default.png'){
            $old_photo_location = 'public/uploads/profile/'.User::find($id)->profile_photo;
             unlink(base_path($old_photo_location));
         }
        User::find($id)->delete();
        return back()->with('user_delete_status', 'User Deleted successfuly');
    }
    public function visitormessages(){
        return view('admin.visitor_message.index', [
            'messages' => Visitor_message::latest()->get(),
        ]);
    }
    public function visitormessagedelete(Request $request, $id){
        Visitor_message::find($id)->delete();
        return back()->with('delete_message', 'Message deleted successfully!!');
    }
    public function subscribers(){
        return view('admin.visitor_message.subscriber', [
            'subscribers' => Subscriber::latest()->get(),
        ]);
    }
    public function subscribersdelete(Request $request, $id){
        Subscriber::find($id)->delete();
        return back()->with('delete_subscriber', 'Subscriber deleted successfully!!');
    }
    public function aboutbtnlink(){
        return view('admin.about.btn_link', [
            'btn_link' => about_btn_link::all()
        ]);
    }
    public function aboutbtnlinkupdate($id){
        return view('admin.about.btn_link_update', [
            'info' => about_btn_link::find($id)
        ]); 
    }
    public function aboutbtnlinkupdatepost(Request $request, $id){
        about_btn_link::find($id)->update($request->except('_token'));
        return back()->with('link_update', 'btn link udated successfully!!');
    }
    public function logo(){
        return view('admin.logo.index', [
            'logo' => Logo::find(1)
        ]);
    }
    public function logoupdate($id){
        return view('admin.logo.update_logo', [
            'info' => Logo::find($id)
        ]);
    }
    public function logoupdatepost(Request $request, $id){
        if ($request->hasFile('logo')) {
            if (Logo::find($id)->logo != 'default.png') {
                $old_photo_location = 'public/uploads/logo/' . Logo::find($id)->logo;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('logo');
            $new_file_name = $id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/logo/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Logo::find($id)->update([
                'logo' => $new_file_name,
            ]);
            return back()->with('update_logo', 'Logo updated Successfully!!!');
        } else {
            return back()->with('add_file', 'Please select a photo');
        }
    }
    public function homeaboutbanner(){
        return view('admin.about.banner_detail', [
            'detail' => About_detail::find(1) 
        ]);
    }
    public function homeaboutbannerupdate($id){
        return view('admin.about.banner_detail_update', [
            'info' => About_detail::find($id)
        ]);
    }
    public function homeaboutbannerupdatepost(Request $request, $id){
        About_detail::find($id)->update($request->except('_token'));
        return back()->with('update_detail', 'About banner detail updated successfully!!');
    }
}
