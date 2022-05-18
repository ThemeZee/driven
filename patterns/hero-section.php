<?php
/**
 * Title: Hero Section
 * Slug: driven/hero-section
 * Categories: driven_layout
*/
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3.5vw","right":"3.5vw","bottom":"3.5vw","left":"3.5vw"}}},"backgroundColor":"white","layout":{"contentSize":"800px","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:3.5vw;padding-right:3.5vw;padding-bottom:3.5vw;padding-left:3.5vw">

	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"margin":{"bottom":"0px"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-bottom:0px">

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">

			<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0px"}}},"className":"is-style-underlined-heading"} -->
			<h1 class="is-style-underlined-heading" style="margin-top:0px"><?php _e( 'Pursue your passion <br>All dreams can come true', 'driven' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"className":"is-style-default"} -->
			<div class="wp-block-buttons is-style-default">

				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Start now', 'driven' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Learn more', 'driven' ); ?></a></div>
				<!-- /wp:button -->

			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">

			<!-- wp:image -->
			<figure class="wp-block-image"><img alt=""/></figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
