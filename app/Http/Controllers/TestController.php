<?php

namespace App\Http\Controllers;
use illuminate\support\Facades\DB;

class TestController extends Controller
{
    public function download()
    {
        $path = "demo.txt";
        return response()->download($path);
    }
    public function getHeader()
    {
        return response(45)->header('name', 'Rudra')->header('address', 'Dhaka');
    }
    public function checkDB()
    {
        // return DB::connection()->getDatabaseName(); //GET DATABASE NAME
        
        $data = DB::connection()->select('SELECT * FROM users');
        return $data;
    }
}
