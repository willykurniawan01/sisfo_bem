@extends('layouts.home')
@section('title','About')
    
@section('content')
    

	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/{{ $parallax_pic->value }}); background-attachment:fixed;">
		<h2 class="tit6 t-center">
			About Us
		</h2>
	</section>


	<!-- Our Story -->
	<section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
		<span class="tit2 t-center">
			Badan Eksekutif Mahasiswa
		</span>

		<h3 class="tit3 t-center m-b-35 m-t-5">
			STMIK AMIK RIAU
		</h3>

		<p class="t-center size32 m-l-r-auto">
			{!! $story->value !!}
		</p>
	</section>


	<!-- Video -->
	<section class="section-video parallax100" style="background-image: url(images/header-menu-01.jpg);">
		<div class="content-video t-center p-t-225 p-b-250">
			<span class="tit2 p-l-15 p-r-15">
				Discover
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Our Video
			</h3>

			<div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal" data-target="#modal-video-01">
				<div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
					<i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</section>



	<!-- Banner -->
	<div class="parallax0 parallax100" style="background-image: url(images/bg-cover-video-02.jpg);">
		<div class="overlay0-parallax t-center size33"></div>
	</div>



	<!-- Sign up -->
	<div class="section-signup bg1-pattern p-t-85 p-b-85">
	
	</div>
@endsection