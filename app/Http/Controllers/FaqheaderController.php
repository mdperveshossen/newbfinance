<?php

namespace App\Http\Controllers;

use App\Faqheader;
use App\Faqquestion;
use Illuminate\Http\Request;

class FaqheaderController extends Controller
{
    public function index(){
        return view('admin.faq.header',[
            'whynewb' => Faqheader::find(1),
        ]);
       }

       public function store(Request $request){
        Faqheader::find(1)->update([
            'heading' => $request->heading,
            'details' => $request->details,
        ]);
        return back()->with('why_statu', 'Added Successfully!');
    }
    public function delete($id){
        Faqheader::find($id)->delete();
        return back()->with('delete_item','Deleted Successfully!');
    }
}
