@extends('layouts.web')

@section('content')
<div class="page-main-container">
    <div class="page-main-outter-container">
        <div class="background-video-card">
            <video class="autoplay-ios-kps footer-video other-view" src="https://www.dejavu.quest/video/dejavu_looping_banner.mp4" autoplay="" loop="" muted="muted" playsinline="" controlslist="nodownload" poster="https://www.dejavu.quest/img/homepage_banner_thumbnail.jpg"></video>
        </div>
        <div class="page-main-inner-container">
            <div class="page-main-topic">
                <h1>Demo Game</h1>
            </div>
            <div class="main-two-col-container">
                <div class="col-item-container">
                    <h2>For Windows users</h2>
                    <button class="win-btn" type="button" onclick="window.location='{{ route('login') }}'">
                        <span>Windows</span>
                        <img src="https://cdn.cloudflare.steamstatic.com/store/about/icon-windows.svg" alt="">
                    </button>
                    <p>Current Version：1v</p>
                </div>
                <div class="col-item-container">
                    <h2>For Mac users (Intel & M1)</h2>
                    <button class="mac-btn" type="button" onclick="window.location='{{ route('login') }}'">
                        <span>Mac</span>
                        <img src="https://cdn.cloudflare.steamstatic.com/store/about/icon-macos.svg" alt="">
                    </button>
                    <p>Current Version：1v</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
