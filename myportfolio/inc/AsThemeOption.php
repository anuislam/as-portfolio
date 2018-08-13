<?php 
namespace Inc;
/**
 * AsThemeOption
 */
class AsThemeOption {
	
	function __construct()	{
		add_filter( 'cs_framework_options', [ $this, 'framework_options'] );
		add_filter( 'cs_framework_settings', [ $this, 'framework_settings'] );
	}

	public function framework_settings($settings ){
		$settings           = array(
		  'menu_title'      => 'Theme Option',
		  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
		  'menu_slug'       => 'as_protfolio_options',
		  'ajax_save'       => false,
		  'show_reset_all'  => false,
		  'framework_title' => 'As Protfolio <small>Theme Options</small>',
		);

		return $settings;
	}


	public function framework_options($options){
		$prifix = as_portfolio_prifix;
		$options      = array(); // remove old options		

		// a new setting section
		$options[]    = array(
		  'name'      => 'profile_section',
		  'title'     => 'Profile Section',
		  'icon'      => 'fa fa-user',
		  'fields'    => array(
		 
		    array(
		      'id'    => $prifix.'profile_image',
		      'type'  => 'image',
		      'title' => 'Upload image.',
		  	  'desc'  => 'Upload Home Page Profile Image.',
		    ),

		 
		    array(
		      'id'    		=> $prifix.'profile_title',
		      'type'  		=> 'text',
		      'title' 		=> 'Enter Your Title',
		    ),

			array(
			  'id'              => $prifix.'profile_tagline',
			  'type'            => 'group',
			  'title'           => 'Tag Line',
			  'button_title'    => 'Add New',
			  'accordion_title' => 'Add New Field',
			  'fields'          => array(
			    array(
			      'id'    => 'title',
			      'type'  => 'text',
			      'title' => 'Enter Tagline',
			    )
			  ),
			),

		  )
		);

		// a new setting section
		$options[]    = array(
		  'name'      => 'about_section',
		  'title'     => 'About Section',
		  'icon'      => 'fa fa-text-width',

		  'sections' => array(
		    array(
		      'name'      => 'user_information',
		      'title'     => 'User Information',
		      'icon'      => 'fa fa-user',
			  'fields'    => array(

			    array(
			      'id'    => $prifix.'about_title_first',
			      'type'  => 'text',
			      'title' => 'About me title first pert',
			    ),

			    array(
			      'id'    => $prifix.'about_title_seccend',
			      'type'  => 'text',
			      'title' => 'About me title seccend pert',
			    ),


			    array(
			      'id'    => $prifix.'about_title_bg',
			      'type'  => 'text',
			      'title' => 'About me title background',
			    ),

			    array(
			      'id'    => $prifix.'about_your_pic',
			      'type'  => 'image',
			      'title' => 'Your Picture',
			    ),

			    array(
			      'id'    => $prifix.'about_your_icon',
			      'type'  => 'icon',
			      'title' => 'Title icon',
			    ),

			    array(
			      'id'    => $prifix.'about_your_title',
			      'type'  => 'text',
			      'title' => 'Your Title',
			    ),

			    array(
			      'id'    => $prifix.'about_your_desc',
			      'type'  => 'textarea',
			      'title' => 'Your Description',
			    ),

				array(
				  'id'              => $prifix.'about_information',
				  'type'            => 'group',
				  'title'           => 'About me information left',
				  'button_title'    => 'Add New',
				  'accordion_title' => 'Add New Field',
				  'fields'          => array(
				    array(
				      'id'    => 'name',
				      'type'  => 'text',
				      'title' => 'Enter name',
				    ),
				    array(
				      'id'    => 'val',
				      'type'  => 'text',
				      'title' => 'Enter information',
				    ),

				  ),
				),

				array(
				  'id'              => $prifix.'about_information_right',
				  'type'            => 'group',
				  'title'           => 'About me information right',
				  'button_title'    => 'Add New',
				  'accordion_title' => 'Add New Field',
				  'fields'          => array(
				    array(
				      'id'    => 'name',
				      'type'  => 'text',
				      'title' => 'Enter name',
				    ),
				    array(
				      'id'    => 'val',
				      'type'  => 'text',
				      'title' => 'Enter information',
				    ),

				  ),
				),

			    array(
			      'id'    => $prifix.'about_resume_text',
			      'type'  => 'text',
			      'title' => 'Resume Button Text',
			    ),

			    array(
			      'id'    => $prifix.'about_resume_url',
			      'type'  => 'text',
			      'title' => 'Resume Button URL',
			    ),

			    array(
			      'id'    => $prifix.'about_resume_icon',
			      'type'  => 'icon',
			      'title' => 'Resume Button icon',
			    ),

			    array(
			      'id'    => $prifix.'my_blog_text',
			      'type'  => 'text',
			      'title' => 'My Blog Button Text',
			    ),

			    array(
			      'id'    => $prifix.'my_blog_url',
			      'type'  => 'text',
			      'title' => 'My Blog Button URL',
			    ),

			    array(
			      'id'    => $prifix.'my_blog_icon',
			      'type'  => 'icon',
			      'title' => 'My Blog Button icon',
			    ),
			  )
		   ),


			array(
		      'name'      => 'user_expertise',
		      'title'     => 'Tabs',
		      'icon'      => 'fa fa-user',

		      // begin: fields
		      'fields'    => array(
				array(
				  'id'              => $prifix.'about_experience',
				  'type'            => 'group',
				  'title'           => 'Add Your  Experience',
				  'button_title'    => 'Add New',
				  'accordion_title' => 'Add New Field',
				  'fields'          => array(
				    array(
				      'id'    => 'name',
				      'type'  => 'text',
				      'title' => 'Add Experience Name',
				    ),
				    array(
				      'id'    => 'company',
				      'type'  => 'text',
				      'title' => 'Enter Experience Company',
				    ),
				    array(
				      'id'    => 'date',
				      'type'  => 'text',
				      'title' => 'Enter Experience Date',
				    ),

				    array(
				      'id'    => 'desc',
				      'type'  => 'textarea',
				      'title' => 'Enter Experience Description',
				    ),

				  ),
				),


				array(
				  'id'              => $prifix.'about_education',
				  'type'            => 'group',
				  'title'           => 'Add Your  Education',
				  'button_title'    => 'Add New',
				  'accordion_title' => 'Add New Field',
				  'fields'          => array(
				    array(
				      'id'    => 'name',
				      'type'  => 'text',
				      'title' => 'Add Education Name',
				    ),
				    array(
				      'id'    => 'company',
				      'type'  => 'text',
				      'title' => 'Enter Education Company',
				    ),
				    array(
				      'id'    => 'date',
				      'type'  => 'text',
				      'title' => 'Enter Education Date',
				    ),

				    array(
				      'id'    => 'desc',
				      'type'  => 'textarea',
				      'title' => 'Enter Education Description',
				    ),

				  ),
				),

				array(
				  'id'              => $prifix.'about_skills',
				  'type'            => 'group',
				  'title'           => 'Add Your Skills',
				  'button_title'    => 'Add New',
				  'accordion_title' => 'Add New Field',
				  'fields'          => array(
				    array(
				      'id'    => 'name',
				      'type'  => 'text',
				      'title' => 'Add Skill Name',
				    ),
				    array(
				      'id'    => 'expertise',
				      'type'  => 'select',
				      'title' => 'Enter Ekill Expertise',
			          'options'        => array(
			            '1.00' => '1.00',
			            '1.50' => '1.50',
			            '2.00' => '2.00',
			            '2.50' => '2.50',
			            '3.00' => '3.00',
			            '3.50' => '3.50',
			            '4.00' => '4.00',
			            '4.50' => '4.50',
			            '5.00' => '5.00',
			          ),
				    ),

				  ),
				),

			  ),
			),

		    array(
		      'name'      => 'about_footer_sention',
		      'title'     => 'About Section Footer',
		      'icon'      => 'fa fa-user',
			  'fields'    => array(
				array(
				  'id'              => $prifix.'about_section_footer_expertise',
				  'type'            => 'group',
				  'title'           => 'About Section Footer Expertise',
				  'button_title'    => 'Add New',
				  'accordion_title' => 'Add New Field',
				  'fields'          => array(
				    array(
				      'id'    => 'icon',
				      'type'  => 'icon',
				      'title' => 'Content Icon',
				    ),
				    array(
				      'id'    => 'expertise',
				      'type'  => 'text',
				      'title' => 'Content Expertise',
				    ),
				    array(
				      'id'    => 'desc',
				      'type'  => 'text',
				      'title' => 'Description',
				    ),

				  ),
				),

		  	   ),
		  	),
		  ),
		);


		// a new setting section
		$options[]    = array(
			'name'      => 'portfolio_section',
			'title'     => 'Portfoilo Section',
			'icon'      => 'fa fa-square',

			'sections' => array(
				array(
					'name'      => 'portfolio_information',
					'title'     => 'Portfoilo header',
					'icon'      => 'fa fa-square',
					'fields'    => array(
						array(
						'id'    => $prifix.'portfolio_title_first',
						'type'  => 'text',
						'title' => 'Portfolio title first pert',
						),

						array(
						'id'    => $prifix.'portfolio_title_seccend',
						'type'  => 'text',
						'title' => 'Portfolio title seccend pert',
						),


						array(
						'id'    => $prifix.'portfolio_title_bg',
						'type'  => 'text',
						'title' => 'Portfolio title background',
						),
					),
				),
			),
		);


		// a new setting section
		$options[]    = array(
			'name'      => 'contact_section',
			'title'     => 'Contact',
			'icon'      => 'fa fa-envelope',

			'sections' => array(
				array(
					'name'      => 'contact_information',
					'title'     => 'Contact header',
					'icon'      => 'fa fa-envelope',
					'fields'    => array(
						array(
						'id'    => $prifix.'contact_title_first',
						'type'  => 'text',
						'title' => 'Contact title first pert',
						),

						array(
						'id'    => $prifix.'contact_title_seccend',
						'type'  => 'text',
						'title' => 'Contact title seccend pert',
						),


						array(
						'id'    => $prifix.'contact_title_bg',
						'type'  => 'text',
						'title' => 'Contact title background',
						),
					),
				),

				array(
					'name'      => 'contact_form',
					'title'     => 'Contact Form',
					'icon'      => 'fa fa-envelope',
					'fields'    => array(
						array(
						'id'    => $prifix.'contact_form_title',
						'type'  => 'text',
						'title' => 'Contact Form Title',
						),
						array(
						'id'    => $prifix.'contact_form_description',
						'type'  => 'textarea',
						'title' => 'Contact Form Description',
						),
						array(
						'id'    => $prifix.'contact_form_7_shortcode',
						'type'  => 'textarea',
						'title' => 'Contact Form 7 Shortcode',
						),
					),
				),

				array(
					'name'      => 'contact_sidebar',
					'title'     => 'Contact Sidebar',
					'icon'      => 'fa fa-envelope',
					'fields'    => array(
						array(
						'id'    => $prifix.'contact_sidebar_phon',
						'type'  => 'text',
						'title' => 'Contact Sidebar Phon number',
						),
						array(
						'id'    => $prifix.'contact_sidebar_email',
						'type'  => 'text',
						'title' => 'Contact Sidebar Email Address',
						),
						array(
						'id'    => $prifix.'contact_sidebar_address',
						'type'  => 'textarea',
						'title' => 'Contact Sidebar Address',
						),
						array(
					      'id'    => $prifix.'contact_social_facebook',
					      'type'  => 'text',
					      'title' => 'Facebook Url',
					    ),
						array(
					      'id'    => $prifix.'contact_social_google',
					      'type'  => 'text',
					      'title' => 'Google Url',
					    ),
						array(
					      'id'    => $prifix.'contact_social_twitter',
					      'type'  => 'text',
					      'title' => 'Twitter Url',
					    ),
						array(
					      'id'    => $prifix.'contact_social_linkedin',
					      'type'  => 'text',
					      'title' => 'Linkedin Url',
					    ),
					),
				),

			),
		);


		return $options;
	}
}