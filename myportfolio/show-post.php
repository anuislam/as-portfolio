<?php 

/* Template Name: Blog Page */

get_header(); ?>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
    <!-- Wrapper Starts -->
    <div class="wrapper">
		<div class="container page-title center-align">
			<h2 class="center-align">
				<?php
					$archive = explode(' ', get_the_title());
					echo '<span style="margin-right:10px;">'.$archive[0].'</span>';
					$archive[0] = '';
					echo '<span> '.implode(' ', $archive).'</span>';
				?>
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
<?php
$args = array( 
  'post_type'       => 'post', 
  'paged'           => get_query_var('paged') 
);
$loop = new WP_Query( $args ); ?>
<?php if ($loop->have_posts()) : ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<!-- Article Starts -->
		<article>
			<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
			<!-- Figure Starts -->
			<figure class="blog-figure">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('as-portfolio-blogsingle-image', array('alt' => get_the_title(), 'class' => 'responsive-img')); ?>
				</a>
			</figure>
			<!-- Figure Ends -->
			<!-- Excerpt Starts -->
			<div class="blog-excerpt">
				<p class="second-font"><?php echo get_the_excerpt(); ?> ...</p>
				<a href="<?php the_permalink(); ?>" class="col s12 m4 l4 xl4 waves-effect waves-light btn readmore font-weight-500">
					Read more 
				</a>
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
		</article>
		<!-- Article Ends -->
	<?php endwhile; ?>				
<?php else: ?>	

<?php endif; ?>				


					<?php 
					$big = 9999999999999; // need an unlikely integer
					$paginate_links = paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $loop->max_num_pages,
						'prev_text'          => __('<i class="fa fa-angle-left"></i>'),
						'next_text'          => __('<i class="fa fa-angle-right"></i>'),
						'type'  => 'array',
					) );


					 ?>

					<ul class="pagination center-align" id="as_portfolio_post_paginate">
						<?php
						if (empty($paginate_links) === false) {
							foreach ($paginate_links as $key => $link) {
								?>								
								<li class="waves-effect"><?php echo $link; ?></li>
								<?php
							}
						}
						?>
					  </ul>
				</div>
				<!-- Sidebar Starts -->
				<?php get_sidebar(); ?>
				<!-- Sidebar Ends -->
			</div>
		</div>
    </div>
    <!-- Wrapper Ends -->
	
	<?php endwhile; ?>	
<?php endif; ?>	
	

<?php get_footer();
