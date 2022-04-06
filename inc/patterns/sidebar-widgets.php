<?php
/**
 * Postmeta block pattern for blog and archive pages
 */
return array(
	'title'      => __( 'Sidebar Widgets', 'driven' ),
	'categories' => array( 'driven_layout' ),
	'content'    => '<!-- wp:group {"backgroundColor":"white","className":"widget"} -->
					<div class="wp-block-group widget has-white-background-color has-background">

						<!-- wp:heading {"className":"is-style-widget-title"} -->
						<h2 class="is-style-widget-title">' . __( 'Categories', 'driven' ) . '</h2>
						<!-- /wp:heading -->

						<!-- wp:categories {"className":"is-style-flip-link-hover"} /-->

					</div>
					<!-- /wp:group -->
					
					<!-- wp:group {"backgroundColor":"white","className":"widget"} -->
					<div class="wp-block-group widget has-white-background-color has-background">
						
						<!-- wp:heading {"className":"is-style-widget-title"} -->
						<h2 class="is-style-widget-title">' . __( 'Archives', 'driven' ) . '</h2>
						<!-- /wp:heading -->
					
						<!-- wp:archives {"className":"is-style-flip-link-hover"} /-->

					</div>
					<!-- /wp:group -->
					
					<!-- wp:group {"backgroundColor":"white","className":"widget"} -->
					<div class="wp-block-group widget has-white-background-color has-background">
						
						<!-- wp:heading {"className":"is-style-widget-title"} -->
						<h2 class="is-style-widget-title">' . __( 'Tags', 'driven' ) . '</h2>
						<!-- /wp:heading -->
					
						<!-- wp:tag-cloud {"className":"is-style-flip-link-hover"} /-->

					</div>
					<!-- /wp:group -->',
);
