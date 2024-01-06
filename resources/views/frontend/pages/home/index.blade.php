@extends('frontend.layouts.app')

@section('page.title', 'Garib Nawaz Online Academy')

@section('page.description',
'Garib Nawaz Online Academy')

@section('page.type', 'website')

@section('page.content')

<!-----===== home content start============---->

<section class="hero">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active hvr-bounce-in">
                <div class="banner">
                    <a href="">
                        <img src="assets/frontend/images/banner_31.jpg" class="d-block w-100" alt="..." />
                        <img src="assets/frontend/images/children2.png" alt="" class="children" />
                    </a>
                </div>
            </div>
            <div class="carousel-item hvr-bounce-in">
                <div class="banner">
                    <a href="">
                        <img src="assets/frontend/images/banner_3.jpg" class="d-block w-100" alt="..." />
                        <img src="assets/frontend/images/bhare.png" alt="" class="children" />
                    </a>
                </div>
            </div>
            <div class="carousel-item hvr-bounce-in">
                <div class="banner">
                    <a href="">
                        <img src="assets/frontend/images/banner_4.jpg" class="d-block w-100" alt="..." />
                        <img src="assets/frontend/images/derse.png" alt="" class="children" />
                    </a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <img src="assets/frontend/images/patti.png" alt="" class="patti" />
</section>

<!-------------------------- Hero Section --------------------- -->
<!-------------------------- Welcome Section --------------------- -->

<section class="welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrapper">
                    <div>
                        <h2 class="arsenica_fonts" data-aos-once="true" data-aos="fade-up">
                            I want to learn
                        </h2>
                    </div>
                    <div>
                        <select class="form-select select_drp_image" aria-label="Default select example">
                            <option selected value="">Allah ka paigham</option>
                            <option value="">Aaiye urdu seekhiye</option>
                            <option value="">Aqaid wa Fiqh</option>
                            <option value="">Bahare Shariyat</option>
                            <option value="">Aqeeda e khatme Nubuwwat</option>
                            <option value="">Arabic Grammar</option>
                            <option value="">Faizan e Hadith</option>
                            <option value="">Faizan e Hajj</option>
                            <option value="">Faizan e Namaz</option>
                            <option value="">Faizan e Tariqat</option>
                            <option value="">Faizan e Tasawwuf</option>
                            <option value="">Faizan e Umra</option>
                            <option value="">Faizan e Farz Uloom</option>
                            <option value="">Imamat</option>
                            <option value="">kitabullah ki batein</option>
                            <option value="">Nahvi Tarkib</option>
                            <option value="">Pre Aalim</option>
                            <option value="">Qurani Sooraton ka ta’aruf</option>
                            <option value="">Roze ke ahkam</option>
                            <option value="">Sarfi Tehqiq</option>
                            <option value="">Seerat e Mustafa</option>
                            <option value="">Shamail e Mustafa</option>
                            <option value="">Sunnat e Nikah</option>
                            <option value="">Tafseer</option>
                            <option value="">Tafseer Siratul Jinan</option>
                            <option value="">Taharat</option>
                            <option value="">Tajheez o takfeen</option>
                            <option value="">Tarjamatul Quran</option>
                            <option value="">Zakat</option>
                            <option value="">Qurbani</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------------------------- Welcome Section --------------------- -->

<!-------------------------- course Section --------------------- -->

@php
$course = DB::table('courses')
->where('status', '1')
->get();
@endphp

@if (!empty($course))
<section class="course">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading text-center arsenica_fonts" data-aos-once="true" data-aos="fade-up">
                    Courses you learn
                </h2>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme" id="course">
                    @foreach ($course as $row)
                    <div class="item" data-aos-once="true" data-aos="fade-up">
                        <div class="card_course">
                            <div class="overlay">
                                <img src="{{ asset('storage/' . $row->image) }}" alt="{{ $row->alt_image }}"
                                    data-aos-once="true" data-aos="fade-up" />
                            </div>
                            <div class="card_content">
                                <h3 class="title  arsenica_fonts" data-aos-once="true" data-aos="fade-up">
                                    {{ $row->title }}
                                </h3>
                                <p class="desc" data-aos-once="true" data-aos="fade-up">
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
                                            <a href="{{ url(route('course-detail', ['slug' => $row->slug])) }}"><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-12">
                <div class="text-center mt-2">
                    <a href="{{ url(route('courses')) }}" class="view_all_btn">
                        View All Courses <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!-------------------------- course Section --------------------- -->
<!-------------------------- counter Section --------------------- -->

<section class="counter" id="counter">
    <div class="container">
        <div class="row">
            <div class="col-4 ">
                <div class="wrapper" data-aos-once="true" data-aos="fade-up">
                    <img src="assets/frontend/images/counter_1.png" alt="" />
                    <div>
                        <h2><span class="counter-value" data-count="18">0</span>+</h2>
                        <p>Branches</p>
                    </div>
                </div>
            </div>

            <div class="col-4 ">
                <div class="wrapper" data-aos-once="true" data-aos="fade-up">
                    <img src="assets/frontend/images/counter_2.png" alt="" />
                    <div>
                        <h2><span class="counter-value" data-count="6.2">0</span>k+</h2>
                        <p>Pass out</p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="wrapper" data-aos-once="true" data-aos="fade-up">
                    <img src="assets/frontend/images/counter_3.png" alt="" />
                    <div>
                        <h2><span class="counter-value" data-count="2.3">0</span>k+</h2>
                        <p>Students</p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<!-------------------------- counter Section --------------------- -->

