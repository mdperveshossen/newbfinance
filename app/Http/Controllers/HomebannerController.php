<?php

namespace App\Http\Controllers;

use App\Homebanner;
use Illuminate\Http\Request;
use Image;

class HomebannerController extends Controller
{
    public function index(){
        return view('admin.home.banner.index',[
            'homebanner' => Homebanner::find(5)
        ]);
    }
    public function update(Request $request){
        $book_id = 5;
        Homebanner::find($book_id)->update($request->except('_token', 'photo'));
        if ($request->hasFile('photo')) {
            // $request->validate([
            //     'photo' => 'image',
            // ]);
            $old_photo_location = 'public/uploads/home_banner/'.Homebanner::find(5)->photo;
                unlink(base_path($old_photo_location));
            $uploaded_photo = $request->file('photo');
            $new_photo_name = $book_id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location ='public/uploads/home_banner/'.$new_photo_name;
                   Image::make($uploaded_photo)->save(base_path($new_photo_location));
                   Homebanner::find($book_id)->update([
                  'photo' =>  $new_photo_name,
               ]);
        }
        return back()->with('home_banner_added', 'Banner update Successfully');
}

}
