@extends('template.welcome')
@section('content')
<section id="about" class="top-border-me">
        <div class="section-inner">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb100">
                        <h2 class="section-heading">A <span class="theme-accent-color">Warm</span> Welcome</h2>
                        <hr class="thin-hr">
                        <h3 class="section-subheading secondary-font">Were very happy to see you.</h3>
                    </div>
                </div>
            </div>

            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <h2 class="mb50">About <span class="theme-accent-color">DuJour</span></h2>
                            <p class="lead">Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you.</p>
                            <p>Here he comes Here comes Speed Racer. He's a demon on wheels. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer.</p>
                        </div>

                        <div class="col-md-5">
                            <h2 class="mb50">Latest <span class="theme-accent-color">Awards</span></h2>
                            <p class="lead">Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you.</p>
                            <p>Here he comes Here comes Speed Racer. He's a demon on wheels. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 nopadding-lr dark-wrapper opaqued background-cover left-half" style="background-image: url{{asset('img/bg/bg10.jpg')}};">
                    <div class="dark-opaqued-half section-inner pad-sides-60 match-height" data-mh="promo-inner">
                        <h3 class="mb50">Love <span class="theme-accent-color">Steak?</span></h3>
                        <p class="lead mb50">Conveniently leverage other's distinctive expertise and backend metrics. Progressively harness intuitive systems and ethical niches. Continually drive extensible benefits vis-a-vis leading-edge meta-services. Conveniently leverage existing market-driven outsourcing vis-a-vis e-business process improvements. Intrinsicly extend quality interfaces with intermandated innovation.</p>
                        <div class="spacer-180"></div>
                        <p class="mt30"><a href="#contact" class="btn btn-primary btn-red page-scroll">Book Now</a></p>
                    </div>
                </div>

                <div class="col-sm-6 nopadding-lr dark-wrapper opaqued background-cover right-half" style="background-image: url{{asset('img/bg/bg5.jpg')}};">
                    <div class="dark-opaqued-half section-inner pad-sides-60 match-height text-right" data-mh="promo-inner">
                        <h3 class="mb50">Create <span class="theme-accent-color">Memories</span></h3>
                        <p class="lead mb50">Conveniently leverage other's distinctive expertise and backend metrics. Progressively harness intuitive systems and ethical niches. Continually drive extensible benefits vis-a-vis leading-edge meta-services. Conveniently leverage existing market-driven outsourcing vis-a-vis e-business process improvements. Intrinsicly extend quality interfaces with intermandated innovation.</p>
                        <div class="spacer-180"></div>
                        <p class="mt30"><a href="#contact" class="btn btn-primary btn-white page-scroll">View Menu</a></p>
                    </div>
                </div>
            </div>
        </div>

        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('img/bg/bg4.jpg')}}" data-speed="0.8">
                <div class="section-inner">
                     <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center mb100">
                                <h2 class="section-heading">Our <span class="theme-accent-color">Acclaimed</span> Chefs</h2>
                                <hr class="thin-hr">
                                <h3 class="section-subheading secondary-font">Dedicated to excellence.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="wow fadeIn" data-wow-delay="0.2s">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="3" data-items-tablet="[768,2]" data-items-mobile="[479,1]">
                                        <li>
                                            <div class="row hover-item">
                                                <div class="col-xs-12">
                                                    <img src="{{asset('img/team/1.jpg')}}" class="img-responsive smoothie" alt="">
                                                </div>
                                                <div class="col-xs-12 overlay-item-caption smoothie"></div>
                                                <div class="col-xs-12 hover-item-caption smoothie">
                                                    <div class="vertical-center">
                                                        <h3 class="smoothie"><a href="single-portfolio.html" title="view project">John Doe</a></h3>
                                                        <ul class="smoothie list-inline social-links wow fadeIn" data-wow-delay="0.2s">
                                                            <li>
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-behance"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <span class="col-xs-12 theme-accent-color-bg hover-bar"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row hover-item">
                                                <div class="col-xs-12">
                                                    <img src="assets/img/team/2.jpg" class="img-responsive smoothie" alt="">
                                                </div>
                                                <div class="col-xs-12 overlay-item-caption smoothie"></div>
                                                <div class="col-xs-12 hover-item-caption smoothie">
                                                    <div class="vertical-center">
                                                        <h3 class="smoothie"><a href="single-portfolio.html" title="view project">Barry Scott</a></h3>
                                                        <ul class="smoothie list-inline social-links wow fadeIn" data-wow-delay="0.2s">
                                                            <li>
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-behance"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <span class="theme-accent-color-bg hover-bar"></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row hover-item">
                                                <div class="col-xs-12">
                                                    <img src="{{asset('img/team/3.jpg')}}" class="img-responsive smoothie" alt="">
                                                </div>
                                                <div class="col-xs-12 overlay-item-caption smoothie"></div>
                                                <div class="col-xs-12 hover-item-caption smoothie">
                                                    <div class="vertical-center">
                                                        <h3 class="smoothie"><a href="single-portfolio.html" title="view project">Tom Smooth</a></h3>
                                                        <ul class="smoothie list-inline social-links wow fadeIn" data-wow-delay="0.2s">
                                                            <li>
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-behance"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <span class="theme-accent-color-bg hover-bar"></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row hover-item">
                                                <div class="col-xs-12">
                                                    <img src="{{asset('img/team/4.jpg')}}" class="img-responsive smoothie" alt="">
                                                </div>
                                                <div class="col-xs-12 overlay-item-caption smoothie"></div>
                                                <div class="col-xs-12 hover-item-caption smoothie">
                                                    <div class="vertical-center">
                                                        <h3 class="smoothie"><a href="single-portfolio.html" title="view project">Harvey Wallace</a></h3>
                                                        <ul class="smoothie list-inline social-links wow fadeIn" data-wow-delay="0.2s">
                                                            <li>
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-behance"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <span class="theme-accent-color-bg hover-bar"></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('img/bg/bg10.jpg')}}" data-speed="0.8">
                <div class="section-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center mb100">
                                <h2 class="section-heading">Our <span class="theme-accent-color">Happy</span> Customers</h2>
                                <hr class="thin-hr">
                                <h3 class="section-subheading secondary-font">Satisfaction, everytime.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="1" data-items-desktop="[1200,1]" data-items-desktop-small="[980,1]" data-items-tablet="[768,1]" data-items-mobile="[479,1]">
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-8 col-xs-offset-2 item-caption">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <img src="{{asset('img/team/small1.jpg')}}" class="img-responsive testimonial-author" alt="">
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <h4>Charles Davies</h4>
                                                        <p>Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.</p>
                                                        <ul class="list-inline">
                                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-8 col-xs-offset-2 item-caption">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <img src="{{asset('img/team/small1.jpg')}}" class="img-responsive testimonial-author" alt="">
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <h4>Charles Davies</h4>
                                                        <p>Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.</p>
                                                        <ul class="list-inline">
                                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('img/bg/bg1.jpg')}}" data-speed="0.8">
                <div class="section-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center mb100">
                                <h2 class="section-heading">Book <span class="theme-accent-color">Your</span> Table</h2>
                                <hr class="thin-hr">
                                <h3 class="section-subheading secondary-font">Satisfaction, everytime.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row mb100">
                            <!-- Address, Phone & Email -->
                            <div class="col-md-5 col-md-offset-1 wow fadeIn">
                                <h3 class="mb30">Address</h3>
                                <p class="lead">Florence Building</p>
                                <p class="lead">Kings Square<br>
                                London, LDN1 23 </p>
                                <p class="lead">+448754 658 048<br>
                            </div>

                            <div class="col-md-5 col-sm-7 wow fadeIn">
                                <h3 class="mb30">Opening Times</h3>
                                <div class="row">
                                  <div class="col-xs-5">
                                    <ul class="list-unstyled weekdays">
                                      <li>Monday</li>
                                      <li>Tuesday</li>
                                      <li>Wednesday</li>
                                      <li>Thursday</li>
                                      <li>Friday</li>
                                      <li>Saturday</li>
                                      <li>Sunday</li>
                                    </ul>
                                  </div>
                                  <div class="col-xs-7">
                                    <ul class="list-unstyled">
                                      <li>11:00 AM - 11:00 PM</li>
                                      <li>11:00 AM - 11:00 PM</li>
                                      <li>11:00 AM - 11:00 PM</li>
                                      <li>11:00 AM - 11:00 PM</li>
                                      <li>11:00 AM - 1:00 AM</li>
                                      <li>11:00 AM - 1:00 AM</li>
                                      <li>11:00 AM - 1:00 AM</li>
                                    </ul>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="row">
                                    <div id="message" class="col-md-12"></div>
                                    <form method="post" action="sendemail.php" id="contactform" class="form-group main-contact-form col-md-12 wow fadeIn" data-wow-delay="0.2s">
                                        <input type="text" class="form-control col-md-4" name="name" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." />
                                        <input type="text" class="form-control col-md-4" name="email" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address." />
                                        <input type="text" class="form-control col-md-4" name="website" placeholder="Your URL *" id="website" required data-validation-required-message="Please enter your web address." />
                                        <textarea name="comments" class="form-control" id="comments" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                        <input class="btn btn-primary btn-white mt30 pull-right" type="submit" name="submit" value="Submit" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                    <div id="mapwrapper"></div>
            </section>






@endsection
