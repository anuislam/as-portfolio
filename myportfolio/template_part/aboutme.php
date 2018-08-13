<?php 

$prifix = as_portfolio_prifix;

$About	     = cs_get_option($prifix.'about_title_first', "About");
$Me	        = cs_get_option($prifix.'about_title_seccend', "Me");
$title_bg   = cs_get_option($prifix.'about_title_bg', "Resume");
$profile	= wp_get_attachment_image_src( cs_get_option( $prifix.'about_your_pic' ), 'as-portfolio-about-image' );

$about_information   = cs_get_option($prifix.'about_information');
$about_information_right   = cs_get_option($prifix.'about_information_right');
$about_experience   = cs_get_option($prifix.'about_experience');
$about_education   = cs_get_option($prifix.'about_education');
$about_skills   = cs_get_option($prifix.'about_skills');
$footer_expertise   = cs_get_option($prifix.'about_section_footer_expertise');


?><!-- About Section Starts -->
<section>
    <!-- About Title Starts -->
    <div class="bl-box valign-wrapper">
        <div class="page-title center-align">
            <span class="title-bg"><?php echo $title_bg; ?></span>
            <h2 class="center-align">
                <span data-hover="<?php echo $About; ?>"><?php echo $About; ?> </span>
                <span data-hover="<?php echo $Me; ?>"><?php echo $Me; ?></span>
            </h2>
        </div>
    </div>
    <!-- About Title Ends -->
    <!-- About Expanded Starts -->
    <div class="bl-content">
        <!-- Main Heading Starts -->
        <div class="container page-title center-align">
            <h2 class="center-align">
                <span data-hover="<?php echo $About; ?>"><?php echo $About; ?> </span>
                <span data-hover="<?php echo $Me; ?>"><?php echo $Me; ?></span>
            </h2>
            <span class="title-bg"><?php echo $title_bg; ?></span>
        </div>
        <!-- Main Heading Ends -->
        <div class="container infos">
			<!-- Divider Starts -->
            <div class="divider center-align">
                <span class="outer-line"></span>
                <span class="fa fa-vcard" aria-hidden="true"></span>
                <span class="outer-line"></span>
            </div>
			<!-- Divider Ends -->
			<!-- Personal Informations Starts -->
            <div class="row">
				<!-- Picture Starts -->
                <div class="col s12 m5 l4 xl3 profile-picture">
					<img src="<?php echo (empty($profile[0]) === false) ? $profile[0] :  get_theme_file_uri( 'images/photo-about.jpg' ); ?>" class="responsive-img my-picture" alt="My Photo">
                </div>
				<!-- Picture Ends -->
                <div class="col s12 m7 l8 xl9 personal-info">
                    <h6 class="uppercase"><i class="<?php echo cs_get_option($prifix.'about_your_icon', "fa fa-user"); ?>"></i> <?php echo cs_get_option($prifix.'about_your_title', "Personal Informations"); ?></h6>
					<div class="col m12 l7 xl7 p-none">
						<p class="second-font"><?php echo cs_get_option($prifix.'about_your_desc', "I'm a Freelance Web Designer & Developer based in Madrid, Spain.<br>
                        I have serious passion for UI effects, animations and creating intuitive, 
                        with over a decade of experience."); ?>
						</p>
					</div>
                    <div class="col s12 m12 l6 p-none">
                        <ul class="second-font list-1">
                            <?php 

                            if (empty($about_information) === false) {
                                foreach ($about_information as $key => $info) {
                                ?>
                                    <li><span class="font-weight-600"><?php echo $info['name'] ?>: </span><?php echo $info['val'] ?></li>
                                <?php
                                }
                            }else{
                                ?>
                                    <li><span class="font-weight-600">First Name: </span>Marco</li>
                                    <li><span class="font-weight-600">Last Name: </span>Simeone</li>
                                    <li><span class="font-weight-600">Date of birth: </span>21 june 1990 </li>
                                    <li><span class="font-weight-600">Nationality: </span>Spanish</li>
                                    <li><span class="font-weight-600">Freelance: </span>Available</li>
                                <?php
                            }

                             ?>

                        </ul>
                    </div>
                    <div class="col s12 m12 l6 p-none">
                        <ul class="second-font list-2">


                            <?php 

                            if (empty($about_information_right) === false) {
                                foreach ($about_information_right as $key => $infor8) {
                                ?>
                                    <li><span class="font-weight-600"><?php echo $infor8['name'] ?>: </span><?php echo $infor8['val'] ?></li>
                                <?php
                                }
                            }else{
                                ?>                            
                                    <li><span class="font-weight-600">Phone: </span>+34 21 18 40 10</li>
                                    <li><span class="font-weight-600">Address: </span>Madrid, Spain</li>
                                    <li><span class="font-weight-600">Email: </span>you@yourwebsite.com</li>
                                    <li><span class="font-weight-600">Spoken Langages: </span>French - German</li>
                                    <li><span class="font-weight-600">Skype: </span>marco.simeone</li>
                                <?php
                            }

                             ?>
                        </ul>
                    </div>
                    <a href="<?php echo cs_get_option($prifix.'about_resume_url','#'); ?>" class="col s12 m12 l4 xl4 waves-effect waves-light btn font-weight-500">
						<?php echo cs_get_option($prifix.'about_resume_text','Download Resume'); ?> <i class="<?php echo cs_get_option($prifix.'about_resume_icon','fa fa-file-pdf-o'); ?>"></i>
					</a>
					<a href="<?php echo cs_get_option($prifix.'my_blog_url','#'); ?>" class="col s12 m12 l4 xl4 btn btn-blog font-weight-500"><?php echo cs_get_option($prifix.'my_blog_text','My Blog '); ?>
						 <i class="<?php echo cs_get_option($prifix.'my_blog_icon','fa fa-edit'); ?>"></i>
					</a>
                </div>
            </div>
			<!-- Personal Informations Ends -->
        </div>
		<!-- Resume Starts -->
		<div class="resume-container">
            <div class="container">
                <div class="valign-wrapper row">
					<!-- Resume Menu Starts -->
                    <div class="resume-list col l4">
                        <div class="resume-list-item is-active" data-index="0" id="resume-list-item-0">
                            <div class="resume-list-item-inner">
                                <h6 class="resume-list-item-title uppercase"><i class="fa fa-briefcase"></i> Experience</h6>
                            </div>
                        </div>
                        <div class="resume-list-item" data-index="1" id="resume-list-item-1">
                            <div class="resume-list-item-inner">
                                <h6 class="resume-list-item-title uppercase"><i class="fa fa-graduation-cap"></i> Education</h6>
                            </div>
                        </div>
                        <div class="resume-list-item" data-index="2" id="resume-list-item-2">
                            <div class="resume-list-item-inner">
                                <h6 class="resume-list-item-title uppercase"><i class="fa fa-star"></i> Skills</h6>
                            </div>
                        </div>
                    </div>
					<!-- Resume Menu Ends -->
					<!-- Resume Content Starts -->
                    <div class="col s12 m12 l8 resume-cards-container">
                        <div class="resume-cards">
							<!-- Experience Starts -->
                            <div class="resume-card resume-card-0" data-index="0">
								<!-- Experience Header Title Starts -->
                                <div class="resume-card-header">
                                    <div class="resume-card-name"><i class="fa fa-briefcase"></i> Experience</div>
                                </div>
								<!-- Experience Header Title Ends -->
								<!-- Experience Content Starts -->
                                <div class="resume-card-body experience">
                                    <div class="resume-card-body-container second-font">
                                        <?php 

                                            if (empty($about_experience) === false) {
                                                $sp1 = 0;
                                                foreach ($about_experience as $key => $experience) {

                                                    echo ($sp1  > 0) ? '<span class="separator"></span>' : '' ;


                                                    ?>
                                                    <div class="resume-content">
                                                        <h6 class="uppercase"><span><?php echo $experience['name'] ?> - </span><?php echo $experience['company'] ?></h6>
                                                        <span class="date"><i class="fa fa-calendar-o"></i> <?php echo $experience['date'] ?></span>
                                                        <p><?php echo $experience['desc'] ?></p>
                                                    </div>
                                                    <?php
                                                    $sp1++;
                                                }
                                            }else{
                                                ?>
                                                    <!-- Single Experience Starts -->
                                                    <div class="resume-content">
                                                        <h6 class="uppercase"><span>Web Designer - </span>Envato</h6>
                                                        <span class="date"><i class="fa fa-calendar-o"></i> 2015 - 2018</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper</p>
                                                    </div>
                                                    <!-- Single Experience Ends -->
                                                    <span class="separator"></span>
                                                    <!-- Single Experience Starts -->
                                                    <div class="resume-content">
                                                        <h6 class="uppercase"><span>Web Developer - </span>Google</h6>
                                                        <span class="date"><i class="fa fa-calendar-o"></i> 2011 - 2015</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper</p>
                                                    </div>
                                                    <!-- Single Experience Ends -->
                                                    <span class="separator"></span>
                                                    <!-- Single Experience Starts -->
                                                    <div class="resume-content">
                                                        <h6 class="uppercase"><span>Community Manager - </span>Adobe</h6>
                                                        <span class="date"><i class="fa fa-calendar-o"></i> 2007 - 2011</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper</p>
                                                    </div>
                                                    <!-- Single Experience Ends -->
                                        
                                                <?php
                                            }

                                         ?>
                                    </div>
                                </div>
								<!-- Experience Content Starts -->
                            </div>
							<!-- Experience Ends -->
							<!-- Education Starts -->
                            <div class="resume-card resume-card-1" data-index="1">
								<!-- Education Header Title Starts -->
                                <div class="resume-card-header">
                                    <div class="resume-card-name"><i class="fa fa-graduation-cap"></i> Education</div>
                                </div>
								<!-- Education Header Title Starts -->
                                <div class="resume-card-body education">
                                    <div class="resume-card-body-container second-font">
                                        <?php 

                                            if (empty($about_education) === false) {
                                                $sp1 = 0;
                                                foreach ($about_education as $key => $education) {
                                                    echo ($sp1  > 0) ? '<span class="separator"></span>' : '' ;
                                                    ?>

                                                    <div class="resume-content">
                                                        <h6 class="uppercase"><span><?php echo $education['name'] ?> - </span><?php echo $education['company'] ?></h6>
                                                        <span class="date"><i class="fa fa-calendar-o"></i> <?php echo $education['date'] ?></span>
                                                        <p><?php echo $education['desc'] ?></p>
                                                    </div>

                                                    <?php
                                                    $sp1++;
                                                }
                                            }else{
                                                ?>

                                                    <!-- Single Education Starts -->
                                                    <div class="resume-content">
                                                        <h6 class="uppercase"><span>Engineering Diploma - </span>Oxford University</h6>
                                                        <span class="date"><i class="fa fa-calendar-o"></i> 2015 - 2018</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper</p>
                                                    </div>
                                                    <!-- Single Education Ends -->
                                                    <span class="separator"></span>
                                                    <!-- Single Education Starts -->
                                                    <div class="resume-content">
                                                        <h6 class="uppercase"><span>Masters Degree - </span>Paris University</h6>
                                                        <span class="date"><i class="fa fa-calendar-o"></i> 2011 - 2015</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper</p>
                                                    </div>
                                                    <!-- Single Education Ends -->
                                                    <span class="separator"></span>
                                                    <!-- Single Education Starts -->
                                                    <div class="resume-content">
                                                        <h6 class="uppercase"><span>Bachelor Degree - </span>Berlin Higher Institute</h6>
                                                        <span class="date"><i class="fa fa-calendar-o"></i> 2007 - 2011</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium orci sit amet mi ullamcorper</p>
                                                    </div>
                                                    <!-- Single Education Ends -->

                                                <?php
                                            }

                                         ?>
                                    </div>
                                </div>
                            </div>
							<!-- Education Ends -->
							<!-- Skills Starts -->
                            <div class="resume-card resume-card-2" data-index="2">
								<!-- Skills Header Title Starts -->
                                <div class="resume-card-header">
                                    <div class="resume-card-name"><i class="fa fa-star"></i> Skills</div>
                                </div>
								<!-- Skills Header Title Starts -->
                                <div class="resume-card-body skills">
                                    <div class="resume-card-body-container second-font">
                                        <div class="row">                                                
                                                <?php 

                                                if (empty($about_skills) === false) {
                                                    echo '<div class="col s6">';

                                                    $divcounter = round(count($about_skills) / 2);
                                                    $counter = 1;


                                                    foreach ($about_skills as $key => $skill) {
                                                        $expertise = explode('.', $skill['expertise']);

                                                       ?>

                                                        <!-- Single Skills Starts -->
                                                        <div class="resume-content">
                                                            <h6 class="uppercase"><?php echo $skill['name'] ?></h6>
                                                            <p>
                                                            <?php 
                                                               for ($i=1; $i < 6 ; $i++) { 
                                                                    if ((int)$expertise[0] >= $i) {                                                           
                                                                        echo '<i class="fa fa-star"></i>';
                                                                    }else if((int)$expertise[1] == 50){
                                                                        echo '<i class="fa fa-star-half-empty"></i>';
                                                                        $expertise[1] = 00;
                                                                    }else{
                                                                        echo '<i class="fa fa-star-o"></i>';
                                                                    }
                                                                }
                                                             ?>
                                                            </p>
                                                        </div>
                                                        <!-- Single Skills Ends -->

                                                       <?php
                                                        if ($counter == $divcounter) {
                                                            echo '</div><div class="col s6">';
                                                        }
                                                         $counter++;                                                       
                                                    }
                                                    echo '</div>';
                                                }else{
                                                    ?>
                                                        <!-- Skills Row Starts -->
                                                        <div class="col s6">
                                                            <!-- Single Skills Starts -->
                                                            <div class="resume-content">
                                                                <h6 class="uppercase">html</h6>
                                                                <p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></p>
                                                            </div>
                                                            <!-- Single Skills Ends -->
                                                            <!-- Single Skills Starts -->
                                                            <div class="resume-content">
                                                                <h6 class="uppercase">javascript</h6>
                                                                <p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-empty"></i></p>
                                                            </div>
                                                            <!-- Single Skills Ends -->
                                                            <!-- Single Skills Starts -->
                                                            <div class="resume-content">
                                                                <h6 class="uppercase">css</h6>
                                                                <p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-empty"></i></p>
                                                            </div>
                                                            <!-- Single Skills Ends -->
                                                            <!-- Single Skills Starts -->
                                                            <div class="resume-content">
                                                                <h6 class="uppercase">php</h6>
                                                                <p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
                                                            </div>
                                                            <!-- Single Skills Ends -->
                                                            <!-- Single Skills Starts -->
                                                            <div class="resume-content">
                                                                <h6 class="uppercase">jquery</h6>
                                                                <p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></p>
                                                            </div>
                                                            <!-- Single Skills Ends -->
                                                            <!-- Single Skills Starts -->
                                                            <div class="resume-content">
                                                                <h6 class="uppercase">angular js</h6>
                                                                <p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
                                                            </div>
                                                            <!-- Single Skills Ends -->
                                                        </div>
                                                        <!-- Skills Row Ends -->
                                                        <!-- Skills Row Starts -->
                                                        <div class="col s6">
                                                            <!-- Single Skills Starts -->
                                                            <div class="resume-content">
                                                                <h6 class="uppercase">wordpress</h6>
                                                                <p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-empty"></i></p>
                                                            </div>
                                                            <!-- Single Skills Ends -->
                                                            <!-- Single Skills Starts -->
                                                            <div class="resume-content">
                                                                <h6 class="uppercase">joomla</h6>
                                                                <p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-empty"></i> <i class="fa fa-star-o"></i></p>
                                                            </div>
                                                            <!-- Single Skills Ends -->
                                                            <!-- Single Skills Starts -->
                                                            <div class="resume-content">
                                                                <h6 class="uppercase">magento</h6>
                                                                <p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i></p>
                                                            </div>
                                                            <!-- Single Skills Ends -->
                                                            <!-- Single Skills Starts -->
                                                            <div class="resume-content">
                                                                <h6 class="uppercase">drupal</h6>
                                                                <p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></p>
                                                            </div>
                                                            <!-- Single Skills Ends -->
                                                            <!-- Single Skills Starts -->
                                                            <div class="resume-content">
                                                                <h6 class="uppercase">Adobe Photoshop</h6>
                                                                <p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i></p>
                                                            </div>
                                                            <!-- Single Skills Ends -->
                                                            <!-- Single Skills Starts -->
                                                            <div class="resume-content">
                                                                <h6 class="uppercase">Adobe illustrator</h6>
                                                                <p><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-empty"></i> <i class="fa fa-star-o"></i></p>
                                                            </div>
                                                            <!-- Single Skills Ends -->
                                                        </div>
                                                        <!-- Skills Row Ends -->

                                                    <?php
                                                }

                                                 ?>                                            
											<!-- Skills Row Ends -->
                                        </div>
                                    </div>
                                </div>
                            </div>
							<!-- Skills Ends -->
                        </div>
                    </div>
					<!-- Resume Content Ends -->
                </div>
            </div>
        </div>
		<!-- Resume Ends -->
		<!-- Fun Facts Starts -->
        <div class="container badges">
            <?php 
            if (empty($footer_expertise) === false) : ?>
                <div class="row">
                    <?php 
                    $c9 = 0;
                    foreach ($footer_expertise as $key => $foot_expertise):

                    if ($c9 > 0 ) {
                        if ($c9 % 3 == 0) {
                           echo '</div><div class="row">';
                        }
                    }

                    $c9++;
                     ?>

                    <!-- Fact Badge Item Starts -->
                    <div class="col s12 m4 l4 center-align">
                        <h3>
                            <i class="<?php echo $foot_expertise['icon'] ?>"></i>
                            <span class="font-weight-700"><?php echo $foot_expertise['expertise'] ?></span>
                        </h3>
                        <h6 class="uppercase font-weight-500"><?php echo $foot_expertise['desc'] ?></h6>
                    </div>
                    <!-- Fact Badge Item Ends -->

                    <?php endforeach ?>
                </div>
            <?php else : ?>

            <div class="row">
                <!-- Fact Badge Item Starts -->
                <div class="col s12 m4 l4 center-align">
                    <h3>
                        <i class="fa fa-suitcase"></i>
						<span class="font-weight-700">7+</span>
                    </h3>
                    <h6 class="uppercase font-weight-500">Years Experience</h6>
                </div>
                <!-- Fact Badge Item Ends -->
                <!-- Fact Badge Item Starts -->
                <div class="col s12 m4 l4 center-align">
                    <h3>
                        <i class="fa fa-check-square"></i>
						<span class="font-weight-700">89+</span>
                    </h3>
                    <h6 class="uppercase font-weight-500">Done Projects</h6>
                </div>
                <!-- Fact Badge Item Ends -->
                <!-- Fact Badge Item Starts -->
                <div class="col s12 m4 l4 center-align">
                     <h3>
                        <i class="fa fa-heart"></i>
						<span class="font-weight-700">77+</span>
                    </h3>
                    <h6 class="uppercase font-weight-500">Happy customers</h6>
                </div>
                <!-- Fact Badge Item Ends -->
            </div>

            <?php endif; ?>
        </div>
		<!-- Fun Facts Ends -->
    </div>
    <!-- End Expanded About -->
    <img alt="close" src="<?php echo get_theme_file_uri( 'images/close-button.png' ); ?>" class="bl-icon-close" />
</section>
<!-- About Ends -->
