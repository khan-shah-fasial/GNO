@extends('frontend.layouts.app')

@section('page.title', 'Seedling Associates: Top Lawyers &amp; Law Firms in Delhi, India')

@section('page.description', 'Seedling & Associates is one of the best law firms in Delhi, India. We provide legal
    assistance for startups, FDI, Property law, IP, and more')

@section('page.type', 'practice area')

@section('page.content')


    <!-------===========course list start===================------------>

    <section class="innertitle aboutus">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="inner_titles text-center">Courses</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb d-flex justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="{{ url(route('index')) }}">Home</a></li>
                            <li class="breadcrumb-item">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <section class="course courses_listing">
        <div class="container">
            <h2 class="heading arsenica_fonts">
                Our Courses
            </h2>
            <div class="row">

                @foreach ($courses as $row)
                    <div class="col-md-3">
                        <div class="card mb-4">
                            <div class="card_course">
                                <div class="overlay">
                                    <img src="{{ asset('storage/' . $row->image) }}" alt="" />
                                </div>
                                <div class="card_content ">
                                    <h3 class="title arsenica_fonts">
                                        {{ $row->title }}
                                    </h3>
                                    <p class="desc">
                                        {{ $row->short_description }}
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="social_icons">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star-half-stroke"></i>
                                                <span>{{ $row->rating }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="arrow_btn_slider">
                                                <a href="{{ url(route('course-detail', ['slug' => $row->slug])) }}"><i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-------===========course listing end===================------------>
@endsection
