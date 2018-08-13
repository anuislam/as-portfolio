<?php 

$prifix = as_portfolio_prifix;

$my       = cs_get_option($prifix.'portfolio_title_first', "my");
$portfolio         = cs_get_option($prifix.'portfolio_title_seccend', "portfolio");
$works   = cs_get_option($prifix.'portfolio_title_bg', "works");


?><!-- About Section Starts -->
<section id="bl-work-section">
	<!-- Portfolio Title Starts -->
    <div class="bl-box valign-wrapper">
        <div class="page-title center-align">
            <span class="title-bg"><?php echo $works; ?></span>
            <h2 class="center-align">
                <span data-hover="<?php echo $my; ?>"><?php echo $my; ?> </span>
                <span data-hover="<?php echo $portfolio; ?>"><?php echo $portfolio; ?></span>
            </h2>
        </div>
    </div>
	<!-- Portfolio Title Ends -->
    <!-- Portfolio Expanded Starts -->
    <div class="bl-content">
        <!-- Main Heading Starts -->
        <div class="container page-title center-align">
            <h2 class="center-align">
                <span data-hover="<?php echo $my; ?>"><?php echo $my; ?> </span>
                <span data-hover="<?php echo $portfolio; ?>"><?php echo $portfolio; ?></span>
            </h2>
            <span class="title-bg"><?php echo $works; ?></span>
        </div>
        <!-- Main Heading Ends -->
        <div class="container">
            <!-- Divider Starts -->
            <div class="divider center-align">
                <span class="outer-line"></span>
                <span class="fa fa-suitcase" aria-hidden="true"></span>
                <span class="outer-line"></span>
            </div>
            <!-- Divider Ends -->
            <div class="row center-align da-thumbs" id="bl-work-items">

<?php
$prifix = as_portfolio_prifix;
$args = array( 
  'post_type'       => 'portfolio', 
  'posts_per_page'  => -1,
);
$loop = new WP_Query( $args );

if ($loop->have_posts()) :

	while ( $loop->have_posts() ) : $loop->the_post();

	$meta = get_post_meta(get_the_ID(), $prifix.'portfolio_info', true );

		?>

	                <!-- Project Starts -->
	                <div class="col s12 m6 l3 xl3" data-panel="panel-<?php echo get_the_ID(); ?>">
	                    <a href="#">
	                    	<?php the_post_thumbnail('as-portfolio-showcase-image', array(
	                    		'alt' => ''.get_the_title(),
	                    		'class' => 'responsive-img',
	                    	)); ?>
							<div class="valign-wrapper"><span class="font-weight-400 uppercase"><?php echo get_the_title(); ?></span></div>
						</a>
	                </div>
	                <!-- Project Ends -->

	<?php endwhile; ?>

	<?php else: ?>
                <!-- Project Starts -->
                <div class="col s12 m6 l3 xl3" data-panel="panel-5">
                    <a href="#">
						<img class="responsive-img" src="<?php echo get_theme_file_uri( 'images/projects/project-5.jpg' ); ?>" alt="Project" />
						<div class="valign-wrapper"><span class="font-weight-400 uppercase">Image Project</span></div>
					</a>
                </div>
                <!-- Project Ends -->
                <!-- Project Starts -->
                <div class="col s12 m6 l3 xl3" data-panel="panel-2">
                    <a href="#">
						<img class="responsive-img" src="<?php echo get_theme_file_uri( 'images/projects/project-2.jpg' ); ?>" alt="Project" />
						<div class="valign-wrapper"><span class="font-weight-400 uppercase">Slider Project</span></div>
					</a>
                </div>
                <!-- Project Ends -->
                <!-- Project Starts -->
                <div class="col s12 m6 l3 xl3" data-panel="panel-3">
                    <a href="#">
						<img class="responsive-img" src="<?php echo get_theme_file_uri( 'images/projects/project-3.jpg' ); ?>" alt="Project" />
						<div class="valign-wrapper"><span class="font-weight-400 uppercase">Youtube Video</span></div>
					</a>
                </div>
                <!-- Project Ends -->
                <!-- Project Starts -->
                <div class="col s12 m6 l3 xl3" data-panel="panel-4">
                    <a href="#">
						<img class="responsive-img" src="<?php echo get_theme_file_uri( 'images/projects/project-4.jpg' ); ?>" alt="Project" />
						<div class="valign-wrapper"><span class="font-weight-400 uppercase">Local Video</span></div>
					</a>
                </div>
                <!-- Project Ends -->
                <!-- Project Starts -->
                <div class="col s12 m6 l3 xl3" data-panel="panel-5">
                    <a href="#">
						<img class="responsive-img" src="<?php echo get_theme_file_uri( 'images/projects/project-5.jpg' ); ?>" alt="Project" />
						<div class="valign-wrapper"><span class="font-weight-400 uppercase">Image Project</span></div>
					</a>
                </div>
                <!-- Project Ends -->
                <!-- Project Starts -->
                <div class="col s12 m6 l3 xl3" data-panel="panel-6">
                    <a href="#">
						<img class="responsive-img" src="<?php echo get_theme_file_uri( 'images/projects/project-6.jpg' ); ?>" alt="Project" />
						<div class="valign-wrapper"><span class="font-weight-400 uppercase">Image Project</span></div>
					</a>
                </div>
                <!-- Project Ends -->
                <!-- Project Starts -->
                <div class="col s12 m6 l3 xl3" data-panel="panel-7">
                    <a href="#">
						<img class="responsive-img" src="<?php echo get_theme_file_uri( 'images/projects/project-7.jpg' ); ?>" alt="Project" />
						<div class="valign-wrapper"><span class="font-weight-400 uppercase">Image Project</span></div>
					</a>
                </div>
                <!-- Project Ends -->
                <!-- Project Starts -->
                <div class="col s12 m6 l3 xl3" data-panel="panel-8">
                    <a href="#">
						<img class="responsive-img" src="<?php echo get_theme_file_uri( 'images/projects/project-8.jpg' ); ?>" alt="Project" />
						<div class="valign-wrapper"><span class="font-weight-400 uppercase">Image Project</span></div>
					</a>
                </div>
                <!-- Project Ends -->
	<?php endif; ?>

            </div>
        </div>
    </div>
    <!-- Portfolio Expanded Ends -->
    <img alt="close" src="<?php echo get_theme_file_uri( 'images/close-button.png' ); ?>" class="bl-icon-close" />
</section>