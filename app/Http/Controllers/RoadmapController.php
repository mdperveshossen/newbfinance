<?php

namespace App\Http\Controllers;

use App\Roadmap;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RoadmapController extends Controller
{
    public function index(){
        return view('admin.home.roadmap',[
            'whynewbs' => Roadmap::all(),
        ]);
       }

       public function store(Request $request){
        Roadmap::insert($request->except('_token') + [
            'created_at' => Carbon::now(),
        ]);
        return back()->with('why_statu', 'Added Successfully!');
    }
    public function delete($id){
        Roadmap::find($id)->delete();
        return back()->with('delete_item','Deleted Successfully!');
    }
    public function show($id){
        return view('admin.home.roadmap_update', [
            'info' => Roadmap::find($id)
        ]);
    }
    public function update(Request $request, $id){
        Roadmap::find($id)->update($request->except('_token'));
        return back()->with('update_roadmap', 'Roadmap updated successfully!!');
    }

}
