<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Mail;
class LeaveController extends Controller
{
    public function leaveForm(){
        $leave =  DB::table('leave')
                    ->select('id','emp_id', 'leave_type', 'from', 'to', 'no_of_days', 'reason','status')
                    ->first();
        $pageData['leave'] = $leave;
        return view('pages.add-leave', $pageData);
    }
    public function store(Request $request)
    {
        $request->validate([
            'emp_id' =>'required',
            'leave_type' =>'required',
            'from' => 'required',
            'to' => 'required',
            'no_of_days' => 'required',
            'reason' => 'required',
            
        ]);
        $emp_id = $request->get('emp_id');
        $leave_type = $request->get('leave_type');
        $from = $request->get('from');
        $to = $request->get('to');
        $no_of_days = $request->get('no_of_days');
        $reason = $request->get('reason');
        $status = $request->get('status');

        $leavess = DB::table('leave')->insert([
            [
                'emp_id' =>$emp_id,
                'leave_type' => $leave_type,
                'from' => $from,
                'to' => $to,
                'no_of_days' => $no_of_days,
                'reason' => $reason,
                // 'status' => $status,
            ]
        ]);
         /*email coding 
        $data = array('emp_id' => $request->get('emp_id'),'leave_type' => $request->get('leave_type'),'from' => $request->get('from'), 'to' => $request->get('to'),'no_of_days' => $request->get('no_of_days'),'reason' => $request->get('reason'));
            echo implode(" ",$data);
        Mail::send('mail', ['data' => $data], function ($message) use ($data) {
             $message->to('sales@businessresearchreports.com', 'Leave - Planet Market Report')->cc(['sachdi2510@gmail.com'])->subject
                ('Leave - Planet Market Report');
             $message->from('sales@pmrpressrelease.com','Planet Market Report');
          });
        /*email coding end */

        if($leavess){
            return view('pages.thanks');
        }else{
            return back()->withInput();
        }
    }

    public function allLeave(){
       $leave =  DB::table('leave')
                    ->select('id', 'emp_id','leave_type', 'from', 'to', 'no_of_days', 'reason','status')
                    ->where('emp_id', Auth::user()->id)
                    ->get();
        return view('pages.leave',compact('leave')); 
        
    }
    public function show()
    {
        //
    }
    public function edit($id)
    {
        $leavess =  DB::table('leave')
                    ->select('id','emp_id', 'leave_type', 'from', 'to', 'no_of_days', 'reason')
                    ->where('leave.id', $id)
                    ->first();
        if ($leavess != null) {
            return view('pages.edit-leave', compact('leavess'));
        } else {
            return back();
        }
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'emp_id' => 'required', 
            'leave_type' => 'required', 
            'from' => 'required', 
            'to' => 'required',
            'no_of_days' => 'required',
            'reason' => 'required',
        ]);
        $leavess = DB::table('leave')
                         ->where('id', $id)
                        ->update([
                            'emp_id' => $request->get('emp_id'),
                            'leave_type' => $request->get('leave_type'),
                            'from' => $request->get('from'),
                            'to' => $request->get('to'),
                            'no_of_days' => $request->get('no_of_days'),
                            'reason' => $request->get('reason'),
                            'status' => $request->get('status'),
                            'created_at' => date('Y-m-d H:i:s')
                        ]);
        if ($leavess != null) {
            return redirect('leave')->with('success', 'User Leave Updated Successfully.');
        } else {
            return back()->withInput()->with('error', 'There were some problems with your input');
        }
    }
    public function destroy($id){
            $leavess = DB::table('leave')
                      ->where('id', $id)
                      ->delete();
        return view('pages.thanks');
    }
}
