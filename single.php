<?php get_header() ?>
  <body class="gc-default mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <?php get_template_part('partials/navigation') ?>

      <main class="gc-default mdl-layout__content">
          <?php if(have_posts()); the_post();?>
            <section class="gc-card section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp" style="margin: 48px auto">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>
                  <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                </h4>
                <?php the_content(); ?>
              </div>
              <div class="mdl-card__actions">
                <p>分类：<?php the_category(', '); ?></p>
                <p>标签：<?php the_tags( '', ', ', '' ); ?></p>
              </div>
            </div>
          </section> 
          
      <?php get_footer() ?>
      </main>
    </div>

  

  </body>
</html>
