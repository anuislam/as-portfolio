<?php get_header(); ?>


    <!-- Wrapper Starts -->
    <div class="wrapper">
		<div class="container page-title center-align">
			<h2 class="center-align">
				<span>My </span>
				<span>blog</span>
			</h2>
			<span class="title-bg">posts</span>
		</div>
		<!-- Divider Starts -->
		<div class="divider center-align">
			<span class="outer-line"></span>
			<span class="fa fa-vcard" aria-hidden="true"></span>
			<span class="outer-line"></span>
		</div>
		<!-- Divider Ends -->
		<div class="container">
			<div class="row">
				<div class="content col s12 m8 l8 xl8">
					<!-- Article Starts -->
					<article>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

						<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></h4></a>
						<!-- Figure Starts -->
						<figure class="blog-figure">
							<?php the_post_thumbnail('as-portfolio-blogsingle-image', array('alt' => get_the_title(), 'class' => 'responsive-img')); ?>
						</figure>
						<!-- Figure Ends -->
						<!-- Excerpt Starts -->
						<div class="blog-excerpt second-font">
							<?php the_content(); ?>
							<!-- Meta Starts -->
							<div class="meta second-font">
								<span><i class="fa fa-user"></i> <a href="<?php the_permalink(); ?>"><?php echo get_the_author(); ?></a></span>
								<span class="date"><i class="fa fa-calendar"></i> <?php echo get_the_time('j F, Y') ?></span>
								<span><i class="fa fa-commenting"></i> <?php comments_popup_link('No Comment', '1 Comment', '% Comments'); ?></span>
								<span><i class="fa fa-tags"></i> <?php print_r(the_category(', ')); ?></span>
								<span class="permalink"><i class="fa fa-link"></i> <a href="<?php the_permalink(); ?>">permalink</a></span>
							</div>
							<!-- Meta Ends -->
						</div>
						<!-- Excerpt Ends -->
			<?php endwhile; ?>
		<?php endif; ?>
						<!-- Comments Starts -->
						
<?php 

if ( comments_open() || get_comments_number() ) :
	?>
						<div class="comments">
							<?php comments_template(); ?>
						</div>
<?php
endif;

 ?>


					</article>
					<!-- Article Ends -->
				</div>
				<!-- Sidebar Starts -->
				<?php get_sidebar(); ?>
				<!-- Sidebar Ends -->
			</div>
		</div>
    </div>
    <!-- Wrapper Ends -->

<?php get_footer();
