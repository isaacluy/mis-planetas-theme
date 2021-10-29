<?php
	/**
	 * Search Results Page Template
	 *
	 * @package MisPlanetasTheme
	 * @since 1.0.0
	 */

	// Basically includes header.php.
	get_header();
?>

<h1
class="
		text-red-900 text-2xl
		mb-4
		text-center
		lg:text-left lg:ml-4 lg:text-3xl
	"
>
	SEARCH.PHP
</h1>

<?php
if ( have_posts() ) {
	?>
		<h2>Search results for query: "<?php the_search_query(); ?>"</h2>
	<?php
	while ( have_posts() ) {
		the_post();
		?>

				<article class="post">
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</article>
		<?php
	}
} else {
	echo '<p>No search results found!</p>';
}
?>

<?php
	// Basically includes footer.php.
	get_footer();

