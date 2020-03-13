@extends('layouts.admin')
@section('content')
    <script type="text/javascript">
        function add_feed()
        {
            var div1 = document.createElement('div');
            // Get template data
            div1.innerHTML = document.getElementById('row').innerHTML;
            // append to our form, so that template data
            //become part of form
            document.getElementById('row').appendChild(div1);
        }
    </script>
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
                <form class="needs-validation" enctype="multipart/form-data" id="main-form" novalidate action="/admin/create/service" method="post">
                    @csrf
                    <div id="row">
                        <div class="custom-file" style="margin-top: 25px;margin-bottom:20px;margin-right: 15px;">
                            <input type="file" name="image[]" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">انتخاب عکس  خدمات</label>
                        </div>

                        <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                            <label for="inputEmail4">عنوان  خدمات </label>
                            <input type="text" name="title[]" class="form-control" id="inputname" placeholder="عنوان سایت را وارد کنید">
                        </div>
                        <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                            <label for="inputEmail4"> توضیحات  خدمات</label>
                            <textarea name="description[]" class="form-control" id="validationTextarea" placeholder="توضیحات مربوط به مخدمات را وارد کنید..." required=""></textarea>
                            <div class="invalid-feedback">
                                لطفا توضیحات  دسته را واد کنید
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-xs col-sm col- col-md col-lg col-xl-12">
                        <button id="add" type="button" onclick="add_feed()" class="btn btn-primary text-white">+</button>
                    </div>
                    <button class="btn btn-primary" type="submit" style="margin-top: 20px;font-size: 13px;margin-right: 15px;">  ذخیره تغییرات </button>
                </form>
            </div>

        </div>
    </div>

@endsection