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

        return view ('applicationApproval.testProgress', $data);

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
