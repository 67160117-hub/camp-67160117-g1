@extends('template.default')

@section('title', 'Workshop FORM')

@section('content')
<h1 class="text-center">Workshop #HTML - FORM</h1>
<div class="container square-box justify-content-center align-items-center overflow-hidden">
    <form id="myform" action="/submit" method="post">
        @csrf
        <div class="row mt-5">
            <div class="col-sm-12 col-md-3 mx-5 text-md-end">
                <label for="fname">ชื่อ</label>
            </div>
            <div class="col-5">
                <input id="fname" name = "fname"  class="form-control" type="text">
                <div class="valid-feedback">ถูกต้อง!</div>
                <div class="invalid-feedback">โปรดระบุชื่อ</div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-3 mx-5 text-md-end">
                <label for="lname">สกุล</label>
            </div>
            <div class="col-5">
                <input id="lname" name = "lname" class="form-control" type="text">
                <div class="valid-feedback">ถูกต้อง!</div>
                <div class="invalid-feedback">โปรดระบุนามสกุล</div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-3 mx-5 text-md-end">
                <label for="birthday" class="form-label">วัน/เดือน/ปีเกิด</label>
            </div>
            <div class="col-4">
                <input id="birthday" name ="birthday" class="form-control" type="date">
                <div class="valid-feedback">ถูกต้อง!</div>
                <div class="invalid-feedback">โปรดระบุ วัน/เดือน/ปีเกิด</div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-3 mx-5 text-md-end">
                <label for="age" class="form-label">อายุ</label>
            </div>
            <div class="col-5">
                <input id="age" name = "age" class="form-control" type="text">
                <div class="valid-feedback">ถูกต้อง!</div>
                <div class="invalid-feedback">โปรดระบุอายุ</div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-3 mx-5 text-md-end">
                <label>เพศ</label>
            </div>
            <div class="col-3">
                <input name="sex" id="male" class="form-check-input" type="radio" value="male">
                <label for="male" class="form-check-label">ชาย&emsp;&emsp;</label>
                <input name="sex" id="female" class="form-check-input" type="radio" value="female">
                <label for="female" class="form-check-label">หญิง</label>
                <div class="invalid-feedback">โปรดระบุเพศ</div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-3 mx-5 text-md-end">
                <label for="file">รูป</label>
            </div>
            <div class="col-3">
                <input id="file" name = "file" class="form-control" type="file">
                <div class="invalid-feedback">โปรดเลือกไฟล์</div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-3 mx-5 text-md-end">
                <label for="address" class="form-label">ที่อยู่</label>
            </div>
            <div class="col-5">
                <textarea class="form-control" id="address" name = "address"></textarea>
                <div class="invalid-feedback">โปรดระบุที่อยู่</div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-3 mx-5 text-md-end">
                <label for="color">สีที่ชอบ</label>
            </div>
            <div class="col-2">
                <select class="form-select" id="color" name="color">
                    <option selected disabled value="">เลือก...</option>
                    <option value="สีแดง">สีแดง</option>
                    <option value="สีเหลือง">สีเหลือง</option>
                    <option value="สีน้ำเงิน">สีน้ำเงิน</option>
                    <option value="สีเขียว">สีเขียว</option>
                    <option value="สีดำ">สีดำ</option>
                </select>
                <div class="invalid-feedback">โปรดระบุ</div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-3 mx-5 text-md-end">
                <label>แนวเพลงที่ชอบ</label>
            </div>
            <div class="col-5">
                <input name="song" id="rood" class="form-check-input" type="radio" value="rock">
                <label for="rood" class="form-check-label">รถแห่&emsp;&emsp;</label>
                <input name="song" id="country" class="form-check-input" type="radio" value="country">
                <label for="country" class="form-check-label">ลูกทุ่ง&emsp;&emsp;</label>
                <input name="song" id="other" class="form-check-input" type="radio" value="other">
                <label for="other" class="form-check-label">อื่น ๆ &emsp;&emsp;</label>
                <div id="song-error-msg" class="invalid-feedback">โปรดระบุแนวเพลง</div>
            </div>
        </div>

        <div class="row mt-3 text-center">
            <div class="col-sm-12 col-md-5 mx-5">
                <div class="form-check d-flex justify-content-center align-items-center flex-wrap">
                    <input class="form-check-input" type="checkbox" value="" id="agree">
                    <label class="form-check-label ms-3" for="agree">ยินยอมให้เก็บข้อมูล</label>
                    <div id="agree-feedback" class="invalid-feedback w-100">โปรดเลือกยินยอมก่อนดำเนินการต่อ</div>
                </div>
            </div>
        </div>

        <div class="row mb-5 mt-4 mx-auto">
            <div class="col-sm-12 col-md-2 mx-auto">
                <button type="button" class="btn btn-success" onclick="clickMe()">Submit</button>
            </div>
            <div class="col-md-2 mx-auto">
                <button type="reset" class="btn btn-light">Reset</button>
            </div>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    let clickMe = function() {
        let fname = document.getElementById('fname');
        let lname = document.getElementById('lname');
        let age = document.getElementById('age');
        let address = document.getElementById('address');
        let color = document.getElementById('color');
        let file = document.getElementById('file');
        let birthdayInput = document.getElementById('birthday');
        let agreeCheckbox = document.getElementById('agree');
        
        // เช็ค Input ทั่วไป
        let inputs = [fname, lname, age, address, color, file, birthdayInput];
        inputs.forEach(el => {
            if (el.value == "") {
                el.classList.add('is-invalid');
                el.classList.remove('is-valid');
            } else {
                el.classList.remove('is-invalid');
                el.classList.add('is-valid');
            }
        });

        // เช็ค Checkbox ยินยอม
        let feedback = document.getElementById('agree-feedback');
        if (!agreeCheckbox.checked) {
            agreeCheckbox.classList.add('is-invalid');
            feedback.style.display = 'block';
        } else {
            agreeCheckbox.classList.remove('is-invalid');
            agreeCheckbox.classList.add('is-valid');
            feedback.style.display = 'none';
        }

        // เช็คแนวเพลง (Radio)
        let selectedSong = document.querySelector('input[name="song"]:checked');
        let allSongInputs = document.querySelectorAll('input[name="song"]');
        let songError = document.getElementById('song-error-msg');
        if (!selectedSong) {
            allSongInputs.forEach(i => i.classList.add('is-invalid'));
            songError.style.display = 'block';
        } else {
            allSongInputs.forEach(i => {
                i.classList.remove('is-invalid');
                i.classList.add('is-valid');
            });
            songError.style.display = 'none';
        }

        // เช็คเพศ (Radio) - แก้ไขจุดที่ผิดจาก sexSelected เป็น genderSelected
        let genderSelected = document.querySelector('input[name="sex"]:checked');
        let radioSex = document.querySelectorAll('input[name="sex"]');
        if (!genderSelected) {
            radioSex.forEach(i => i.classList.add('is-invalid'));
        } else {
            radioSex.forEach(i => {
                i.classList.remove('is-invalid');
                i.classList.add('is-valid');
            });
        }

        // ถ้าผ่านทุกเงื่อนไข ให้ส่งฟอร์ม
        if (fname.value !== "" && lname.value !== "" && age.value !== "" && 
            address.value !== "" && color.value !== "" && birthdayInput.value !== "" && 
            agreeCheckbox.checked && selectedSong && genderSelected) {
            document.getElementById('myform').submit();
        }
    }
</script>
@endpush