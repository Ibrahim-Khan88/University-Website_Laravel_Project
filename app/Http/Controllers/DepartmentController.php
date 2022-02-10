<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Department;
use App\Models\UsersRegistrationRequest;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function fetchDept()
    {
        $dept = Department::all();
        $deptName = array();

        for($i = 0; $i < count($dept); $i++){
            $deptName[$i] = $dept[$i] -> name;
        }
        return $deptName;
    }
}
