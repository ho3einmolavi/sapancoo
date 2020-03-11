@extends('layouts.master')

@section('content')
    <div class="col col-xs col-md- col-lg- col-xl-12 body-main-index">
        <!--slideshow-->
        @php
            $slides = \App\SlideShow::latest('id')->take(4)->get()
        @endphp
        <div class="col col-xs col-md- col-lg- col-xl-12 slideshow-main delete-padding">
            <main class="main-content">
                <section class="slideshow">
                    <div class="slideshow-inner">
                        <div class="slides">
                            @foreach($slides as $key => $slide)
                                @if($key == 0)
                                    <div class="slide is-active ">
                                        <div class="slide-content">
                                            <div class="caption">
                                                <div class="title" style="font-family: irs">{{ $slide->title }}</div>
                                            </div>
                                        </div>
                                        <div class="image-container">
                                            <img src="/images/slideShow/{{ $slide->image }}">
                                        </div>
                                    </div>
                                @else
                                    <div class="slide">
                                        <div class="slide-content">
                                            <div class="caption">
                                                <div class="title" style="font-family: irs">{{ $slide->title }}</div>
                                            </div>
                                        </div>
                                        <div class="image-container">
                                            <img src="/images/slideShow/{{ $slide->image }}" alt="" class="image" />
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="pagination">
                            <div class="item is-active">
                                <span class="icon">1</span>
                            </div>
                            <div class="item">
                                <span class="icon">2</span>
                            </div>
                            <div class="item">
                                <span class="icon">3</span>
                            </div>
                            <div class="item">
                                <span class="icon">4</span>
                            </div>
                        </div>
                        <div class="arrows">
                            <div class="arrow prev">
                              <span class="svg svg-arrow-left">
                                <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"/> </svg>
                                <span class="alt sr-only"></span>
                              </span>
                            </div>
                            <div class="arrow next">
                              <span class="svg svg-arrow-right">
                                <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"/> </svg>
                                <span class="alt sr-only"></span>
                              </span>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
        <!--end-slideshow-->
        <!--services--->
        <center>
            <div class="col col-xs col-md- col-lg- col-xl-12 services-main delete-padding">
                <div class="col col-xs col-md- col-lg- col-xl-12 services-main-subject">
                    <span class="text-gray"> @lang('header.service') </span>
                </div>
                <div class="col col-xs col-md- col-lg- col-xl-12 services-main-des flex">
                    <div class="col col-xs col-md- col-lg- col-xl-2 services-main-inside delete-padding">
                        <a href="#">
                            <div class="col col-xs col-md- col-lg- col-xl-12 services-main-inside-top delete-padding">
                                <img src="/img/body-index/services/services1.png">
                            </div>
                            <div class="col col-xs col-md- col-lg- col-xl-12 services-main-inside-bottom delete-padding">
                                <p class="font-size text-gray">  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                            </div>
                        </a>
                    </div>
                    <div class="col col-xs col-md- col-lg- col-xl-2 services-main-inside delete-padding">
                        <a href="#">
                            <div class="col col-xs col-md- col-lg- col-xl-12 services-main-inside-top delete-padding">
                                <img src="/img/body-index/services/services2.png">
                            </div>
                            <div class="col col-xs col-md- col-lg- col-xl-12 services-main-inside-bottom delete-padding">
                                <p class="font-size text-gray">  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                            </div>
                        </a>
                    </div>
                    <div class="col col-xs col-md- col-lg- col-xl-2 services-main-inside delete-padding">
                        <a href="#">
                            <div class="col col-xs col-md- col-lg- col-xl-12 services-main-inside-top delete-padding">
                                <img src="/img/body-index/services/services3.png">
                            </div>
                            <div class="col col-xs col-md- col-lg- col-xl-12 services-main-inside-bottom delete-padding">
                                <p class="font-size text-gray">  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                            </div>
                        </a>
                    </div>
                    <div class="col col-xs col-md- col-lg- col-xl-2 services-main-inside delete-padding">
                        <a href="#">
                            <div class="col col-xs col-md- col-lg- col-xl-12 services-main-inside-top delete-padding">
                                <img src="/img/body-index/services/services4.png">
                            </div>
                            <div class="col col-xs col-md- col-lg- col-xl-12 services-main-inside-bottom delete-padding">
                                <p class="font-size text-gray">  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                            </div>
                        </a>
                    </div>
                    <div class="col col-xs col-md- col-lg- col-xl-2 services-main-inside delete-padding">
                        <a href="#">
                            <div class="col col-xs col-md- col-lg- col-xl-12 services-main-inside-top delete-padding">
                                <img src="/img/body-index/services/services5.png">
                            </div>
                            <div class="col col-xs col-md- col-lg- col-xl-12 services-main-inside-bottom delete-padding">
                                <p class="font-size text-gray">  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </center>
        <!--end-services-->
        <!--news-->
        <div class="col col-xs col-md- col-lg- col-xl-12 news-main">
            <div class="col col-xs col-md- col-lg- col-xl-12 news-main-subject flex">
                <div class="col col-xs col-md- col-lg- col-xl-10 news-main-subject-main">
                    <span class="text-gray"> @lang('header.news')</span>
                </div>
            </div>
            <div class="col col-xs col-md- col-lg- col-xl-12 news-main-sub-inside-hr">
                <hr>
            </div>


            @php
                $news = \App\News::latest('id')->take(6)->get();
                foreach ($news as $new)
                {
                    $new['date'] = \Morilog\Jalali\Jalalian::forge($new->updated_at)->format('%A, %d %B %y');
                }

                if (!$news->isEmpty())
                {
                     $news = json_decode(json_encode($news), true);
                     $news = array_chunk($news , count($news)/2);
                }


            @endphp

            <div class="col col-xs col-md- col-lg- col-xl-12 news-main-des flex">
                <div class="col col-xs col-md-7 col-lg- col-xl-6 news-main-des-right">
                    <div class="col col-xs col-md- col-lg- col-xl-12 news-main-des-right-top flex delete-padding">
                        @foreach($news[0] as $new)
                            <div class="col col-xs col-md- col-lg- col-xl-4 news-main-des-right-top-article delete-padding">
                                <div class="col col-xs col-md- col-lg- col-xl-12 news-main-des-right-top-article-sub">
                                    <a href="{{ route('new' , [request()->route('locale') , $new['id']]) }}">
                                        <span class="font-size text-gray">{{ substr($new['body'] , 0 , 100) }}...</span>
                                    </a>
                                </div>
                                <div class="col col-xs col-md- col-lg- col-xl-12 news-main-des-right-top-article-date">
                                    <span class="font-size text-gray">{{ $new['date'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col col-xs col-md- col-lg- col-xl-12 news-main-des-right-bottom flex delete-padding">
                        @foreach($news[1] as $new)
                            <div class="col col-xs col-md- col-lg- col-xl-4 news-main-des-right-top-article delete-padding">
                                <div class="col col-xs col-md- col-lg- col-xl-12 news-main-des-right-top-article-sub">
                                    <a href="{{ route('new' , [request()->route('locale') , $new['id']]) }}">
                                        <span class="font-size text-gray">{{ substr($new['body'] , 0 , 100) }}...</span>
                                    </a>
                                </div>
                                <div class="col col-xs col-md- col-lg- col-xl-12 news-main-des-right-top-article-date">
                                    <span class="font-size text-gray">{{ $new['date'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col col-xs col-md-5 col-lg- col-xl-6 news-main-des-left">
                    <img src="/img/body-index/services/services3.png">
                </div>
            </div>
        </div>
        <!--end-news-->
        <!--blog-->

        @php
            $blogs = \App\Blog::latest('id')->take(4)->get();
            foreach ($blogs as $blog)
            {
              $blog['date'] = \Morilog\Jalali\Jalalian::forge($blog->updated_at)->format('%A, %d %B %y');
            }
            $blogs = json_decode(json_encode($blogs), true);
            $blogs = array_chunk($blogs , count($blogs)/2);
        @endphp
        <div class="col col-xs col-md- col-lg- col-xl-12 blog-main">
            <div class="col col-xs col-md- col-lg- col-xl-12 blog-main-subject flex">
                <div class="col col-xs col-md- col-lg- col-xl-10 blog-main-subject-main">
                    <span> @lang('header.last_blogs') </span>
                </div>
                <div class="col col-xs col-md- col-lg- col-xl-2 blog-main-subject-all">
                    <a href="{{ route('blogs' , request()->route('locale')) }}">
                        <div class="all-blog">
                            <span class="font-size text-gray">  @lang('header.blogs') </span>
                            <span class="text-gray"><i class="fas fa-angle-left"></i></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col col-xs col-md- col-lg- col-xl-12 blog-main-des flex">
                <!--right-->

                  <div class="col col-xs col-md- col-lg- col-xl-6 blog-main-des-right">
                      @foreach($blogs[0] as $blog)
                          <a href="{{ route('blog' , [request()->route('locale') , $blog['id']]) }}">
                              <div class="col col-xs col-md- col-lg- col-xl-12 blog-main-des-right-top flex delete-padding">
                                  <div class="col col-xs col-md- col-lg- col-xl-6 blog-main-des-right-top-img delete-padding">
                                      <img src="/images/blogs/{{ $blog['image'] }}">
                                  </div>
                                  <div class="col col-xs col-md- col-lg- col-xl-6 blog-main-des-right-top-des">
                                      <div class="col col-xs col-md- col-lg- col-xl-12 blog-main-des-right-top-des-date">
                                          <span class="font-size text-gray">{{ $blog['date'] }} </span>
                                      </div>
                                      <div class="col col-xs col-md- col-lg- col-xl-12 blog-main-des-right-top-des-sub">
                                          <span>{{ $blog['title'] }}</span>
                                      </div>
                                      <div class="col col-xs col-md- col-lg- col-xl-12 blog-main-des-right-top-des-text">
                                          <p class="font-size text-gray">{{ $blog['body'] }}</p>
                                      </div>
                                  </div>
                              </div>
                          </a>
                      @endforeach
                </div>
                <!--end-right-->


                <div class="col col-xs col-md- col-lg- col-xl-6 blog-main-des-left">
                    @foreach($blogs[1] as $blog)
                        <a href="{{ route('blog' , [request()->route('locale') , $blog['id']]) }}">
                            <div class="col col-xs col-md- col-lg- col-xl-12 blog-main-des-right-top flex delete-padding">
                                <div class="col col-xs col-md- col-lg- col-xl-6 blog-main-des-right-top-img delete-padding">
                                    <img src="/images/blogs/{{ $blog['image'] }}">
                                </div>
                                <div class="col col-xs col-md- col-lg- col-xl-6 blog-main-des-right-top-des">
                                    <div class="col col-xs col-md- col-lg- col-xl-12 blog-main-des-right-top-des-date">
                                        <span class="font-size text-gray">{{ $blog['date'] }} </span>
                                    </div>
                                    <div class="col col-xs col-md- col-lg- col-xl-12 blog-main-des-right-top-des-sub">
                                        <span>{{ $blog['title'] }}</span>
                                    </div>
                                    <div class="col col-xs col-md- col-lg- col-xl-12 blog-main-des-right-top-des-text">
                                        <p class="font-size text-gray">{{ $blog['body'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <!--end-blog-->
    </div>
@endsection