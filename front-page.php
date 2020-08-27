<?php include('header.php') ?>
<!-- Part 2 -->
  <div class="container preview-article py-3">
    <h2>Lorem</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php query_posts('showposts=3&cat='.$cat->cat_ID); ?>
        <?php if (have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
              <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                      <a href="<?php the_permalink() ?>"><h4 class="card-title"><?php the_title() ?></h4></a>
                        <p class="card-text">
                          <?php the_excerpt() ?>
                        </p>
                    </div>
                    <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']) ?>
                </div>
              </div>
              <?php endwhile ?>
              <?php else : ?>
                <h2>pas d'article</h2>
              <?php endif; ?>
      </div>
      <input type="button" class="mt-3" value="Voir tout nos post" onclick="location.href='<?= get_post_type_archive_link('post') ?>';">
  </div>
<!-- fin abonnement -->
<?php include('footer.php') ?>
