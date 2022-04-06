<?php
/**
 * Postmeta block pattern for blog and archive pages
 */
return array(
	'title'      => __( 'Footer Widgets', 'driven' ),
	'categories' => array( 'driven_layout' ),
	'content'    => '<!-- wp:columns -->
					<div class="wp-block-columns">

						<!-- wp:column -->
						<div class="wp-block-column">

							<!-- wp:group {"className":"footer-widget"} -->
							<div class="wp-block-group footer-widget">

								<!-- wp:heading {"level":3} -->
								<h3>' . __( 'About Driven', 'driven' ) . '</h3>
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

							<!-- wp:heading {"level":3} -->
							<h3>' . __( 'Categories', 'driven' ) . '</h3>
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

							<!-- wp:heading {"level":3} -->
							<h3>' . __( 'Archives', 'driven' ) . '</h3>
							<!-- /wp:heading -->

							<!-- wp:archives {"className":"is-style-flip-link-hover"} /-->

							</div>
							<!-- /wp:group -->

						</div>
						<!-- /wp:column -->

						<!-- wp:column -->
						<div class="wp-block-column">

							<!-- wp:group {"className":"footer-widget"} -->
							<div class="wp-block-group footer-widget">

							<!-- wp:heading {"level":3} -->
							<h3>' . __( 'Tags', 'driven' ) . '</h3>
							<!-- /wp:heading -->

							<!-- wp:tag-cloud {"className":"is-style-flip-link-hover"} /-->

							</div>
							<!-- /wp:group -->

						</div>
						<!-- /wp:column -->

					</div>
					<!-- /wp:columns -->',
);
