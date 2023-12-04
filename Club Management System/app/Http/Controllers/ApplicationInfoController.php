<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplicationInfo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ApplicationInfoController extends Controller
{
    public function create()
    {
        $row = DB::table('club_list')
        ->get();
        
        $data = [
            'Info'=> $row
        ];

        return view ('applications.create', $data);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        // Determine which departments were selected
        $selectedDepartments = $data['departments'] ?? [];

        // Prepare department statuses
        $departmentStatuses = [
            'onm_status' => in_array('ONM', $selectedDepartments) ? 0 : 3,
            'cits_status' => in_array('CITS', $selectedDepartments) ? 0 : 3,
            'facilities_status' => in_array('Facilities', $selectedDepartments) ? 0 : 3,
            'security_status' => in_array('Security', $selectedDepartments) ? 0 : 3,
            'finance_status' => in_array('Finance', $selectedDepartments) ? 0 : 3,
            'administration_status' => in_array('Administration', $selectedDepartments) ? 0 : 3,
            'councilaffairs_status' => in_array('Council Affairs', $selectedDepartments) ? 0 : 3,
            'mpr_status' => in_array('MPR', $selectedDepartments) ? 0 : 3,
            'dean_status' => 0, // Set dean_status to 0
            'vc_status' => 0,   // Set vc_status to 0
            'dosa_status' => 0, // Set dosa_status to 0
            // three departments always selected
            // Add more departments here
        ];

        // Add department statuses to data array
        $data = array_merge($data, $departmentStatuses);

        $application = ApplicationInfo::create($data);

        return redirect()->back()->with('success', 'Application created successfully.');
    }

    // public function store(Request $request)
    // {
    //     $data = $request->all();

    //     if (Auth::user()->user_type === 'club admin') {
    //         // Set 'club_name' based on the authenticated user's information
    //         $clubName = Auth::user()->user_name;
    //     }
    //     elseif (Auth::user()->user_type === 'super admin') {
    //         // Set 'club_name' based on the authenticated user's information
    //         $clubName = $data['club_name'];
    //     }

    //     // Determine which departments were selected
    //     $selectedDepartments = $data['departments'] ?? [];

    //     // Prepare department statuses
    //     $departmentStatuses = [
    //         'onm_status' => in_array('ONM', $selectedDepartments) ? 0 : 3,
    //         'cits_status' => in_array('CITS', $selectedDepartments) ? 0 : 3,
    //         'facilities_status' => in_array('Facilities', $selectedDepartments) ? 0 : 3,
    //         'security_status' => in_array('Security', $selectedDepartments) ? 0 : 3,
    //         'finance_status' => in_array('Finance', $selectedDepartments) ? 0 : 3,
    //         'administration_status' => in_array('Administration', $selectedDepartments) ? 0 : 3,
    //         'councilaffairs_status' => in_array('Council Affairs', $selectedDepartments) ? 0 : 3,
    //         'mpr_status' => in_array('MPR', $selectedDepartments) ? 0 : 3,
    //         'dean_status' => 0, // Set dean_status to 0
    //         'vc_status' => 0,   // Set vc_status to 0
    //         'dosa_status' => 0, // Set dosa_status to 0
    //         // three departments always selected
    //         // Add more departments here
    //     ];

    //     // Add department statuses to data array
    //     $data = array_merge($data, $departmentStatuses);

    //     // // Create a new ApplicationInfo record and get the application_id
    //     // $application = ApplicationInfo::create($data);
    //     // $applicationId = $application->application_id;

    //     if ($request->hasFile('fileUpload')) {
    //         $file = $request->file('fileUpload');

    //         if ($file->isValid()) {
    //             $filename = $this->getUniqueFileName($file);

    //             $file->move(public_path('application_pdf'), $filename);

    //             DB::table('application_info')->insert([
    //                 'application_title' => $data['application_title'],
    //                 'application_type' => $data['application_type'],
    //                 'application_date' => $data['application_date'],
    //                 'application_description' => $data['application_description'],
    //                 'applicant_name' => $data['applicant_name'],
    //                 'club_name' => $clubName,
    //             ]);

    //             return redirect()->back()->with('success', 'Application created successfully.');

    //         } else {
    //             return redirect()->back()->with('error', 'Invalid file.');
    //         }
    //     } else {
    //         return redirect()->back()->with('error', 'File not found.');
    //     }

        

        // // Rename the PDF file to the application_id
        // if ($request->hasFile('file-upload') && $request->file('file-upload')->isValid())
        // {
        //     $file = $request->file('file-upload');

        //     // Get the original file extension
        //     $extension = $file->getClientOriginalExtension();

        //     // Ensure the extension is not empty
        //     if (!empty($extension)) {
        //         // Construct a new file name using the application_id and the original extension
        //         $newFileName = $applicationId . '.' . $extension;

        //         // Move the file to the desired location using public_path()
        //         $file->move(public_path('application_pdf'), $newFileName);
        //     } else {
        //         // Log or handle the case where the extension is empty
        //         // For debugging purposes, you can log the extension
        //         \Log::error('Empty file extension', ['file_name' => $file->getClientOriginalName()]);
        //     }
        // }

        // return redirect()->back()->with('success', 'Application created successfully.');
    // }

    private function getUniqueFileName($file)
    {
        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $id = DB::table('application_info')->max('application_id') + 1; // Assuming 'id' is the primary key

        return "{$id}.{$extension}";
    }



}
