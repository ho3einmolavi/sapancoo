<!DOCTYPE html>
<html lang="en" >
<head>
    <!-- Required meta tags-->
    @php
        $set = \App\Setting::latest('id')->first();
        if (!$set){
            $set = \App\Setting::create([
                       'title' => 'ساپانکو'
                   ]);
        }
    @endphp
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <meta name="description" content="{{ $set->description }}">
    <meta name="keywords" content="{{ $set->keywords }},{{ $keywords ?? '' }}">
    <meta name="author" content="Sarinweb">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title Page-->
    <title>  {{ $set->title ?? '' }} | {{ $title ?? '' }} </title>

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <!-- Loading Flat UI -->
    <link href="/css/flat-ui/flat-ui.css" rel="stylesheet">
    <link href="/css/flat-ui/flat-ui.min.css" rel="stylesheet">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css" type="text/css">
    <!--main-css-->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!--slideshow-->
    <link rel="stylesheet" type="text/css" href="/css/slideshow/slideshow.css">
    <link rel="stylesheet" href="/css/slideshow/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic'>
    <!--toggle-->
    <link rel="stylesheet" type="text/css" href="/css/toggle/toggle.css">
    <link rel="stylesheet" type="text/css" href="/css/gallery/gallery.css">

</head>
<!------------------------header--------------------------->
<body>
<div class="col col-xs col-md-col-lg-col-xl-12 header-main flex">
    <!--toggle-->
    <div class="col-2 col-xs-2 col-md- col-lg- col-xl menu-toggle">
        <a href="#menu" id="toggle"><span></span></a>
        <div id="menu" class="toggle-inside">
            <ul>
                <li><a href="/">@lang('header.home')</a></li>
                <li><a href="/news">@lang('header.news')</a></li>
                <li><a href="/blogs">@lang('header.blogs')</a></li>
                <li><a href="/gallery">@lang('header.gallery')</a></li>
                <li><a href="/contact-us">@lang('header.about_us')</a></li>
            </ul>
        </div>
    </div>
    <!--end-toggle-->

    <div class="col-4 col-xs col-md- col-lg- col-xl-4 header-main-logo">
        <a href="/"><img src="/images/logo/{{ $set->logo }}"></a>
    </div>
    <div class="col col-xs col-md- col-lg- col-xl-4 header-main-manu delete-padding">

            <span>
				<a href="{{ route('index' , request()->route('locale')) }}" class="font-size text-gray">  @lang('header.home')  </a>
			</span>
            <span>
				<a href="{{ route('news' , request()->route('locale')) }}" class="font-size text-gray">  @lang('header.news')  </a>
			</span>
            <span>
				<a href="{{ route('blogs' , request()->route('locale')) }}" class="font-size text-gray"> @lang('header.blogs')  </a>
			</span>
            <span>
				<a href="{{ route('products' , request()->route('locale')) }}" class="font-size text-gray"> @lang('header.products')  </a>
			</span>
            <span>
				<a href="{{ route('gallery' , request()->route('locale')) }}" class="font-size text-gray"> @lang('header.gallery') </a>
			</span>
            <span>
				<a href="{{ route('contact_us' , request()->route('locale')) }}" class="font-size text-gray"> @lang('header.about_us') </a>
			</span>


    </div>
    <div class="col col-xs col-md- col-lg- col-xl-4 header-main-lan flex delete-padding">
        @if(request()->route('locale') && !request()->route('id'))
            <a href="{{ route(request()->route()->getName() , 'fa') }}">
                <div class="col col-xs col-md- col-lg- col-xl-8 header-main-lan-right delete-padding">
                    <span><img src="/img/header/iran.png"></span>
                    <span  class="font-size text-gray">فارسی </span>
                </div>
            </a>
            <a href="{{ route(request()->route()->getName() , 'en') }}">
                <div class="col col-xs col-md- col-lg- col-xl-4 header-main-lan-left delete-padding">
                    <span><img src="/img/header/usa.png"></span>
                    <span  class="font-size text-gray">English</span>
                </div>
            </a>
            @else
            <a href="{{ route(request()->route()->getName() , ['fa' , request()->route('id')]) }}">
                <div class="col col-xs col-md- col-lg- col-xl-8 header-main-lan-right delete-padding">
                    <span><img src="/img/header/iran.png"></span>
                    <span  class="font-size text-gray">فارسی </span>
                </div>
            </a>
            <a href="{{ route(request()->route()->getName() , ['en' , request()->route('id')]) }}">
                <div class="col col-xs col-md- col-lg- col-xl-4 header-main-lan-left delete-padding">
                    <span><img src="/img/header/usa.png"></span>
                    <span  class="font-size text-gray">English</span>
                </div>
            </a>
        @endif



    </div>