<!-------------------------- about Section --------------------- -->

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-lg-0 mb-5">
                <div class="left_wrapper">
                    <h2 class="heading mb-4 arsenica_fonts" data-aos-once="true" data-aos="fade-up">
                        Get to Know More About GNOA
                    </h2>
                    <p class="mb-4 text-justify" data-aos-once="true" data-aos="fade-up">
                        As Dawat-e-Islami India is doing its services in more than 80 walks of life with the sole aim of
                        propagating the teachings of Quran and Sunnah and this is another step for those Islamic
                        brothers and sisters who are aged or busy in their worldly affairs but haven’t learned the
                        proper recitation of Quran. We urged to all our Islamic brothers and sisters to take admission
                        in this online Quran academy and learn to read Quran properly.
                    </p>
                    <p class="mb-4 text-justify" data-aos-once="true" data-aos="fade-up">
                        Being a Muslim, it is our religious duty that we should not only recite Quran but also try to
                        understand every word of it and if you are one of them who are unable to recite Quran properly
                        then take admission in this online Quran teaching service and enlighten your heart with the
                        sacred holy book of Almighty.
                    </p>

                    <a href="about-us.php" class="common_btn" data-aos-once="true" data-aos="fade-up">
                        Read More
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right_wrapper" data-aos-once="true" data-aos="fade-up">
                    <div class="overlay_container">
                        <img class="hvr-bounce-in1" src="assets/frontend/images/about.png" alt="" />
                        <span class="overlay"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------------------------- about Section --------------------- -->



<!-------------------------- register Section --------------------- -->

<section class="register">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrapper">
                    <h2 class="heading arsenica_fonts" data-aos-once="true" data-aos="fade-up">
                        Madani Qaida Course <br />
                        & Nazra Course
                    </h2>
                    <a target="_blank" href="https://online.gnoa.in/apex/f?p=104:11::::::"
                        class="common_btn mt-5">Register Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------------------------- register Section --------------------- -->
<!-------------------------- why_choose Section --------------------- -->

<section class="why_choose">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading text-center arsenica_fonts" data-aos-once="true" data-aos="fade-up">
                    Why Choose Us
                </h2>
            </div>
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="img">
                        <img src="assets/frontend/images/why_1.png" alt="" data-aos-once="true" data-aos="fade-up" />
                    </div>
                    <h2 class="font24" data-aos-once="true" data-aos="fade-up">
                        Expert Quran Tutor
                    </h2>
                    <p data-aos-once="true" data-aos="fade-up">
                        All the classes of online Quran teaching are conducted by well
                        qualified Islamic scholars and expert Quran tutors who will
                        teach you the recitation of Quran as per Arabic phonetics
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="img">
                        <img src="assets/frontend/images/why_2.png" alt="" data-aos-once="true" data-aos="fade-up" />
                    </div>

                    <h2 class="font24" data-aos-once="true" data-aos="fade-up">
                        We Value Our Students
                    </h2>
                    <p data-aos-once="true" data-aos="fade-up">
                        We value each and every student and that is why every student is
                        being taught by a teacher individually so that students can
                        learn everything in an efficient manner.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="img">
                        <img src="assets/frontend/images/why_3.png" alt="" data-aos-once="true" data-aos="fade-up" />
                    </div>

                    <h2 class="font24" data-aos-once="true" data-aos="fade-up">
                        Male Female Teacher
                    </h2>
                    <p data-aos-once="true" data-aos="fade-up">
                        We have many well qualified and expert male and female Quran
                        tutors and as per the teachings of Sharia we offer separate
                        teachers for male and females accordingly.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="img">
                        <img src="assets/frontend/images/why_4.png" alt="" data-aos-once="true" data-aos="fade-up" />
                    </div>

                    <h2 class="font24" data-aos-once="true" data-aos="fade-up">Flexible Timing</h2>
                    <p data-aos-once="true" data-aos="fade-up">
                        We are online 24/7 so; Muslims from all around the world can
                        select online Quran classes timing as per their conformity and
                        availability.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="img">
                        <img src="assets/frontend/images/why_5.png" alt="" data-aos-once="true" data-aos="fade-up" />
                    </div>

                    <h2 class="font24" data-aos-once="true" data-aos="fade-up">Deferent Language</h2>
                    <p data-aos-once="true" data-aos="fade-up">
                        We have many years of experience in online Quran teaching, we
                        value our clients and that's why we offer a free trial of 3-days
                        so you can evaluate our teaching skills.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="img">
                        <img src="assets/frontend/images/why_6.png" alt="" data-aos-once="true" data-aos="fade-up" />
                    </div>

                    <h2 class="font24" data-aos-once="true" data-aos="fade-up">Certificate</h2>
                    <p data-aos-once="true" data-aos="fade-up">
                        We provide certificates to our students who successfully
                        complete their online Quran courses
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<img src="assets/frontend/images/patti.png" alt="" class="patti" data-aos-once="true" data-aos="fade-up" />

