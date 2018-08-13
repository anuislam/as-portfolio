
<div class="bl-panel-items" id="bl-panel-work-items">
<?php
$prifix = as_portfolio_prifix;
$args = array( 
  'post_type'       => 'portfolio', 
  'posts_per_page'  => -1,
);
$loop = new WP_Query( $args ); ?>
<?php if ($loop->have_posts()): ?>
<?php while ( $loop->have_posts() ) : $loop->the_post();
$meta = get_post_meta(get_the_ID(), $prifix.'portfolio_info', true );
$image = wp_get_attachment_image_src( $meta[$prifix.'portfolio_image'], 'as-portfolio-showcase-image' );
$gallery = explode(',', $meta[$prifix.'portfolio_gallery']);

    ?>

    <!-- Project Starts -->
    <div data-panel="panel-<?php echo get_the_ID(); ?>">
        <div class="row">
            <!-- Project Main Content Starts -->
            <?php if ($meta[$prifix.'portfolio_type'] == 'image'): ?>
            <div class="col s12 l6 xl6">
                <img class="responsive-img" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>" />
            </div>     
            <?php elseif ($meta[$prifix.'portfolio_type'] == 'gallery'): ?>

            <!-- Project Main Content Starts -->
            <div class="col s12 l6 xl6">
                <div class="carousel carousel-slider">
                    <?php 
                    if (empty($gallery) === false) {
                        foreach ($gallery as $key => $gal) {
                            $galimage = wp_get_attachment_image_src( $gal, 'as-portfolio-showcase-image' );
                            ?>
                            <a class="carousel-item" href="#one!"><img class="responsive-img" src="<?php echo $galimage[0]; ?>" alt="<?php echo trim( strip_tags( get_post_meta( $gal, '_wp_attachment_image_alt', true ) ) ) ?>" ></a>
                            <?php
                        }
                    }
                     ?>
                </div>
            </div>
            <!-- Project Main Content Ends -->

            <?php elseif ($meta[$prifix.'portfolio_type'] == 'video'): ?>

            <!-- Project Main Content Starts -->
            <div class="col s12 l6 xl6">
                <div class="videocontainer">
                    <iframe class="youtube-video" src="https://www.youtube.com/embed/<?php echo $meta[$prifix.'portfolio_video']; ?>" allowfullscreen></iframe>
                </div>
            </div>
            <!-- Project Main Content Ends -->

            <?php elseif ($meta[$prifix.'portfolio_type'] == 'local_video'): 
                $localvideoposter = wp_get_attachment_image_src( $meta[$prifix.'portfolio_local_poster'], 'as-portfolio-video-image' );
              ?>

            <!-- Project Main Content Starts -->
            <div class="col s12 l6 xl6">
                <video id="video" class="responsive-video" controls poster="<?php echo $localvideoposter[0]; ?>">
                    <source src="<?php echo $meta[$prifix.'portfolio_local_video']; ?>" type="video/mp4">
                </video>
            </div>
            <!-- Project Main Content Ends -->

            <?php endif; ?>
            <!-- Project Main Content Ends -->

            <!-- Project Details Starts -->
            <div class="col s12 l6 xl6">
                <h3 class="font-weight-600 white-text uppercase"><?php echo get_the_title(); ?></h3>
                <ul class="project-details white-text second-font">
                    <li><i class="fa fa-user"></i><span class="font-weight-600"> Client </span>: <span class="font-weight-400 uppercase"><?php echo $meta[$prifix.'portfolio_clint']; ?></span></li>
                    <li><i class="fa fa-calendar"></i><span class="font-weight-600"> Date </span>: <span class="font-weight-400 uppercase"><?php echo $meta[$prifix.'portfolio_date']; ?></span></li>
                    <li><i class="fa fa-cogs"></i> <span class="font-weight-600"> Used Technologies</span> : <span class="font-weight-400 uppercase"><?php echo $meta[$prifix.'portfolio_used_tec']; ?></span></li>
                </ul>
                <hr>
                <p class="white-text second-font"><?php echo $meta[$prifix.'portfolio_desc']; ?></p>
                <a href="<?php echo esc_url($meta[$prifix.'portfolio_prev_url']); ?>" class="waves-effect waves-light btn font-weight-500">Preview <i class="fa fa-external-link"></i></a>
            </div>
            <!-- Project Details Ends -->
        </div>
    </div>
    <!-- Project Ends -->

