@extends('layouts.master')

@section('content')
    <div class="col col-xs col-md- col-lg- col-xl-12 body-single-main delete-padding">
        <div class="col col-xs col-md- col-lg- col-xl-12 body-single-main-img delete-padding">
            <img src="/images/news/{{ $news->image }}">
            <div class="col col-xs col-md- col-lg- col-xl-12 body-single-main-inside">
                <span class="bold">{{ $news->title }} </span>

                <div class="col col-xs col-md- col-lg- col-xl-12 body-single-main-name">
                    <span> نویسنده  <span> میترا محمدبیگی </span>  </span>
                </div>
                <div class="col col-xs col-md- col-lg- col-xl-12 body-single-main-date">
                    <span><i class="fa fa-calendar-check-o padding-left-20 fa-lg"></i> {{ $news->date }} </span>
                    <br>
                    <span><i class=" fa fa-clock-o padding-left-20 fa-lg"></i> {{ $news->time }} </span>
                </div>
            </div>
        </div>
        <center>
            <div class="col col-xs col-md- col-lg- col-xl-10 body-single-main-text">
                <p>
                    {{ $news->body }}
                </p>
            </div>
        </center>
    </div>
@endsection