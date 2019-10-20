
@extends('layouts.master')
@section('content')



    <div class="page-title-section" style="background-image: url(img/bg/pagetitle.jpg);">
        <div class="container">
            <h1>Contact</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="contact-4.html">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="section-block-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="contact-box"> <i class="fa fa-phone-square"></i>
                        <h4>Call Us</h4> <span>+123 456-78900</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="contact-box"> <i class="fa fa-map"></i>
                        <h4>Visit Us</h4> <span>New York, NY Sheram 113</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="contact-box"> <i class="fa fa-envelope"></i>
                        <h4>Mail Us</h4> <span>specthemes@gmail.com</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="contact-box"> <i class="fa fa-comments-o"></i>
                        <h4>Live Chat</h4> <span>Chat with Us 24/7</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-block">
        <div class="container">
            <div class="section-heading center-holder"> <span>Get in Touch</span>
                <h3>Let's Talk about Your Business</h3>
                <div class="section-heading-line"></div>
            </div>
            <div class="mt-50">
                <div class="contact-form-box">
                    <form class="contact-form row">
                        <div class="col-md-6 col-sm-6 col-12"> <input type="text" name="name" placeholder="Name"> </div>
                        <div class="col-md-6 col-sm-6 col-12"> <input type="email" name="email" placeholder="E-mail">
                        </div>
                        <div class="col-md-12"> <input type="text" name="subject" placeholder="Subject"> </div>
                        <div class="col-md-12"> <textarea name="message" placeholder="Message"></textarea> </div>
                        <div class="col-md-12">
                            <div class="center-holder"> <button type="submit">Send Message</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="map">
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk25E4mNfVIEt3tNl3K1HwNZVruVoFBlA&amp;callback=initMap"> </script>
    </div> -->

    @stop