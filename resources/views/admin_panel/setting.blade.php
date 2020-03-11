@extends('layouts.admin')
@section('content')
    <div class="col-xs col-sm col-10 col-md-11 col-lg-9 col-xl-9 users-main delete-padding-left">
        <div class="ui-state-default user-list-info-box-add">
            <div class="admin-form col-xs col-sm col- col-md col-lg col-xl-8">
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            {{ $error }} <br>
                        @endforeach
                    </div>
                @endif
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form class="needs-validation" novalidate enctype="multipart/form-data" action="/admin/edit/setting" method="post">
                    @csrf
                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <label for="inputEmail4">عنوان سایت </label>
                        <input type="text" name="title" value="{{ $setting->title }}" class="form-control" id="inputname" placeholder="عنوان سایت را وارد کنید">
                    </div>
                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <label for="inputEmail4"> توضیحات وب سایت </label>
                        <textarea class="form-control" name="description" id="validationTextarea" placeholder="توضیحات مربوط به سایت را وارد کنید" required="">
                            {{ $setting->description }}
                        </textarea>
                        <div class="invalid-feedback">
                            لطفا توضیحات  دسته را واد کنید
                        </div>
                    </div>

                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <label for="inputEmail4"> کلمات کلیدی</label>
                        <textarea name="keywords" class="form-control" id="validationTextarea" placeholder=" کلمات کلیدی را با کاما از هم جدا کنید" required="">
                            {{ $setting->keywords }}
                        </textarea>
                        <div class="invalid-feedback">
                            لطفا توضیحات  دسته را واد کنید
                        </div>
                    </div>

                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <label for="inputEmail4">متن درباره ما</label>
                        <textarea class="form-control" name="aboutus" id="validationTextarea" placeholder="متن  درباره ما را وارد کنید" required="">
                            {{ $setting->aboutus }}
                        </textarea>
                        <div class="invalid-feedback">
                            لطفا توضیحات  دسته را واد کنید
                        </div>
                    </div>

                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <label for="inputEmail4">شماره پشتیبانی</label>
                        <input type="text" class="form-control" name="support" value="{{ $setting->support }}" id="inputname" placeholder="شماره همراه را وارد کنید">
                    </div>
                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <label for="inputEmail4">شماره دفتر</label>
                        <input type="text" name="office" value="{{ $setting->office }}" class="form-control" id="inputname" placeholder="شماره همراه را وارد کنید">
                    </div>
                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <label for="inputEmail4">شماره دفتر مرکزی</label>
                        <input type="text" name="main_office" class="form-control" value="{{ $setting->main_office }}" id="inputname" placeholder="شماره همراه را وارد کنید">
                    </div>
                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <label for="inputEmail4">شماره مدیر عامل</label>
                        <input type="text" name="manager" class="form-control" id="inputname" value="{{ $setting->manager }}" placeholder="شماره همراه را وارد کنید">
                    </div>

                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <label for="inputEmail4">نشانی</label>
                        <input type="text" name="address" value="{{ $setting->address }}" class="form-control" id="inputname" placeholder="نشانی را وارد کنید">
                    </div>


                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <label for="inputEmail4">ایمیل</label>
                        <input type="text" name="email" value="{{ $setting->email }}" class="form-control" id="inputname" placeholder="آدرس ایمیل را وارد کنید">
                    </div>

                    <div class="custom-file" style="margin-top: 25px;margin-right: 15px;">
                        <input type="file" name="logo" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">انتخاب لوگو</label>
                    </div>

                    <button class="btn btn-primary" type="submit" style="margin-top: 20px;font-size: 13px;margin-right: 15px;">  ذخیره تغییرات </button>
                </form>
            </div>

        </div>
    </div>
@endsection