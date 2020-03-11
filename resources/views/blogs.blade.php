@extends('layouts.master')

@section('content')
    <center>
        <div class="col col-xs col-md- col-lg- col-xl-10 body-main-news">
            <div class="col col-xs col-md- col-lg- col-xl-12 body-main-news-top">
                <span>   @lang('header.blogs')  </span>
            </div>
            <div class="col col-xs col-md- col-lg- col-xl-12 body-main-news-bottom flex delete-padding">
                <div class="col col-xs col-md- col-lg- col-xl-6 body-main-news-bottom-right">
                    <!---->
                    @foreach($blogs[0] as $blog)
                        <a href="/{{ request()->route('locale') }}/blog/{{ $blog['id'] }}">
                            <div class="col col-xs col-md- col-lg- col-xl-12 body-main-news-bottom-right-inside flex delete-padding">
                                <div class="col-3 col-xs col-md- col-lg- col-xl-4 body-main-news-bottom-right-inside-img delete-padding-left">
                                    <img src="/images/blogs/{{ $blog['image'] }}">
                                </div>
                                <div class="col-9 col-xs col-md- col-lg- col-xl-8 body-main-news-bottom-right-inside-info">
                                    <div class="col col-xs col-md- col-lg- col-xl-12 body-main-news-bottom-right-inside-info-sub">
                                        <span class="font-size">  {{ $blog['title'] }}  </span>
                                    </div>
                                    <div class="col col-xs col-md- col-lg- col-xl-12 body-main-news-bottom-right-inside-info-text">
                                        <p class="font-size text-gray">  {{ $blog['body'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach


                    <!---->
                </div>
                <div class="col col-xs col-md- col-lg- col-xl-6 body-main-news-bottom-left">
                    <!---->
                    @foreach($blogs[1] as $blog)
                        <a href="/{{ request()->route('locale') }}/blog/{{ $blog['id'] }}">
                            <div class="col col-xs col-md- col-lg- col-xl-12 body-main-news-bottom-right-inside flex delete-padding">
                                <div class="col-3 col-xs col-md- col-lg- col-xl-4 body-main-news-bottom-right-inside-img delete-padding-left">
                                    <img src="/images/blogs/{{ $blog['image'] }}">
                                </div>
                                <div class="col-9 col-xs col-md- col-lg- col-xl-8 body-main-news-bottom-right-inside-info">
                                    <div class="col col-xs col-md- col-lg- col-xl-12 body-main-news-bottom-right-inside-info-sub">
                                        <span class="font-size">  {{ $blog['title'] }}  </span>
                                    </div>
                                    <div class="col col-xs col-md- col-lg- col-xl-12 body-main-news-bottom-right-inside-info-text">
                                        <p class="font-size text-gray">  {{ $blog['body'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    <!---->
                </div>
            </div>
        </div>
    </center>
@endsection