<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class approvalController extends Controller
{
    //show applications
    function index()
    {
        $userType = Auth::user()->user_type;

        if($userType == "super admin"){
            $applications = DB::table('application_info')->get();
        }

        else if($userType == "club admin"){
            $clubName = Auth::user()->user_name;

            $applications = DB::table('application_info')
            ->where ('club_name', $clubName)
            ->get();
        }

        else if($userType == "official"){
            $deptName = Auth::user()->user_name;
            $columnName = $deptName . "_status";

            $applications = DB::table('application_info')
            ->where($columnName, '!=', '3')
            ->get();
        }
        

        return view('applicationApproval/viewAllApplications', ['applications' => $applications]);
    }

    // delete application from database
    function delete($id){

        $delete = DB::table('application_info')
            ->where('application_id', $id)
            ->delete();

        return back();

    }

    
    // show edit page for an application
    function load_editApplication($id){

        $row = DB::table('application_info')
            ->where('application_id', $id)
            ->first();
        
        $data = [
            'Info'=> $row
        ];

        return view ('applications.editApplication', $data);
    }

    function updateApplication(Request $request){


        $request->validate([
            'application_title'=>'required',
            'application_type'=>'required',
            'application_date'=>'required',
            'applicant_name'=>'required',
            'application_description'=>'required',
            'club_name'=>'required'
        ]);


        $updating = DB::table('application_info')
            ->where('application_id', $request->input('application_id'))
            ->update([
                'user_id'=> $request->input('member_id'),
                'user_name'=> $request->input('member_name'),
                'user_email'=> $request->input('email'),
                'contact_number'=> $request->input('contact_number'),
                'gender'=> $request->input('gender'),
                'club_position'=> $request->input('club_position')
            ]);
            
            
        // $data = array(
        //     'list' => DB::table($clubName)->get()
        // );
        
        return back() ->with('success', 'Successfull!!!!');
    }

    //calculate progress of an application
    function calculateProgress($id)
    {
        $row = DB::table('application_info')
        ->where('application_id', $id)
        ->first();

        $countOnes = 0;
        $countNotOnes = 0;

        if ($row) {
            foreach ($row as $columnName => $value) {
                // Check if the column is numeric and has value 1
                if ($columnName !== 'application_id' && is_numeric($value) && $value === 1) {
                    $countOnes++;
                } else if ($columnName !== 'application_id' && is_numeric($value) && $value != 1 && $value != 3) {
                    $countNotOnes++;
                }
            }
        }
            $totalColumns = $countNotOnes + $countOnes;
            $percentageOnes = round(($countOnes / $totalColumns) * 100);
            // $percentageOnes = $countOnes;

            $data = [
                'Info' => $row,
                // variable page title
                // 'Title' => 'Edit',
                'percentageOnes' => $percentageOnes
                
            ];

        return view ('applicationApproval.applicationApprovalProgress', $data);

    }

    function postApproval($id){
        
        $row = DB::table('application_info')
            ->where('application_id', $id)
            ->first();

            $data = [
                'Info' => $row,
                // variable page title
                // 'Title' => 'Edit',
                
            ];

        return view ('applicationApproval.postApproval', $data);
    }

    //currently only updates onm_status
    function approve_update(Request $request){
        
        //Application approval/decline function
        //status == 1 == approved
        // status == 2 == declined
        // status == 0 == pending
        //
        $userName = Auth::user()->user_name;
        $columnName = $userName . "_status";
        $responseColumnName = $userName . "_response";
    
        try {
            if (isset($_POST['approve_button'])) {
                // Debugging output to check input value
                // dd($request->input('application_id'));
                
                // Update action
                $response = $request->input('response');
                // if defualt msg needed
                // $response = $request->input('response', 'All good. Approved');
                
                $updating = DB::table('application_info')
                    ->where('application_id', $request->input('application_id'))
                    //need to check if status == 3/0
                    ->update([
                        $columnName=> '1',
                        $responseColumnName => $response
                    ]);
                
                // Debugging output to check if update succeeded
                // dd($updating);
                



            } else if (isset($_POST['decline_button'])) {
                $response = $request->input('response');
                $updating = DB::table('application_info')
                    ->where('application_id', $request->input('application_id'))  
                    ->update([
                        $columnName=> '2',
                        $responseColumnName => $response
                    ]);
            } else {
                // No button pressed
            }
            
            // Redirect to 'private-test' page
            return redirect('/view-all-applications');

        } catch (\Exception $e) {
            // Log the exception for debugging
            \Log::error($e);
            // Handle the exception as needed
        }
    }


}
