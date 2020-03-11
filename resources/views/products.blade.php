@extends('layouts.master')

@section('content')
    <center>
        <div class="col col-xs col-md- col-lg- col-xl-10 body-main-products">
            <!---->
            @foreach($products as $product)
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
                            <p class="font-size">   {{ substr($product->description , 0 , 100) }}  <span id="dots">...</span><span id="more"> {{ $product->description }} </span></p>

                        </div>
                        <!--more-->
                        <div class="box-more">
                            <button onclick="myFunction()" id="myBtn" style="width: 100px;height: 40px;background-color: #c4bebe;border:none;color: #fff;border-radius: 3px;">بیشتر</button>
                        </div>
                        <script>
                            function myFunction() {
                                var dots = document.getElementById("dots");
                                var moreText = document.getElementById("more");
                                var btnText = document.getElementById("myBtn");

                                if (dots.style.display === "none") {
                                    dots.style.display = "inline";
                                    btnText.innerHTML = "Read more";
                                    moreText.style.display = "none";
                                } else {
                                    dots.style.display = "none";
                                    btnText.innerHTML = "Read less";
                                    moreText.style.display = "inline";
                                }
                            }
                        </script>
                        <!--end-more--->
                    </div>
                </div>
            </div>
            @endforeach
            <!---->
        </div>
    </center>
@endsection