<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Src\HumanResources\Attendance\Application\AttendanceService;

class AttendanceController extends Controller
{
    //
    protected $attendanceService;


    public function __construct(AttendanceService $attendanceService)
    {
        $this->attendanceService = $attendanceService;
    }   

    public function index()
    {
        return response()->json(['message' => 'Attendance uploaded successfully'], 200);
    }

    public function create(Request $request)
    {
        
    }


}
