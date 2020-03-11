<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/gallery/gallery.css">
        <title>پنل ادمین | گالری</title>
    </head>
    <body>
         <div class="col col-xs col-md- col-lg- col-xl-12 body-gallery delete-padding">
        <!-- partial:index.partial.html -->

        <div id="app" data-state="gallery">
            <div class="gallery">
                @foreach($galleries as $gallery)
                    <figure class="gallery-image"
                            onclick="if (confirm('این عکس حذف شود ؟')) {
                                document.getElementById('delete').submit();
                            }  ">
                        <img src="/images/gallery/{{ $gallery->image }}" width="800" height="800" />
                        <figcaption>{{ $gallery->title }}</figcaption>
                    </figure>
                    <form style="display: none" method="post" id="delete" action="{{ route('delete' , ['galleries' , $gallery->id]) }}">@csrf @method('delete')</form>
                @endforeach
            </div>
            <div class="detail">
                <!--cloned figure/image goes here!-->
            </div>
        </div>
        <!-- partial -->
    </div>
    </body>
</html>
