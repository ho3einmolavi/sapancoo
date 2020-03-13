@extends('layouts.master')

@section('content')
    <center>
        <div class="col col-xs col-md- col-lg- col-xl-10 body-main-products">
            <!---->
            @foreach($products as $key => $product)
                @if($key % 2 == 0)
                     <div class="col col-xs col-md- col-lg- col-xl-12 body-main-products-inside flex">
                        <div class="col col-xs col-md- col-lg- col-xl-8 body-main-products-inside-right">
                            <img src="/images/products/{{ $product->image }}">
                        </div>
                        <div class="col col-xs col-md- col-lg- col-xl-4 body-main-products-inside-left">
                            <div class="col col-xs col-md- col-lg- col-xl-12 body-main-products-inside-left-inside">
                                <div class="col col-xs col-md- col-lg- col-xl-12 body-main-products-inside-left-inside-subject">
                                    <span> {{ $product->title }}   </span>
                                </div>
                                <div class="col col-xs col-md- col-lg- col-xl-12 body-main-products-inside-left-inside-text">
                                    <p class="font-size">  {{ $product->description }}</p>
                                </div>
                            </div>
                        </div>
                     </div>
                @else
                    <div class="col col-xs col-md- col-lg- col-xl-12 body-main-products-inside flex">
                        <div class="col col-xs col-md- col-lg- col-xl-4 body-main-products-inside-left">
                            <div class="col col-xs col-md- col-lg- col-xl-12 body-main-products-inside-left-inside">
                                <div class="col col-xs col-md- col-lg- col-xl-12 body-main-products-inside-left-inside-subject">
                                    <span> {{ $product->title }}   </span>
                                </div>
                                <div class="col col-xs col-md- col-lg- col-xl-12 body-main-products-inside-left-inside-text">
                                    <p class="font-size"> {{ $product->description }}  </p>
                                </div>
                                <!--end-more--->
                            </div>
                        </div>
                        <div class="col col-xs col-md- col-lg- col-xl-8 body-main-products-inside-right">
                            <img src="/images/products/{{ $product->image }}">
                        </div>
                    </div>
            @endif
            @endforeach
            <!---->
        </div>
    </center>
@endsection