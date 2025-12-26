<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    // หน้าแสดงฟอร์ม
    public function index(){
        return view('myform.html101');
    }

    // หน้าที่รับค่าจากฟอร์มมาแสดงผล
    public function store(Request $req){
        // รับค่าทั้งหมดจากฟอร์ม
        $data = [
            'fname'    => $req->input('fname'),
            'lname'    => $req->input('lname'),
            'birthday' => $req->input('birthday'),
            'age'      => $req->input('age'),
            'sex'      => $req->input('sex'),
            'address'  => $req->input('address'),
            'color'    => $req->input('color'),
            'song'     => $req->input('song'),
        ];

        // ตรวจสอบว่ามีไฟล์ html101_view.blade.php อยู่ใน resources/views/myform/ จริงไหม
        return view('myform.html101_view', $data);
    }
}