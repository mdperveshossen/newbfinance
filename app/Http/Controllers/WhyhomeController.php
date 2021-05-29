<?php

namespace App\Http\Controllers;

use App\Whynewb;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WhyhomeController extends Controller
{
   public function index(){
    return view('admin.home.why',[
        'whynewbs' => Whynewb::all(),
    ]);
   }

   public function store(Request $request){
       Whynewb::insert($request->except('_token') + [
        'created_at' => Carbon::now(),
    ]);
       return back()->with('why_statu', 'Added Successfully!');
   }

   public function delete($id){
       Whynewb::find($id)->delete();
       return back()->with('delete_item','Deleted Successfully!');
   }
   public function show($id){
    return view('admin.home.why_update', [
        'info' => Whynewb::find($id)
    ]);
   }
   public function update(Request $request, $id){
       Whynewb::find($id)->update($request->except('_token'));
       return back()->with('update_newb', 'Why newb updated successfully!!');
   }
}
