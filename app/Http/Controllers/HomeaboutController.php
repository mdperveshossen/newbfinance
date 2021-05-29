<?php

namespace App\Http\Controllers;

use App\Homeabout;
use Image;
use Illuminate\Http\Request;

class HomeaboutController extends Controller
{
    public function index(){
        return view('admin.home.about',[
            'homebanner' => Homeabout::find(1)
        ]);
    }
    public function update(Request $request){
        $book_id = 1;
        $request->validate([
            'detials' => 'required',
        ]);


        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image',
            ]);
            $old_photo_location = 'public/uploads/home_about/'.Homeabout::find(1)->photo;
                unlink(base_path($old_photo_location));
            $uploaded_photo = $request->file('photo');
            $new_photo_name = $book_id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location ='public/uploads/home_about/'.$new_photo_name;
                   Image::make($uploaded_photo)->save(base_path($new_photo_location));
                   Homeabout::find($book_id)->update([
                  'photo' =>  $new_photo_name,
               ]);
        }
        Homeabout::find(1)->update([
            'detials' => $request->detials
             ]);
        return back()->with('home_banner_added', ' update Successfully');
}
}
