<!DOCTYPE html>
<html lang="en" >
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="marymordi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title Page-->
    <title> پنل ادمین  </title>

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css" type="text/css">

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/admin/css/admin-user/style-dashboard.css">
    <!-- Loading Flat UI -->
    <link href="/css/flat-ui/flat-ui.css" rel="stylesheet">
    <!--select2-->
    <link href="/css/select2.min.css" rel="stylesheet">
    <!--date-base-data-->
    <link rel="stylesheet" href="/admin/css/date-base-data/export.css" type="text/css" media="all" />
    <!--main-css-->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!--toggle-->
    <link rel="stylesheet" type="text/css" href="/css/toggle/toggle.css">
    {{--<link rel="stylesheet" type="text/css" href="/css/forGallery.scss">--}}
</head>
<!---------------------------header------------------------------->
<body>
<div class="col col-xs col-md-col-lg-col-xl-12 header-main flex">
    <!--toggle-->
    <div class="col-2 col-xs-2 col-md- col-lg- col-xl menu-toggle">
        <a href="#menu" id="toggle"><span></span></a>
        <div id="menu" class="toggle-inside">
            <ul>
                <li><a href="/fa">صفحه اصلی</a></li>
                <li><a href="/fa/news">اخبار</a></li>
                <li><a href="/fa/blogs">مقالات</a></li>
                <li><a href="/fa/gallery">گالری</a></li>
                <li><a href="/fa/contact-us">تماس با ما</a></li>
            </ul>
        </div>
    </div>
    <!--end-toggle-->
    @php
        $set = \App\Setting::latest('id')->first();

        if (!$set)
        {
            $set = \App\Setting::create([
                'title' => 'ساپانکو'
            ]);
        }
    @endphp
    <div class="col-4 col-xs col-md- col-lg- col-xl-4 header-main-logo">
        <a href="/"><img src="/images/logo/{{ $set->logo }}"></a>
    </div>
    <div class="col col-xs col-md- col-lg- col-xl-4 header-main-manu delete-padding">
      <span>
        <a href="/fa" class="font-size text-gray">  صفحه اصلی  </a>
      </span>
        <span>
        <a href="/fa/news" class="font-size text-gray">  اخبار  </a>
      </span>
        <span>
        <a href="/fa/blogs" class="font-size text-gray"> مقالات  </a>
      </span>
        <span>
        <a href="/fa/gallery" class="font-size text-gray"> گالری </a>
      </span>
        <span>
        <a href="/fa/contact-us" class="font-size text-gray"> تماس با ما </a>
      </span>
    </div>
    <div class="col col-xs col-md- col-lg- col-xl-4 header-main-lan flex delete-padding">
        <div class="col col-xs col-md- col-lg- col-xl-8 header-main-lan-right delete-padding">
            <span><img src="/img/header/iran.png"></span>
            <span  class="font-size text-gray">فارسی </span>
        </div>
        <div class="col col-xs col-md- col-lg- col-xl-4 header-main-lan-left delete-padding">
            <span><img src="/img/header/usa.png"></span>
            <span  class="font-size text-gray">English</span>
        </div>
    </div>
