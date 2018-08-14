<div class="col-md-4 mt-5">

  <?php if ( has_post_thumbnail() ) {
    the_post_thumbnail( 'custom-size-blog', array( 'class' => 'img-fluid mb-3' ) );
  } else { ?>
    <img src="<?php echo get_theme_file_uri( '/assets/img/brooke-lark-609900-unsplash-400x300.jpg' ) ?>" class="img-fluid mb-3"/>
  <?php } ?>

  <h4><?php the_title() ?></h4>
  <p><?php the_excerpt() ?></p>
  <a class="btn btn-primary" href="<?php the_permalink() ?>">Léeme completo</a>

</div>
