<?php

namespace App\Http\Controllers;

use App\Homesocial;
use Illuminate\Http\Request;
use Image;

class HomesocialController extends Controller
{

    public function index(){
        return view('admin.home.social',[
            'socials' => Homesocial::all()
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'link' => 'required',
        ]);
        $book_id = Homesocial::insertGetId($request->except('_token'));



        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image',
            ]);
            // $old_photo_location = 'public/uploads/home_about/'.$request->photo;
            //     unlink(base_path($old_photo_location));
            $uploaded_photo = $request->file('photo');
            $new_photo_name = $book_id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location ='public/uploads/social/'.$new_photo_name;
                   Image::make($uploaded_photo)->save(base_path($new_photo_location));
                   Homesocial::find($book_id)->update([
                  'photo' =>  $new_photo_name,
               ]);
        }

        return back()->with('home_banner_added', ' Added Successfully');
}
public function delete($id){
    $photo = Homesocial::find($id)->photo;
    if(Homesocial::find($id)->photo != 'default.jpg'){
        $old_photo_location = 'public/uploads/social/'.$photo;
         unlink(base_path($old_photo_location));
     }
     Homesocial::find($id)->delete();
        return back()->with('delete_item','Deleted Successfully!');
}

public function show($id){
    return view('admin.home.social_update', [
        'info' => Homesocial::find($id)
    ]);
}
public function update(Request $request, $id){
    Homesocial::find($id)->update($request->except('_token', 'photo'));
        if ($request->hasFile('photo')) {
            if (Homesocial::find($id)->photo != 'default.png') {
                $old_photo_location = 'public/uploads/social/' . Homesocial::find($id)->photo;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('photo');
            $new_file_name = $id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/social/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Homesocial::find($id)->update([
                'photo' => $new_file_name,
            ]);
        }
        return back()->with('update_social', 'Social updated Successfully!!!');
}

}