</div>
<!---------------------------end-header--------------------------->
<section>
    <center>
        <div class="col-xs col-sm col col-md col-lg col-xl-12 dashboard-page flex">
            <div class="col-xs col-sm-10 col-6 col-md-2 col-lg-3 col-xl-3 dashboard-page-sidebar admin delete-padding">
                <div class="list-group">
                    <a href="/admin/create/blog" class="list-group-item list-group-item-action"><i class="fas fa-address-card"></i>   افزودن مقاله <i class="fas fa-angle-left icon-left"></i></a>
                    <a href="/admin/blogs-list" class="list-group-item list-group-item-action"><i class="fas fa-address-card"></i>   مقالات <i class="fas fa-angle-left icon-left"></i></a>
                    <a href="/admin/create/news" class="list-group-item list-group-item-action"><i class="fas fa-align-justify"></i>افزودن خبر <i class="fas fa-angle-left icon-left"></i></a>
                    <a href="/admin/news-list" class="list-group-item list-group-item-action"><i class="fas fa-align-justify"></i>اخبار <i class="fas fa-angle-left icon-left"></i></a>
                    <a href="/admin/create/product" class="list-group-item list-group-item-action"><i class="fas fa-align-justify"></i>افزودن محصول <i class="fas fa-angle-left icon-left"></i></a>
                    <a href="/admin/products-list" class="list-group-item list-group-item-action"><i class="fas fa-align-justify"></i> محصولات <i class="fas fa-angle-left icon-left"></i></a>
                    <a href="/admin/create/slide-show" class="list-group-item list-group-item-action"><i class="fab fa-product-hunt"></i> افزودن اسلایدشو  <i class="fas fa-angle-left icon-left"></i></a>
                    <a href="/admin/create/gallery" class="list-group-item list-group-item-action"><i class="fab fa-adversal"></i> افزودن به گالری<i class="fas fa-angle-left icon-left"></i></a>
                    <a href="/admin/gallery-list" target="_blank" class="list-group-item list-group-item-action"><i class="fab fa-adversal"></i>گالری<i class="fas fa-angle-left icon-left"></i></a>
                    <a href="/admin/setting" class="list-group-item list-group-item-action"><i class="fas fa-align-right"></i>تنظیمات<i class="fas fa-angle-left icon-left"></i></a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-align-right"></i>خروج<i class="fas fa-angle-left icon-left"></i></a>
                </div>
            </div>


            <!---RES---->
            <div class="col-xs col-sm-1 col-2 col-md-1 col-lg col-xl-1 sidebar-res delete-padding">
                <div class="list-group">
                    <a href="/admin/create/blog" class="list-group-item list-group-item-action"><i class="fas fa-address-card"></i></a>
                    <a href="/admin/blogs-list" class="list-group-item list-group-item-action"><i class="fas fa-address-card"></i></a>
                    <a href="/admin/create/news" class="list-group-item list-group-item-action"><i class="fas fa-align-justify"></i></a>
                    <a href="/admin/news-list" class="list-group-item list-group-item-action"><i class="fas fa-align-justify"></i></a>
                    <a href="/admin/create/product" class="list-group-item list-group-item-action"><i class="fas fa-align-justify"></i></a>
                    <a href="/admin/products-list" class="list-group-item list-group-item-action"><i class="fas fa-align-justify"></i></a>
                    <a href="/admin/create/slide-show" class="list-group-item list-group-item-action"><i class="fab fa-product-hunt"></i></a>
                    <a href="/admin/create/gallery" class="list-group-item list-group-item-action"><i class="fab fa-adversal"></i></a>
                    <a href="/admin/gallery-list" target="_blank" class="list-group-item list-group-item-action"><i class="fab fa-adversal"></i></a>
                    <a href="/admin/setting" class="list-group-item list-group-item-action"><i class="fas fa-align-center"></i></a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-align-center"></i></a>
                </div>
            </div>
            <!---END-RES--->


            @yield('content')
        </div>

    </center>
</section>
<!---------------------------footer------------------------------->
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
<!---------------------------end-footer--------------------------->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<!-- Bootstrap 4 requires Popper.js -->
<script src="https://unpkg.com/popper.js@1.14.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>

<!--select2-->
<script src="/js/flat-ui/flat-ui.js"></script>
<script src="/js/application.js"></script>

<!--toggle-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script  src="/js/toggle/toggle.js"></script>
<!-----------select2-------------->
<script src="/js/select2.min.js"></script>
<!--date-base-data-->
<script src="/js/date-base-data/amcharts.js"></script>
<script src="/js/date-base-data/serial.js"></script>
<script src="/js/date-base-data/export.min.js"></script>
<script src="/js/date-base-data/light.js"></script>

</body>
</html>
