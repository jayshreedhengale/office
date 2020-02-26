<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LeadController extends Controller
{
    public function leadForm()
    {
    	$lead =  DB::table('mr_form_contact')
                    ->select('contact_id', 'contact_rep_title', 'contact_person', 'contact_email', 'contact_status', 'contact_org_type', 'contact_form_type', 'contact_country', 'contact_phone', 'contact_msg', 'contact_company', 'contact_discount_code', 'contact_purchase', 'contact_budget', 'contact_real_country', 'contact_exact_region', 'contact_datetime', 'contact_code', 'contact_query_nature', 'contact_job_role', 'contact_client_id', 'contact_plan', 'contact_crm_view', 'contact_publisher', 'contact_report_url', 'query_source', 'sample_shared', 'sample_confirm','comment','client_msg')
                    ->get();
        $pageData['lead'] = $lead;
        return view('pages.lead', $pageData);
    }
    public function store(Request $request)
    {
        
        $comment = $request->get('comment');
        $client_msg = $request->get('client_msg');
        
        
        $comme = DB::table('mr_form_contact')->insert([
            [
                'comment' => $comment,
                'client_msg' => $client_msg,
               
            ]
        ]);
        
        if($comme){
            return view('pages.thanks');
        }else{
            return back()->withInput();
        }
    }
}