<?php endwhile; ?>
    
<?php else: ?>
	<!-- Project Starts -->
    <div data-panel="panel-1">
        <div class="row">
            <!-- Project Main Content Starts -->
            <div class="col s12 l6 xl6">
                <img class="responsive-img" src="<?php echo get_theme_file_uri( 'images/projects/project-1.jpg' ); ?>" alt="project" />
            </div>
            <!-- Project Main Content Ends -->
            <!-- Project Details Starts -->
            <div class="col s12 l6 xl6">
                <h3 class="font-weight-600 white-text uppercase">Image Project</h3>
                <ul class="project-details white-text second-font">
                    <li><i class="fa fa-user"></i><span class="font-weight-600"> Client </span>: <span class="font-weight-400 uppercase">Envato</span></li>
                    <li><i class="fa fa-calendar"></i><span class="font-weight-600"> Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                    <li><i class="fa fa-cogs"></i> <span class="font-weight-600"> Used Technologies</span> : <span class="font-weight-400 uppercase">php, html, css, javascript</span></li>
                </ul>
                <hr>
                <p class="white-text second-font">Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
                <a href="#" class="waves-effect waves-light btn font-weight-500">Preview <i class="fa fa-external-link"></i></a>
            </div>
            <!-- Project Details Ends -->
        </div>
    </div>
	<!-- Project Ends -->

	<!-- Project Starts -->
    <div data-panel="panel-2">
        <div class="row">
            <!-- Project Main Content Starts -->
            <div class="col s12 l6 xl6">
                <div class="carousel carousel-slider">
                    <a class="carousel-item" href="#one!"><img class="responsive-img" src="<?php echo get_theme_file_uri( 'images/projects/project-2.jpg' ); ?>" alt="project" ></a>
                    <a class="carousel-item" href="#two!"><img class="responsive-img" src="<?php echo get_theme_file_uri( 'images/projects/project-1.jpg' ); ?>" alt="project" ></a>
                    <a class="carousel-item" href="#three!"><img class="responsive-img" src="<?php echo get_theme_file_uri( 'images/projects/project-3.jpg' ); ?>" alt="project" ></a>
                    <a class="carousel-item" href="#four!"><img class="responsive-img" src="<?php echo get_theme_file_uri( 'images/projects/project-4.jpg' ); ?>" alt="project" ></a>
                </div>
            </div>
            <!-- Project Main Content Ends -->
            <!-- Project Details Starts -->
            <div class="col s12 l6 xl6">
                <h3 class="font-weight-600 white-text uppercase">Slider Project</h3>
                <ul class="project-details white-text second-font">
                    <li><i class="fa fa-user"></i><span class="font-weight-600"> Client </span>: <span class="font-weight-400 uppercase">Themeforest</span></li>
                    <li><i class="fa fa-calendar"></i><span class="font-weight-600"> Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                    <li><i class="fa fa-cogs"></i> <span class="font-weight-600"> Used Technologies</span> : <span class="font-weight-400 uppercase">php, html, css, javascript</span></li>
                </ul>
                <hr>
                <p class="white-text second-font">Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
                <a href="#" class="waves-effect waves-light btn font-weight-500">Preview <i class="fa fa-external-link"></i></a>
            </div>
            <!-- Project Details Ends -->
        </div>
    </div>
	<!-- Project Ends -->
	<!-- Project Starts -->
    <div data-panel="panel-3">
        <div class="row">
            <!-- Project Main Content Starts -->
            <div class="col s12 l6 xl6">
                <div class="videocontainer">
                    <iframe class="youtube-video" src="https://www.youtube.com/embed/V-XWxqW5TU8" allowfullscreen></iframe>
                </div>
            </div>
            <!-- Project Main Content Ends -->
            <!-- Project Details Starts -->
            <div class="col s12 l6 xl6">
                <h3 class="font-weight-600 white-text uppercase">Youtube Video</h3>
                <ul class="project-details white-text second-font">
                    <li><i class="fa fa-user"></i><span class="font-weight-600"> Client </span>: <span class="font-weight-400 uppercase">Photodune</span></li>
                    <li><i class="fa fa-calendar"></i><span class="font-weight-600"> Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                    <li><i class="fa fa-cogs"></i> <span class="font-weight-600"> Used Technologies</span> : <span class="font-weight-400 uppercase">Adobe After Effects, Adobe Audition</span></li>
                </ul>
                <hr>
                <p class="white-text second-font">Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
                <a href="#" class="waves-effect waves-light btn font-weight-500">Preview <i class="fa fa-external-link"></i></a>
            </div>
            <!-- Project Details Ends -->
        </div>
    </div>
	<!-- Project Ends -->
	<!-- Project Starts -->
    <div data-panel="panel-4">
        <div class="row">
            <!-- Project Main Content Starts -->
            <div class="col s12 l6 xl6">
                <video id="video" class="responsive-video" controls poster="<?php echo get_theme_file_uri( 'images/projects/video/video-poster.png' ); ?>">
					<source src="https://www.sample-videos.com/video/mp4/720/big_buck_bunny_720p_1mb.mp4" type="video/mp4">
				</video>
            </div>
            <!-- Project Main Content Ends -->
            <!-- Project Details Starts -->
            <div class="col s12 l6 xl6">
                <h3 class="font-weight-600 white-text uppercase">Local Video</h3>
                <ul class="project-details white-text second-font">
                    <li><i class="fa fa-user"></i><span class="font-weight-600"> Client </span>: <span class="font-weight-400 uppercase">Videohive</span></li>
                    <li><i class="fa fa-calendar"></i><span class="font-weight-600"> Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                    <li><i class="fa fa-cogs"></i> <span class="font-weight-600"> Used Technologies</span> : <span class="font-weight-400 uppercase">Adobe After Effects, Movie Maker</span></li>
                </ul>
                <hr>
                <p class="white-text second-font">Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
                <a href="#" class="waves-effect waves-light btn font-weight-500">Preview <i class="fa fa-external-link"></i></a>
            </div>
            <!-- Project Details Ends -->
        </div>
    </div>
	<!-- Project Ends -->
	<!-- Project Starts -->
    <div data-panel="panel-5">
        <div class="row">
            <!-- Project Main Content Starts -->
            <div class="col s12 l6 xl6">
                <img src="<?php echo get_theme_file_uri( 'images/projects/project-5.jpg' ); ?>" alt="project" />
            </div>
            <!-- Project Main Content Ends -->
            <!-- Project Details Starts -->
            <div class="col s12 l6 xl6">
                <h3 class="font-weight-600 white-text uppercase">Image Project</h3>
                <ul class="project-details white-text second-font">
                    <li><i class="fa fa-user"></i><span class="font-weight-600"> Client </span>: <span class="font-weight-400 uppercase">Graphicriver</span></li>
                    <li><i class="fa fa-calendar"></i><span class="font-weight-600"> Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                    <li><i class="fa fa-cogs"></i> <span class="font-weight-600"> Used Technologies</span> : <span class="font-weight-400 uppercase">Adobe Photoshop, Gimp</span></li>
                </ul>
                <hr>
                <p class="white-text second-font">Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
                <a href="#" class="waves-effect waves-light btn font-weight-500">Preview <i class="fa fa-external-link"></i></a>
            </div>
            <!-- Project Details Ends -->
        </div>
    </div>
	<!-- Project Ends -->
	<!-- Project Starts -->
    <div data-panel="panel-6">
        <div class="row">
            <!-- Project Main Content Starts -->
            <div class="col s12 l6 xl6">
                <img src="<?php echo get_theme_file_uri( 'images/projects/project-6.jpg' ); ?>" alt="project" />
            </div>
            <!-- Project Main Content Ends -->
            <!-- Project Details Starts -->
            <div class="col s12 l6 xl6">
                <h3 class="font-weight-600 white-text uppercase">Image Project</h3>
                <ul class="project-details white-text second-font">
                    <li><i class="fa fa-user"></i><span class="font-weight-600"> Client </span>: <span class="font-weight-400 uppercase">Activeden</span></li>
                    <li><i class="fa fa-calendar"></i><span class="font-weight-600"> Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                    <li><i class="fa fa-cogs"></i> <span class="font-weight-600"> Used Technologies</span> : <span class="font-weight-400 uppercase">Adobe Flash, Paint</span></li>
                </ul>
                <hr>
                <p class="white-text second-font">Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
                <a href="#" class="waves-effect waves-light btn font-weight-500">Preview <i class="fa fa-external-link"></i></a>
            </div>
            <!-- Project Details Ends -->
        </div>
    </div>
	<!-- Project Ends -->
	<!-- Project Starts -->
    <div data-panel="panel-7">
        <div class="row">
            <!-- Project Main Content Starts -->
            <div class="col s12 l6 xl6">
                <img src="<?php echo get_theme_file_uri( 'images/projects/project-7.jpg' ); ?>" alt="project" />
            </div>
            <!-- Project Main Content Ends -->
            <!-- Project Details Starts -->
            <div class="col s12 l6 xl6">
                <h3 class="font-weight-600 white-text uppercase">Image Project</h3>
                <ul class="project-details white-text second-font">
                    <li><i class="fa fa-user"></i><span class="font-weight-600"> Client </span>: <span class="font-weight-400 uppercase">3D Ocean</span></li>
                    <li><i class="fa fa-calendar"></i><span class="font-weight-600"> Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                    <li><i class="fa fa-cogs"></i> <span class="font-weight-600"> Used Technologies</span> : <span class="font-weight-400 uppercase">3DS Max, Adobe Photoshop</span></li>
                </ul>
                <hr>
                <p class="white-text second-font">Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
                <a href="#" class="waves-effect waves-light btn font-weight-500">Preview <i class="fa fa-external-link"></i></a>
            </div>
            <!-- Project Details Ends -->
        </div>
    </div>
	<!-- Project Ends -->
	<!-- Project Starts -->
    <div data-panel="panel-8">
        <div class="row">
            <!-- Project Main Content Starts -->
            <div class="col s12 l6 xl6">
                <img src="<?php echo get_theme_file_uri( 'images/projects/project-8.jpg' ); ?>" alt="project" />
            </div>
            <!-- Project Main Content Ends -->
            <!-- Project Details Starts -->
            <div class="col s12 l6 xl6">
                <h3 class="font-weight-600 white-text uppercase">Image Project</h3>
                <ul class="project-details white-text second-font">
                    <li><i class="fa fa-user"></i><span class="font-weight-600"> Client </span>: <span class="font-weight-400 uppercase">Audiojungle</span></li>
                    <li><i class="fa fa-calendar"></i><span class="font-weight-600"> Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                    <li><i class="fa fa-cogs"></i> <span class="font-weight-600"> Used Technologies</span> : <span class="font-weight-400 uppercase">Adobe Audition, Adobe Premiere</span></li>
                </ul>
                <hr>
                <p class="white-text second-font">Occupy american apparel freegan cliche. Mustache trust fund 8-bit jean shorts mumblecore thundercats. Pour-over small batch forage cray, banjo post-ironic flannel keffiyeh cred ethnic semiotics next level tousled fashion axe. Sustainable cardigan keytar fap bushwick bespoke.</p>
                <a href="#" class="waves-effect waves-light btn font-weight-500">Preview <i class="fa fa-external-link"></i></a>
            </div>
            <!-- Project Details Ends -->
        </div>
    </div>
	<!-- Project Ends -->
<?php endif; ?>

    <!-- Portfolio Navigation Starts -->
    <nav>
        <!-- Previous Work Icon Starts -->
        <span class="control-button bl-previous-work uppercase font-weight-700"><i class="fa fa-chevron-left"></i></span>
        <!-- Previous Work Icon Ends -->
        <!-- Close Work Icon Starts -->
        <span class="control-button fa fa-close fa-2x bl-icon-close center-align" id="bl-icon-close"></span>
        <!-- Close Work Icon Ends -->
        <!-- Next Work Icon Starts -->
        <span class="control-button bl-next-work uppercase font-weight-700"><i class="fa fa-chevron-right"></i></span>
        <!-- Previous Work Icon Ends -->
    </nav>
    <!-- Portfolio Navigation Ends -->
</div>