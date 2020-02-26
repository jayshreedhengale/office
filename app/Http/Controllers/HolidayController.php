<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HolidayController extends Controller
{
    public function holidayForm(){
        $holiday =  DB::table('holiday')
                    ->select('id','holiday_name', 'date', 'day')
                    ->first();
        $pageData['holiday'] = $holiday;
        return view('pages.add-holiday', $pageData);
    }
    public function store(Request $request)
    {
        $request->validate([
            'holiday_name' =>'required',
            'date' => 'required',
            'day' => 'required',
        ]);
        $holiday_name = $request->get('holiday_name');
        $date = $request->get('date');
        $day = $request->get('day');
        
        $holidays = DB::table('holiday')->insert([
            [
                'holiday_name' => $holiday_name,
                'date' => $date,
                'day' => $day,
            ]
        ]);
        
        if($holidays){
            return view('pages.thanks');
        }else{
            return back()->withInput();
        }
    }

    public function allHolidays(){
        $holiday =  DB::table('holiday')
                    ->select('id','holiday_name', 'date', 'day')
                    ->get();
        return view('pages.holiday', compact('holiday'));
    }

    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $holidays =  DB::table('holiday')
                    ->select('id','holiday_name', 'date', 'day')
                    ->where('holiday.id', $id)
                    ->first();
        if ($holidays != null) {
            return view('pages.edit-holiday', compact('holidays'));
        } else {
            return back();
        }
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'holiday_name' => 'required', 
            'date' => 'required', 
            'day' => 'required', 
        ]);
        $holidays = DB::table('holiday')
                         ->where('id', $id)
                        ->update([
                            'holiday_name' => $request->get('holiday_name'),
                            'date' => $request->get('date'),
                            'day' => $request->get('day'),
                            'created_at' => date('Y-m-d H:i:s')
                        ]);
        if ($holidays != null) {
            return redirect('holiday')->with('success', 'Holiday Updated Successfully.');
        } else {
            return back()->withInput()->with('error', 'There were some problems with your input');
        }
    }
    public function destroy($id){
            $holidays = DB::table('holiday')
                      ->where('id', $id)
                      ->delete();
        return view('pages.thanks');
    }
}
