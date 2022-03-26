@extends('layout.master')
@section('title', 'Homepage')
@section('page-content')
    <div class="container min-vh-100">
    <nav class="navbar">
        <div>
            <img class="w-100" src="{{ URL::to('/assets/Navbar Full Desktop.png') }}" alt="Image">
        </div>
    </nav>
    <div class="navbar">
        <div>
            <img class="w-100" src="{{ URL::to('/assets/Menu.png') }}" alt="Image">
        </div>
    </div>
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
    <div class="container">
        <div class="row">
            <div class="col-sm-9 content pt-4">
                <div class="row pb-5">
                    <div class="col-8">
                        <div class="pb-3">
                            <img src="{{ URL::to('/assets/Name Tag.png') }}" alt="Image">
                            <a href="#" class="link">
                            <div >
                                <h5 class="link"> 4+ Cara Mudah Cek IP Hosting Website</h5>
                                <p><small> Anda ingin tahu cara cek IP hosting? Selamat, Anda berada di halaman yang tepat!
                                    IP hosting adalah barisan angka sebagai identitas unik dari suatu hosting ... </small>
                                </p>
                            </div>
                            <div>
                                <img src="{{ URL::to('/assets/Tag.png') }}" alt="Image">
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <img src="{{ URL::to('/assets/Rectangle 1829.png') }}" alt="Image">
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-8">
                        <div class="pb-3">
                            <img src="{{ URL::to('/assets/Name Tag.png') }}" alt="Image">
                            <a href="#" class="link">
                            <div class="link">
                                <h5 class="link"> 4+ Cara Mudah Cek IP Hosting Website</h5>
                                <p><small> Anda ingin tahu cara cek IP hosting? Selamat, Anda berada di halaman yang tepat!
                                    IP hosting adalah barisan angka sebagai identitas unik dari suatu hosting ... </small>
                                </p>
                            </div>
                            <div>
                                <img src="{{ URL::to('/assets/Tag.png') }}" alt="Image">
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <img src="{{ URL::to('/assets/Rectangle 1829.png') }}" alt="Image">
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-8">
                        <div class="pb-3">
                            <img src="{{ URL::to('/assets/Name Tag.png') }}" alt="Image">
                            <a href="#" class="link">
                            <div class="link">
                                <h5 class="link"> 4+ Cara Mudah Cek IP Hosting Website</h5>
                                <p><small> Anda ingin tahu cara cek IP hosting? Selamat, Anda berada di halaman yang tepat!
                                    IP hosting adalah barisan angka sebagai identitas unik dari suatu hosting ... </small>
                                </p>
                            </div>
                            <div>
                                <img src="{{ URL::to('/assets/Tag.png') }}" alt="Image">
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <img src="{{ URL::to('/assets/Rectangle 1829.png') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="menu sticky-top p-3">
                    <h5> Kategori Blog </h5>
                    <div class="nav flex-column">
                        <div class="row">
                            <div class="col">
                                <a href="#" class="nav-link pl-0"> Tutorial </a>
                            </div>
                            <div class="col-sm-1">
                                <img src="{{ URL::to('/assets/icon/outline_expand_more_black_24dp.png') }}" alt="Image">
                            </div>
                        </div>
                        <a href="#" class="nav-link pl-0">Menu 1</a>
                        <a href="#" class="nav-link pl-0">Menu 2</a>
                        <a href="#" class="nav-link pl-0">Menu 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
<!-- container -->
@endsection

