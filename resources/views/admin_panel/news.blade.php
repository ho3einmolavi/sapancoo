@extends('layouts.admin')
@section('content')
    <div class="col-xs col-sm col-10 col-md-11 col-lg-9 col-xl-9 users-main delete-padding-left">
        <div class="ui-state-default user-list-info-box-add">
            <div class="admin-form col-xs col-sm col- col-md col-lg col-xl-12">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @foreach($news as $new)
                        <div class="card" style="margin-bottom: 10px;font-family: irs">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="/images/news/{{ $new->image }}" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $new->title }}</h5>
                                        <p class="card-text">{{ $new->body }}</p>
                                        <p class="card-text"><small class="text-muted">{{ $new->date }}</small></p>

                                        <button class="btn btn-outline-danger" onclick="document.getElementById('delete-news').submit()">حذف</button>

                                        <button onclick="location.href = '/admin/edit/news/{{ $new->id }}'" class="btn btn-outline-primary">ویرایش</button>
                                    </div>
                                    <form style="display: none" method="post" action="{{ route('delete' , ['news' , $new->id]) }}" id="delete-news">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </div>

                            </div>
                        </div>
                @endforeach
        </div>
    </div>
@endsection