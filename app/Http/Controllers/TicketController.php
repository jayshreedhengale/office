<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TicketController extends Controller
{
    public function ticketForm(){
        $ticket =  DB::table('ticket')
                    ->select('id', 'emp_id', 'ticket_id', 'subject', 'email', 'description')
                    ->first();
        $pageData['ticket'] = $ticket;
        return view('pages.add-ticket', $pageData);
    }
    public function store(Request $request)
    {
        $request->validate([
            'emp_id' =>'required',
            'ticket_id' => 'required',
            'subject' => 'required',
            'email' =>'required',
            'description' =>'required',
        ]);
        $emp_id = $request->get('emp_id');
        $ticket_id = $request->get('ticket_id');
        $subject = $request->get('subject');
        $email = $request->get('email');
        $description = $request->get('description');

		$tickets = DB::table('ticket')->insert([
            [
                'emp_id' => $emp_id,
                'ticket_id' => $ticket_id,
                'subject' => $subject,
                'email' => $email,
                'description' =>$description,
            ]
        ]);
        
        if($tickets){
            return view('pages.thanks');
        }else{
            return back()->withInput();
        }
    }

    public function allTickets(){
                    $ticket =  DB::table('ticket')
                            ->select('id', 'emp_id', 'ticket_id', 'subject', 'email', 'description')
                            ->get();
        return view('pages.ticket', compact('ticket'));
    }
}
