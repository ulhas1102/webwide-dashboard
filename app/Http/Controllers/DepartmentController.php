<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    //
     public function addDepartment(Request $request)
    {

        return view('department/add-department');
    }

    public function departmentList(Request $request)
    {
        $departments = Department::orderBy('department_id', 'desc')->get();

        //dd($blogs);
        return view('department/department-list', compact('departments'));
    }

    public function postDepartment(Request $request)
    {
        $department = new Department;

        $this -> validate($request, [
            'department_name' => 'required',
        ]);
        if($request->department_name != Null){
            $department->department_name = $request->input('department_name'); 
        } 
        $department->save();


         $alert = array(
                  'message' => 'Department Added successfully',
                  'alert-type' => 'success'
                  
                  ); 

        return redirect('department-list')->with($alert);
    }

    public function EditDepartment(Request $request)
    {
        $dataId = $_GET['id'];
        $department = Department::find($dataId);
        return view('department/edit',compact('department'));
    }

    public function posteditdepartment(Request $request)
    {
        $dataId = $request->dataId;

         $this -> validate($request, [
            'department_name' => 'required',
        ]);

        $department = Department::find($dataId);
        if($request->department_name != Null){
            $department->department_name = $request->input('department_name'); 
        } 
        $department->save();


         $alert = array(
                  'message' => 'Department Added successfully',
                  'alert-type' => 'success'
                  
                  ); 

        return redirect('department-list')->with($alert);

    }

     public function DeleteDepartment(Request $request)
    {
        $dataId = $request->dataId;

        $blog = Department::find($dataId);
        $blog->delete();

        $alert = array(
                  'message' => 'Department deleted successfully',
                  'alert-type' => 'error'
                  
                  ); 

        return redirect('department-list')->with($alert);;
    }
}
