<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemeTim_WordPress_Framework
 */

?>

<footer class="footer-main">
	<!--------------- Footer Top ---------------->
	<section class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-12">
					<?php
                    if(get_theme_mod('middle_footer_text_enable','1')) :
                        do_action('themetim_middle_footer_description');
                    endif;
					?>
				</div>
				<!--------------- Footer Newsletter ---------------->
				<div class="col-md-4 col-sm-4 col-xs-12 ">
					<?php do_action('themetim_footer_newsletter');
                    if(get_theme_mod('bottom_footer_copyright_enable','1')) :
                        do_action('themetim_bottom_footer_copyright');
                    endif;
                    ?>
				</div>
			</div>
		</div>
	</section>
</footer>
</div>
<?php wp_footer(); ?>


<!-- Modal -->
<div class="modal fade request-a-quote" id="request-a-quote" tabindex="-1" role="dialog" aria-labelledby="request-a-quote" data-backdrop="static">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<h1>Get a quote for your projects!</h1>
				<?php echo do_shortcode('[contact-form-7 id="175" title="Request A Quote"]'); ?>
			</div>
		</div>
	</div>
</div>

</body>
</html>
