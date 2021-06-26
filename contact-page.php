<?php /* Template Name: STIMAT - Contact Page */ ?>

<?php get_header( ); ?>

    <!--Little Hero Header Starts-->
    <div class="little-hero" id="little-hero">
        <div class="little-hero-text">
            <h1 class="little-big-text text-center">We'd Love To Hear From You</h1>
        </div>
    </div>
    <!--Hero Header Ends-->

    <!--Contact Section Starts-->
    <div class="pt-5 pb-2 top-margin">
        <h3 class="side-title text-theme mb-4 text-center">Get In Touch With Us</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php 
                    if(isset($_POST['send'])){
                        $to = "chagua@stimat.ac.tz"; // this is your Email address
                        $from = $_POST['email']; // this is the sender's Email address
                        $name = $_POST['sender'];
                        $subject = $_POST['subject'];
                        $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];

                        $headers = "From:" . $from;
                        if(mail($to,$subject,$message,$headers)){
                            echo '<p class="text-theme"><b>Thank you ' . $name . ', your message was successfully sent.</b></p>';
                        }
                        else {
                            echo '<p class="text-red"><b>Something went wrong, please try again or contact admin</b></p>';
                        }
                        }
                    ?>

                    <!-- Contact Form -->
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="name" class="contact-label">Name</label>
                            <input type="text" class="form-control" name="sender" required="true"/>
                        </div>
                        <div class="form-group">
                            <label for="subject" class="contact-label">Subject</label>
                            <input type="text" class="form-control" name="subject" required="true"/>
                        </div>
                        <div class="form-group">
                            <label for="email" class="contact-label">Email</label>
                            <input type="email" class="form-control" name="email" required="true"/>
                        </div>
                        <div class="form-group">
                            <label for="message" class="contact-label">Message</label>
                            <textarea name="message" class="form-control" rows="6" required="true"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit"  name="send" class="dwld-btn py-3 px-5 mt-2 mb-2">
                                <span><i class="fa fa-paper-plane mx-2"></i></span> Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 my-2 pl-lg-5 pl-md-4 pl-1 mx-md-0 mx-3">
                    <h5 class="my-2 text-uppercase"><b>For Inquiries:</b></h5>
                    <div class="row">
                        <div class="col-12 bg-theme p-2 pl-sm-4 pl-2 mt-1">
                            <h5 class="text-white contact-heading mb-2 mt-1">The Principal</h5>
                            <ul class="list-unstyled ml-2"> <!--Edit Contact Information Here-->
                                <li class="mb-3 text-white">
                                    <i class="fa fa-map-marker mx-1"></i> St. Thomas Institute of Management & Technology
                                </li>
                                <li class="mb-3 text-white">
                                    <i class="fa fa-phone mx-1"></i> Mobile: +255 767 354934
                                </li>
                                <li class="mb-3 text-white">
                                    <i class="fa fa-envelope mx-1"></i> principal@stimat.ac.tz
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 bg-theme p-2 pl-sm-4 pl-2 mt-4">
                            <h5 class="text-white contact-heading mb-2 mt-1">Admission Officer</h5>
                            <ul class="list-unstyled ml-2"> <!--Edit Contact Information Here-->
                                <li class="mb-3 text-white">
                                    <i class="fa fa-map-marker mx-1"></i> St. Thomas Institute of Management & Technology
                                </li>
                                <li class="mb-3 text-white">
                                    <i class="fa fa-phone mx-1"></i> Mobile: +255 767 354934
                                </li>
                                <li class="mb-3 text-white">
                                    <i class="fa fa-envelope mx-1"></i> chagua@stimat.ac.tz
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact Section Ends-->

    

<?php get_footer(  ); ?>