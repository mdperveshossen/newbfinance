<?php

namespace App\Http\Controllers;

use App\Risk;
use Illuminate\Http\Request;

class RiskController extends Controller
{
    public function index(){
        return view('admin.home.risk',[
            'whynewb' => Risk::find(1),
        ]);
       }

       public function store(Request $request){
        Risk::find(1)->update([
            'heading' => $request->heading,
            'details' => $request->details,
        ]);
        return back()->with('why_statu', 'Added Successfully!');
    }
    public function delete($id){
        Risk::find($id)->delete();
        return back()->with('delete_item','Deleted Successfully!');
    }
}
