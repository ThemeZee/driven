<?php
/**
 * Postmeta block pattern for blog and archive pages
 */
return array(
	'title'    => __( 'Footer Widgets', 'driven' ),
	'inserter' => false,
	'content'  => '<!-- wp:columns {"style":{"spacing":{"padding":{"top":"2vw","bottom":"2vw"}}}} -->
					<div class="wp-block-columns" style="padding-top:2vw;padding-bottom:2vw">

						<!-- wp:column -->
						<div class="wp-block-column">

							<!-- wp:group {"className":"footer-widget"} -->
							<div class="wp-block-group footer-widget">

								<!-- wp:heading {"level":3,"textColor":"white","fontSize":"large"} -->
								<h3 class="has-white-color has-text-color has-large-font-size">' . __( 'About Driven', 'driven' ) . '</h3>
								<!-- /wp:heading -->

								<!-- wp:paragraph -->
								<p>' . __( 'Driven is an experimental block theme featuring a classic two column layout with a right sidebar. With its clean and modern design the theme is perfectly suited for starting a simple blog or news site. Without many bells and whistles, it is an easy way to try out the new Full Site Editing experience of WordPress.', 'driven' ) . '</p>
								<!-- /wp:paragraph -->

							</div>
							<!-- /wp:group -->

						</div>
						<!-- /wp:column -->

						<!-- wp:column -->
						<div class="wp-block-column">

							<!-- wp:group {"className":"footer-widget"} -->
							<div class="wp-block-group footer-widget">

							<!-- wp:heading {"level":3,"textColor":"white","fontSize":"large"} -->
							<h3 class="has-white-color has-text-color has-large-font-size">' . __( 'Categories', 'driven' ) . '</h3>
							<!-- /wp:heading -->

							<!-- wp:categories {"className":"is-style-flip-link-hover"} /-->

							</div>
							<!-- /wp:group -->

						</div>
						<!-- /wp:column -->

						<!-- wp:column -->
						<div class="wp-block-column">

							<!-- wp:group {"className":"footer-widget"} -->
							<div class="wp-block-group footer-widget">

							<!-- wp:heading {"level":3,"textColor":"white","fontSize":"large"} -->
							<h3 class="has-white-color has-text-color has-large-font-size">' . __( 'Archives', 'driven' ) . '</h3>
							<!-- /wp:heading -->

							<!-- wp:archives {"className":"is-style-flip-link-hover"} /-->

							</div>
							<!-- /wp:group -->

						</div>
						<!-- /wp:column -->

					</div>
					<!-- /wp:columns -->',
);
