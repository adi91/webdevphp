<!DOCTYPE html>
<html lang="en" class="no-js">

<?php 
include 'Resources.php';
?>

<body>
	
	<?php
	include 'menubar.php';
	?>
		
    <div class="page-content show-content">
		<div class="home-background">			
			<div class="offer-ticker alignleft inline">
				<div class="ticker-text">
				Subscribe for monthly tiffin service and get 10% discount. Use Coupon code <b>TIFFIN30</b>.
				</div>
                <a id="modal_trigger" href="#modal" class="btn">Click here to Login or register</a>
                <!--<button id="create-user">Create new user</button>-->
<!--				<div class="ticker-text login">
				    <a><b>Sign Up</b></a>
				</div>
				<div class="ticker-text login">
				    <a><b>Log In</b></a>
				</div>-->
			</div>
		
			<div class="home-page">
				<section class="main-slider">
					<div class="liquid-slider" id="slider-4">
							<div id="slide-1">
							  <h2 class="title">*Welcome to TiffinChef*</h2>
							  <p>Food Gallery</p>
							  <div class="slide-button">
							  <a href="#4" class="pure-button" onclick="api2.goToURL();">View</a>
							  </div>
							</div>
							<div id="slide-2">
							  <h2 class="title">*Different Tiffin Types*</h2>
							  <p>Tiffin Menu</p>
							  <div class="slide-button">
							  <a href="#4" id="slide-button" class="pure-button" onclick="api2.goToURL();api.updateClass($(this))">View</a>
							  </div>
							</div>
							<div id="slide-3">
							  <h2 class="title">Eat Healthy</h2>
							  <p>Health Menu</p>
							  <div class="slide-button">
							  <a href="#4" id="slide-button" class="pure-button" onclick="api2.goToURL();api.updateClass($(this))">View</a>
							  </div>
							</div>
					  </div>
					  <div class="slider-side-content">
							<div id="side-content-1">
								Get Trial Tiffin<br>Free
								<a href="#4" class="slide-button" onclick="api2.goToURL();api.updateClass($(this))">Here</a>
							</div>
							<div id="side-content-2">
								Search Availability<br>
								<div style="text-align:left;">City:&nbsp;&nbsp;<select class="slide-input"> </select><br>
								Area:&nbsp;<input class="slide-input"></input>
								<a href="" class="slide-button" onclick="api2.goToURL();api.updateClass($(this))">Go</a>
								</div>
							</div>
							<div id="side-content-3">
								Check Current Month's<br> Tiffin Schedule<br>
								<a href="" class="slide-button" onclick="api2.goToURL();api.updateClass($(this))">Here</a>
							</div>
					  </div>					  
				</section>
				 
				<!--<section class="section section-map">
					<div class="gmap-container">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9935.384012078837!2d-0.25927033908053837!3d51.49769340626005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760e3e7cbed197%3A0x69a31e8709c3904a!2s26+The+Ave!5e0!3m2!1spl!2s!4v1400593026197" height="480" style="border:0"></iframe>
					</div>
				</section>-->
			</div>
		</div>
			
        <section class="section section-services">
            <div class="container">
                <header class="entry-header aligncenter section-header section-services-header">
                    <h2 class="entry-title">Services</h2>                 
                </header>
            
                <ul class="clean-list services-list featured-items row">
                    <li class="col-md-4 col-sm-4">
                        <div>
                            <figure class="ovh">
                                <a href="recipe.html" class="font-4x grey text-dark-blue hover-blue hover-scale-120 transition-medium">
									<div class="service-overlap">
										<img src="resources/images/services/best-cousine.jpg" alt="Daily Tiffins" class="" />
										<div id="content-padding1">										
												A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart
										</div>
									<div>
                                </a>
                            </figure>
                            <div class="content-block background-white border-top-orange best-cousine-icon service-icon">
                                <h4 class="entry-title pre-line padding"><a href="#">Daily Tiffins</a></h4><hr />              
                                    <div class="svg-container">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 628 726" preserveAspectRatio="xMidYMid meet">
                                            <polygon points="723,314 543,625.769145 183,625.769145 3,314 183,2.230855 543,2.230855 723,314" stroke-width="4"/></svg>
                                    </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4">
                        <div>
                            <figure class="ovh">
                                <a href="recipe.html" class="font-4x grey text-dark-blue hover-blue hover-scale-120 transition-medium">
                                    <img src="resources/images/services/ideal-place.jpg" alt="Ideal Place" class="" />
									<div id="content-padding2">										
											A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart
									</div>
                                </a>
                            </figure>
                            <div class="content-block background-white border-top-orange ideal-place-icon service-icon">
                                <h4 class="entry-title pre-line padding"><a href="#">At Your Door</a></h4><hr />                                
                                    <div class="svg-container">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 628 726" preserveAspectRatio="xMidYMid meet">
                                            <polygon points="723,314 543,625.769145 183,625.769145 3,314 183,2.230855 543,2.230855 723,314" stroke-width="4"/></svg>
                                    </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4">
                        <div>
                            <figure class="ovh">
                                <a href="recipe.html" class="font-4x grey text-dark-blue hover-blue hover-scale-120 transition-medium">
                                    <img src="resources/images/services/good-rest.jpg" alt="Good Rest" />
									<div id="content-padding3">										
											A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart
									</div>
                                </a>
                            </figure>
                            <div class="content-block background-white border-top-green good-rest-icon service-icon">
                                <h4 class="entry-title pre-line padding"><a href="#">Manage Your Meal</a></h4><hr />                         
                                    <div class="svg-container">
                                         <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 628 726" preserveAspectRatio="xMidYMid meet">
                                            <polygon points="723,314 543,625.769145 183,625.769145 3,314 183,2.230855 543,2.230855 723,314" stroke-width="4" /></svg>
                                    </div>
                            </div>
                        </div>
                    </li>
                </ul><!-- /.featured-items -->
                
            </div>
        </section>

        <section class="section section-offer">
            <div class="container">
                <div class="offer-block section-block margin-section-block">
                    <div class="row no-margin">
                        <div class="col-md-6 no-padding">
                            <div class="offer-background"></div>
                        </div>
                        <div class="col-md-6 no-padding">
                            <header>
                                <h2 class="entry-title aligncenter background-blue no-margin">Best Offer</h2>
                            </header>
                            <div class="offer content-offer">
                                <h3 class="entry-title no-margin aligncenter">Monthly Tiffin</h3>
								<h3 class="entry-title no-margin aligncenter">Two Meals a Day</h3>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-3 col-sm-offset-3 col-xs-offset-3">
                                        <div class="shape-round double-round round-offer">
                                            <div class="round-center">
                                                <div class="center-me">only for<strong class="background-white">3240</strong></div>
												<div class="margin-top">( 10% off )</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-dishes">
            <div class="container">
                <div class="section-block dishes-block">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="content-dish-day relative">
                                   <header class="round-offer">
                                        <div class="shape-round background-green icon-tiffin-small">
                                                <h2 class="entry-title center-me">Today's Meal</h2>
                                        </div>
                                   </header>

                                   <figure>
                                        <a href="#"><img src="resources/images/dish-of-day.jpg" alt="portfolio item"></a>
                                        <figcaption class="background-white">
                                            <h2 class="entry-title no-margin aligncenter padding-top">Chicken. Soup</h2>
                                            
                                            <div class="ingredients padding row">
                                                <div class="col-md-4 col-sm-3 col-xs-3">
                                                    <h3 class="entry-title no-margin">Ingredients:</h3>
                                                </div>
                                                <div class="col-md-8 col-sm-9 col-xs-9">
                                                    <div class="tags-list post-tags-list "><a rel="tag" href="#">Chicken</a>,<a rel="tag" href="#">noodles</a>, <a rel="tag" href="#">carrots</a>, <a rel="tag" href="#">onions</a>, <a rel="tag" href="#">celery</a>, <a rel="tag" href="#">tomatoes</a>, <a rel="tag" href="#">salt</a>, <a rel="tag" href="#">pepper</a>, <a rel="tag" href="#">basil</a></div>
                                                </div>
                                            </div>
                                            <div class="price center-me background-orange half-padding">Rs. 70</div>
                                        </figcaption>
                                    </figure>
                               </div>
                            </div>

                            <div class="col-md-7">
                                <div class="content-sliders background-white padding" id="content_sliders">
                                    

                                    <div class="relative margin-top padding-top">
                                        <h2 class="entry-title no-margin">Tiffin Types</h2>
                                        <div class="slider lunch-slider" id="lunch">
                                            <ul class="slidesContainer clean-list row">
                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="resources/images/dishes/mascarpone-mousse.jpg" class="zoom-image"><img src="resources/images/dishes/mascarpone-mousse.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="post.html" title="Mascarpone mousse with nuts &amp; basil">Regular Tiffin</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>Rs. 60</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="resources/images/dishes/sandwiches-with-fried-bacon.jpg" class="zoom-image"><img src="resources/images/dishes/sandwiches-with-fried-bacon.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="post.html" title="Sandwiches with fried bacon &amp; sauce">Punjabi Tiffin</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>Rs. 60</span>
                                                        </div>
                                                    </div>
                                                </li>	

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="resources/images/dishes/cookies-with-honey-cream.jpg" class="zoom-image"><img src="resources/images/dishes/cookies-with-honey-cream.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="post.html" title="Cookies with honey cream and bananas">South Indian Tiffin</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>Rs. 60</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="resources/images/dishes/sandwiches-with-fried-bacon.jpg" class="zoom-image"><img src="resources/images/dishes/sandwiches-with-fried-bacon.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="post.html" title="Sandwiches with fried bacon &amp; sauce">Health Tiffin</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>Rs. 70</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li  class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="resources/images/dishes/donut-with-scrambled-eggs.jpg" class="zoom-image"><img src="resources/images/dishes/donut-with-scrambled-eggs.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="post.html" title="Donut with scrambled eggs and bacon">Donut with scrambled eggs and bacon</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$11.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="resources/images/dishes/cookies-with-honey-cream.jpg" class="zoom-image"><img src="resources/images/dishes/cookies-with-honey-cream.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="post.html" title="Cookies with honey cream and bananas">Cookies with honey cream and bananas</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$07.50</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="resources/images/dishes/sandwiches-with-fried-bacon.jpg" class="zoom-image"><img src="resources/images/dishes/sandwiches-with-fried-bacon.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="post.html" title="Sandwiches with fried bacon &amp; sauce">Sandwiches with fried bacon &amp; sauce</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$10.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="resources/images/dishes/mascarpone-mousse.jpg" class="zoom-image"><img src="resources/images/dishes/mascarpone-mousse.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="post.html" title="Mascarpone mousse with nuts &amp; basil">Mascarpone mousse with nuts &amp; basil</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$14.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="resources/images/dishes/cookies-with-honey-cream.jpg" class="zoom-image"><img src="resources/images/dishes/cookies-with-honey-cream.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="post.html" title="Cookies with honey cream and bananas">Cookies with honey cream and bananas</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$07.50</span>
                                                        </div>
                                                    </div>
                                                </li>


                                                <li  class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="resources/images/dishes/donut-with-scrambled-eggs.jpg" class="zoom-image"><img src="resources/images/dishes/donut-with-scrambled-eggs.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="post.html" title="Donut with scrambled eggs and bacon">Donut with scrambled eggs and bacon</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$11.00</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="relative margin-top padding-top border-top">
                                        <h2 class="entry-title no-margin">Packages</h2>
                                        <div class="slider lunch-slider" id="dinner">
                                            <ul class="slidesContainer clean-list row">

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="resources/images/dishes/sandwiches-with-fried-bacon.jpg" class="zoom-image"><img src="resources/images/dishes/sandwiches-with-fried-bacon.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="post.html" title="Sandwiches with fried bacon &amp; sauce">Monthly Package</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>Rs. 1620/30 Meals</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="resources/images/dishes/mascarpone-mousse.jpg" class="zoom-image"><img src="resources/images/dishes/mascarpone-mousse.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="post.html" title="Mascarpone mousse with nuts &amp; basil">Mascarpone mousse with nuts &amp; basil</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>Rs. 3240/60 Meals</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="resources/images/dishes/cookies-with-honey-cream.jpg" class="zoom-image"><img src="resources/images/dishes/cookies-with-honey-cream.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="post.html" title="Cookies with honey cream and bananas">Add More Meals</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>Rs. 60/Meal</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li  class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="resources/images/dishes/donut-with-scrambled-eggs.jpg" class="zoom-image"><img src="resources/images/dishes/donut-with-scrambled-eggs.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="post.html" title="Donut with scrambled eggs and bacon">Add Ons</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$11.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="resources/images/dishes/cookies-with-honey-cream.jpg" class="zoom-image"><img src="resources/images/dishes/cookies-with-honey-cream.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="post.html" title="Cookies with honey cream and bananas">Cookies with honey cream and bananas</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$07.50</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="resources/images/dishes/sandwiches-with-fried-bacon.jpg" class="zoom-image"><img src="resources/images/dishes/sandwiches-with-fried-bacon.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="post.html" title="Sandwiches with fried bacon &amp; sauce">Sandwiches with fried bacon &amp; sauce</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$10.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="resources/images/dishes/cookies-with-honey-cream.jpg" class="zoom-image"><img src="resources/images/dishes/cookies-with-honey-cream.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="post.html" title="Cookies with honey cream and bananas">Cookies with honey cream and bananas</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$07.50</span>
                                                        </div>
                                                    </div>
                                                </li>


                                                <li  class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="resources/images/dishes/donut-with-scrambled-eggs.jpg" class="zoom-image"><img src="resources/images/dishes/donut-with-scrambled-eggs.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="post.html" title="Donut with scrambled eggs and bacon">Donut with scrambled eggs and bacon</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$11.00</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                </div>
                            </div>
                         </div>
                    </div>
                </div>
        </section>

        <section class="section section-visit-us">
            <div class="container">
                <div class="section-block visit-us-block">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <header>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h2 class="entry-title ">Meet Our Chef</h2>
                                        <h3 class="entry-title-description no-margin">visit our restaurant, impeccable service will impress you</h3>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="chief"></div>
                                    </div>
                                </div>
                            </header>

                            <div class="visit-us content-visit-us">
                                <p>
                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment
                                </p>
                                <h3 class="entry-title">We are waiting for your feedback.</h3>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6"></div>
                    </div>
                </div>
            </div>
        </section>        

        <footer class="main-footer">
            <!-- Footer widgets -->
            <div class="big-footer">
                <div class="paralax paralax-content paralax-background" data-stellar-background-ratio="0.1">
                    <div class="container">

                        <div class="logo aligncenter margin-top-80">
                            <div class="identity relative">
                                <a rel="home" title="home" href="index.html">
                                    <img alt="Downtown theme logo" src="resources/images/downtown-logo.png" />
                                </a>
                            </div>
                        </div>
                        <div class="socials center-me margin-top-60">
                            <ul class="clean-list social-links clearfix">
                                <li class="i-facebook"><a title="facebook" target="_blank" href="https://www.facebook.com/TeslaThemes"><i class="facebook"></i></a></li>
                                <li class="i-twitter"><a title="twitter" target="_blank" href="https://twitter.com/teslathemes"><i class="twitter"></i></a></li>
                                <li class="i-pinterest"><a title="pinterest" target="_blank" href="http://www.pinterest.com/teslathemes/"><i class="pinterest"></i></a></li>
                                <li class="i-gplus"><a title="gplus" target="_blank" href="https://plus.google.com/u/0/103868954833393210572/"><i class="gplus"></i></a></li>
                                <li class="i-instagram"><a title="instagram" target="_blank" href="#"><i class="instagram"></i></a></li>
                                <li class="i-dribbble"><a title="dribbble" target="_blank" href="http://dribbble.com/TeslaThemes"><i class="dribbble"></i></a></li>
                                <li class="i-vimeo"><a title="vimeo" href="#" target="_blank"><i class="vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- /.container -->
            </div><!-- /.big-footer -->
            <!-- Copyright section -->
        </footer><!-- /.main-footer -->
        
       <?php  include 'login.php';?> 
       
    </div>
			  
    <!-- Scripts -->
    

	<script>
		$('#slider-4').liquidSlider({
			//hashLinking:true,
			crossLinks:true,
			firstPanelToLoad:1,
			slideEaseFunction:'resources/css/animate.css',
			slideEaseDuration:500,
			//heightEaseDuration:1000,
			animateIn: "fadeIn",
			animateOut: "fadeOut",
			continuous: true,
			autoSlide: true,
			autoHeight: false,
			dynamicTabs: false
		  });

		  var api2 = $.data( $('#slider-4')[0], 'liquidSlider');
		  /*$('.enable-hash').on('click', function(e){
			e.preventDefault();
			api2.options.hashLinking = true;
			api2.buildHashTags();
			$(this).fadeOut();
		  }); */  
		  
		  $(document).ready(function(){
			$(window).resize(function(){
				
				$('.slide-button .pure-button').css({
					position:'absolute',
					left: ($('#slider-4').width() - $('.pure-button').outerWidth())/2,
					//top: ($('#slider-4').height() - $('.pure-button').outerHeight())/2
				});				
			});
			// To initially run the function:
			$(window).resize();
		});
        
        
    $("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
        $(".user_login").show();
		// Calling Login Form
		$("#login_form").click(function(){
			$(".user_login").show();
//			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".user_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").show();
			$(".user_register").hide();
			$(".header_title").text('Login');
			return false;
		});

	})
    $("#submit_login").click(function(){
        alert('pop');
//			return false;
    });
    
</script>

</body>
</html>
