@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/images/laravelnews.png" alt="" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex">
                <div><h1 class="pr-4">{{ $user->username }}</h1></div>
               <div class="pt-1"><button class="btn btn-primary btn-small font-weight-bold">Follow</button></div>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>153</strong> posts</div>
                <div class="pr-4"><strong>4,914</strong> followers</div>
                <div class="pr-4"><strong>2</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold" >Laravel News</div>
            <div>Follow and stay up to date with the #Laravel #PHP framework in short tips and news items. By <a href="#">@ericlbarnes</a></div>
            <div class="font-weight-bold"><a href="#">laravel-news.com</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="{{ asset('/images/download1.jpeg') }}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="{{ asset('/images/download2.jpeg') }}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="{{ asset('/images/download3.jpeg') }}" alt="" class="w-100">
        </div>
    </div>

</div>
@endsection
