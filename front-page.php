            <?php
            get_header();
            ?>
           
           <article>
            <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    the_content();
                }
            }
            ?>
            </article>
             <!-- HOME -->
            
             <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title">Glamorous</h1>
                        <h2 class="home__subtitle">Your Elegance <br> is here.</h2>
                        <a href="#" class="button">Shop now</a>
                    </div>
                    <div class="img_about_div"><img class="img_about" src=" <?php bloginfo('template_url') ?> /assets/img/home.png" alt="avatar"></div>
                  
                </div>
            </section>
            
            <!-- ABOUT -->
            <section class="about section bd-container" id="about">
                <div class="about__container  bd-grid">
                    <div class="about__data">
                        <span class="section-subtitle about__initial">About us</span>
                        <h2 class="section-title about__initial"> The Best Elegant Jewellery</h2>
                        <p class="about__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span>
                            </p>
                           <a  class="button"onclick="myFunction()" id="myBtn">Read more</a>
                        
                    </div>
                    <div class="img_about_div"><img class="img_about" src=" <?php bloginfo('template_url') ?> /assets/img/about.jpg" alt="avatar"></div>
                   
                </div>
            </section>

            <!-- SERVICES -->
            <section class="services section bd-container" id="services">
                <span class="section-subtitle">Offering</span>
                <h2 class="section-title">Our amazing services</h2>

                <div class="services__container  bd-grid">
                    <div class="services__content">
                        
                        <h3 class="services__title">Fashionable Collections</h3>
                        <p class="services__description">Any jewellery accessoire you wish for.</p>
                    </div>

                    <div class="services__content">
                        <h3 class="services__title">Free Shipping</h3>
                        <p class="services__description">Free shipping on orders in Morocco.</p>
                    </div>

                    <div class="services__content">
                        <h3 class="services__title">100% Money Back</h3>
                        <p class="services__description">If the item didn't suit you.</p>
                    </div>
                </div>
            </section>

            <!-- blog -->
            <section class="blog section bd-container" id="blog">
                <span class="section-subtitle">Blog</span>
                <h2 class="section-title">The latest details and articles Writen by our professional designers</h2>

                <div class="menu__container bd-grid">
                    <div class="menu__content">
                    <div class="img_about_div"><img class="menu_img" src=" <?php bloginfo('template_url') ?> /assets/img/accessoire1.png" alt="avatar"></div>
                        <h3 class="menu__name">Blossoms</h3>
                        <span class="menu__detail">Read About the signification</span>
                        <a href="http://localhost/mytheme/post-1/" class="button menu__button"><i name="Read more" >Read more</i></a>
                    </div>

                    <div class="menu__content">
                    <div class="img_about_div"><img class="menu_img" src=" <?php bloginfo('template_url') ?> /assets/img/accessoire2.png" alt="avatar"></div>
                        <h3 class="menu__name">Sunshine</h3>
                        <span class="menu__detail">Read About the signification</span>
                        <a href="http://localhost/mytheme/post2/" class="button menu__button"><i name="Read more" >Read more</i></a>
                    </div>
                    
                    <div class="menu__content">
                    <div class="img_about_div"><img class="menu_img" src=" <?php bloginfo('template_url') ?> /assets/img/accessoire3.png" alt="avatar"></div>
                        <h3 class="menu__name">Summer</h3>
                        <span class="menu__detail">Read About the signification</span>
                        <a href="http://localhost/mytheme/post-3/" class="button menu__button"><i name="Read more" >Read more</i></a>
                    </div>
                    <div class="menu__content">
                    <div class="img_about_div"><img class="menu_img" src=" <?php bloginfo('template_url') ?> /assets/img/accessoire4.png" alt="avatar"></div>
                        <h3 class="menu__name">Daylight</h3>
                        <span class="menu__detail">Read About the signification</span>
                        <a href="http://localhost/mytheme/post-4/" class="button menu__button"><i name="Read more" >Read more</i></a>
                    </div>
                    <div class="menu__content">
                    <div class="img_about_div"><img class="menu_img" src=" <?php bloginfo('template_url') ?> /assets/img/accessoire5.png" alt="avatar"></div>
                        <h3 class="menu__name">Sense</h3>
                        <span class="menu__detail">Read About the signification</span>
                        <a href="http://localhost/mytheme/post-5/" class="button menu__button"><i name="Read more" >Read more</i></a>
                    </div>
                    <div class="menu__content">
                    <div class="img_about_div"><img class="menu_img" src=" <?php bloginfo('template_url') ?> /assets/img/accessoire6.png" alt="avatar"></div>
                       <!-- <img src="assets/img/accessoire6.png" alt="" class="menu__img">-->
                        <h3 class="menu__name"><?php the_title(); ?></h3>
                        <span class="menu__detail">Read About the signification</span>
                        <a href="http://localhost/mytheme/post-6/" class="button menu__button"><i name="Read more" >Read more</i></a>
                    </div>
                </div>
            </section>

            <!-- APP -->
            <section class="app section bd-container">
                <div class="app__container bd-grid">
                    <div class="app__data">
                        <span class="section-subtitle app__initial">App</span>
                        <h2 class="section-title app__initial">Our App is available</h2>
                        <p class="app__description">Download our app, make shopping fun and easy and stay tuned with our latest products with professional designers.</p>
                        <div class="app__stores">
                        <a href="#"><img class="app__store" src=" <?php bloginfo('template_url') ?> /assets/img/app1.png" alt="avatar"></a>
                           
                           <a href="#"><img class="app__store" src=" <?php bloginfo('template_url') ?> /assets/img/app2.png" alt="avatar"></a>
                           
                        </div>
                    </div>
                    <img class="app__img" src=" <?php bloginfo('template_url') ?> /assets/img/movil-app.png" alt="avatar">
                    
                </div>
            </section>

            <!-- CONTACT US -->
            <section class="contact section bd-container" id="contact">
                <div class="contact__container bd-grid">
                    <div class="contact__data">
                        <span class="section-subtitle contact__initial">Let's talk</span>
                        <h2 class="section-title contact__initial">Contact us</h2>
                        <p class="contact__description">Get In Touch With Us For The Best Quality Jewellery Collections & Accessoires.</p>
                    </div>

                    
                        
                   
                    <div>
                        <!--Section: Contact v.2-->
<section class="mb-4">

  

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                              </div>
                    </div>
                </div>
                <!--Grid row-->

                <div class="row">

                    
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                

            </form>

            <div class="text-center text-md-left">
                <a href="#" class="button" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>

    </div>

</section>

                    </div>
                </div>
            </section>
        </main>

       <?php
       get_footer();
       ?>
       
            
    
      