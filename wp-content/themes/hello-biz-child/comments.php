<?php
/**
 * The template for displaying the list of comments and the comment form.
 *
 * @package HelloBiz
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! post_type_supports( get_post_type(), 'comments' ) ) {
	return;
}

if ( ! have_comments() && ! comments_open() ) {
	return;
}

// Comment Reply Script.
if ( comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}
?>
<div id="comments-wrap" class="wrap">
	<section id="comments" class="comments-area">

		<?php if ( have_comments() ) : ?>
			<h3 class="title-comments">
				Your comments:
			</h3>

			<?php the_comments_navigation(); ?>

			<ol class="comment-list">
				<?php
				wp_list_comments(
					[
						'style'       => 'ol',
						'short_ping'  => true,
						'avatar_size' => 42,
					]
				);
				?>
			</ol>

			<?php the_comments_navigation(); ?>

		<?php endif; ?>

		<?php
		comment_form(
			[
				'title_reply' => 'Any thoughts on this? Share them here.',
			]
		);
		?>

	</section>
</div>
