<?php 

$prifix = as_portfolio_prifix;

$image = wp_get_attachment_image_src( cs_get_option( $prifix.'profile_image' ), 'as-portfolio-image' );
$profile_tagline = cs_get_option( $prifix.'profile_tagline' );


?><section class="topleft" style="background-image:url('<?php echo esc_url(@$image[0]); ?>');">
    <div class="bl-box row valign-wrapper">
        <div class="row valign-wrapper">
            <div class="title-heading">
                <div class="selector uppercase" id="selector">
                    <h3 class="ah-headline p-none m-none">
                        <span class="font-weight-300" ><?php echo str_replace("\'", '', cs_get_option($prifix.'profile_title', "Hi There ! I'm")); ?></span>
                        <span class="ah-words-wrapper">
							<?php 

								if (empty($profile_tagline) === false) {
									$a1 = 0;
									foreach ($profile_tagline as $key => $tagline) {
										?>
	
											<b <?php echo ($a1 == 0) ? 'class="is-visible"' : '' ; ?>><?php echo $tagline['title']; ?></b>

										<?php
										$a1++;
									}
								}

							 ?>
						</span>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>	