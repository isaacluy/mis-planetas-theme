<?php
/**
 * Comments section
 *
 * @package MisPlanetasTheme
 * @since 1.0.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$comment_count = get_comments_number();
?>

<!-- COMMENTS -->
<section
	id="comentarios"
	class="p-8 my-4 <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>"
>
	<h3 class="mb-2 pt-4 text-red-900 border-t-2 border-red-900 border-solid text-xl lg:text-2xl">
		<a href="#comentarios">Comentarios</a>
	</h3>

	<?php
	if ( have_comments() ) :
		?>
		<h4 class="mb-6 italic text-gray-500 comments-title">
			<?php if ( '1' === $comment_count ) { ?>
				<?php esc_html_e( '1 comentario', 'misplanetastheme' ); ?>
			<?php } else { ?>
				<?php
				printf(
					/* translators: %s: Comment count number. */
					esc_html( _nx( '%s comentario', '%s comentarios', $comment_count, 'Titulo del comentario', 'misplanetastheme' ) ),
					esc_html( number_format_i18n( $comment_count ) )
				);
				?>
			<?php } ?>
		</h4>

		<ol class="comment-list space-y-2 mb-6">
			<?php
			wp_list_comments(
				array(
					'style'             => 'ol',
					'short_ping'        => true,
					'reverse_top_level' => true,
					'reverse_children'  => true,
					'callback'          => 'get_comments_html',
				)
			);
			?>
		</ol>

		<?php
		the_comments_pagination(
			array(
				'before_page_number' => esc_html__( 'Página', 'misplanetastheme' ) . ' ',
				'mid_size'           => 0,
				'prev_text'          => '<span>&larr;</span>',
				'next_text'          => '<span>&rarr;</span>',
			),
		);
		?>

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments bold italic"><?php esc_html_e( 'Los comentarios están cerrados.', 'misplanetastheme' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'class_submit'       => 'bg-red-900',
			'comment_field'      => '<textarea id="comment" class="w-full my-4" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>',
			'label_submit'       => esc_html__( 'Enviar comentario', 'misplanetastheme' ),
			'logged_in_as'       => null,
			'title_reply_after'  => '</h4>',
			'title_reply_before' => '<h4 id="reply-title" class="comment-reply-title">',
			'title_reply'        => esc_html__( 'Escribe un comentario:', 'misplanetastheme' ),
		)
	);
	?>

</section>
<!-- END COMMENTS -->
