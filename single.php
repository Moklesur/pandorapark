<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ThemeTim_WordPress_Framework
 */

get_header(); ?>

	<main class="article-page">
		<section>
			<div class="container">
				<div class="row">
					<?php if( get_post_type() !== 'wp_themes' ) { ?>
					<?php if (get_theme_mod('blog_sidebar_enable','1') ) : ?>
					<div class="col-md-9 col-sm-8 col-xs-12 padding-gap-1 padding-gap-4">
						<?php else: ?>
						<div class="col-md-12 col-sm-12 col-xs-12 padding-gap-1 padding-gap-4">
							<?php endif; ?>
							<?php
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content', get_post_format() );
								previous_post_link('<span>%link</span>', '<i class="fa fa-long-arrow-left"></i> Previous', TRUE);
								next_post_link('<span class="pull-right">%link</span>', 'Next <i class="fa fa-long-arrow-right"></i> ', TRUE);

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
							?>
						</div>
						<?php
						if (get_theme_mod('blog_sidebar_enable','1') ) :
							get_sidebar();
						endif;
						?>
					</div>
					<?php } else { ?>
					<!----------WP Themes--------->
					<div class="col-md-12 col-sm-12 col-xs-12 padding-gap-1 padding-gap-4">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content">
								<?php
								the_content();

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'themetim' ),
									'after'  => '</div>',
								) );
								?>
							</div><!-- .entry-content -->

							<footer class="entry-footer">
								<?php
								edit_post_link(
									sprintf(
									/* translators: %s: Name of current post */
										esc_html__( 'Edit %s', 'themetim' ),
										the_title( '<span class="screen-reader-text">"', '"</span>', false )
									),
									'<span class="edit-link">',
									'</span>'
								);
								?>
							</footer><!-- .entry-footer -->
						</article><!-- #post-## -->
					</div>
					<?php } ?>
				</div>
		</section>
	</main><!-- #main -->
<?php
get_footer();
