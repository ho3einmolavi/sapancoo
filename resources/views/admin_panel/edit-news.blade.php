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
                <form enctype="multipart/form-data" class="needs-validation" novalidate method="post" action="/admin/edit/news/{{ $new->id }}">
                    @csrf
                    <div class="custom-file" style="margin-top: 25px;margin-right: 15px;">
                        <input type="file" class="custom-file-input" id="customFile" name="image">
                        <label class="custom-file-label" for="customFile">انتخاب عکس  خبر </label>
                    </div>
                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12" style="margin-top: 15px;">
                        <label for="inputEmail4">عنوان  خبر</label>
                        <input type="text" name="title" value="{{ $new->title }}" class="form-control" id="inputname" placeholder="متن خبر را وارد کنید">
                    </div>


                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <label for="inputEmail4"> متن  خبر </label>
                        <textarea class="form-control" name="body" id="validationTextarea" placeholder="متن خبر را اینجا وارد کنید ..." required="">
                            {{ $new->body }}
                        </textarea>
                        <div class="invalid-feedback">
                            لطفا توضیحات  دسته را واد کنید
                        </div>
                    </div>

                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <label for="inputEmail4"> کلمات کلیدی</label>
                        <textarea name="keywords" class="form-control" id="validationTextarea" placeholder=" کلمات کلیدی را با کاما از هم جدا کنید" required="">
                            {{ $new->keywords }}
                        </textarea>
                        <div class="invalid-feedback">
                            لطفا توضیحات  دسته را واد کنید
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit" style="margin-top: 20px;font-size: 13px;margin-right: 15px;">  ذخیره تغییرات </button>
                </form>
            </div>
        </div>
    </div>
@endsection