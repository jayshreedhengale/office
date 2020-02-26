<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeadminController extends Controller
{
    /* employee admin form */
    public function employeeAdmin(){
        $emp =  DB::table('employee_adm')
                ->select('user_id', 'join_date', 'first_name', 'last_name', 'email', 'mobile_no', 'department', 'designation')
                ->first();
        $pageData['emp'] = $emp;
        $departments = DB::table('department')
                        ->select('id', 'department')
                        ->get();
        $designations = DB::table('designation')
                        ->select('id', 'job_role')
                        ->get();
        return view('pages.employee-admin',compact('emp','departments','designations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' =>'required',
            'join_date' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'mobile_no' => 'required',
            'department' => 'required',
            'designation' => 'required',
        ]);
        $user_id = $request->get('user_id');
        $join_date = $request->get('join_date');
        $first_name = $request->get('first_name');
        $last_name = $request->get('last_name');
        $email = $request->get('email');
        $mobile_no = $request->get('mobile_no');
        $department = $request->get('department');
        $designation = $request->get('designation');
        
        $admin = DB::table('employee_adm')->insert([
            [
                'user_id' => $user_id,
                'join_date' => $join_date,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'mobile_no' => $mobile_no,
                'department' => $department,
                'designation' => $designation,
            ]
        ]);
        
        if($admin){
            return view('pages.thanks');
        }else{
            return back()->withInput();
        }
    }
    
    /*employee admin form end */
}
