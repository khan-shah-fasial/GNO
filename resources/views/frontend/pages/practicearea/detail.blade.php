@extends('frontend.layouts.app')

@section('page.title', "$detail->meta_title")

@section('page.description', "$detail->meta_description")

@section('page.type', 'practice area')

@section('page.publish_time', "$detail->updated_at")


@section('page.content')


 <!-------------------------- courses details Section --------------------- -->

    <div class="course_hero" data-aos-once="true" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="left_wrapper">
              <h2 class="heading mb-4 arsenica_fonts" data-aos-once="true" data-aos="fade-up">Seerat e Mustafa course</h2>
              <p class="text_justify pe-5" data-aos-once="true" data-aos="fade-up">
                Seerat e Mustafa course will enlighten your heart and soul with
                the matchless biography of Holy Prophet. You will get to know
                the physical beautiful and unexampled appearance of Beloved
                Prophet, his attractive and polite way of talking; way he eats
                and drinks, dresses he wore and his sitting and standing
                position in daily practice and heart touching lifestyle.
              </p>
              
              <div class="data_lang mb-2">
                <p>
                  <span><img src="assets/frontend/images/calender.png" alt="" /></span>
                  <span>2nd January 2023</span>
                </p>
                <p>
                  <span><img src="assets/frontend/images/lang.png" alt="" /></span>
                  <span>English, Urdu, Arabic</span>
                </p>
                <p class="rating_cls">Rating: <span>4.6</span>
                <i class="fa-solid fa-star"></i
                ><i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i></p>
              </div> 
              
              <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="enquiry_btn mt-4 aos-init aos-animate" >
                  Enquire Now
                </button>
            </div>
          </div>
          <div class="col-md-4 " >
           
          </div>
        </div>
      </div>
    </div>
    <!-------------------------- course_hero Section --------------------- -->

    <!-------------------------- course_about Section --------------------- -->

    <div class="course_content">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="course_about mb-5">
              <h3 class="course_heading mb-1">
                What you'll learn from this Course
              </h3>
              <p class="text_justify" data-aos-once="true" data-aos="fade-up">
                We welcome our users to Online Quran teaching services where we
                are offering multiple Islamic as well as character building and
                life reformation courses as per the teachings of Sharia.
                Thousands of individuals have learned to read Quran with these
                online Quran classes service in Pakistan and many other
                countries of the globe.
              </p>

              <p class="mb-4 text_justify" data-aos-once="true" data-aos="fade-up">
                As Dawat-e-Islami is doing its services in more than 107 walks
                of life with the sole aim of propagating the teachings of Quran
                and Sunnah and this is another step for those Islamic brothers
                and sisters who are aged or busy in their worldly affairs but
                haven’t learned the proper recitation of Quran.
              </p>
              
            </div>
            
            
            <div class="row">
                <div class="col-md-6">
                  
                      <div class="durationtp_box" data-aos-once="true" data-aos="fade-up">
                      <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="aos-init aos-animate">
                          For Brothers</button>
                          </div>
                      
                   <div class="courses_fix_content" data-aos-once="true" data-aos="fade-up">
                    <p>
                      <span><i class="fa-solid fa-angle-right"></i></span>
                      <span><strong>Period :</strong></span>
                      <span>4 Months</span>
                    </p>
                    <p>
                      <span><i class="fa-solid fa-angle-right"></i></span>
                      <span><strong>Duration :</strong></span>
                      <span>30 Minutes</span>
                    </p>
                    </div>
                </div>
                
                <div class="col-md-6">
                      <div class="durationtp_box" data-aos-once="true" data-aos="fade-up">
                           <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="aos-init aos-animate">
                          For Sisters</button>
                           </div>
                      
              
                  <div class="courses_fix_content" data-aos-once="true" data-aos="fade-up">
                     
                    <p>
                      <span><i class="fa-solid fa-angle-right"></i></span>
                      <span><strong>Period :</strong></span>
                      <span>3 Months</span>
                    </p>
                    <p>
                      <span><i class="fa-solid fa-angle-right"></i></span>
                      <span><strong>Duration :</strong></span>
                      <span>45 Minutes</span>
                    </p>
                    </div>
                </div>
            </div>
            
          
         <div class="course_about" data-aos-once="true" data-aos="fade-up">
              <h3 class="course_heading mb-0 pt-5">
                Course content
              </h3>
              <p class="text_justify">
                We welcome our users to Online Quran teaching services where we
                are offering multiple Islamic as well as character building and
                life reformation courses as per the teachings of Sharia.
                Thousands of individuals have learned to read Quran with these
                online Quran classes service in Pakistan and many other
                countries of the globe.
              </p>
              
            </div>
            
            
            <!--<div class="course_certificate mt-5" data-aos-once="true" data-aos="fade-up">
              <h3 class="course_heading mb-4">Get a Shareable Certificate</h3>
               <div class="owl-carousel owl-theme" id="book_slider">
                <div class="cirtificate_image">
                  <img src="/assets/frontend/images/certificate.png" alt="" />
                </div>
                
                <div class="cirtificate_image">
                  <img src="/assets/frontend/images/certificate.png" alt="" />
                </div>
                
                <div class="cirtificate_image">
                  <img src="/assets/frontend/images/certificate.png" alt="" />
                </div>
                
              </div>
              
            </div>-->
            
          </div>
          <div class="col-md-4 sticky">
             <div class="right_wrapper courseTop">
              <div class="course_dtimg">
                 <img src="assets/frontend/images/course_card.png" alt="" />
              </div>
              <div class="content">
                <h3 class="course_dthed arsenica_fonts pt-3 mb-4">Seerat e Mustafa course</h3>
                <div class="common_btn3 blue_bg">
                  <a target="_blank" href="https://online.gnoa.in/apex/f?p=104:11::::::">Apply & Get Instant Admission</a>
                </div>
               
              </div>
            </div>
          </div>
          
          
          
        </div>
      </div>
    </div>


     <section class="pb-5">
  <div class="container">
      <div class="row">
           <div class="col-md-12">
              <div class="course_other" data-aos-once="true" data-aos="fade-up">
              <h3 class="course_heading mb-4">Other Courses you can Apply</h3>
              <div class="owl-carousel owl-theme" id="relatedcourse">
                  <div class="card_course" data-aos-once="true" data-aos="fade-up">
                      <div class="overlay">
                    <img
                      src="assets/frontend/images/course.png"
                      alt=""/></div>
                    <div class="card_content ">
                      <h3
                        class="title arsenica_fonts">
                        Tafseer Course
                      </h3>
                      <p class="desc">
                        No doubt the knowledge of Quran is the best of all
                        knowledge and it is necessary for Muslims to not only
                        learn the re...
                      </p>
                     <div class="row">
                          <div class="col-md-6">
                              <div class="social_icons">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-regular fa-star-half-stroke"></i>
                          <span>4.6</span>
                      </div>
                          </div>
                           <div class="col-md-6">
                               <div class="arrow_btn_slider">
                                   <a href="course-detials.php"><i class="fa-solid fa-arrow-right"></i></a>
                               </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          </div>
          </div>
          </section>
    <!-------------------------- courses details Section --------------------- -->
@endsection