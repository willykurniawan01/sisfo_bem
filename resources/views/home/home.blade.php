@extends('layouts.home')
@section('title','Home')
    
@section('content')
     <!-- Sidebar -->
     <aside class="sidebar trans-0-4">
        <!-- Button Hide sidebar -->
        <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>
  
        <!-- - -->
        <ul class="menu-sidebar p-t-95 p-b-70">
          <li class="t-center m-b-13">
            <a href="index.html" class="txt19">Home</a>
          </li>
  
          <li class="t-center m-b-13">
            <a href="menu.html" class="txt19">Menu</a>
          </li>
  
          <li class="t-center m-b-13">
            <a href="gallery.html" class="txt19">Gallery</a>
          </li>
  
          <li class="t-center m-b-13">
            <a href="about.html" class="txt19">About</a>
          </li>
  
          <li class="t-center m-b-13">
            <a href="blog.html" class="txt19">Blog</a>
          </li>
  
          <li class="t-center m-b-33">
            <a href="contact.html" class="txt19">Contact</a>
          </li>
  
          <li class="t-center">
            <!-- Button3 -->
            <a
              href="reservation.html"
              class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto"
            >
              Reservation
            </a>
          </li>
        </ul>
  
        <!-- - -->
        <div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
          <!-- - -->
          <h4 class="txt20 m-b-33">Gallery</h4>
  
          <!-- Gallery -->
          <div class="wrap-gallery-sidebar flex-w">
            <a
              class="item-gallery-sidebar wrap-pic-w"
              href="images/photo-gallery-01.jpg"
              data-lightbox="gallery-footer"
            >
              <img src="images/photo-gallery-thumb-01.jpg" alt="GALLERY" />
            </a>
  
          </div>
        </div>
      </aside>
  
      <!-- Slide1 -->
      <section class="section-slide">
        <div class="wrap-slick1">
          <div class="slick1">

            @foreach ($carousel as $item)
                
            <div
              class="item-slick1 item1-slick1"
              style="background-image: url({{ $item->picture }})"
            >
              <div
                class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170"
              >
                <span
                  class="caption1-slide1 txt1 t-center animated visible-false m-b-15"
                  data-appear="fadeInDown"
                >
                  Welcome to
                </span>
  
                <h2
                  class="caption2-slide1 tit1 t-center animated visible-false m-b-37"
                  data-appear="fadeInUp"
                >
                  BEM SAR
                </h2>
  
                <div
                  class="wrap-btn-slide1 animated visible-false"
                  data-appear="zoomIn"
                >
                  <!-- Button1 -->
                  <a href="menu.html" class="btn1 flex-c-m size1 txt3 trans-0-4">
                    Explore
                  </a>
                </div>
              </div>
            </div>

            
            @endforeach
           
          </div>
  
          <div class="wrap-slick1-dots"></div>
        </div>
      </section>
  
      <!-- Welcome -->
      <section class="section-welcome bg1-pattern p-t-120 p-b-105">
        <div class="container">
          <div class="row">
            <div class="col-md-6 p-t-45 p-b-30">
              <div class="wrap-text-welcome t-center">
                <span class="tit2 t-center"> Badan Eksekutif Mahasiswa </span>
  
                <h3 class="tit3 t-center m-b-35 m-t-5">STMIK Amik Riau</h3>
  
                <p class="t-center m-b-22 size3 m-l-r-auto">
                 {!! $story->value !!}
                </p>
  
                <a href="about.html" class="txt4">
                  Our Story
                  <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                </a>
              </div>
            </div>
  
            <div class="col-md-6 p-b-30">
              <div
                class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto"
              >
                <img src="{{ asset('images/'.$story_pic->value) }}" alt="IMG-OUR" />
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!-- Intro -->
      <section class="section-intro">
        <div
          class="header-intro parallax100 t-center p-t-135 p-b-158"
          style="background-image: url(images/Makrab/IMG_9005.JPG)"
        >
          <span class="tit2 p-l-15 p-r-15"> Discover </span>
  
          <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">Pato Place</h3>
        </div>
  
        <div class="content-intro bg-white p-t-77 p-b-133">
          <div class="container">
            <div class="row">
              <div class="col-md-4 p-t-30">
                <!-- Block1 -->
                <div class="blo1">
                  <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                    <a href="#"
                      ><img src="images/intro-01.jpg" alt="IMG-INTRO"
                    /></a>
                  </div>
  
                  <div class="wrap-text-blo1 p-t-35">
                    <a href="#">
                      <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                        Romantic Restaurant
                      </h4>
                    </a>
  
                    <p class="m-b-20">
                      Phasellus lorem enim, luctus ut velit eget, con-vallis
                      egestas eros.
                    </p>
  
                    <a href="#" class="txt4">
                      Learn More
                      <i
                        class="fa fa-long-arrow-right m-l-10"
                        aria-hidden="true"
                      ></i>
                    </a>
                  </div>
                </div>
              </div>
  
              <div class="col-md-4 p-t-30">
                <!-- Block1 -->
                <div class="blo1">
                  <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                    <a href="#"
                      ><img src="images/intro-02.jpg" alt="IMG-INTRO"
                    /></a>
                  </div>
  
                  <div class="wrap-text-blo1 p-t-35">
                    <a href="#">
                      <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                        Delicious Food
                      </h4>
                    </a>
  
                    <p class="m-b-20">
                      Aliquam eget aliquam magna, quis posuere risus ac justo
                      ipsum nibh urna
                    </p>
  
                    <a href="#" class="txt4">
                      Learn More
                      <i
                        class="fa fa-long-arrow-right m-l-10"
                        aria-hidden="true"
                      ></i>
                    </a>
                  </div>
                </div>
              </div>
  
              <div class="col-md-4 p-t-30">
                <!-- Block1 -->
                <div class="blo1">
                  <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
                    <a href="#"
                      ><img src="images/intro-04.jpg" alt="IMG-INTRO"
                    /></a>
                  </div>
  
                  <div class="wrap-text-blo1 p-t-35">
                    <a href="#">
                      <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                        Red Wines You Love
                      </h4>
                    </a>
  
                    <p class="m-b-20">
                      Sed ornare ligula eget tortor tempor, quis porta tellus
                      dictum.
                    </p>
  
                    <a href="#" class="txt4">
                      Learn More
                      <i
                        class="fa fa-long-arrow-right m-l-10"
                        aria-hidden="true"
                      ></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
@endsection