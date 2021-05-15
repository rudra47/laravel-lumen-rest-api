<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class EmployeeController extends Controller
{
    public function listData(Request $request)
    {
        $sql = "SELECT * FROM users";
        $request = DB::select($sql);
        return $request;
    }
    public function create(Request $request)
    {
        $username = $request->input("username");
        $fullName = $request->input("fullName");
        $number = $request->input("number");
        $email = $request->input("email");

        $sql = "INSERT INTO `users`(`username`, `fullname`, `number`, `email`) VALUES (?,?,?,?)";
        $result = DB::insert($sql, [$username, $fullName, $number, $email]);
        // return $request->getContent();
        if ($request) {
            return response("Success", 200);
        }else{
            return response("Failed", 404);
        }
    }
    public function update(Request $request)
    {
        $id = $request->input("id");
        $username = $request->input("username");
        $fullName = $request->input("fullName");
        $number = $request->input("number");
        $email = $request->input("email");

        $sql = "UPDATE `users` SET `username`=?,`fullname`=?,`number`=?,`email`=? WHERE `id`=?";
        $result = DB::update($sql, [$username, $fullName, $number, $email, $id]);
        // return $request->getContent();
        if ($request) {
            return response("Success", 200);
        }else{
            return response("Failed", 404);
        }
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        $sql = "DELETE FROM `users` WHERE `id` = ?";
        $result = DB::delete($sql,[$id]);
        if ($request) {
            return response("Success", 200);
        }else{
            return response("Failed", 404);
        }
    }
}