<!-------------------------- why_choose Section --------------------- -->
<!-------------------------- certificate Section --------------------- -->

<section class="certificate">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-md-0 mb-5">
                <div class="left_wrapper">
                    <div>
                        <h2 class="heading arsenica_fonts" data-aos-once="true" data-aos="fade-up">
                            Get a Certificate
                        </h2>
                        <p data-aos-once="true" data-aos="fade-up">
                            We welcome our users to Online Quran teaching services where
                            we are offering multiple Islamic as well as character building
                            and life reformation courses as per the teachings of Sharia.
                            Thousands of individuals have learned to read Quran with these
                            online Quran classes service in India and many other
                            countries of the globe.
                        </p>
                        <div>
                            <a target="_blank" href="https://online.gnoa.in/apex/f?p=104:11::::::" class="common_btn"
                                data-aos-once="true" data-aos="fade-up">
                                Register Now
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="certificate" class="carousel slide" data-aos-once="true" data-aos="fade-up">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/frontend/images/certificate.png" class="d-block w-100" alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="assets/frontend/images/certificate.png" class="d-block w-100" alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="assets/frontend/images/certificate.png" class="d-block w-100" alt="..." />
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#certificate"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#certificate"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------------------------- certificate Section --------------------- -->
<!-------------------------- Gallery Section --------------------- -->

<section class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-lg-0 mb-5">
                <div class="left_wrapper">
                    <div>
                        <h2 class="heading arsenica_fonts" data-aos-once="true" data-aos="fade-up">
                            Our Branches
                        </h2>
                        <p data-aos-once="true" data-aos="fade-up">
                            We welcome our users to Online Quran teaching services where
                            we are offering multiple Islamic as well as character building
                            and life reformation courses as per the teachings of Sharia.
                            Thousands of individuals have learned to read Quran with these
                            online Quran classes service in India and many other
                            countries of the globe.
                        </p>
                        <div>
                            <a href="our-branche.php" class="common_btn max-md-hidden" data-aos-once="true"
                                data-aos="fade-up">
                                View all Other Branches
                            </a>
                        </div>
                        <!-- Modal -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right_wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img" data-aos-once="true" data-aos="fade-up">
                                <a href="assets/frontend/images/ahmedabad1..jpg" data-fancybox="gallery">
                                    <img src="assets/frontend/images/ahmedabad1..jpg" />
                                    <p class="branches_imgtitle">Ahmedabad</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img" data-aos-once="true" data-aos="fade-up">
                                <a href="assets/frontend/images/mumbai3.jpeg" data-fancybox="gallery">
                                    <img src="assets/frontend/images/mumbai3.jpeg" />
                                    <p class="branches_imgtitle">Mumbai</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img" data-aos-once="true" data-aos="fade-up">
                                <a href="assets/frontend/images/jabalpur3.jpeg" data-fancybox="gallery">
                                    <img src="assets/frontend/images/jabalpur3.jpeg" />
                                    <p class="branches_imgtitle">Jabalpur</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img" data-aos-once="true" data-aos="fade-up">
                                <a href="assets/frontend/images/pune1.jpeg" data-fancybox="gallery">
                                    <img src="assets/frontend/images/pune1.jpeg" />
                                    <p class="branches_imgtitle">Pune</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-center md-hidden">
                                <a href="our-branche.php" class="common_btn" data-aos-once="true" data-aos="fade-up">
                                    View all Other Branches
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------------------------- Gallery Section --------------------- -->
<!-------------------------- testimonial Section --------------------- -->

<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading text-center arsenica_fonts" data-aos-once="true" data-aos="fade-up">
                    Testimonials
                </h2>
            </div>
            <div class="col-md-12">
                <div class="wrapper">
                    <div>
                        <div class="owl-carousel owl-theme" id="testimonial">
                            <div class="item">
                                <p class="desc" data-aos-once="true" data-aos="fade-up">
                                    “I just completed Arabic Grammar course and I must say the
                                    individuals who are teaching online are extremely
                                    professional and knowledgeable persons. They elaborate
                                    every doubt of your mind and put it in front of you in a
                                    very simple manner so we can understand it quickly.”
                                </p>
                                <p class="name" data-aos-once="true" data-aos="fade-up">
                                    - Jibran Attari
                                </p>
                            </div>
                            <div class="item">
                                <p class="desc" data-aos-once="true" data-aos="fade-up">
                                    “I just completed Arabic Grammar course and I must say the
                                    individuals who are teaching online are extremely
                                    professional and knowledgeable persons. They elaborate
                                    every doubt of your mind and put it in front of you in a
                                    very simple manner so we can understand it quickly.”
                                </p>
                                <p class="name" data-aos-once="true" data-aos="fade-up">
                                    - Jibran Attari
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection