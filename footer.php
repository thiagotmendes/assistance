<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

		</div><!-- .row -->
	</div><!-- #wrapper -->

	<footer id="" role="contentinfo">
		<div class="container">
			<div class="row">
			  <div class="col-md-3">
			    <img src="<?php echo get_template_directory_uri()."/assets/images" ?>/logo-baixo.png" alt="" />
			  </div>
				<div class="col-md-5">
					<div class="end-site">
						<img src="<?php echo get_template_directory_uri()."/assets/images" ?>/icon-phone.png" alt="" />
						(31) 3512-8000
					</div>
					<div class="end-site">
						<img src="<?php echo get_template_directory_uri()."/assets/images" ?>/icon-location.png" alt="" />
						atendimento@assistancesolucoes.com.br
					</div>
					<div class="end-site">
						<img src="<?php echo get_template_directory_uri()."/assets/images" ?>/icon-mail.png" alt="" />
						Rua Dr. Eduardo Lopes Filho, 60 - Centro. <br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 Betim -MG. CEP: 32600-152
					</div>
				</div>
				<div class="col-md-4">

					<img src="<?php echo get_template_directory_uri()."/assets/images" ?>/newsletter.png" alt="" />
					<div class="form-group">
					  <label for=""></label>
					  <input type="text" name="name" value="" placeholder="Entre com um endereço de email" class="form-control">
					</div>

					<div class="clearfix"></div>
					<div class="pull-right social">
						<a href="">
							<img src="<?php echo get_template_directory_uri()."/assets/images" ?>/facebook.png" alt="" />
						</a>
						<a href="">
							<img src="<?php echo get_template_directory_uri()."/assets/images" ?>/instagram.png" alt="" />
						</a>
					</div>
				</div>
			</div>
		</div><!-- .container -->
	</footer><!-- #footer -->

	<?php wp_footer(); ?>
</body>
</html>
