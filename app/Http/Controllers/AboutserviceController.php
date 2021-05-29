<?php

namespace App\Http\Controllers;

use App\Aboutserv;
use Image;
use Illuminate\Http\Request;

class AboutserviceController extends Controller
{
    public function index(){
        return view('admin.about.service',[
            'socials' => Aboutserv::all()
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'description' => 'required',
        ]);
        $book_id = Aboutserv::insertGetId($request->except('_token'));



        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image',
            ]);
            // $old_photo_location = 'public/uploads/home_about/'.$request->photo;
            //     unlink(base_path($old_photo_location));
            $uploaded_photo = $request->file('photo');
            $new_photo_name = $book_id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location ='public/uploads/about/service/'.$new_photo_name;
                   Image::make($uploaded_photo)->save(base_path($new_photo_location));
                   Aboutserv::find($book_id)->update([
                  'photo' =>  $new_photo_name,
               ]);
        }

        return back()->with('home_banner_added', ' Added Successfully');
}
public function delete($id){
    $photo = Aboutserv::find($id)->photo;
    if(Aboutserv::find($id)->photo != 'default.jpg'){
        $old_photo_location = 'public/uploads/about/service/'.$photo;
         unlink(base_path($old_photo_location));
     }
     Aboutserv::find($id)->delete();
        return back()->with('delete_item','Deleted Successfully!');
}
public function show($id){
    return view('admin.about.service_update', [
        'info' => Aboutserv::find($id)
    ]);
}
public function update(Request $request, $id){
    Aboutserv::find($id)->update($request->except('_token', 'photo'));

        if ($request->hasFile('photo')) {
            if (Aboutserv::find($id)->photo != 'default.png') {
                $old_photo_location = 'public/uploads/about/service/' . Aboutserv::find($id)->photo;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('photo');
            $new_file_name = $id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/about/service/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Aboutserv::find($id)->update([
                'photo' => $new_file_name,
            ]);
        }
        return back()->with('update_service', 'Service updated Successfully!!!');

}
}
