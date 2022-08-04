@extends('layouts.app')

@section('content')
    <div class="page-main-container">
        <div class="page-main-outter-container">
            <div class="background-video-card">
                <video class="autoplay-ios-kps footer-video other-view" src="https://www.dejavu.quest/video/dejavu_looping_banner.mp4" autoplay="" loop="" muted="muted" playsinline="" controlslist="nodownload" poster="https://www.dejavu.quest/img/homepage_banner_thumbnail.jpg"></video>
            </div>
            <div class="page-main-inner-container">

                

            <div class="page-main-topic">
                    <h1>Demo Game</h1>
         
                    @if(Auth::user()->image)
                    <img class="image rounded-circle" src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="." style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">
                @endif
                </div>

                <form action="{{route('home')}}" method="POST" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                          <div class="col text-center">
                            <select name=colour class="win-btn" required>
                                <option class="" value= "">Select Colour</option>
                                <option class="red" value= "#cc0000">Red</option>
                                <option class="pink" value= "#ff6680">Pink</option>
                                <option class="blue" value= "#0000ff">Blue</option>
                                <option class="green" value= "#008000">Green</option>
                                <option class="yellow" value= "#ffff00">Yellow</option>
                                <option class="brown" value= "#a52a2a">Brown</option>
                                <option class="cyan" value= "#00ffff">Cyan</option>
                                <option class="black" value= "#000000">Black</option>
                                <option class="white" value= "#ffffff">White</option>
                                <option class="purple" value= "#800080">Purple</option>
                            </select>
                            </div>
                        </div>
                    </div>
                <br>

                <div class="form-group text-center">
                    <div class="input-group" style="margin:auto;">
                        @csrf
                        <input type="file" name="image" class="btn btn-primary" accept=".gif,.jpg,.jpeg,.png,"><br>
                        <input type="submit" value="Upload" class="mac-btn" >

                    </div>
                 </div>
            </form>
                
                <div class="main-two-col-container">
                    <div class="col-item-container">
                        <h2>For Windows users</h2>
                        <button class="win-btn">
                            <a href="{{asset('Windows.zip')}}" download>
                                <span>Windows</span>
                                <img src="https://cdn.cloudflare.steamstatic.com/store/about/icon-windows.svg" alt="">
                            </a>
{{--                            <span>Windows</span>--}}
{{--                            <img src="https://cdn.cloudflare.steamstatic.com/store/about/icon-windows.svg" alt="">--}}
                        </button>
                        <p>Current Version：1v</p>
                    </div>
                    <div class="col-item-container">
                        <h2>For Mac users (Intel & M1)</h2>
                        <button class="mac-btn">
                            <a href="{{asset('Mac.zip')}}" download>
                            <span>Mac</span>
                            <img src="https://cdn.cloudflare.steamstatic.com/store/about/icon-macos.svg" alt="">
                            </a>
                        </button>
                        <p>Current Version：1v</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
