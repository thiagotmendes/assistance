<?php get_header() ?>

	<main class="page-interno">
		<div class="container conteudo-blog">
			<div class="row">
				<div class="col-md-8">
					<?php if (have_posts()): ?>
						<?php while(have_posts()): the_post(); ?>
							<article class="post">
								<?php if (has_post_thumbnail()): ?>
									<div class="img-noticia-blog">
										<a href="'<?php the_permalink(); ?>'">  <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?></a>
									</div>
								<?php endif ?>
								<div class="clearfix"></div>
								<h2 class="titulo-noticia-home">
									<a href="<?php the_permalink() ?>">
										<?php the_title(  ); ?></h2>
									</a>
								<div class="info-adicional">
									<div class="pull-left">
										<i class="fa fa-user"></i> <?php  the_author(); ?> | <?php the_category(' '); ?> |
										<i class="fa fa-calendar-o"></i> <?php the_time('j  F,  Y'); ?>
										<!--<i class="fa fa-comment-o"></i> <?php comments_number('Nenhum comentário', '1 comentário', '% comentários'); ?>-->
									</div>
									<div class="clearfix"></div>
								</div>
								<p class="previa-post"><?php the_excerpt(); ?> </p>
								<div class="saiba">
									<div class="row">
										<div class="col-md-10">
											<a href="<?php the_permalink(); ?>" class="btn btn-cta">Saiba Mais</a>
										</div>
										<div class="col-md-2">
											<!--<span><a href="#"><i class="fa fa-facebook sociais-post face-post" aria-hidden="true"></i></a></span>
											<span><a href="#"><i class="fa fa-twitter sociais-post twitter-post" aria-hidden="true"></i></a></span> -->
										</div>
									</div>
								</div>
							</article>
						<?php endwhile; ?>
					<?php
						else:
							echo "Nenhum post encontrado";
						endif ?>
						<?php //wp_pagination() ?>
				</div>
				<div class="col-md-4">
					<?php get_sidebar( ); ?>
				</div>
			</div>
		</div>
	</main>
<?php get_footer() ?>
