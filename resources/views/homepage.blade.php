@extends('layout.master')
@section('title', 'Homepage')
@section('page-content')
    <div class="feature">
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <p class="main-headline"> Dapatkan Artikel </p>
            </div>
            <div class="col">
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div id=flip>
                    <div><p class="animate-headline"> Tutorial Hosting </p></div>
                    <div><p class="animate-headline"> Tutorial Website </p></div>
                    <div><p class="animate-headline"> Digital Marketing </p></div>
                    <div><p class="animate-headline"> Tutorial Design Website </p></div>
                </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <p class="main-headline"> Terbaik Disini </p>
            </div>
            <div class="col">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col"></div>
            <div class="col">
                <div class="small-headline">
                    <img class="w-100" src="{{ URL::to('/assets/Body Text.png') }}" alt="Image">
                </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row pb-5">
            <div class="col"></div>
            <div class="col">
                <div class="small-headline">
                    <img class="w-100" src="{{ URL::to('/assets/Search Input.png') }}" alt="Image">
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <div class="content">
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-9 content pt-4">
                    @include('component.content-01')
                    <div class="row pb-5 pt-5 text-center">
                        <div class="banner">
                            <img class="" src="{{ URL::to('/assets/Headline & Button.png') }}" alt="Image">
                        </div>
                    </div>
                    @include('component.content-02')
                </div>
                <div class="col-sm-3 pr-0">
                    @include('layout.sidebar')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

