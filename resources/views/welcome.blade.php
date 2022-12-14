@extends('layouts.frontend')

@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="background: black;">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://wheretogoo.s3.ap-southeast-1.amazonaws.com/Assets/Footer/6.jfif"
                class="d-block w-100" alt="..." style="opacity: 0.5; height: 1080px;">
            <div class="carousel-caption d-none d-md-block" style="opacity: 1;">
                <h5>Bromo Tengger Semeru</h5>
                <p>Taman Nasional Bromo Tengger Semeru merupakan satu-satunya kawasan konservasi di Indonesia yang memiliki lautan pasir seluas 10 km yang disebut Tengger, tempat dimana empat anak gunung berapi baru berada. 
                    Anak gunung berapi tersebut adalah Gunung Batok (2.470 m), Gunung Kursi (2.581 m), Gunung Watangan (2.661 m), dan Gunung Widodaren (2.650 m). 
                    Namun, dari deretan gunung tersebut, hanya Gunung Bromo lah satu-satunya yang masih aktif. Temperatur di puncak Gunung Bromo berkisar 5-18 derajat Celcius. 
                    Bila Sobat Pesona menuju ke arah Selatan Taman, Sobat akan menemukan dataran terjal yang terbelah oleh lembah dan dihiasi dengan danau-danau yang indah hingga mencapai kaki Gunung Semeru.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://wheretogoo.s3.ap-southeast-1.amazonaws.com/Assets/Footer/2.jpg" class="d-block w-100" alt="..."
                style="opacity: 0.5;height: 1080px;">
            <div class="carousel-caption d-none d-md-block" style="opacity: 1;">
                <h5>Tanah Lot, Bali </h5>
                <p>Tanah Lot merupakan tempat wisata religi dengan panorama pantai yang indah. Terdiri dari dua pura yang masing-masing berada di atas bongkahan batu karang dan tebing yang menjorok ke laut, 
                    Tanah Lot tampak cantik bersahaja. Yang disebut dengan Pura Tanah Lot adalah pura yang berada di atas bongkahan batu karang di tengah pantai. Pura ini merupakan tempat pemujaan pada dewa laut, hal ini pula yang membuat pura ini dibangun di lokasi yang sangat dekat dengan laut. 
                    Wisatawan tidak diperbolehkan masuk ke dalam bangunan pura untuk menjaga kesucian dan kesakralan tempat ibadah ini.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://wallpapercave.com/wp/wp9829655.jpg" class="d-block w-100" alt="..."
                style="opacity: 0.5;height: 1080px;">
            <div class="carousel-caption d-none d-md-block" style="opacity: 1;">
                <h5>7 SUMMIT, Rinjani</h5>
                <p>Indonesia memang kaya akan keindahan alamnya. Gunung, laut, persawahan, semuanya memperlihatkan
                    betapa indahnya alam Indonesia. Salah satu pesona alam Indonesia adalah Gunung Rinjani. Gunung
                    dengan ketinggian 3.726 mdpl ini, memang merupakan salah satu pilihan bagi para pendaki, baik
                    pendaki dalam negeri maupun dari luar negeri. Bagaimana tidak, cerita yang tersebar tentang
                    keindahannya, membuat setiap pendaki pasti tertantang untuk mengeksplorasi gunung yang terletak di
                    Lombok, Nusa Tenggara Barat ini.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container-fluid" style="height: 500px;;">
    <div class="row align-items-center" style="width: 50%; margin-left: auto; margin-right: auto;">
        <div class="col" style="text-align: center; margin-top: 50px; color: white;">
            <h2 style="height: 50px; color:black;">Wheretogo.com</h2>
            <div class="logo" style="margin-top: 50px;">
                <img src="https://wheretogoo.s3.ap-southeast-1.amazonaws.com/Assets/Logo1.png" alt="" width="auto" height="250px">
            </div>
            <div class=" info" style="margin-top: 50px; color:black;">
                <p> WHERETOGO.com hadir untukmu traveller enthusiast yang ingin berpergian dengan aman dan nyaman. Nikmati perjalanan yang tidak akan kamu lupakan
                    seumur hidupmu! Kami disini membantu mu untuk mewujudkan impian dan keinginan mu! Segera pesan paket perjalanan dan nikmati perjalanan terbaikmu!
                </p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>
                    Our Latest Travel Offers
                </span>
                <span>
                    <a href="{{ route('paket.index') }}" class="btn btn-primary">More Deals</a>
                </span>
            </div>
            <div class="card-body row align-items-center">
                @foreach ($packages as $item)
                <div class="col-sm-4">
                    <div class="card">
                        <img src="{{ Storage::url($item->category->foto) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama_paket }}</h5>
                            <p class="card-text">{{ $item->tujuan }}</p>
                            <p class="card-text">
                                Stok Tersedia : <span class="text-danger">{{ $item->stok }}</span>
                            </p>
                            <p>
                                Destinasi : {{$item->tujuan}}
                            </p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            @auth
                            @if ($item->stok == 0)
                            <button class="btn btn-primary" disabled>Stok Habis</button>
                            @else
                            <a href="{{ route('paket.show', $item->id) }}" class="btn btn-outline-primary">Detail</a>
                            <form action="{{ route('paket.create') }}" method="get">
                                <input type="hidden" name="paket_id" value="{{ $item->id }}">
                                <button class="btn btn-primary">Book Now</button>
                            </form>
                            @endif
                            @endauth
                            @guest
                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            @endguest
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div id="container" style="text-align: center; margin-top: 100px;">
            <div id="header">
                <h2 style="color: black;">COME FIND US</h2>
            </div>
            <div id="map-container-google-2" class="z-depth-1-half map-container" style="margin-top: 50px;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.068873121025!2d106.99837921108399!3d-6.2284581179510266!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x57a7f37c97da7b54!2sFateh%20Tours!5e0!3m2!1sen!2sid!4v1641720610810!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    @endsection