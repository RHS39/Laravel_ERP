<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpRegisterController extends Controller
{
    public function Register_emp(Request $request)
    {
        // Implement your employee registration logic here
        // 
        // You can access form data using $request object
        // 
        // Example:
        return view('employees.empregister');
 
        // Replace with your view name
    }

/*
    public function emp_register1()
    {
        return view('employees.empregister');
}
*/
}

/*

<
namespace App\Http;

use File;
use Illuminate\Http\Request;
use App\Models\EmpRegister;
use Illuminate\Support\Facades\DB;
//use Brian2694\Toastr\Facades\Toastr;


class EmpRegisterControllers extends Controller
{
    
    //Register Employee Page

/*
    public function emp_register()
    {

        $prop = array(
            'con_nam'=>"value",
        );


        DB::table('employees')->insert($prop);

        return "Database Operation";

    }


public function emp_register1()
{
    return view('employees.register');
}
}

/*
{
    //Register Employee Page
    public function register_emp()
    {
        $register_emp = register_emp::all();
        return view('employees.register_emp',compact('register_emp'));
    }

    // Saved record
    public function save_record(Request $request)
    {
        $request-> validate([

        ]);

        DB::beginTransaction();
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
    }


    

}

>
*/