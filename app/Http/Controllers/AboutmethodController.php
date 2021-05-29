<?php

namespace App\Http\Controllers;

use App\Aboutmethod;
use Image;
use Illuminate\Http\Request;

class AboutmethodController extends Controller
{
    public function index(){
        return view('admin.about.method',[
            'socials' => Aboutmethod::all()
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'description' => 'required',
        ]);
        $book_id = Aboutmethod::insertGetId($request->except('_token'));



        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image',
            ]);
            // $old_photo_location = 'public/uploads/home_about/'.$request->photo;
            //     unlink(base_path($old_photo_location));
            $uploaded_photo = $request->file('photo');
            $new_photo_name = $book_id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location ='public/uploads/about/method/'.$new_photo_name;
                   Image::make($uploaded_photo)->save(base_path($new_photo_location));
                   Aboutmethod::find($book_id)->update([
                  'photo' =>  $new_photo_name,
               ]);
        }

        return back()->with('home_banner_added', ' Added Successfully');
}
public function delete($id){
    $photo = Aboutmethod::find($id)->photo;
    if(Aboutmethod::find($id)->photo != 'default.jpg'){
        $old_photo_location = 'public/uploads/about/method/'.$photo;
         unlink(base_path($old_photo_location));
     }
     Aboutmethod::find($id)->delete();
        return back()->with('delete_item','Deleted Successfully!');
}
public function show($id){
    return view('admin.about.method_update', [
        'info' => Aboutmethod::find($id)
    ]);
}
public function update(Request $request, $id){
        Aboutmethod::find($id)->update($request->except('_token', 'photo'));

        if ($request->hasFile('photo')) {
            if (Aboutmethod::find($id)->photo != 'default.png') {
                $old_photo_location = 'public/uploads/about/method/' . Aboutmethod::find($id)->photo;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('photo');
            $new_file_name = $id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/about/method/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Aboutmethod::find($id)->update([
                'photo' => $new_file_name,
            ]);
        }
        return back()->with('update_method', 'Method updated Successfully!!!');
}
}
