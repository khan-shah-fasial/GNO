@extends('frontend.layouts.app')

@section('page.title', 'Garib Nawaz Online Academy')

@section('page.description', 'Garib Nawaz Online Academy')

@section('page.type', 'website')

@section('page.content')

<!---=================================-------------------------------->
@php
$course = DB::table('courses')
->where('status', '1')
->get(['title', 'slug', 'status','short_description','rating','image','alt_image']);
@endphp

<!-----================================----------------------->

<!-----===== home content start============---->

<section class="hero">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active hvr-bounce-in">
                <div class="banner">
                    <a href="">
                        <img src="assets/frontend/images/slider_banner1.jpg" class="d-block w-100" alt="..." />
                        <img src="assets/frontend/images/children2.png" alt="" class="children" />
                    </a>
                </div>
            </div>
            <div class="carousel-item hvr-bounce-in">
                <div class="banner">
                    <a href="#">
                        <img src="assets/frontend/images/slider_banner2.jpg" class="d-block w-100" alt="..." />
                        <img src="assets/frontend/images/bhare.png" alt="" class="children" />
                    </a>
                </div>
            </div>
            <div class="carousel-item hvr-bounce-in">
                <div class="banner">
                    <a href="/course/bahar-e-shariat">
                        <img src="assets/frontend/images/slider_banner3.jpg" class="d-block w-100" alt="..." />
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
                        <select class="form-select select_drp_image" id="courseSelect" aria-label="Default select example">
                            @foreach ($course as $row)
                                <option value="{{ $row->slug }}">{{ $row->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------------------------- Welcome Section --------------------- -->

<!-------------------------- course Section --------------------- -->

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
                             
                            <a href="{{ url(route('course-detail', ['slug' => $row->slug])) }}">   
                            <div class="card_content">
                                
                                <h3 class="title  arsenica_fonts" data-aos-once="true" data-aos="fade-up">
                                    {{ $row->title }}
                                </h3>
                                <p class="desc" data-aos-once="true" data-aos="fade-up">
                                    {{ $row->short_description }}
                                </p>
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <div class="social_icons">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star-half-stroke"></i>
                                            <span>{{ $row->rating }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <div class="arrow_btn_slider">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            </a>
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
                        class="common_btn mt-lg-5 mt-3">Register Now</a>
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
                        Comprehensive Curriculum
                    </h2>
                    <p data-aos-once="true" data-aos="fade-up">
                        Our online Quran courses cover a wide range of Islamic studies, character building, and life reformation topics, providing a holistic educational experience.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="img">
                        <img src="assets/frontend/images/why_2.png" alt="" data-aos-once="true" data-aos="fade-up" />
                    </div>

                    <h2 class="font24" data-aos-once="true" data-aos="fade-up">
                         Experienced Instructors
                    </h2>
                    <p data-aos-once="true" data-aos="fade-up">
                       GNOA boasts a team of experienced and knowledgeable Islamic scholars and Quran tutors who are dedicated to facilitating a deep understanding of the Quranic teachings.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="img">
                        <img src="assets/frontend/images/why_3.png" alt="" data-aos-once="true" data-aos="fade-up" />
                    </div>

                    <h2 class="font24" data-aos-once="true" data-aos="fade-up">
                         Gender-Specific Instruction
                    </h2>
                    <p data-aos-once="true" data-aos="fade-up">
                        Following Sharia principles, we offer separate male and female instructors, creating a comfortable and respectful learning atmosphere for all students.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="img">
                        <img src="assets/frontend/images/why_4.png" alt="" data-aos-once="true" data-aos="fade-up" />
                    </div>

                    <h2 class="font24" data-aos-once="true" data-aos="fade-up">Flexibility and Convenience</h2>
                    <p data-aos-once="true" data-aos="fade-up">
                       Our 24/7 online availability allows students from around the world to choose class timings that align with their schedules, promoting flexibility and convenience.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="img">
                        <img src="assets/frontend/images/why_5.png" alt="" data-aos-once="true" data-aos="fade-up" />
                    </div>

                    <h2 class="font24" data-aos-once="true" data-aos="fade-up">Multilingual Support</h2>
                    <p data-aos-once="true" data-aos="fade-up">
                        Recognizing the diversity of our student base, GNOA offers multilingual support, ensuring that language is not a barrier to understanding the teachings of the Quran.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wrapper">
                    <div class="img">
                        <img src="assets/frontend/images/why_6.png" alt="" data-aos-once="true" data-aos="fade-up" />
                    </div>

                    <h2 class="font24" data-aos-once="true" data-aos="fade-up">Certification of Completion</h2>
                    <p data-aos-once="true" data-aos="fade-up">
                        Upon successfully completing our online Quran courses, students receive a certificate, acknowledging their dedication and accomplishment in Quranic education.
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
                            Earn Your Certificate with Us

                        </h2>
                        <p data-aos-once="true" data-aos="fade-up">
                            Unroll in our Online Quran teaching services and unlock the opportunity to receive a certificate upon completion. Our platform offers a diverse array of Islamic studies, character-building, and life reformation courses in accordance with Sharia teachings. Join the ranks of thousands who have successfully learned to read the Quran through our online classes, available in India and various countries around the world. Seize the chance to enhance your knowledge and receive a certificate upon completing our transformative courses.

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
                        <p class="mb-0" data-aos-once="true" data-aos="fade-up">
                           Greetings to our valued users, as we extend a warm welcome to our Online Quran Teaching Services. Our platform provides a diverse range of Islamic, character-building, and life reformation courses in alignment with Sharia teachings. Numerous individuals, spanning across India and various countries worldwide, have successfully learned to read the Quran through our online classes. Join the Global Network of Online Academies (GNOA) to embark on a transformative journey of spiritual and personal growth.

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
                                   Walekum assalam...Mohammad Zayan Hireholi -Bangalore,
India.Madani qaida aur Quran Sharif course Allhumdulillah,iss
online course se bht sare difficulty door hui, Kyun ki jo offline
padhate he,o sahi makhrij nahi sikhatey ...aur iss course ka
format, example monthly exams ,qawaid ki check,madani
guldasta waghaira maloomat ki wajese a behtareen he. .bht log
zayan ka dekhkar faizan online se judgaye mashAllah...Unke
teacher b acha padate heAgey b yahi arazoo he ki Quran
Sharif pura hone k baad , meaning se padhane ki niyat he...

                                </p>
                                <!-- <p class="name" data-aos-once="true" data-aos="fade-up">
                                    - Jibran Attari
                                </p> -->
                            </div>
                            <div class="item">
                                <p class="desc" data-aos-once="true" data-aos="fade-up">
                                   W.salamMera naam Akil Hasan haiMe Gondal - Gujrat se
hu.Me Madni Qaida o Nazra Course me hu.Maine is course se
ache tarike se quraane paak padhna sikha aur jo qawaid sikhe.
Iske alawa Islam ki buniyadi baate kitab me se rozana deeni
malumaat hasil ki.Mashallah se teacher bohot cooperative hai.
Aur unka samjane ka sikhane ka andaz zabardast hai. Aisa
lagta hai jaise rubaru me ilm e din Sikh rahe hai. Itni tawajjo k
sath sikhate hai. Jaha galti ho waha islah bhi farmate hai.Is ke
alawa system ki baat ki jae to nazim sahb ka control bhi bohot
behtareen hai.
                                </p>
                                <!-- <p class="name" data-aos-once="true" data-aos="fade-up">
                                    - Jibran Attari
                                </p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('component.scripts')
<script>
    // Get the select element by its ID
    var courseSelect = document.getElementById('courseSelect');

    // Add an event listener to the select element
    courseSelect.addEventListener('change', function() {
        // Redirect to the selected option's value
        var selectedOption = courseSelect.options[courseSelect.selectedIndex].value;
        window.location.href = '{{ url('/course')  }}/' + selectedOption; // Assuming "course-detail" is the route name
    });
</script>
@endsection