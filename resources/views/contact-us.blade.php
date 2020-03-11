@extends('layouts.master')
@section('content')
    <div class="col col-xs col-md- col-lg- col-xl-12 body-main-contact-us">
        @php
            $set = \App\Setting::latest('id')->first();
            if (!$set){
                $set = \App\Setting::create([
                           'title' => 'ساپانکو'
                       ]);
            }
        @endphp
        <center>
            <div class="col col-xs col-md- col-lg- col-xl-10 contact-us-top flex">
                <div class="col col-xs col-md- col-lg- col-xl-6 contact-us-top-text">
                    <p class="font-size text-gray">
                        {{ $set->aboutus }}
                    </p>
                </div>
                <div class="col col-xs col-md- col-lg- col-xl-6 contact-us-top-img flex">
                    <div class="col col-xs col-md- col-lg- col-xl-10 contact-us-top-img-one">
                        <img src="/img/body-contact-us/article3.png">
                    </div>
                    <div class="col col-xs col-md- col-lg- col-xl-12 contact-us-top-img-two">
                        <img src="/img/body-contact-us/back-contact.png">
                    </div>
                </div>
            </div>
            <div class="col col-xs col-md- col-lg- col-xl-10 contact-us-bottom flex">
                <div class="col col-xs col-md- col-lg- col-xl-6 contact-us-bottom-right">
                    <div class="col col-xs col-md- col-lg- col-xl-12 contact-us-bottom-right-1">
                        <span class="font-size text-gray"> ارتباط با  </span>
                    </div>
                    <div class="col col-xs col-md- col-lg- col-xl-12 contact-us-bottom-right-2">
                        <span class="font-size text-gray"> ساخت پارمیس  نقش جهان سلپنا  </span>
                    </div>
                    <div class="col col-xs col-md- col-lg- col-xl-12 contact-us-bottom-right-3 flex delete-padding">
                        <div class="col col-xs col-md- col-lg- col-xl-6 contact-us-bottom-right-3-input delete-padding">
                            <div class="form-group
					col-xs col-sm col- col-md col-lg col-xl-12">
                                <input type="text" class="form-control" id="inputname" placeholder="نام و نام خانوادگی">
                            </div>
                            <div class="form-group
					col-xs col-sm col- col-md col-lg col-xl-12">
                                <input type="text" class="form-control" id="inputname" placeholder="پست الکترونیک">
                            </div>
                            <div class="form-group
					col-xs col-sm col- col-md col-lg col-xl-12">
                                <input type="text" class="form-control" id="inputname" placeholder="تلفن تماس">
                            </div>
                        </div>
                        <div class="col col-xs col-md- col-lg- col-xl-6 contact-us-bottom-right-3-text">
                            <form class="comment-inside" id="addComment">
                                <textarea cols="17" name="body" id="body" form="usrform" placeholder="توضیحات شما ..." rows="5"></textarea>
                            </form>
                        </div>
                    </div>
                    <div class="col col-xs col-md- col-lg- col-xl-12 contact-us-bottom-right-4">
                        <div class="send-info">
                            <span>  ارسال </span>
                        </div>
                    </div>
                </div>
                <div class="col col-xs col-md- col-lg- col-xl-6 contact-us-bottom-left flex delete-padding">
                    <div class="col col-xs col-md-7 col-lg-7 col-xl-7 contact-us-bottom-left-map delete-padding">
                        <img src="/img/body-contact-us/map.png">
                    </div>
                    <div class="col col-xs col-md-5 col-lg-5 col-xl-5 contact-us-bottom-left-info delete-padding-left">
                        <div class="col col-xs col-md- col-lg- col-xl-12 information-call delete-padding">
                            <li class="text-gray">  ارتباط مستقیم با مدیر عامل </li>
                            <li class="text-gray"> {{ $set->support }} </li>
                        </div>
                        <hr class="hr-info-call">
                        <div class="col col-xs col-md- col-lg- col-xl-12 information-call delete-padding">
                            <li class="text-gray">  دفتر مرکزی </li>
                            <li class="text-gray"> {{ $set->main_office }} </li>
                        </div>
                        {{--<hr class="hr-info-call">--}}
                        {{--<div class="col col-xs col-md- col-lg- col-xl-12 information-call delete-padding">--}}
                            {{--<li class="text-gray">  مشاور علمی  </li>--}}
                            {{--<li class="text-gray"> 09133205297 </li>--}}
                        {{--</div>--}}
                        <hr class="hr-info-call">
                        <div class="col col-xs col-md- col-lg- col-xl-12 information-call delete-padding">
                            <li class="text-gray">  مدیر عامل </li>
                            <li class="text-gray"> {{ $set->manager }} </li>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>
@endsection