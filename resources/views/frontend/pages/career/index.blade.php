@extends('frontend.layouts.app')

@section('page.title', 'Seedling Associates: Top Lawyers &amp; Law Firms in Delhi, India')

@section('page.description', 'Seedling & Associates is one of the best law firms in Delhi, India. We provide legal
    assistance for startups, FDI, Property law, IP, and more')

@section('page.type', 'website')

@section('page.content')


    <section class="innertitle aboutus">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="inner_titles text-center">Carrer</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb d-flex justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item">Carrer</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="career-page">
        <div class="container">
            <div class="career-lm">
                <div class="row">

                    <div class="col-md-9 cnt-c">
                        <div class="contact_from" data-aos-once="true" data-aos="fade-up">

                            @include('frontend.component.career_form')

                </div>
            </div>
        </div>
        </div>
        </div>


    </section>

@endsection
