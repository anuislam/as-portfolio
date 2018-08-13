<?php 

$prifix = as_portfolio_prifix;

$get       = cs_get_option($prifix.'contact_title_first', "get");
$intouch   = cs_get_option($prifix.'contact_title_seccend', "in touch");
$contact   = cs_get_option($prifix.'contact_title_bg', "Contact");

?><!-- Contact Title Starts -->
<section>
	<!-- Contact Title Starts -->
    <div class="bl-box valign-wrapper">
        <div class="page-title center-align">
            <span class="title-bg"><?php echo $contact; ?></span>
            <h2 class="center-align">
                <span data-hover="<?php echo $get; ?>"><?php echo $get; ?> </span>
                <span data-hover="<?php echo $intouch; ?>"><?php echo $intouch; ?></span>
            </h2>
        </div>
    </div>
	<!-- Contact Title Ends -->
    <!-- Expanded Contact Starts -->
    <div class="bl-content">
        <!-- Main Heading Starts -->
        <div class="container page-title center-align">
            <h2 class="center-align">
                <span data-hover="<?php echo $get; ?>"><?php echo $get; ?> </span>
                <span data-hover="<?php echo $intouch; ?>"><?php echo $intouch; ?></span>
            </h2>
			<span class="title-bg"><?php echo $contact; ?></span>
        </div>
        <!-- Main Heading Ends -->
        <div class="container">
            <!-- Divider Starts -->
            <div class="divider center-align">
                <span class="outer-line"></span>
                <span class="fa fa-envelope-open" aria-hidden="true"></span>
                <span class="outer-line"></span>
            </div>
            <!-- Divider Ends -->
            <div class="row contact">
				<!-- Contact Infos Starts -->
                <div class="col s12 m5 l3 xl3 leftside">
					<!-- Contacts Starts -->
                    <h6 class="font-weight-500 uppercase">Phone</h6>
                    <span class="font-weight-400 second-font"><i class="fa fa-phone"></i> <?php echo cs_get_option($prifix.'contact_sidebar_phon', '+34 62 11 84 01'); ?></span>
					<h6 class="font-weight-500 uppercase">Email</h6>
					<span class="font-weight-400 second-font"><i class="fa fa-envelope"></i> <?php echo cs_get_option($prifix.'contact_sidebar_email', 'you@youwebsite.com'); ?></span>
					<h6 class="font-weight-500 uppercase">Address</h6>
					<span class="font-weight-400 second-font"><i class="fa fa-home"></i>  <?php echo cs_get_option($prifix.'contact_sidebar_address', '123 Disney Street, Madrid'); ?></span>
					<!-- Contacts Ends -->
					<!-- Social Media Profiles Starts -->
                    <h6 class="font-weight-500 uppercase">Social Profiles</h6>
                    <div class="social">
                        <ul class="list-inline social social-intro center-align p-none">
                            <li class="facebook"><a href="<?php echo cs_get_option($prifix.'contact_social_facebook'); ?>"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="<?php echo cs_get_option($prifix.'contact_social_twitter'); ?>"><i class="fa fa-twitter"></i></a></li>
                            <li class="google-plus"><a href="<?php echo cs_get_option($prifix.'contact_social_google'); ?>"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a href="<?php echo cs_get_option($prifix.'contact_social_linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
					<!-- Social Media Profiles Ends -->
                </div>
				<!-- Contact Infos Ends -->

				<!-- Contact Form Starts -->
                <div class="col s12 m7 l9 xl9 rightside">
					<h6 class="uppercase m-none"><?php echo cs_get_option($prifix.'contact_form_title', 'FEEL FREE TO DROP ME A LINE'); ?></h6>
					<div class="row">
						<p class="col s12 m12 l7 xl7 second-font">							
							<?php echo cs_get_option($prifix.'contact_form_description', 'If you have any suggestion, project or even you want to say Hello.. please fill out the form below and I will reply you shortly.'); ?>
						</p>
					</div>

					<?php
					 $shortcode = cs_get_option($prifix.'contact_form_7_shortcode');
					 echo (empty($shortcode) === false) ? do_shortcode($shortcode) : '' ; ?>
                    <form class="contactform" method="post" action="php/process-form.php">
                        <!-- Name Field Starts -->
                        <div class="input-field second-font">
                            <i class="fa fa-user prefix"></i>
                            <input id="name" name="name" type="text" class="validate" required>
                            <label class="font-weight-400" for="name">Your Name</label>
                        </div>
                        <!-- Name Field Ends -->
                        <!-- Email Field Starts -->
                        <div class="input-field second-font">
                            <i class="fa fa-envelope prefix"></i>
                            <input id="email" type="email" name="email" class="validate" required>
                            <label for="email">Your Email</label>
                        </div>
                        <!-- Email Field Ends -->
                        <!-- Start Message Textarea Starts -->
                        <div class="input-field second-font">
                            <i class="fa fa-comments prefix"></i>
                            <textarea id="message" name="message" class="materialize-textarea" required></textarea>
                            <label for="message">Your message</label>
                        </div>
                        <!-- Message Textarea Ends -->
						<!-- Submit Form Button Starts -->
                        <div class="col s12 m12 l4 xl4 submit-form">
                            <button class="btn font-weight-500" type="submit" name="send">
								Send Message <i class="fa fa-send"></i>
							</button>
                        </div>
                        <!-- Submit Form Button Ends -->
                        <div class="col s12 m12 l8 xl8 form-message">
                            <span class="output_message center-align font-weight-500 uppercase"></span>
                        </div>
                    </form>
                </div>
                <!-- Contact Form Ends -->
            </div>
        </div>
    </div>
    <!-- Expanded Contact Ends -->
    <img alt="close" src="<?php echo get_theme_file_uri( 'images/close-button.png' ); ?>" class="bl-icon-close" />
</section>