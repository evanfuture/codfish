<?php
/**
 * Include and setup custom metaboxes and fields.
 */

/**
 * Get the bootstrap!
 */

if ( file_exists( dirname( __FILE__ ) . '/../vendor/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/../vendor/cmb2/init.php';
}



add_action( 'cmb2_admin_init', 'codfish_register_basic_metabox' );
function codfish_register_basic_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_codfish_';

	$codfish_basic = new_cmb2_box( array(
		'id'            => $prefix . 'basic',
		'title'         => __( 'Basic Info', 'cmb2' ),
		'object_types'  => array( 'codfish-resume', ), // Post type
	) );


	$codfish_basic->add_field( array(
		'name' => __( 'Name', 'cmb2' ),
		'id'   => $prefix . 'name',
		'type' => 'text_medium'
	) );

	$codfish_basic->add_field( array(
		'name' => __( 'Title', 'cmb2' ),
		'id'   => $prefix . 'title',
		'type' => 'text_medium'
	) );

	$codfish_basic->add_field( array(
		'name' => __( 'Email', 'cmb2' ),
		'id'   => $prefix . 'email',
		'type' => 'text_email'
	) );

	$codfish_basic->add_field( array(
		'name' => __( 'Phone', 'cmb2' ),
		'id'   => $prefix . 'phone',
		'type' => 'text_medium'
	) );

	$codfish_basic->add_field( array(
		'name' => __( 'Website', 'cmb2' ),
		'id'   => $prefix . 'website',
		'type' => 'text_url'
	) );

	$codfish_basic->add_field( array(
		'name' => __( 'Linkedin', 'cmb2' ),
		'id'   => $prefix . 'linkedin',
		'type' => 'text_url'
	) );

	$codfish_basic->add_field( array(
		'name'    => __( 'Bio', 'cmb2' ),
		'id'      => $prefix . 'bio',
		'type'    => 'wysiwyg',
		'options' => array( 'textarea_rows' => 5, )
	) );
}

add_action( 'cmb2_admin_init', 'codfish_register_experience_metabox' );
function codfish_register_experience_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_codfish_';

	$codfish_experience = new_cmb2_box( array(
		'id'            => $prefix . 'experience',
		'title'         => __( 'Experience', 'cmb2' ),
		'object_types'  => array( 'codfish-resume', ), // Post type
	) );

	$jobs_group = $codfish_experience->add_field( array(
		'id'          => $prefix . 'jobs',
		'type'        => 'group',
		'options'     => array(
			'group_title'   => __( 'Job {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add Another Job', 'cmb2' ),
			'remove_button' => __( 'Remove Job', 'cmb2' )
		),
	) );

	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */
	$codfish_experience->add_group_field( $jobs_group, array(
		'name'       => __( 'Job Title', 'cmb2' ),
		'id'         => 'job_title',
		'type'       => 'text_medium'
	) );

	$codfish_experience->add_group_field( $jobs_group, array(
		'name' => __( 'Job Company', 'cmb2' ),
		'id'   => 'job_company',
		'type' => 'text_medium'
	) );

	$codfish_experience->add_group_field( $jobs_group, array(
		'name' => __( 'Job Years', 'cmb2' ),
		'id'   => 'job_years',
		'type' => 'text_medium'
	) );

	$codfish_experience->add_group_field( $jobs_group, array(
		'name' => __( 'Job Description', 'cmb2' ),
		'id'   => 'job_description',
		'type' => 'textarea'
	) );

	$codfish_experience->add_group_field( $jobs_group, array(
		'name' => __( 'Portfolio Description', 'cmb2' ),
		'id'   => 'portfolio_description',
		'type' => 'text_medium'
	) );

	$portfolio_group = $codfish_experience->add_group_field( $jobs_group, array(
		'id'          => 'portfolio',
		'type'        => 'group',
		'options'     => array(
			'group_title'   => __( 'Portfolio Item {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add Another Item', 'cmb2' ),
			'remove_button' => __( 'Remove Item', 'cmb2' )
		),
	) );

	$codfish_experience->add_group_field( $portfolio_group, array(
		'name'             => __( 'Item Type', 'cmb2' ),
		'id'               => 'item_type',
		'type'             => 'radio_inline',
		'show_option_none' => 'No Selection',
		'options'          => array(
			'job_item' => __( 'Link', 'cmb2' ),
			'job_more'   => __( 'Text', 'cmb2' )
		),
	) );

	$codfish_experience->add_group_field( $portfolio_group, array(
		'name' => __( 'Item Name', 'cmb2' ),
		'id'   => 'item_name',
		'type' => 'text_medium'
	) );

	$codfish_experience->add_group_field( $portfolio_group, array(
		'name' => __( 'Item Url', 'cmb2' ),
		'id'   => 'item_url',
		'type' => 'text_url'
	) );
}