</div>

<form id="fa" action="/fa/{{request()->path()}}" method="get" style="display: none">@csrf</form>
<form id="en" action="/en" method="get" style="display: none">@csrf</form>
<!------------------------end-header---------------------------->

<!------------------------body-index--------------------------->

    @yield('content')


<!----------------------end-body-index------------------------>

<!--------------------footer-------------------------->
<div class="col col-xs col-md- col-lg- col-xl-12 footer-main delete-padding">
    <div class="col col-xs col-md- col-lg- col-xl-12 footer-main-map delete-padding">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3359.353160350619!2d51.675470314758314!3d32.65004498101059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzLCsDM5JzAwLjIiTiA1McKwNDAnMzkuNiJF!5e0!3m2!1sde!2sde!4v1582117668532!5m2!1sde!2sde" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <div class="col col-xs col-md- col-lg- col-xl-12 footer-main-end flex">
        <div class="col col-xs col-md- col-lg- col-xl-6 footer-main-end-right">
            <div class="col col-xs col-md- col-lg- col-xl-12 footer-main-end-right-inside">
                <span class="font-size text-gray">  تمام حقوق مادی و معنوی این سایت متعلق به شرکت ساخت پارمیس نقش جهان ساپنا می باشد. </span></div>
            <div class="col col-xs col-md- col-lg- col-xl-12 footer-main-end-right-sarin">
			<span  class="font-size text-gray">
			<a href="http://sarinweb.com" class="font-size text-gray">طراحی سایت </a>
			و
			<a href="http://sarinweb.com" class="font-size text-gray">سئو</a>
			توسط  :
			<a href="http://sarinweb.com" class="font-size text-gray">سارین وب</a>
			 </span>
            </div>
        </div>
        <div class="col col-xs col-md- col-lg- col-xl-6 footer-main-end-left flex">
            <div class="col col-xs col-md- col-lg-9 col-xl-8 footer-main-end-left-design">
                <div class="col col-xs col-md- col-lg- col-xl-12 footer-main-end-left-design-top">
                    <span class="font-size text-gray">© 2020 - 2027 Sarinweb All Rights reservd</span>
                </div>
                <div class="col col-xs col-md- col-lg- col-xl-12 footer-main-end-left-design-bottom">
                    <span class="font-size text-gray">Graphic design & Ui/Ux design : MiladAkhavan</span>
                </div>
            </div>
            <div class="col col-xs col-md- col-lg-3 col-xl-4 footer-main-end-left-logo">
                <a href="/"><img src="/images/logo/{{ $set->logo }}"></a>
            </div>

        </div>
    </div>
</div>
<!-----------------end-footer--------------------------->
<!--------slideshow--------->
<script src="js/slideshow/jquery.min.js"></script>
<script src="js/slideshow/TweenMax.min.js"></script>
<script  src="js/slideshow/slideshow.js"></script>
<!--------bootstrap---------->
<script src="js/bootstrap/bootstrap.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<!--------flat-ui----------->
<script src="js/flat-ui/flat-ui.min.js"></script>
<script  src="js/flat-ui/flat-ui.js"></script>
<!--toggle-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script  src="js/toggle/toggle.js"></script>

</body>
</html>