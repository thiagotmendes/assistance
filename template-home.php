<?php /* template name: Home */ ?>
<?php get_header() ?>
<section>
  <?php echo do_shortcode('[rev_slider alias="home"]') ?>
</section>

<main class="main-home">
  <section class="servicos inner">
    <div class="container">
      <p align="center">
				<img src="<?php echo $imageDir ?>/solucao-protecao.png" alt="" class="img-responsive" />
			</p>
      <div class="row">
        <div class="col-md-3">
          <img src="<?php echo $imageDir ?>/box1.jpg" alt="" class="img-responsive" />
        </div>
        <div class="col-md-3">
          <img src="<?php echo $imageDir ?>/box2.jpg" alt="" class="img-responsive" />
        </div>
        <div class="col-md-3">
          <img src="<?php echo $imageDir ?>/box3.jpg" alt="" class="img-responsive" />
        </div>
        <div class="col-md-3">
          <img src="<?php echo $imageDir ?>/box4.png" alt="" class="img-responsive" />
        </div>
      </div>
    </div>
  </section>

  <section class="institucional inner">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="<?php echo $imageDir ?>/protect.jpg" alt="" class="img-responsive" />
        </div>
        <div class="col-md-8">
          <h2><img src="<?php echo get_template_directory_uri() ?>/assets/images/institucional.png" alt="" /></h2>
          <p><strong>MUITO MAIS PARA VOCÊ!</strong></p>

          <p>No intuito de atendê-lo (a) melhor, a sua Associação credenciou os serviços de uma empresa especializada na gestão de veículos,
          com aporte de uma excelente infraestrutura e pronto atendimento.</p>

          <p>Trata-se da Assistance – Soluções em Proteção, cujas atividades abrangem uma completa orientação,
          desde a recepção de beneficiários e terceiros, até a finalização da documentação e liquidação dos sinistros,
          prestando toda a assessoria pertinente e legal.</p>

          <p>Estamos à disposição para atendê-lo(a) sempre que precisar.</p>
          <a href="<?php echo esc_url( home_url( 'contato' ) ); ?>" class="btn btn-cta">
            ENTRE EM CONTATO
          </a>

        </div>
      </div>
    </div>
  </section>

  <section class="solucoes inner">
    <div class="container">
      <h2 class="titulo-colucoes"><img src="<?php echo get_template_directory_uri() ?>/assets/images/titulo-imgsolucao.png" alt="" /></h2>
      <div class="row">
        <?php
        $argServicos = array(
          'post_type'       => 'page',
          'post_parent'     => '9',
          'posts_per_page'  => 6
        );

        $servicosHome = new wp_query($argServicos);
        if ($servicosHome->have_posts()) {
          while ($servicosHome->have_posts()) { $servicosHome->the_post();
          ?>
            <!-- INICIA OS SERVIÇOS -->
            <div class="col-md-4">
              <div class="box-servicos">
                <div class="conteudo-servicos">
                  <?php
                  $image = get_field('icone');
                  if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="alignleft" />
                  <?php endif; ?>
                  <h3 class="titulo-servicos"> <a href="<?php the_permalink() ?>"> <?php the_title() ?> </a>  </h3>
                </div>
                <div class="clearfix"></div>
                <div class="img-servicos">
                  <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
                  </a>
                </div>
              </div>
            </div>
            <!-- FINALIZA O BOX DE SERVIÇOS -->
          <?php
          }
        }
        ?>
      </div>
      <p align="center" class="inner">
        <a href="<?php echo esc_url( home_url( 'solucoes-em-protecao' ) ); ?>" class="btn btn-cta">VEJA TODOS OS NOSSOS BENEFÍCIOS</a>
      </p>
    </div>
  </section>

  <section class="depoimentos inner institucional">
    <div class="container">
      <p align="center">
				<img src="<?php echo $imageDir ?>/depoimentos-titulo.png" alt="" class="" />
			</p>
      <br><br>
      <div class="row">
        <div class="col-md-4">
          <img src="<?php echo $imageDir ?>/img-depoimentos.png" alt="" class="img-responsive" />
        </div>
        <div class="col-md-4">
          <img src="<?php echo $imageDir ?>/img-depoimentos.png" alt="" class="img-responsive" />
        </div>
        <div class="col-md-4">
          <img src="<?php echo $imageDir ?>/img-depoimentos.png" alt="" class="img-responsive" />
        </div>
      </div>
    </div>
  </section>

  <section class="noticias inner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3><img src="<?php echo get_template_directory_uri() ?>/assets/images/ultimasnoticias.png" alt="" /></h3>
          <?php
          $argPost = array(
            'post_type'       => 'post',
            'posts_per_page'  => 4
          );

          $postHome = new wp_query($argPost);
          if ($postHome->have_posts()) {
            while ($postHome->have_posts()) { $postHome->the_post();
            ?>
              <div class="row linha-noticia">
                <div class="col-md-3">
                  <a href="'<?php the_permalink(); ?>'">  <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?></a>
                </div>
                <div class="col-md-9">
                  <h4><a href="#"> <?php the_title() ?> </a> </h4>
                  <?php the_excerpt_limit(20) ?>
                </div>
              </div>
            <?php
            }
          }
          ?>

        </div>
        <div class="col-md-6">
          <div class="anuncio-box">
            <a href="<?php echo esc_url( home_url( 'promocoes' ) ); ?>">
              <img src="<?php echo $imageDir ?>/anuncio1.jpg" alt="" class="img-responsive" />
            </a>
          </div>
          <div class="anuncio-box">
            <a href="<?php echo esc_url( home_url( 'locacao-de-veiculo' ) ); ?>">
              <img src="<?php echo $imageDir ?>/anucio2.jpg" alt="" class="img-responsive" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer() ?>
