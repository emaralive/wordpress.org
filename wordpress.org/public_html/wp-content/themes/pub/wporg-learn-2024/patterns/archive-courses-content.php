<?php
/**
 * Title: Courses Archive Content
 * Slug: wporg-learn-2024/archive-courses-content
 * Inserter: no
 */

?>

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"730px"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'WordPress provides limitless ways for people to craft and grow their online presence. The content in these courses is delivered in multiple formats, with a focus on text and video, working towards practical learning objectives to help you become a better WordPress developer, designer, user, and contributor.', 'wporg-learn' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":12,"postType":"course","courseFeatured":false,"inherit":true},"namespace":"wporg-learn/course-grid","align":"wide","className":"wporg-learn-course-grid"} -->
<div class="wp-block-query alignwide wporg-learn-course-grid">

	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"330px"}} -->

		<!-- wp:group {"style":{"border":{"width":"1px","color":"var:preset|color|light-grey-1","radius":"2px"},"spacing":{"blockGap":"0"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--light-grey-1);border-width:1px;border-radius:2px;min-height:100%">

			<!-- wp:post-featured-image {"style":{"spacing":{"margin":{"bottom":"0"}}}} /-->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:20px;padding-bottom:var(--wp--preset--spacing--20);padding-left:20px">

				<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":1.6},"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|blueberry-1"}}}},"fontSize":"normal","fontFamily":"inter"} /-->

				<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":16,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}},"typography":{"lineHeight":1.6}}} /-->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
				<div class="wp-block-group">

					<!-- wp:wporg-learn/learning-duration {"style":{"elements":{"link":{"color":{"text":"var:preset|color|charcoal-4"}}}},"textColor":"charcoal-4","fontSize":"small"} /-->

					<!-- wp:wporg-learn/lesson-count {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"fontSize":"extra-small"} /-->

					<!-- wp:wporg-learn/course-status {"fontSize":"extra-small"} /-->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:query-no-results -->

		<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
		<p><?php esc_html_e( 'No Courses found.', 'wporg-learn' ); ?></p>
		<!-- /wp:paragraph -->

	<!-- /wp:query-no-results -->

	<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->

		<!-- wp:query-pagination-previous {"label":"Previous"} /-->

		<!-- wp:query-pagination-numbers /-->

		<!-- wp:query-pagination-next {"label":"Next"} /-->

	<!-- /wp:query-pagination -->

</div>
<!-- /wp:query -->
