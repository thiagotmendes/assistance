<?php get_header() ?>
  <main class="page-interno">
    <article class="">
      <section>
        <?php if (have_posts()): ?>
          <?php while(have_posts()): the_post() ?>
          <section class="titulo-interno">
            <div class="container">
              <h1 class='titulo-menu-interno'><?php the_title() ?></h1>
            </div>
          </section>
          <section class="conteudo-interno">
            <div class="container">
              <?php the_content() ?>
            </div>
          </section>
          <?php endwhile; ?>
        <?php endif; ?>
      </section>
    </article>
  </main>
<?php get_footer() ?>
