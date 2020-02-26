<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function employeeForm(){
        $empl =  DB::table('employee')
                    ->select('id', 'user_id', 'first_name', 'last_name', 'email', 'mobile_no', 'alternate_mobile', 'birth_date', 'permanent_add', 'current_add', 'contact_person', 'con_person_no', 'profile_image', 'gender', 'pancard', 'aadharcard')
                    ->first();
        $pageData['empl'] = $empl;
        return view('pages.add-employee',compact('empl'));
    }

    public function allEmployee(){
        $empl =  DB::table('employee')
                    ->select('id', 'user_id', 'first_name', 'last_name', 'email', 'mobile_no', 'alternate_mobile', 'birth_date', 'permanent_add', 'current_add', 'contact_person', 'con_person_no', 'profile_image', 'gender', 'pancard', 'aadharcard')
                    // ->where('user_id', Auth::user()->id)
                    ->get();
                    return view('pages.employee',compact('empl'));
    }
    public function employeeDetails(){
        $emplo =  DB::table('employee')
                    ->select('id', 'user_id', 'first_name', 'last_name', 'email', 'mobile_no', 'alternate_mobile', 'birth_date', 'permanent_add', 'current_add', 'contact_person', 'con_person_no', 'profile_image', 'gender', 'pancard', 'aadharcard')
                    ->get();
        return view('pages.employee-details',compact('emplo'));
    }

    public function store(Request $request)
    {
        // dd(Auth::user()->id);
        $request->validate([
            'user_id' =>'required',
            'first_name' =>'required',
            'last_name' => 'required',
            'email' => 'required',
            'mobile_no' => 'required',
            'alternate_mobile' => 'required',
            'birth_date' => 'required',
            'permanent_add' => 'required',
            'current_add' => 'required',
            'contact_person' => 'required',
            'con_person_no' => 'required',
            'gender' => 'required',
            'pancard' =>'required',
            'aadharcard' =>'required',
        ]);

        $uploadedFile = $request->file('profile_picture'); 
        $file = $uploadedFile->getClientOriginalName(); //Get Image Name

        $extension = $uploadedFile->getClientOriginalExtension();  //Get Image Extension

        $fileName = $file.'.'.$extension;
        if ($uploadedFile->isValid()) {
            $uploadedFile->move(public_path('/users'), $fileName);
        }

        $user_id = $request->get('user_id');
        $first_name = $request->get('first_name');
        $last_name = $request->get('last_name');
        $email = $request->get('email');
        $mobile_no = $request->get('mobile_no');
        $alternate_mobile = $request->get('alternate_mobile');
        $birth_date = $request->get('birth_date');
        $permanent_add = $request->get('permanent_add');
        $current_add = $request->get('current_add');
        $contact_person = $request->get('contact_person');
        $con_person_no = $request->get('con_person_no');
        $gender = $request->get('gender');
        $pancard = $request->get('pancard');
        $aadharcard = $request->get('aadharcard');

        $employ = DB::table('employee')->insert([
            [
                'user_id' =>$user_id,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'mobile_no' => $mobile_no,
                'alternate_mobile' => $alternate_mobile,
                'birth_date' =>$birth_date,
                'permanent_add' =>$permanent_add,
                'current_add'=>$current_add,
                'contact_person' =>$contact_person,
                'con_person_no' =>$con_person_no,
                'gender' =>$gender,
                'pancard' =>$pancard,
                'aadharcard' =>$aadharcard,
                'profile_image' =>$fileName,
            ]
        ]);

        if($employ){
            return view('pages.thanks');
        }else{
            return back()->withInput();
        }
    }
    

    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $employ = DB::table('employee')
                        ->select('id', 'user_id', 'first_name', 'last_name', 'email', 'mobile_no', 'alternate_mobile', 'birth_date', 'permanent_add', 'current_add', 'contact_person', 'con_person_no', 'profile_image', 'gender', 'pancard', 'aadharcard')
                        ->where('employee.id','=',$id)
                        ->first();
        if ($employ != null) {
            return view('pages.edit-employee', compact('employ'));
        } else {
            return back();
        }
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'user_id' => 'required', 
            'first_name' => 'required', 
            'last_name' => 'required', 
            'email' => 'required', 
            'mobile_no' => 'required', 
            'alternate_mobile' => 'required', 
            'birth_date' => 'required', 
            'permanent_add' => 'required',
            'current_add' => 'required',
            'contact_person' => 'required',
            'con_person_no' => 'required',
            'gender' => 'required',
            'pancard' => 'required',
            'aadharcard' => 'required',
        ]);
        $employ = DB::table('employee')
                         ->where('id', $id)
                        ->update([
                            'user_id' => $request->get('user_id'),
                            'first_name' => $request->get('first_name'),
                            'last_name' => $request->get('last_name'),
                            'email' => $request->get('email'),
                            'mobile_no' => $request->get('mobile_no'),
                            'alternate_mobile' => $request->get('alternate_mobile'),
                            'birth_date' => $request->get('birth_date'),
                            'permanent_add' => $request->get('permanent_add'),
                            'current_add' => $request->get('current_add'),
                            'contact_person' => $request->get('contact_person'),
                            'con_person_no' => $request->get('con_person_no'),
                            'gender' => $request->get('gender'),
                            'pancard' => $request->get('pancard'),
                            'aadharcard' => $request->get('aadharcard'),
                            'profile_image' =>$request->get('fileName'),
                            'created_at' => date('Y-m-d H:i:s')
                        ]);
        if ($employ != null) {
            return redirect('employee')->with('success', 'User Updated Successfully.');
        } else {
            return back()->withInput()->with('error', 'There were some problems with your input');
        }
    }
    public function destroy($id){
            $employ = DB::table('employee')
                      ->where('id', $id)
                      ->delete();
        return view('pages.thanks');
    }
}
