<?php get_header() ?>

<main class="center-flux">
    <section class="event-card">
        <img class="event-card__image" src="<?php echo get_field('picture_of_event')['url'] ?>" alt="<?php echo get_field('picture_of_event')['alt'] ?>">
        <h1 class="event-card__title"><?php the_field('title_of_event') ?></h1>
        <p class="event-card__text"><?php the_field('text_presentation_of_event')?></p>
        <a class="event-card__link" href="<?php echo get_field('link_for_contact_page')['url'] ?>" target="<?php get_field('link_for_contact_page')['target'] ?>"><?php echo get_field('link_for_contact_page')['title'] ?></a>
    </section>
</main>
<?php get_footer() ?>
