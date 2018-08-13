<?php 

namespace Inc;

/**
 * AsMetaBox
 */
class AsMetaBox{	

	function __construct(){
		add_filter( 'cs_metabox_options', [ $this, 'metabox_options'] );
	}

	public function metabox_options(){

		$prifix = as_portfolio_prifix;

		$options      = array(); // remove old options

		$options[]    = array(
			'id'        => $prifix.'portfolio_info',
			'title'     => 'Portfolio Information',
			'post_type' => 'portfolio',
			'context'   => 'normal',
			'priority'  => 'default',
			'sections'  => array(
			    array(
			      'name'  => $prifix.'portfolio_clint_info',
			      'title' => 'Portfolio Data',
			      'icon'  => 'fa fa-calendar',
			      'fields' => array(
						array(
							'id'    => $prifix.'portfolio_clint',
							'type'  => 'text',
							'title' => 'Client',
						),
						array(
							'id'    => $prifix.'portfolio_date',
							'type'  => 'text',
							'title' => 'Date',
						),
						array(
							'id'    => $prifix.'portfolio_used_tec',
							'type'  => 'text',
							'title' => 'Used Technologies',
						),
						array(
							'id'    => $prifix.'portfolio_desc',
							'type'  => 'textarea',
							'title' => 'Used Description',
						),
						array(
							'id'    => $prifix.'portfolio_prev_url',
							'type'  => 'text',
							'title' => 'Used Preview Url',
						),

						array(
							'id'       => $prifix.'portfolio_type',
							'type'     => 'select',
							'title'    => 'Portfolio Type',
							'options'  => array(
								'image'     => 'Image',
								'gallery'   => 'Gallery',
								'video'     => 'Video',
								'local_video'     => 'Local Video',
							),
							'default'  => 'image',
						),

						array(
							'id'    => $prifix.'portfolio_image',
							'type'  => 'image',
							'title' => 'Upload Portfolio Image',
							'dependency'   => array( $prifix.'portfolio_type', '==', 'image' ),
						),

						array(
							'id'    => $prifix.'portfolio_gallery',
							'type'  => 'gallery',
							'title' => 'Upload Portfolio Gallery',
							'dependency'   => array( $prifix.'portfolio_type', '==', 'gallery' ),
						),

						array(
							'id'    => $prifix.'portfolio_video',
							'type'  => 'text',
							'title' => 'Add Youtube Vedio ID',
							'dependency'   => array( $prifix.'portfolio_type', '==', 'video' ),
						),

						array(
							'id'    => $prifix.'portfolio_local_video',
							'type'  => 'text',
							'title' => 'Add Local Video Url',
							'dependency'   => array( $prifix.'portfolio_type', '==', 'local_video' ),
						),

						array(
							'id'    => $prifix.'portfolio_local_poster',
							'type'  => 'image',
							'title' => 'Add Local Video Poster',
							'dependency'   => array( $prifix.'portfolio_type', '==', 'local_video' ),
						),


					)
				)
			)
		);


	  return $options;


	}
}