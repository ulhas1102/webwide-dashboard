<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Department;

class TeamController extends Controller
{
    //
    public function teamList(Request $request)
    {
        $teams = Team::orderBy('team_id', 'desc')->get();
        return view('team/team-list', compact('teams'));
    }
    public function addTeam(Request $request)
    {
        $designations = Department::all();
        return view('team/add-team', compact('designations'));
    }

    public function postTeam(Request $request)
    {

         $this -> validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'mobile_number' => 'required',
            'designation' => 'required',
            'profile_photo' => 'required',
            'address' => 'required',
        ]);

        $team = new Team;

        $team->first_name = $request->input('first_name');
        $team->last_name = $request->input('last_name');
        $team->email = $request->input('email');
        $team->mobile_number = $request->input('mobile_number');
        $team->designation = $request->input('designation');

        if($request->profile_photo != Null){
            if($request->hasFile('profile_photo')){
            $filename = $request->profile_photo->getClientOriginalName();
            $request->profile_photo->move(public_path() . '/backend/team-images/', $filename);
            $team->profile_photo = $filename;
        } 
        }

        $team->address = $request->input('address');

        $team->save();

        $alert = array(
                  'message' => 'Team Member Added successfully',
                  'alert-type' => 'success'
                  
                  ); 
        return redirect('team-list')->with($alert);
    }

    public function EditTeam(Request $request)
    {
        $dataId = $_GET['id'];
        $team = Team::find($dataId);
        $designations = Department::all();
        return view('team/edit', compact('team','designations'));
    }

    public function PostEditTeam(Request $request)
    {
        $this -> validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'mobile_number' => 'required',
            'designation' => 'required',
            //'profile_photo' => 'required',
            'address' => 'required',
        ]);

        $dataId = $request->dataId;

        $team = Team::find($dataId);

        $team->first_name = $request->input('first_name');
        $team->last_name = $request->input('last_name');
        $team->email = $request->input('email');
        $team->mobile_number = $request->input('mobile_number');
        $team->designation = $request->input('designation');

        if($request->profile_photo != Null){
            if($request->hasFile('profile_photo')){
            $filename = $request->profile_photo->getClientOriginalName();
            $request->profile_photo->move(public_path() . '/backend/team-images/', $filename);
            $team->profile_photo = $filename;
        } 
        }

        $team->address = $request->input('address');

        $team->save();

        $alert = array(
                  'message' => 'Team Member Edited successfully',
                  'alert-type' => 'success'
                  
                  ); 
        return redirect('team-list')->with($alert);
    }

    public function DeleteTeam(Request $request)
    {
        $dataId = $request->dataId;

        $blog = Team::find($dataId);
        $blog->delete();

        $alert = array(
                  'message' => 'Team member deleted successfully',
                  'alert-type' => 'error'
                  
                  ); 

        return redirect('team-list')->with($alert);;
    }
}
