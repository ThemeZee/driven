<?php
/**
 * Postmeta block pattern for blog and archive pages
 */
return array(
	'title'    => __( 'Postmeta', 'driven' ),
	'inserter' => false,
	'content'  => '<!-- wp:group {"style":{"spacing":{"blockGap":"0.4em"}},"textColor":"gray","layout":{"type":"flex","allowOrientation":false,"flexWrap":"wrap"}} -->
					<div class="wp-block-group has-gray-color has-text-color">

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
						<p style="font-style:normal;font-weight:700">Posted on</p>
						<!-- /wp:paragraph -->

						<!-- wp:post-date {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->
	
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
						<p style="font-style:normal;font-weight:700">by</p>
						<!-- /wp:paragraph -->

						<!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
						<p style="font-style:normal;font-weight:700">in</p>
						<!-- /wp:paragraph -->

						<!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

					</div>
					<!-- /wp:group -->',
);
