<?php /* template name: Home */ ?>
<?php get_header() ?>
<section>
  <?php echo do_shortcode('[rev_slider alias="home"]') ?>
</section>

<main class="main-home">
  <section class="servicos inner">
    <div class="container">
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
          <img src="<?php echo $imageDir ?>/box1.jpg" alt="" class="img-responsive" />
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
          <h2>Institucional</h2>
          <p>MUITO MAIS PARA VOCÊ!</p>

          <p>No intuito de atendê-lo (a) melhor, a sua Associação credenciou os serviços de uma empresa especializada na gestão de veículos,
          com aporte de uma excelente infraestrutura e pronto atendimento.</p>

          <p>Trata-se da Assistance – Soluções em Proteção, cujas atividades abrangem uma completa orientação,
          desde a recepção de beneficiários e terceiros, até a finalização da documentação e liquidação dos sinistros,
          prestando toda a assessoria pertinente e legal.</p>

          <p>Estamos à disposição para atendê-lo(a) sempre que precisar.</p>
          <a href="#" class="btn btn-cta"> ENTRE EM CONTATO </a>

        </div>
      </div>
    </div>
  </section>

  <section class="solucoes inner">
    <div class="container">
      <h2 class="titulo-colucoes">SOLUÇÕES EM PROTEÇÃO</h2>
      <div class="row">
        <div class="col-md-3">
          <div class="box-servicos">
            <img src="<?php echo $imageDir ?>/icon1.png" alt="" class="alignleft" />
            <h3 class="titulo-servicos">Realização de vistorias em veículos</h3>
            <div class="clearfix"></div>
            <img src="<?php echo $imageDir ?>/f01.jpg" alt="" class="img-responsive" />
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer() ?>
