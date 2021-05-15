<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class QueryBuilderController extends Controller
{
    public function getEmployees(Request $request)
    {
        $employees = DB::table('users')->get();
        return $employees;
    }
    public function singleRow(Request $request)
    {
        $employee = DB::table('users')->find($request->id);
        dd($employee);
        // return $employee->fullname;
    }
    public function pluck()
    {
        $employee = DB::table('users')->pluck('fullname');
        return $employee;
    }

    public function insert(Request $request)
    {
        DB::table('users')->insert(['username'=>$request->username, 'fullname'=>$request->fullName, 'number'=>$request->number, 'email'=>$request->email]);

        return response('Insert Successfully', 200);
    }
    public function update(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update(['username'=>$request->username, 'fullname'=>$request->fullName, 'number'=>$request->number, 'email'=>$request->email]);

        return response('Update Successfully', 200);
    }
    public function delete(Request $request)
    {
        DB::table('users')->where('id', $request->id)->delete();

        return response('Delete Successfully', 200);
    }
}
