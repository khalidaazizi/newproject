@extends('layouts.master')
@section('title','this is form page')
@section('css')
<style>

    body{
        background-color: rgb(227 245 248);
         font-family: Arial, sans-serif;
    }
    h2{
        color: #0b5b5b;
    }
    .border:focus{
      
       box-shadow:0 0 0 .25rem #489e9e5b !important; 
        
    }
   input[type=submit] {
        width: 173px;
        line-height: 2px color: #fff;
        background-color: #67b4ba;
        border: none;
        height: 36px;
        border-radius: 5px;
        color: #fff;
           
    }
    input[type=submit]:hover {
         background-color: #489e9e;
         color: #fff;
    }
    
    .form-check-input:checked{
        background-color:#0b5b5b;
        border-color:#2c7878;
    }
</style>
@endsection
@section('contant')

<div class="container  my-5">
   <section class="row">
        <div class="col-6 offset-3">
             <h2 class="text-center mb-4">فرم ثبت‌ نام</h2>
            <form action="{{route('validation.store')}} " method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Full Name -->
                <div class="mb-3">
                    <label for="fullName" class="form-label">نام و نام خانوادگی</label>
                    <input type="text" class="form-control border" name="fullName" id="fullName" placeholder="نام کامل خود را وارد کنید" required>
                </div>
                @error('fullName')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                <!-- age-->
                <div class="mb-3">
                    <label for="age" class="form-label"> سن  </label>
                    <input type="number" class="form-control border" name="age" id="age" placeholder="سن خود را وارد کنید" required>
                </div>
                @error('age')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">ایمیل</label>
                    <input type="email" class="form-control border" name="email" id="email" placeholder="example@mail.com" required>
                </div>
                 @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">رمز عبور</label>
                    <input type="password" class="form-control border" name="password" id="password" placeholder="رمز عبور تان را وارد کنید" required>
                </div>
                 @error('password')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                <!-- password_confirmation -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">تکرار رمز عبور</label>
                    <input type="password" class="form-control border " name="password_confirmation" id="password_confirmation" placeholder="رمز عبور تان را تکرار کنید" required>
                </div>
                 @error('password_confirmation')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                <!-- Phone Number -->
                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">شماره تلفن</label>
                    <input type="tel" class="form-control border" name="phoneNumber" id="phoneNumber" placeholder="شماره تان را وارد کنید" required>
                </div>
                @error('phoneNumber')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                

                <!-- Date of Birth -->
                <div class="mb-3">
                    <label for="birthday" class="form-label">تاریخ تولد</label>
                    <input type="date" class="form-control border" name="birthday" id="dob" required>
                </div>
                @error('birthday')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                
                <!--dead_day -->
                <div class="mb-3">
                    <label for="dead_day" class="form-label">:)
                    تاریخ مرگ ههههههه
                    </label>
                    <input type="date" class="form-control border" name="dead_day" id="dead_day" required>
                </div>
                 @error('dead_day')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                

                <!-- Gender -->

                <fieldset class="mb-3">
                    <legend>جنسیت</legend>
                    <div class="form-check">
                        <input type="radio" class="form-check-input border  " name="gender" id="male" value="male" required >
                        <label class="form-check-label border" for="male" style="border: none !important">مرد</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input border " name="gender" id="female" value="female" required>
                        <label class="form-check-label border" for="female" style="border: none !important">زن</label>
                    </div>
                </fieldset> 
                 @error('gender')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                <!-- Address -->
                <div class="mb-3">
                    <label for="address" class="form-label">آدرس</label>
                    <textarea class="form-control border" name="address" id="address" rows="3" placeholder="آدرس کامل خود را وارد کنید" required></textarea>
                </div>
                 @error('address')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                <!-- Upload file -->
                <div class="mb-3">
                    <label for="files" class="form-label">آپلود مدارک</label>
                    <input type="file" class="form-control border" name="files" id="files" multiple required>
                </div>
                 @error('files')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                <!-- Upload image -->
                <div class="mb-3">
                    <label for="image" class="form-label">آپلود عکس</label>
                    <input type="file" class="form-control border" name="image" id="image" required>
                </div>
                 @error('image')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                <!-- Country -->
                <div class="mb-3">
                    <label for="country" class="form-label">کشور</label>
                    <select class="form-select border" name="country" id="country" required>
                        <option selected>کشور خود را انتخاب کنید</option>
                        <option value="iran">ایران</option>
                        <option value="afghanistan">افغانستان</option>
                        <option value="turkey">ترکیه</option>
                    </select>
                </div>
                 @error('country')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                <!-- experience -->
                <div class="mb-3">
                    <label for="experience" class="form-label">تحربه کاری</label>
                    <select class="form-select border" name="experience []" id="experience"  multiple required>
                        <option selected> در چند کشور  سفر کاری داشته اید   </option>
                        <option value="iran">ایران</option>
                        <option value="afghanistan">افغانستان</option>
                        <option value="turkey">ترکیه</option>
                        <option value="usa">ایالات متحده امریکا </option>
                        <option value="china">چین </option>
                        <option value="india"> هند  </option>
                    </select>
                </div>
                @error('experience')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                <!-- Terms and Conditions -->
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input border" value="1" name="terms" id="terms">
                    <label class="form-check-label " for="terms"  checked required>با قوانین و مقررات موافقم</label>
                </div>
                @error('terms')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                <!-- Submit Button -->
            
            
            <input type="submit" value="submit"  class=" mt-2 ">
            </form>
        </div>
   </section>
</div>

@endsection