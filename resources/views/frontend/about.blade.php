@extends('frontend.layout.app')
@section('head')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css'>
<link rel="stylesheet" href="{{asset('frontend/css/swipestyle.css')}}">
@endsection
@section('main')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset("frontend/images/bg_2.jpg") }}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center fadeInUp ftco-animated">
          <h1 class="mb-2 bread">About Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftc-no-pb bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wrap-about pt-5 wrap-about">
                <div class="text px-4 ftco-animate fadeInUp ftco-animated">
                    <h2 class="mb-4 text-center">Welcome to Femleen Private School</h2>
                    <p>The school was established in 2015 by Mrs Eunice Omolade Olaleye. It commenced operation precisely on
                        the 13th of September 2015 with fifteen teaching staff and thirty students.</p>
                    <p>The school operates in a 'U' shaped storey building which contains nine spacious and well ventilated classrooms
                        and other rooms such as library, ICT room, Labs, Hall, etc.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pb">
    <div class="container">
       <div class="wrap-about">
          <h2 class="col-12 text-center ">Our Services</h2>
          <p class="col-12 mb-4 text-center">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s</p>
       </div>
       <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
             <div class="service-box">
                <div class="text-center">
                    <i class="icon icon-bullseye display-3"></i>
                    <h4><a href="">Our Vision</a></h4>
                </div>
                <p>Our vision at Femleen School is to be the best in providing world class innovative education with a global reputation for excellence</p>

             </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="service-box">
                 <div class="text-center">
                    <i class="icon icon-compass display-3"></i>
                    <h4><a href="">Our Mission</a></h4>
                </div>
                <p>To prepare each student for academic & personal excellence through development of their potentialities,
                    knowledge, competence, behavioural patterns & value system</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
             <div class="service-box">
                <div class="text-center">
                    <i class="icon icon-asterisk display-3"></i>
                    <h4><a href="">Our Objective</a></h4>
                </div>
                <p>Giving sound moral qualitative all round education most especially to students living within the vicinity.</p>

             </div>
          </div>
       </div>
    </div>
</section>
<section class="ftco-section ftco-no-pb">
    <div class="container">
          <div class="row justify-content-center mb-5 pb-2">
              <div class="col-md-8 text-center heading-section ftco-animate">
                  <h2 class="mb-4"><span>Meet the</span> Visionaries</h2>
                  <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4 col-lg-4 ftco-animate">
                  <div class="staff">
                      <div class="img-wrap d-flex align-items-stretch">
                          <div class="img align-self-stretch" style="background-image: url('{{ asset("frontend/images/teacher-1.jpg") }}');"></div>
                      </div>
                      <div class="text pt-3 text-center">
                          <h3>Mr Eric Olaleye</h3>
                          <span class="position mb-2">Director</span>
                          <div class="faded">
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                              <ul class="ftco-social text-center">
                                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                  <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
            <div class="col-md-4 col-lg-4 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url('{{ asset("frontend/images/teacher-2.jpg") }}');"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>Mrs Eunice Olaleye</h3>
                        <span class="position mb-2">Proprietres</span>
                          <div class="faded">
                              <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                              <ul class="ftco-social text-center">
                                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                  <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                              </ul>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url('{{ asset("frontend/images/teacher-3.jpg") }}');"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>Mrs Uche Asuquo</h3>
                        <span class="position mb-2">Principal</span>
                          <div class="faded">
                            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                              <ul class="ftco-social text-center">
                                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                  <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                              </ul>
                          </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb">
    <div class="container">
          <div class="row justify-content-center mb-5 pb-2">
              <div class="col-md-8 text-center heading-section ftco-animate">
                  <h2 class="mb-4"><span>Our</span> Awards & Achievemens</h2>
                  <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
              </div>
          </div>
          <div class="timeline">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('{{ asset("frontend/images/awards.jpg") }}');" data-year="2011">
                  <div class="swiper-slide-content"><span class="timeline-year">2011</span>
                    <h4 class="timeline-title">Our nice super title</h4>
                    <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
                <div class="swiper-slide" style="background-image: url('https://guardian.ng/wp-content/uploads/2016/11/School-Cup.jpg');" data-year="2012">
                  <div class="swiper-slide-content"><span class="timeline-year">2012</span>
                    <h4 class="timeline-title">Our nice super title</h4>
                    <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
                <div class="swiper-slide" style="background-image: url('{{ asset("frontend/images/image_3.jpg") }}');" data-year="2013">
                  <div class="swiper-slide-content"><span class="timeline-year">2013</span>
                    <h4 class="timeline-title">Our nice super title</h4>
                    <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
                <div class="swiper-slide" style="background-image: url('{{ asset("frontend/images/image_4.jpg") }}');" data-year="2014">
                  <div class="swiper-slide-content"><span class="timeline-year">2014</span>
                    <h4 class="timeline-title">Our nice super title</h4>
                    <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
                <div class="swiper-slide" style="background-image: url('{{ asset("frontend/images/image_5.jpg") }}');" data-year="2015">
                  <div class="swiper-slide-content"><span class="timeline-year">2015</span>
                    <h4 class="timeline-title">Our nice super title</h4>
                    <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
                <div class="swiper-slide" style="background-image: url('{{ asset("frontend/images/image_6.jpg") }}');" data-year="2016">
                  <div class="swiper-slide-content"><span class="timeline-year">2016</span>
                    <h4 class="timeline-title">Our nice super title</h4>
                    <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
    </div>
</section>

@endsection
@push('scripts')
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js'></script>
<script  src="{{asset('frontend/js/swipescript.js')}}"></script>
@endpush
