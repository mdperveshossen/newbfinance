<?php

namespace App\Http\Controllers;

use App\Faqquestion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class FaqquestionController extends Controller
{
    public function index(){
        return view('admin.faq.faqlist',[
            'whynewbs' => Faqquestion::all(),
        ]);
       }

       public function store(Request $request){
        Faqquestion::insert($request->except('_token') + [
            'created_at' => Carbon::now(),
        ]);
        return back()->with('why_statu', 'Added Successfully!');
    }
    public function delete($id){
        Faqquestion::find($id)->delete();
        return back()->with('delete_item','Deleted Successfully!');
    }
    public function show($id){
        return view('admin.faq.faqlist_update', [
            'info' => Faqquestion::find($id)
        ]);

    }
    public function update(Request $request, $id){
        Faqquestion::find($id)->update($request->except('_token'));
        return back()->with('update_faq', 'Faq updated successfully!!');
    }
}
