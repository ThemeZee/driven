<?php
/**
 * Postmeta block pattern for blog and archive pages
 */
return array(
	'title'      => __( 'Sidebar Widgets', 'driven' ),
	'categories' => array( 'driven_layout' ),
	'content'    => '<!-- wp:group {"style":{"border":{"style":"solid","width":"1px"},"spacing":{"padding":{"top":"2.0rem","right":"2.0rem","bottom":"2.0rem","left":"2.0rem"}}},"borderColor":"light-gray","className":"widget"} -->
					<div class="wp-block-group widget has-border-color has-light-gray-border-color" style="border-style:solid;border-width:1px;padding-top:2.0rem;padding-right:2.0rem;padding-bottom:2.0rem;padding-left:2.0rem">

						<!-- wp:heading {"className":"is-style-underlined-heading","fontSize":"large"} -->
						<h2 class="is-style-underlined-heading has-large-font-size">' . __( 'Categories', 'driven' ) . '</h2>
						<!-- /wp:heading -->

						<!-- wp:categories {"className":"is-style-flip-link-hover"} /-->

					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"border":{"style":"solid","width":"1px"},"spacing":{"padding":{"top":"2.0rem","right":"2.0rem","bottom":"2.0rem","left":"2.0rem"}}},"borderColor":"light-gray","className":"widget"} -->
					<div class="wp-block-group widget has-border-color has-light-gray-border-color" style="border-style:solid;border-width:1px;padding-top:2.0rem;padding-right:2.0rem;padding-bottom:2.0rem;padding-left:2.0rem">

						<!-- wp:heading {"className":"is-style-underlined-heading","fontSize":"large"} -->
						<h2 class="is-style-underlined-heading has-large-font-size">' . __( 'Archives', 'driven' ) . '</h2>
						<!-- /wp:heading -->

						<!-- wp:archives {"className":"is-style-flip-link-hover"} /-->

					</div>
					<!-- /wp:group -->

					<!-- wp:group {"style":{"border":{"style":"solid","width":"1px"},"spacing":{"padding":{"top":"2.0rem","right":"2.0rem","bottom":"2.0rem","left":"2.0rem"}}},"borderColor":"light-gray","className":"widget"} -->
					<div class="wp-block-group widget has-border-color has-light-gray-border-color" style="border-style:solid;border-width:1px;padding-top:2.0rem;padding-right:2.0rem;padding-bottom:2.0rem;padding-left:2.0rem">

						<!-- wp:heading {"className":"is-style-underlined-heading","fontSize":"large"} -->
						<h2 class="is-style-underlined-heading has-large-font-size">' . __( 'Tags', 'driven' ) . '</h2>
						<!-- /wp:heading -->

						<!-- wp:tag-cloud {"className":"is-style-flip-link-hover"} /-->

					</div>
					<!-- /wp:group -->',
);
