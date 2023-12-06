<?php
/**
 * Setup Wizard template, step 2.
 */

declare(strict_types=1);
namespace ahrefs\AhrefsSeo;

$locals = Ahrefs_Seo_View::get_template_variables();
$view   = Ahrefs_Seo::get()->get_view();

$view->show_part(
	'options/google-connected',
	[
		'page_nonce'         => $locals['page_nonce'],
		'error'              => $locals['error'],
		'button_title'       => __( 'Continue', 'ahrefs-seo' ),
		'preselect_accounts' => true,
		'disconnect_link'    => 'wizard',
		'disconnect_url'     => add_query_arg(
			[
				'page'                 => Ahrefs_Seo::SLUG,
				'disconnect-analytics' => wp_create_nonce( $locals['page_nonce'] ),
			]
		),
	]
);
