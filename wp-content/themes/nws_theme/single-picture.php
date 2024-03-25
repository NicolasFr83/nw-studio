<?php get_header() ?>

<main class="main-picture-page">
    <h1 class="main-picture-page__title"><?php the_title() ?></h1>
    <img class="main-picture-page__picture" src="<?php echo get_field('picture')['url'] ?>" alt="<?php echo get_field('picture')['alt'] ?>">
</main>

<?php get_footer() ?>
