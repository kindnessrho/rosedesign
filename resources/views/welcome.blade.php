@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <body class="">

        
            <main class="grid grid-pad">
                
                    <section class="hero">
                        <div class="container" id="home">
                            <div class="col-5-12 tab-col-6-12" id="sls">
                                <div class="sales-msg" id="first">
                                    <img src="{{ asset('/assets/img/hero-vector.png') }}" alt="">
                                    <h1>Your Female Tech Career <span> starts here</span>
                                        
                                    
                                    </h1>
                        
                                    <button class="cta-style hero-btn">Join The Waiting List</button>
                                </div>
                    
                            </div>
        
        
                            <div id="sls-img" class="col-7-12 tab-col-6-12">
                                <img src="{{ asset('/assets/img/hero-image.png') }}" alt="">
                            
            
                            </div>
                        </div>
                    </section>
                

            {{-- about section --}}
                <section class="about-sec">
                    <div class="container" id="home">
                    <div class="row" id="sec-mg-top">
                        <h1 class="sec-title">About Us</h1>
                    </div>

                    <div class="row" id="sec-prg" >
                        <p>
                            Statistics have stated that there is a lot of gap in the ratio of women to men in tech in Africa. We at FemCode Africa believe that every female has all it takes to start and sustain a career in Tech. FemCode Africa is a virtual tech education company focused on training youngfemales in Africa and helping them get employed.
                        </p>
                    </div>

                    <div class="" id="sec-benefit">
                        <div class="col-1-4 mobile-col-3-12 s-mobile-col-1-1" id="sec-benefit-item">
                            <img src="{{ asset('/assets/img/bnf-1.jpg') }}" alt="" width="100px" height="90px">

                            <p>
                                Helps you get employed
                            </p>

                        </div>

                        <div class="col-1-4 mobile-col-3-12 s-mobile-col-1-1" id="sec-benefit-item">
                            <img src="{{ asset('/assets/img/bnf-2.jpg') }}" alt="" width="100px" height="90px">

                            <p>
                                Virtual
                            </p>

                        </div>

                        <div class="col-1-4 mobile-col-3-12 s-mobile-col-1-1" id="sec-benefit-item">
                            <img src="{{ asset('/assets/img/bnf-3.jpg') }}" alt="" width="100px" height="90px">

                            <p>
                                Affordable
                            </p>

                        </div>
                        {{--  --}}

                        <div class="col-1-4 mobile-col-3-12 s-mobile-col-1-1" id="sec-benefit-item">
                            <img src="{{ asset('/assets/img/bnf-4.jpg') }}" alt="" width="100px" height="90px">

                            <p>
                                Facilitate adequate learning
                            </p>

                        </div>

                        


                    </div>

                    </div>


                </section>
        
        
                {{-- services section --}}

                <section class="services-sec">
                    
                    <div class="row services-title" id="sec-mg-top">
                        <h1 class="services-sec-title">Our Services</h1>
                    </div>

                    
                    <div class="container">
                    <div class="" id="services-benefit">
                        <div class="col-1-4" id="sec-benefit-item">
                            <h4>
                                FemAcademy
                            </h4>

                            <p class="fem-p">
                                Fem-Academy is a Virtual institute that trains and fortify females with real life projects to become software experts
                            </p>

                            <button class="cta-style services-btn">See More</button>

                        </div>

                        <div class="col-1-4" id="sec-benefit-item">
                            <h4>
                                FemReach
                            </h4>

                            <p>
                                FemReach is a non-profit project powered by FemCode Africa dedicated to advancing the lives of underprivileged girls through technology.
                            </p>

                            <button class="cta-style services-btn">See More</button>

                        </div>

                        <div class="col-1-4 benefit-item-last" id="sec-benefit-item">
                            <h4>
                                Courses
                            </h4>

                            <p class="course-p">
                                <ul class="custom-list">
                                    <li>
                                        Frontend Developement
                                    </li>
                                    <li>
                                        Backend Developement
                                    </li>
                                    <li>
                                        Mobile Developement
                                    </li>
                                    <li>
                                        Technical Writing
                                    </li>
                                </ul>
                            </p>

                            <button class="cta-style services-btn">See More</button>

                        </div>

                        <div class="col-1-4 benefit-item-last" id="sec-benefit-item">
                            <h4 class="hire">
                                Hire From FemAcademy
                            </h4>

                            <p class="hire-p">
                                Hire a skilled female software engineer Today. Our programs are structures to train these females to become experts.
                            </p>

                            <button class="cta-style services-btn">See More</button>

                        </div>
                        


                    </div>
                    </div>


                </section>

                {{-- mission section --}}
                <section class="mission-sec">
                    <div class="container">

                        <div class="row" id="sec-mg-top">
                            <h1 class="sec-title">
                                Mission Statement
                            </h1>
                        </div>
                        
                        <div id="left" class="col-6-12 tab-col-1-1">
                            <img src="{{ asset('/assets/img/mission-img.png') }}" alt="">
                        </div>

                        <div class="col-6-12 tab-col-1-1">
                            <div class="statement">
                                <p>
                                    Statistics have stated that there is a lot of gap in the ratio of women to men in tech in Africa. We at FemCode Africa believe that every female has all it takes to start and sustain a career in Tech.
                                </p>
                                <p>
                                    Our Academy is set to provide these African females with not just a school to learn and grow but also a community to sustain their tech careers by helping them get employed after their tech education with us.
                                </p>
                                <p>
                                    With our well structured curriculum which includes both theory and hand on desktop projects, we equip these women to become top software engineers and be able to work with any software company.
                                </p>
                            </div>
                        </div>


                    </div>


                </section>


                {{-- faqs section --}}

                <section class="faq-sec">
                    <div class="container">

                        <div class="faq-head row" id="sec-mg-top">
                            <h1 class="sec-title">
                                Frequently Asked <span>Questions</span> 
                            </h1>
                            <P>
                                We’ve answered some of the questions you might have about our services here
                            </P>
                        </div>

                        <div class="col">
                            
                                <div class="accordion-wrapper">
                                    <!-- accordion wrapper -->
                                    <div id="accordion">
                                        <div class="card wow animate__animated animate__fadeInUp">
                                            <div class="card-header" id="headingOwo">
                                                <h5 class="mb-0">
                                                    <a>
                                                     What is FemAcademy
                                                    </a>
                                                </h5>
                                            </div>
                                            
                                        </div>
                                        <div class="card wow animate__animated animate__fadeInUp animate__delay-1s">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <a >
                                                    Mission?
                                                    </a>
                                                </h5>
                                            </div>
                                            
                                        </div>
                                        <div class="card wow animate__animated animate__fadeInUp animate__delay-2s">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <a >
                                                    Future Plan?
                                                    </a>
                                                </h5>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            
                        </div>

                    </div>
                </section>    
        
            </main>
        
        
    </body>
</html>


@endsection
