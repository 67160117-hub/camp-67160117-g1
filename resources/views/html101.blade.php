@extends('template.default')
@section('title','Workshop FORM')
@section('content')

<h1>Workshop #HTML - FORM</h1>
        <form>
            <div class="row mt-3">
                <div class="col-sm-12 col-md-4">
                    <label for="fname">ชื่อ</label>
                </div>
                <div class = "col">
                    <input id = "fanme" class ="form-control">
                </div>
            </div>

             <div class="row mt-3">
                <div class="col-sm-12 col-md-4">
                    <label for="lname">นามสกุล</label>
                </div>
                <div class = "col">
                    <input id = "lanme" class ="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-12 col-md-4">
                    <label for="brith">วัน/เดือน/ปีเกิด</label>
                </div>
                <div class = "col-2">
                    <input type="date" name="birthday"class="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-12 col-md-4">
                    <label for="sex">เพศ</label>
                </div>
                <div class = "col">
                    <input type="radio" id="male" name="gender" value="male">
                        <label for="male">ชาย</label>

                    <input type="radio" id="female" name="gender" value="female">
                        <label for="female">หญิง</label>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-12 col-md-4">
                    <label for="pic">รูป</label>
                </div>
                <div class = "col">
                    <input type="file" name="birthday"class="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-12 col-md-4">
                    <label for="address">ที่อยู่</label>
                </div>
                <div class = "col">
                    <textarea id="address" class="form-control" rows="4"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-12 col-md-4">
                    <label for="color">สีที่ชอบ</label>
                </div>
                <div class = "col-2">
                    <select id="favcolor" name="favorite_color"class="form-select">
                    <option value="red" selected>สีแดง </option>
                    <option value="green">สีส้ม</option>
                    <option value="green">สีเหลือง</option>
                    <option value="green">สีเขียว</option>
                    <option value="blue">สีน้ำเงิน</option>
                    <option value="blue">สีดำ</option>
                    <option value="green">สีม่วง</option>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-12 col-md-4">
                    <label for="music">แนวเพลง</label>
                </div>
                <div class = "col">
                    <input type="radio" id="เพื่อชีวิต" name="gender" value="เพื่อชีวิต">
                        <label for="เพื่อชีวิต">เพื่อชีวิต</label>

                        <input type="radio" id="ลูกทุ่ง" name="gender" value="ลูกทุ่ง">
                        <label for="ลูกทุ่ง">ลูกทุ่ง</label>

                        <input type="radio" id="อื่นๆ" name="gender" value="อื่นๆ">
                        <label for="อื่นๆ">อื่นๆ</label>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-12 col-md-4">

                <input type="checkbox" id="agree_data" name="data_consent" value="yes">
                <label for="agree_data">ยินยอมให้เก็บข้อมูล</label>
                </div>
            </div>

            <div class="row mt-4">
            <div class="col-6">
            <input type="reset" value="Reset" class="btn btn-light ">
            </div>

            <div class="col-6 text-end">
            <input type="submit" value="Submit" class="btn btn-success" onclick="clickMe()">
            </div>
         </div>

        </form>
@endsection
@push('scripts')
 <script>
    function clickMe(){
        console.log(Clicked);

    }
    let myvar = 1
    let myvar2 = "1"
    myvar2 = parseInt(myvar2)

    console.log(myvar+myvar2+"\n\n\n\nทดสอบ");
    console.log(1=='1');


    </script>
@endpush
