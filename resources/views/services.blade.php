@extends('layouts.master')
@section('content')
    <center>
        <div class="col col-xs col-md- col-lg- col-xl-10 body-main-products">
            <!---->
            @foreach($details as $key => $detail)
                @if($key % 2 == 0)
                <div class="col col-xs col-md- col-lg- col-xl-12 body-main-products-inside flex">
                    <div class="col col-xs col-md- col-lg- col-xl-8 body-main-products-inside-right">
                        <img src="/images/services/{{ $detail['image'] }}">
                    </div>
                    <div class="col col-xs col-md- col-lg- col-xl-4 body-main-products-inside-left">
                        <div class="col col-xs col-md- col-lg- col-xl-12 body-main-products-inside-left-inside">
                            <div class="col col-xs col-md- col-lg- col-xl-12 body-main-products-inside-left-inside-subject">
                                <span>  {{ $detail['title'] }}   </span>
                            </div>
                            <div class="col col-xs col-md- col-lg- col-xl-12 body-main-products-inside-left-inside-text">
                                <p class="font-size">   {{ $detail['description'] }}</p>
                            </div>
                            {{--<!--more-->--}}
                            {{--<div class="box-more">--}}
                                {{--<button onclick="myFunction()" id="myBtn" style="width: 100px;height: 40px;background-color: #c4bebe;border:none;color: #fff;border-radius: 3px;">بیشتر</button>--}}
                            {{--</div>--}}
                            {{--<!--end-more--->--}}
                        </div>
                    </div>
                </div>
                @else
                    <div class="col col-xs col-md- col-lg- col-xl-12 body-main-products-inside flex">
                        <div class="col col-xs col-md- col-lg- col-xl-4 body-main-products-inside-left">
                            <div class="col col-xs col-md- col-lg- col-xl-12 body-main-products-inside-left-inside">
                                <div class="col col-xs col-md- col-lg- col-xl-12 body-main-products-inside-left-inside-subject">
                                    <span> {{ $detail['title'] }}   </span>
                                </div>
                                <div class="col col-xs col-md- col-lg- col-xl-12 body-main-products-inside-left-inside-text">
                                    <p class="font-size"> {{ $detail['description'] }} </p>
                                </div>
                                <!--more-->

                                <!--end-more--->
                            </div>
                        </div>
                        <div class="col col-xs col-md- col-lg- col-xl-8 body-main-products-inside-right">
                            <img src="/images/services/{{ $detail['image'] }}">
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </center>
@endsection