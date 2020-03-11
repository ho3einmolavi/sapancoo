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
                <form class="needs-validation" novalidate enctype="multipart/form-data" action="/admin/create/gallery" method="post">
                    @csrf
                    <div class="custom-file" style="margin-top: 25px;margin-right: 15px;">
                        <input name="image" type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">انتخاب اسلایدشو سوم</label>
                    </div>
                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12" style="margin-top: 15px;">
                        <label for="inputEmail4">عنوان  عکس</label>
                        <input type="text" name="title" class="form-control" id="inputname" placeholder="متن خبر را وارد کنید">
                    </div>

                    <button class="btn btn-primary" type="submit" style="margin-top: 20px;font-size: 13px;margin-right: 15px;">  ذخیره تغییرات </button>
                </form>
            </div>

        </div>
    </div>
@endsection