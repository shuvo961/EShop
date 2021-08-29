@extends('front-end.master')

@section('title')
    Contact US
@endsection

@section('body')
    <!-- /banner_bottom_agile_info -->
    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>C<span>ontact Us </span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                        <li><a href="{{route('/')}}">Home</a><i>|</i></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>
    <!--/contact-->
    <div class="banner_bottom_agile_info">
        <div class="container">
            <div class="contact-grid-agile-w3s">
                <div class="col-md-4 contact-grid-agile-w3">
                    <div class="contact-grid-agile-w31">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h4>Address</h4>
                        <p>12K Street, 45 Building Road <span>California, USA.</span></p>
                    </div>
                </div>
                <div class="col-md-4 contact-grid-agile-w3">
                    <div class="contact-grid-agile-w32">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h4>Call Us</h4>
                        <p>+1234 758 839<span>+1273 748 730</span></p>
                    </div>
                </div>
                <div class="col-md-4 contact-grid-agile-w3">
                    <div class="contact-grid-agile-w33">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <h4>Email</h4>
                        <p><a href="mailto:info@example.com">info@example1.com</a><span><a href="mailto:info@example.com">info@example2.com</a></span></p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="contact-w3-agile1 map" data-aos="flip-right">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe>
    </div>
    <div class="banner_bottom_agile_info">
        <div class="container">
            <div class="agile-contact-grids">
                <div class="agile-contact-left">
                    <div class="col-md-6 address-grid">
                        <h4>For More <span>Information</span></h4>
                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Telephone </p><span>+1 (100)222-23-33</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Mail </p><a href="mailto:info@example.com">info@example.com</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Location</p><span>7784 Diamonds street, California, US.</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <ul class="social-nav model-3d-0 footer-social w3_agile_social two contact">
                            <li class="share">SHARE ON : </li>
                            <li><a href="#" class="facebook">
                                    <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                            <li><a href="#" class="twitter">
                                    <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                            <li><a href="#" class="instagram">
                                    <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                            <li><a href="#" class="pinterest">
                                    <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 contact-form">
                        <h4 class="white-w3ls">Contact <span>Form</span></h4>
                        <form action="#" method="post">
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" name="Name" required="">
                                <label>Name</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="email" name="Email" required="">
                                <label>Email</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="text" name="Subject" required="">
                                <label>Subject</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <textarea name="Message" required=""></textarea>
                                <label>Message</label>
                                <span></span>
                            </div>
                            <input type="submit" value="SEND">
                        </form>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--//contact-->


@endsection


@section('script')
    <!-- js -->
    <script type="text/javascript" src="{{asset('/')}}/front-end/js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <script src="{{asset('/')}}/front-end/js/modernizr.custom.js"></script>
    <!-- Custom-JavaScript-File-Links -->
    <!-- cart-js -->
    <script src="{{asset('/')}}/front-end/js/minicart.min.js"></script>
    <script>
        // Mini Cart
        paypal.minicart.render({
            action: '#'
        });

        if (~window.location.search.indexOf('reset=true')) {
            paypal.minicart.reset();
        }
    </script>

    <!-- //cart-js -->
    <!-- script for responsive tabs -->
    <script src="{{asset('/')}}/front-end/js/easy-responsive-tabs.js"></script>
    <script>
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true,   // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>
    <!-- //script for responsive tabs -->
    <!-- stats -->
    <script src="{{asset('/')}}/front-end/js/jquery.waypoints.min.js"></script>
    <script src="{{asset('/')}}/front-end/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{asset('/')}}/front-end/js/move-top.js"></script>
    <script type="text/javascript" src="{{asset('/')}}/front-end/js/jquery.easing.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
                };
            */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <!-- //here ends scrolling icon -->


    <!-- for bootstrap working -->
    <script type="text/javascript" src="{{asset('/')}}/front-end/js/bootstrap.js"></script>
@endsection
