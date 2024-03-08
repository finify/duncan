@extends('home.layout.layout')

@section('content')
    
<div class="theme-inner-banner section-spacing">
    <div class="overlay">
        <div class="container">
            <h2>Contact Us</h2>
        </div> <!-- /.container -->
    </div> <!-- /.overlay -->
</div> <!-- /.theme-inner-banner -->

<!-- 
=============================================
    Conatct us Section
============================================== 
-->
<div class="contact-us-section section-spacing">
    <div class="container">
        <div class="theme-title-one">
            <h2>GET IN TOUCH</h2>
         
        </div> <!-- /.theme-title-one -->
        <div class="clearfix main-content no-gutters row">
            <div class="col-lg-5 col-12"><div class="img-box"></div></div>
            <div class="col-lg-7 col-12">
                <div class="form-wrapper">
                    <form action="" class="theme-form-one form-validation" autocomplete="off">
                        <div class="row">
                            <div class="col-sm-6 col-12"><input type="text" placeholder="Name *" name="name"></div>
                            <div class="col-sm-6 col-12"><input type="text" placeholder="Phone *" name="phone"></div>
                            <div class="col-sm-6 col-12"><input type="email" placeholder="Email *" name="email"></div>
                            <div class="col-sm-6 col-12"><input type="text" placeholder="Website *" name="web"></div>
                            <div class="col-12"><textarea placeholder="Message" name="message"></textarea></div>
                        </div> <!-- /.row -->
                        <button class="theme-button-one">SEND MESSAGE</button>
                    </form>
                </div> <!-- /.form-wrapper -->
            </div> <!-- /.col- -->
        </div> <!-- /.main-content -->
    </div> <!-- /.container -->

    <!--Contact Form Validation Markup -->
    <!-- Contact alert -->
    <div class="alert-wrapper" id="alert-success">
        <div id="success">
            <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
            <div class="wrapper">
                   <p>Your message was sent successfully.</p>
             </div>
        </div>
    </div> <!-- End of .alert_wrapper -->
    <div class="alert-wrapper" id="alert-error">
        <div id="error">
               <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
               <div class="wrapper">
                   <p>Sorry!Something Went Wrong.</p>
            </div>
        </div>
    </div> <!-- End of .alert_wrapper -->
</div> <!-- /.contact-us-section -->




<!-- Google Map -->
<div class="google-map-one mb-5">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15902.280216784091!2d6.9836735!3d4.843635!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069ce3dbb86f331%3A0xd8997b4499fe166e!2s40%20NTA%20Rd%2C%20Rumuokwuta%2C%20Port%20Harcourt%20500272%2C%20Rivers!5e0!3m2!1sen!2sng!4v1709911997993!5m2!1sen!2sng" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
</div>
@endsection