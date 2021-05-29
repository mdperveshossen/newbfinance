<?php

namespace App\Http\Controllers;

use App\Teamheader;
use Illuminate\Http\Request;

class TeamheaderController extends Controller
{
    public function index(){
        return view('admin.team.header',[
            'whynewb' => Teamheader::find(1),
        ]);
       }

       public function store(Request $request){
        Teamheader::find(1)->update([
            'heading' => $request->heading,
            'details' => $request->details,
        ]);
        return back()->with('why_statu', 'Added Successfully!');
    }
    public function delete($id){
        Teamheader::find($id)->delete();
        return back()->with('delete_item','Deleted Successfully!');
    }
}
