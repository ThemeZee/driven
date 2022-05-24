<?php
/**
 * Title: Front Page
 * Slug: driven/page-layout-front
 * Block Types: core/post-content
 * Categories: driven_page_layouts
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

			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"className":"is-style-default"} -->
			<div class="wp-block-buttons is-style-default">

				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Join now', 'driven' ); ?></a></div>
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

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-style-default">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="">
			</figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3.5vw","right":"3.5vw","bottom":"3.5vw","left":"3.5vw"},"blockGap":"2rem","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"light-gray","layout":{"contentSize":"1200px","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-light-gray-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:3.5vw;padding-right:3.5vw;padding-bottom:3.5vw;padding-left:3.5vw">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"2rem"}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"72px","lineHeight":"1"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-size:72px;line-height:1"><strong>1</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"72px","lineHeight":"1"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-size:72px;line-height:1"><strong>2</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"72px","lineHeight":"1"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-size:72px;line-height:1"><strong>3</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"2rem"}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"72px","lineHeight":"1"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-size:72px;line-height:1"><strong>4</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"72px","lineHeight":"1"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-size:72px;line-height:1"><strong>5</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"72px","lineHeight":"1"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-size:72px;line-height:1"><strong>6</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3.5vw","right":"3.5vw","bottom":"3.5vw","left":"3.5vw"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"white","layout":{"contentSize":"800px","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:3.5vw;padding-right:3.5vw;padding-bottom:3.5vw;padding-left:3.5vw">

	<!-- wp:media-text {"mediaType":"image","verticalAlignment":"center"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center">

		<figure class="wp-block-media-text__media">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt=""/>
		</figure>

		<div class="wp-block-media-text__content">

			<!-- wp:heading {"level":3,"className":"is-style-underlined-heading"} -->
			<h3 class="is-style-underlined-heading"><?php _e( 'Project One', 'driven' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Learn more', 'driven' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>

	</div>
	<!-- /wp:media-text -->

	<!-- wp:media-text {"mediaPosition":"right","mediaType":"image","verticalAlignment":"center"} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center">

		<figure class="wp-block-media-text__media">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt=""/>
		</figure>

		<div class="wp-block-media-text__content">

			<!-- wp:heading {"level":3,"className":"is-style-underlined-heading"} -->
			<h3 class="is-style-underlined-heading"><?php _e( 'Project Two', 'driven' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Learn more', 'driven' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>

	</div>
	<!-- /wp:media-text -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"3.5vw","right":"3.5vw","bottom":"3.5vw","left":"3.5vw"},"blockGap":"3rem"}},"backgroundColor":"dark-gray","textColor":"white","layout":{"contentSize":"1200px","wideSize":"1200px"}} -->
<div class="wp-block-group alignfull has-white-color has-dark-gray-background-color has-text-color has-background" style="padding-top:3.5vw;padding-right:3.5vw;padding-bottom:3.5vw;padding-left:3.5vw">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"2rem"}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"style":{"spacing":{"blockGap":"3rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"120px","lineHeight":"1"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-size:120px;line-height:1">“</p>
				<!-- /wp:paragraph -->

				<!-- wp:group -->
				<div class="wp-block-group">

					<!-- wp:paragraph -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>— John Doe</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"style":{"spacing":{"blockGap":"3rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"120px","lineHeight":"1"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-size:120px;line-height:1">“</p>
				<!-- /wp:paragraph -->

				<!-- wp:group -->
				<div class="wp-block-group">

					<!-- wp:paragraph -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>— John Doe</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
