<?php
/**
 * Postmeta block pattern for blog and archive pages
 */
return array(
	'title'      => __( 'Posts List', 'driven' ),
	'categories' => array( 'driven_posts' ),
	'content'    => '<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
					<div class="wp-block-query">

						<!-- wp:post-template -->

							<!-- wp:group -->
							<div class="wp-block-group">

								<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"top":"0px"}}}} /-->

								<!-- wp:pattern {"slug":"driven/postmeta-blog"} /-->
					
								<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0px"}}}} /-->
			
								<!-- wp:post-excerpt {"moreText":"\u003cstrong\u003eContinue reading\u003c/strong\u003e","style":{"spacing":{"margin":{"bottom":"0px"}}}} /-->
					
							</div>
							<!-- /wp:group -->

						<!-- /wp:post-template -->
					
						<!-- wp:query-pagination {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<!-- wp:query-pagination-numbers /-->
						<!-- /wp:query-pagination -->

					</div>
					<!-- /wp:query -->',
);
