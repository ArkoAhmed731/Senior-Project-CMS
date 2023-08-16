<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplicationInfo;

class ApplicationInfoController extends Controller
{
    public function create()
    {
        return view('applications.create');
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
        'adminisrtration_status' => in_array('Administration', $selectedDepartments) ? 0 : 3,
        'councilaffairs_status' => in_array('Council Affairs', $selectedDepartments) ? 0 : 3,
        'mpr_status' => in_array('MPR', $selectedDepartments) ? 0 : 3,
        // Add more departments here
    ];

    // Add department statuses to data array
    $data = array_merge($data, $departmentStatuses);

    $application = ApplicationInfo::create($data);

    return redirect()->back()->with('success', 'Application created successfully.');
}

}
