<?php include('header.php'); ?>


        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Contact</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.php">Home</a></li>
                            <li><span class="icon-angle-left"></span></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact One Start-->
        <section class="contact-one">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Contact us</span>
                    </div>
                    <h2 class="section-title__title">Get in Touch With Us</h2>
                </div>
                <div class="contact-one__inner">
                    <ul class="contact-one__contact-list list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="icon-call"></span>
                            </div>
                            <div class="content">
                                <h3>Lets Talk us</h3>
                                <p><a href="tel:9588033866">+91 9588033866</a></p> 
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-location location-icon"></span>
                            </div>
                            <div class="content">
                                <h3>Address</h3>
                                <p>D9 /177 sector 9, chitrakoot, vaishali nagar jaipur 302021 Location jaipur</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-envolop email-icon"></span>
                            </div>
                            <div class="content">
                                <h3>Send us email</h3>
                                <p><a href="mailto:Support@xportialogistics.com">Support@xportialogistics.com</a></p> 
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Contact One End-->

        <!--Contact Two Start-->
        <section class="contact-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="contact-two__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">Contact</span>
                                </div>
                                <h2 class="section-title__title">Get Touch Here</h2>
                            </div>
                            <form class="contact-two__form" action="#" method="post">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-two__input-box">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-two__input-box">
                                            <input type="text" name="mobile" pattern="[7896][0-9]{9}" placeholder="Phone" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-two__input-box">
                                            <input type="email" name="email" placeholder="E-mail" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-two__input-box text-message-box">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class=" col-xl-12">
                                        <div class="contact-two__btn-box">
                                            <button type="submit" name="submit" class="thm-btn contact-two__btn">Submit
                                                Now <span></span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="contact-two__right">
                            <div class="contact-two__img">
                                <img src="assets/images/resources/contact-two-img-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Two End-->

        <!--Google Map Start-->
        <section class="google-map-one google-map-two">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49908740.003386706!2d57.16673095142648!3d14.984089211361034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e1!3m2!1sen!2sin!4v1718106541892!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </section>
        <!--Google Map End-->

        <?php include('footer.php'); ?>