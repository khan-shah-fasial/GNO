@extends('frontend.layouts.app')

@section('page.title', 'Seedling Associates: Top Lawyers &amp; Law Firms in Delhi, India')

@section('page.description', 'Seedling & Associates is one of the best law firms in Delhi, India. We provide legal
assistance for startups, FDI, Property law, IP, and more')

@section('page.type', 'website')

@section('page.content')

<!-----===== home content start============---->

<div id="banner" class="noBannerImage noBannerImage">
   <div id="homeAnimation">
      <div class="results_list">
         <div class="current">
            <div class="image">
               <picture>
                  <source media="(max-width:540px)" srcset="{{ asset('storage/' . get_settings('Banner_1')) }}">
                  <source srcset="{{ asset('storage/' . get_settings('Banner_1')) }}" type="image/webp" sizes="100vw" />
                  <img alt="See Things in a New Way" src="{{ asset('storage/' . get_settings('Banner_1')) }}"
                     srcset="{{ asset('storage/' . get_settings('Banner_1')) }} 2400w" sizes="100vw" />
               </picture>
            </div>
            <div class="titleGroup">
               <div class="title">
                  {{ get_settings('b_title1') }}
               </div>
               <div class="desc">
                  {{ get_settings('b_desc1') }}
               </div>
            </div>
            <div class="contentGroup">
               <div class="teaser"></div>
               <div class="content"></div>
            </div>
            <div class="animatingSlash"></div>
         </div>
         <div>
            <div class="image">
               <picture>
                  <source media="(max-width:540px)" srcset="{{ asset('storage/' . get_settings('Banner_2')) }}">
                  <source srcset="{{ asset('storage/' . get_settings('Banner_2')) }}" type="image/webp" sizes="100vw" />
                  <img alt="Effective Partnership" src="{{ asset('storage/' . get_settings('Banner_2')) }}"
                     srcset="{{ asset('storage/' . get_settings('Banner_2')) }} 2400w" sizes="100vw" />
               </picture>
            </div>
            <div class="contentGroup">
               <div class="teaser">
                  {{ get_settings('b_title2') }}
               </div>
               <div class="content">
                  <p>
                     {{ get_settings('b_desc2') }}
                  </p>
               </div>
            </div>
            <div class="animatingSlash"></div>
         </div>
         <div>
            <div class="image">
               <picture>
                  <source media="(max-width:540px)" srcset="{{ asset('storage/' . get_settings('Banner_3')) }}">
                  <source srcset="{{ asset('storage/' . get_settings('Banner_3')) }}" type="image/webp" sizes="100vw" />
                  <img loading="lazy" alt="See Things in a New Way"
                     src="{{ asset('storage/' . get_settings('Banner_3')) }}"
                     srcset="{{ asset('storage/' . get_settings('Banner_3')) }} 2400w" sizes="100vw" />
               </picture>
            </div>
            <div class="titleGroup">
               <div class="title">
                  {{ get_settings('b_title1') }}
               </div>
               <div class="desc">
                  {{ get_settings('b_desc1') }}
               </div>
            </div>
            <div class="contentGroup">
               <div class="teaser"></div>
               <div class="content"></div>
            </div>
            <div class="animatingSlash"></div>
         </div>
         <div>
            <div class="image">
               <picture>
                  <source media="(max-width:540px)" srcset="{{ asset('storage/' . get_settings('Banner_4')) }}">
                  <source srcset="{{ asset('storage/' . get_settings('Banner_4')) }}" type="image/webp" sizes="100vw" />
                  <img loading="lazy" alt="Effective Partnership"
                     src="{{ asset('storage/' . get_settings('Banner_4')) }}"
                     srcset="{{ asset('storage/' . get_settings('Banner_4')) }} 2400w" sizes="100vw" />
               </picture>
            </div>
            <div class="contentGroup">
               <div class="teaser">
                  {{ get_settings('b_title2') }}
               </div>
               <div class="content">
                  <p>
                     {{ get_settings('b_desc2') }}
                  </p>
               </div>
            </div>
            <div class="animatingSlash"></div>
         </div>
      </div>
   </div>
</div>




<!--Hero End-->
<!--Banner Slider Start-->
<section class="banner_slider">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="owl-carousel owl-theme" id="banner_slider_carousel">
               <div class="item">
                  <a href="#">
                     <div class="slider_banner_box">
                        <img src="{{ asset('/assets/frontend/images/banner_slider_1.png') }}" alt="" />

                        <span>Start Up India Registration</span>
                     </div>
                  </a>
               </div>
               <div class="item">
                  <a href="#">
                     <div class="slider_banner_box">
                        <img src="{{ asset('/assets/frontend/images/banner_slider_2.png') }}" alt="" />

                        <span>Trademark Filing</span>
                     </div>
                  </a>
               </div>
               <div class="item">
                  <a href="#">
                     <div class="slider_banner_box">
                        <img src="{{ asset('/assets/frontend/images/banner_slider_3.png') }}" alt="" />

                        <span>Gaming Licenses</span>
                     </div>
                  </a>
               </div>
               <div class="item">
                  <a href="#">
                     <div class="slider_banner_box">
                        <img src="{{ asset('/assets/frontend/images/banner_slider_4.png') }}" alt="" />

                        <span>Gambling License</span>
                     </div>
                  </a>
               </div>

            </div>
         </div>
      </div>
   </div>
</section>
<!--Banner Slider End-->
<!--About Start-->
<section class="about">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <h6 class="color_heading  mb-3" data-aos="fade-up" data-aos-once="true">Who We Are</h6>
            <h2 class="main_heading mb-4" data-aos="fade-up" data-aos-once="true">
               {{ get_settings('h_title') }}
            </h2>

            @php
            // Get the full description from the settings
            $fullDescription = get_settings('h_description');

            // Split the description into words
            $words = str_word_count($fullDescription, 1);

            // Define the number of words for the first part
            $numberOfWordsForFirstPart = 45;

            // Slice the array to get the first part
            $firstPartArray = array_slice($words, 0, $numberOfWordsForFirstPart);

            // Join the words to form the first part
            $firstPart = implode(' ', $firstPartArray);

            // The second part is everything after the first part
            $secondPartArray = array_slice($words, $numberOfWordsForFirstPart);
            $secondPart = implode(' ', $secondPartArray);
            @endphp
            <article class="main">
               <p class="desc mb-0 text_justify" data-aos="fade-up" data-aos-once="true">
                  {{ $firstPart }}.
               </p>

               <input id="read-more-check-1" type="checkbox" class="read-more-check" />

               <p class="read-more text_justify">
                  {{ $secondPart }}.
               </p>
               <label for="read-more-check-1" class="read-more-label"></label>
            </article>
            <div class="about_points first">
               <div class="icon_container" data-aos="fade-up" data-aos-once="true">
                  <div class="img_container">
                     <img loading="lazy" src="{{ asset('/assets/frontend/images/check.png') }}" alt="Check Icon" />
                     <img loading="lazy" src="{{ asset('/assets/frontend/images/white_check.png') }}"
                        alt="Check Icon" />
                  </div>
               </div>
               <div>
                  <h4 class="about_point_heading" data-aos="fade-up" data-aos-once="true">Vision</h4>
                  <p class="desc mb-0 text_justify" data-aos="fade-up" data-aos-once="true">
                     {{ get_settings('h_vision') }}
                  </p>
               </div>
            </div>
            <div class="about_points">
               <div class="icon_container">
                  <div class="img_container" data-aos="fade-up" data-aos-once="true">
                     <img loading="lazy" src="{{ asset('/assets/frontend/images/check.png') }}" alt="Check Icon" />
                     <img loading="lazy" src="{{ asset('/assets/frontend/images/white_check.png') }}"
                        alt="Check Icon" />
                  </div>
               </div>
               <div>
                  <h4 class="about_point_heading" data-aos="fade-up" data-aos-once="true">Mission</h4>
                  <p class="desc mb-0 text_justify" data-aos="fade-up" data-aos-once="true">
                     {{ get_settings('h_mission') }}
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-6" id="counter">
            <div class="row">
               <div class="col-md-6 col-6 first_counter">
                  <div class="about_counter_container">
                     <div class="about_right_counter" data-aos="fade-up" data-aos-once="true">
                        <div class="about_counter_icon">
                           <div class="about_counter_img">
                              <img loading="lazy" src="{{ asset('/assets/frontend/images/counter_medal.png') }}"
                                 alt="counter 1" class="mb-4" />
                              <img loading="lazy" src="{{ asset('/assets/frontend/images/counter_medal_1.png') }}"
                                 alt="counter 1" class="mb-4" />

                           </div>
                        </div>
                        <div class="about_counter">
                           <p class="about_counter_number">
                              <span class="counter-value" data-count="{{ get_settings('c_exp') }}">0</span>+
                           </p>
                           <p class="about_counter_para">Years of Professional Experience</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-6 second_counter">
                  <div class="about_counter_container">
                     <div class="about_right_counter" data-aos="fade-up" data-aos-once="true">
                        <div class="about_counter_icon">
                           <div class="about_counter_img">
                              <img loading="lazy" src="{{ asset('/assets/frontend/images/counter_hand.png') }}"
                                 alt="counter 2" />
                              <img loading="lazy" src="{{ asset('/assets/frontend/images/counter_hand_1.png') }}"
                                 alt="counter 1" />
                           </div>
                        </div>
                        <div class="about_counter">
                           <p class="about_counter_number">
                              <span class="counter-value" data-count="{{ get_settings('c_client') }}">0</span>k
                           </p>
                           <p class="about_counter_para">Clients Served</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-6 third_counter">
                  <div class="about_counter_container mt-md-0 mt-2">
                     <div class="about_right_counter" data-aos="fade-up" data-aos-once="true">
                        <div class="about_counter_icon">
                           <div class="about_counter_img">
                              <img loading="lazy" src="{{ asset('/assets/frontend/images/counter_doc.png') }}"
                                 alt="counter 3" />
                              <img loading="lazy" src="{{ asset('/assets/frontend/images/counter_doc_1.png') }}"
                                 alt="counter 1" />
                           </div>
                        </div>
                        <div class="about_counter w149">
                           <p class="about_counter_number">
                              <span class="counter-value" data-count="{{ get_settings('c_lic') }}">0</span>+
                           </p>
                           <p class="about_counter_para">Licenses &amp; Registration Done.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-6">
                  <div class="about_counter_container mt-md-0 mt-2">
                     <div class="about_right_counter" data-aos="fade-up" data-aos-once="true">
                        <div class="about_counter_icon">
                           <div class="about_counter_img">
                              <img loading="lazy" src="{{ asset('/assets/frontend/images/counter_man.png') }}"
                                 alt="counter 4" />
                              <img loading="lazy" src="{{ asset('/assets/frontend/images/counter_man_1.png') }}"
                                 alt="counter 1" />
                           </div>
                        </div>
                        <div class="about_counter">
                           <p class="about_counter_number">
                              <span class="counter-value" data-count="{{ get_settings('c_team') }}">0</span>+
                           </p>
                           <p class="about_counter_para">Team of Professional Experts.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--About End-->
<!--Payment Start-->
@include('frontend.component.lets_talk_section')
<!--Payment End-->
<!--Blog Start-->
@include('frontend.component.blog')
<!--Blog End-->
<!--Contact Start-->
@include('frontend.component.contact_us_section')
<!--Contact End-->
<!--Social Icons Start-->
@include('frontend.component.testimonials')
<!--Testimonials End-->

<!----------------------- home content end --------------->
@endsection