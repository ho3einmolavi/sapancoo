@extends('layouts.admin')

@section('content')
    <div class="col-xs col-sm col-10 col-md-11 col-lg-9 col-xl-9 users-main delete-padding-left">
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
        <div class="col-xs col-sm col- col-md col-lg col-xl-12 word-list flex">
            <div class="col-xs col-sm col- col-md col-lg col-xl-2 word-list-img">
                <span class="font-size"> عکس محصول </span>
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-2 word-list-name">
                <span class="font-size">  عنوان محصول </span>
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-6 word-list-all">
                <span class="font-size"> توضیحات محصول </span>
            </div>
            <div class="col-xs col-sm col- col-md col-lg col-xl-2 word-list-delete-details">
                <span class="font-size" style="padding-right: 33px;">ویرایش و حذف</span>
            </div>
        </div>

        <ol id="selectable" class="col-xs col-sm col- col-md col-lg col-xl-12 delete-padding-left">
            <!----->
            @foreach($products as $product)
                <li class="ui-state-default user-list-info-box flex">
                    <div class="col-xs col-sm col- col-md col-lg col-xl-2 user-list-info-box-image">
                        <img src="/images/products/{{ $product->image }}">
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-2 user-list-info-box-name">
                        <span class="text-span title-4"> {{ $product->title }}  </span>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-6 user-list-info-box-number">
                        <span class="text-span title-4">{{ $product->description }}  </span>
                    </div>
                    <div class="col-xs col-sm col- col-md col-lg col-xl-2 table-data-feature flex">
                        <a href="/admin/edit/product/{{ $product->id }}" class="item confirm" data-toggle="tooltip" data-placement="top" title="" data-original-title="تایید">
                            <i class="fas fa-ellipsis-h"></i>
                        </a>
                        <form id="{{ $product->id }}" method="post" action="{{ route('delete' , ['products' , $product->id ]) }}">
                            @csrf @method('delete')
                            <a id="error2" onclick="document.getElementById({{ $product->id }}).submit()" class="item delete" data-toggle="tooltip" data-placement="top" title="" data-original-title="حذف ">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </form>

                    </div>
                </li>

            @endforeach


        </ol>

    </div>
@endsection