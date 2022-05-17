<?php get_header();?>

<div class="container-fluid">
    <div class="row mt-3 justify-content-center">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <div class="col-12 col-lg-10">
            <?php if ( has_post_thumbnail() ) {
    the_post_thumbnail( 'post-thumbnails', array( 'class' => 'w-100 img-fluid' ) );
} ?>
        </div>
        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer();?>