<?php

namespace App\Http\Controllers;

use App\Team;
use App\Team_heading;
use App\Teamheader;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.team.index', [
            'teams' => Team::latest()->get(),
            'heading' => Team_heading::find(1)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team_id =  Team::insertGetId($request->except('_token', 'thumbnail') + [
            'created_at' => Carbon::now(),
        ]);
            $uploaded_photo = $request->file('thumbnail');
            $new_file_name = $team_id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/team/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Team::find($team_id)->update([
                'thumbnail' => $new_file_name,
            ]);
        return back()->with('add_team', 'Team member added Successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('admin.team.show', [
            'info' => Team::find($team->id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        Team::find($team->id)->update($request->except('_token', 'thumbnail'));
        if ($request->hasFile('thumbnail')) {
            if (Team::find($team->id)->thumbnail != 'default.jpg') {
                $old_photo_location = 'public/uploads/team/' . Team::find($team->id)->thumbnail;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('thumbnail');
            $new_file_name = $team->idid . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/team/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Team::find($team->id)->update([
                'thumbnail' => $new_file_name,
            ]);
        }
            return back()->with('update_team', 'Team member updated Successfully!!!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        if (Team::find($team->id)->thumbnail != 'default.jpg') {
            $old_photo_location = 'public/uploads/team/' . Team::find($team->id)->thumbnail;
            unlink(base_path($old_photo_location));
        }
        Team::find($team->id)->delete();
        return back()->with('delete_team', 'Team member deleted successfully!!');
    }
    public function teamheadingupdate($id){
        return view('admin.team.update_heading', [
            'detail' => Team_heading::find($id)
        ]);
    }
    public function teamheadingupdatepost(Request $request, $id){
        Team_heading::find($id)->update($request->except('_token'));
        return back()->with('update_heading', 'Heading updated successfully!!');
    }
}
