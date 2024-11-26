@extends('layouts.master')
@section('title','this is form page')
@section('css')
<style>

    input{
        width: 200px
    }
</style>
@endsection
@section('contant')

<div class="container my-5">
    <h2 class="text-center mb-4">فرم ثبت‌ نام</h2>
    <form action="{{route('form.store')}} " method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Full Name -->
        <div class="mb-3">
            <label for="fullName" class="form-label">نام و نام خانوادگی</label>
            <input type="text" class="form-control" name="fullName" id="fullName" placeholder="نام کامل خود را وارد کنید">
        </div>

           <!-- age-->
         <div class="mb-3">
            <label for="age" class="form-label"> سن  </label>
            <input type="number" class="form-control" name="age" id="age" placeholder="سن خود را وارد کنید">
        </div>
        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">ایمیل</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="example@mail.com">
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">رمز عبور</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="رمز عبور تان را وارد کنید">
        </div>
        <div class="mb-3">
            <label for="passwor_confirmation" class="form-label">رمز عبور</label>
            <input type="password" class="form-control" name="passwor_confirmation" id="passwor_confirmation" placeholder="رمز عبور تان را تکرار کنید">
        </div>

        <!-- Phone Number -->
        <div class="mb-3">
            <label for="phoneNumber" class="form-label">شماره تلفن</label>
            <input type="tel" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="شماره تان را وارد کنید">
        </div>

        <!-- Date of Birth -->
        <div class="mb-3">
            <label for="birthday" class="form-label">تاریخ تولد</label>
            <input type="date" class="form-control" name="birthday" id="dob">
        </div>
        <!--dead_day -->
        <div class="mb-3">
            <label for="dead_day" class="form-label">:)
               تاریخ مرگ ههههههه
            </label>
            <input type="date" class="form-control" name="dead_day" id="dead_day">
        </div>

        <!-- Gender -->

        <fieldset class="mb-3">
            <legend>جنسیت</legend>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                <label class="form-check-label" for="male">مرد</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">زن</label>
            </div>
        </fieldset> 

        <!-- Address -->
        <div class="mb-3">
            <label for="address" class="form-label">آدرس</label>
            <textarea class="form-control" name="address" id="address" rows="3" placeholder="آدرس کامل خود را وارد کنید"></textarea>
        </div>

        <!-- Upload Document -->
        <div class="mb-3">
            <label for="files" class="form-label">آپلود مدارک</label>
            <input type="file" class="form-control" name="files" id="files" multiple>
        </div>

         <!-- Upload image -->
         <div class="mb-3">
            <label for="image" class="form-label">آپلود عکس</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>

        <!-- Country -->
        <div class="mb-3">
            <label for="country" class="form-label">کشور</label>
            <select class="form-select" name="country" id="country" >
                <option selected>کشور خود را انتخاب کنید</option>
                <option value="iran">ایران</option>
                <option value="afghanistan">افغانستان</option>
                <option value="turkey">ترکیه</option>
            </select>
        </div>
         <!-- experience -->
        <div class="mb-3">
            <label for="experience" class="form-label">تحربه کاری</label>
            <select class="form-select" name="experience []" id="experience"  multiple>
                <option selected> در چند کشور  سفر کاری داشته اید   </option>
                <option value="iran">ایران</option>
                <option value="afghanistan">افغانستان</option>
                <option value="turkey">ترکیه</option>
                 <option value="usa">ایالات متحده امریکا </option>
                 <option value="china">چین </option>
                 <option value="india"> هند  </option>
            </select>
        </div>

        <!-- Terms and Conditions -->
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" value="1" name="terms" id="terms">
            <label class="form-check-label" for="terms"  checked>با قوانین و مقررات موافقم</label>
        </div>

        <!-- Submit Button -->
      
    
      <input type="submit" value="submit"  class="btn btn-success mt-2 ">
    </form>
</div>

@endsection