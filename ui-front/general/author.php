<?php
/**
 * The template for displaying Author Archive pages.
 * You can override this file in your active theme.
 *
 * @package Classifieds
 * @subpackage UI Front
 * @since Classifieds 2.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

            <?php
            /* Queue the first post, that way we know who
             * the author is when we try to get their name,
             * URL, description, avatar, etc.
             *
             * We reset this later so we can run the loop
             * properly with a call to rewind_posts().
             */
            if ( have_posts() ) the_post();
            ?>

				<h1 class="page-title author"><?php printf( __( 'Classifieds By: %s', 'classifieds' ), "<span class='vcard'><a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a></span>" ); ?></h1>

                <?php
                /* Since we called the_post() above, we need to
                 * rewind the loop back to the beginning that way
                 * we can run the loop properly, in full.
                 */
                rewind_posts();

                /* Run the loop for the author archive page to output the authors posts
                 * If you want to overload this in a child theme then include a file
                 * called loop-author.php and that will be used instead.
                 */
                 if ( file_exists( get_template_directory() . "/loop-author.php" ) )
                    get_template_part( 'loop', 'author' );
                 else
                    load_template( CF_PLUGIN_DIR . 'ui-front/general/loop-author.php' );
                ?>
                    
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>