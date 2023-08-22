<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class approvalController extends Controller
{
    //
    function index()
    {
        $applications = DB::table('application_info')->get();

        return view('applicationApproval/privateTest', ['applications' => $applications]);
    }

    function testProgress($id)
    {
        $row = DB::table('application_info')
        ->where('application_id', $id)
        ->first();
        $data = [
            'Info'=> $row,
            'Title'=> 'Edit'
        ];

        return view ('applicationApproval.testProgress', $data);

    }

    function postApproval($id){
        
        $row = DB::table('application_info')
            ->where('application_id', $id)
            ->first();
            
            $a = 40;
            $totalColumns = 1;
            $countOnes = 1;
            $countNotOnes = 1;

            if ($row) {
                foreach ($row as $columnName => $value) {
                    if ($value === '1') {
                        $countOnes++;
                    } elseif ($value === '2' || $value === '0') {
                        $countNotOnes++;
                    }
                }
            }

            $totalColumns = $countOnes + $countNotOnes;
            $percentageOnes = ($countOnes / $totalColumns) * 100;

            $data = [
                'Info' => $row,
                // variable page title
                // 'Title' => 'Edit',
                // 'percentageOnes' => $percentageOnes
                
            ];

        return view ('applicationApproval.postApproval', $data);
    }

    function approve_update(Request $request){
        
        //Application approval/decline function
        //status == 1 == approved
        // status == 2 == declined
        // 
    
        try {
            if (isset($_POST['approve_button'])) {
                // Debugging output to check input value
                // dd($request->input('application_id'));
                
                // Update action
                
                $updating = DB::table('application_info')
                    ->where('application_id', $request->input('application_id'))
                    //need to check if status == 3/0
                    ->update([
                        'onm_status'=> '1'
                    ]);
                
                // Debugging output to check if update succeeded
                // dd($updating);
                



            } else if (isset($_POST['decline_button'])) {
                $updating = DB::table('application_info')
                    ->where('application_id', $request->input('application_id'))  
                    ->update([
                        'onm_status'=> '2'
                    ]);
            } else {
                // No button pressed
            }
            
            // Redirect to 'private-test' page
            return redirect('private-test');

        } catch (\Exception $e) {
            // Log the exception for debugging
            \Log::error($e);
            // Handle the exception as needed
        }
    }


}
