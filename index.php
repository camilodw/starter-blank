<?php get_header();?>
<div class="container-fluid">
    <div class="col-12 text-center mt-3">
        <h5 class="h3 text-white"><?php single_post_title(); ?></h5>
    </div>
    <div class="row mt-2 justify-content-center">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <div class="col col-12 col-md-6 col-lg-4 mt-2">
            <div class="card">
                <a href="<?php the_permalink();?>">
                    <?php if ( has_post_thumbnail() ) {
    the_post_thumbnail( 'post-thumbnails', array( 'class' => 'img-fluid img-style' ) );
} ?></a>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </div>
    <div class="col-12 text-center">
        <?php 
        // Carga /mitheme/partials/content-image.php
        get_template_part( 'template-parts/content', 'pagination' );
        ?>
    </div>
</div>

<?php get_footer();?>