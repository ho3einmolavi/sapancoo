@extends('layouts.master')

@section('content')
    <div class="col col-xs col-md- col-lg- col-xl-12 body-gallery delete-padding">
        <!-- partial:index.partial.html -->

        <div id="app" data-state="gallery">
            <div class="gallery">
                @foreach($galleries as $gallery)
                    <figure class="gallery-image">
                        <img src="/images/gallery/{{ $gallery->image }}" width="800" height="800" />
                        <figcaption>{{ $gallery->title }}</figcaption>
                    </figure>
                @endforeach
            </div>
            <div class="detail">
                <!--cloned figure/image goes here!-->
            </div>
        </div>
        <!-- partial -->
    </div>
@endsection