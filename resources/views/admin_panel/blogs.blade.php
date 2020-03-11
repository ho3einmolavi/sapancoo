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
                @foreach($blogs as $blog)
                    <div class="col-12" style="margin-bottom: 10px">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $blog->title }}</h5>
                                <p class="card-text">{{ $blog->body }}</p>
                                <div class="btn-group" role="group" style="font-family:irs">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        گزینه ها
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <form action="{{ route('delete' , ['blogs', $blog->id]) }}" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item">حذف</button>
                                            @method('delete')
                                        </form>
                                        <a href="/admin/edit/blog/{{ $blog->id }}" class="dropdown-item">ویرایش</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection