<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Image;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
        return view('admin.testimonial.testimonial',[
            'socials' => Testimonial::all()
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'description' => 'required',
        ]);
        $book_id = Testimonial::insertGetId($request->except('_token'));



        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image',
            ]);
            // $old_photo_location = 'public/uploads/home_about/'.$request->photo;
            //     unlink(base_path($old_photo_location));
            $uploaded_photo = $request->file('photo');
            $new_photo_name = $book_id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location ='public/uploads/testimonial/'.$new_photo_name;
                   Image::make($uploaded_photo)->save(base_path($new_photo_location));
                   Testimonial::find($book_id)->update([
                  'photo' =>  $new_photo_name,
               ]);
        }

        return back()->with('home_banner_added', ' Added Successfully');
}
public function delete($id){
    $photo = Testimonial::find($id)->photo;
    if(Testimonial::find($id)->photo != 'default.jpg'){
        $old_photo_location = 'public/uploads/testimonial/'.$photo;
         unlink(base_path($old_photo_location));
     }
     Testimonial::find($id)->delete();
        return back()->with('delete_item','Deleted Successfully!');
}
public function show($id){
    return view('admin.testimonial.update_testimonial', [
        'info' => Testimonial::find($id),
    ]);

}
public function update(Request $request, $id){

        Testimonial::find($id)->update($request->except('_token', 'photo'));

        if ($request->hasFile('photo')) {
            if (Testimonial::find($id)->photo != 'default.png') {
                $old_photo_location = 'public/uploads/testimonial/' . Testimonial::find($id)->photo;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('photo');
            $new_file_name = $id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/testimonial/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Testimonial::find($id)->update([
                'photo' => $new_file_name,
            ]);
        }
        return back()->with('update_testimonial', 'Testimonial updated Successfully!!!');
}
}
