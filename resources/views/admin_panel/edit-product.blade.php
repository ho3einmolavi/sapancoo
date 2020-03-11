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
                <form class="needs-validation" action="/admin/edit/product/{{ $product->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="custom-file" style="margin-top: 25px;margin-bottom:20px;margin-right: 15px;">
                        <input type="file" name="image" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">انتخاب عکس محصول </label>
                    </div>

                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <label for="inputEmail4">عنوان  محصول</label>
                        <input value="{{ $product->title }}" type="text" name="title" class="form-control" id="inputname" placeholder="عنوان سایت را وارد کنید">
                    </div>
                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <label for="inputEmail4"> توضیحات  محصول</label>
                        <textarea name="description" class="form-control" id="validationTextarea" placeholder="توضیحات مربوط به محصول را وارد کنید..." required="">{{ $product->description }}</textarea>
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