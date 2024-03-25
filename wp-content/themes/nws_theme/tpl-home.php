<?php /* Template Name: Modèle page d'accueil */ ?>

<?php get_header() ?>

<main class="page-flux main-home-page">
    <section class="main-home-page__welcome-section">
        <h1 class="main-home-page__welcome-section--title"><?php the_field('title_welcome_section') ?></h1>
        <p class="main-home-page__welcome-section--text"><?php the_field('welcome_text')?></p>
    </section>
    <section class="main-home-page__about-section">
        <h2 class="main-home-page__about-section--title"><?php the_field('title_about_section') ?></h2>
        <p class="main-home-page__about-section--text"><?php the_field('text_about_section')?></p>
    </section>
    <section class="main-home-page__pictures-section">
        <h2 class="main-home-page__pictures-section--title"><?php the_field('title_pictures_section') ?></h2>
        <p class="main-home-page__pictures-section--text"><?php the_field('text_pictures_section')?></p>
        <img class="main-home-page__pictures-section--image" src="<?php echo get_field('picture_pictures_section')['url'] ?>" alt="<?php echo get_field('picture_pictures_section')['alt'] ?>">
        <a class="main-home-page__pictures-section--link" href="<?php echo get_field('link_to_page_pictures')['url'] ?>" target="<?php get_field('link_to_page_pictures')['target'] ?>"><?php echo get_field('link_to_page_pictures')['title'] ?></a>
    </section>
    <section class="main-home-page__events-section">
        <h2 class="main-home-page__events-section--title"><?php the_field('title_events_section') ?></h2>
        <p class="main-home-page__events-section--text"><?php the_field('text_events_section')?></p>
        <a class="main-home-page__events-section--link" href="<?php echo get_field('link_to_page_events')['url'] ?>" target="<?php get_field('link_to_page_events')['target'] ?>"><?php echo get_field('link_to_page_events')['title'] ?></a>
    </section>
    <section class="main-home-page__contact-section">
        <h2 class="main-home-page__contact-section--title"><?php the_field('title_contact_section') ?></h2>
        <p class="main-home-page__contact-section--text"><?php the_field('text_contact_section')?></p>
        <a class="main-home-page__contact-section--link" href="<?php echo get_field('link_to_contact_page')['url'] ?>" target="<?php get_field('link_to_contact_page')['target'] ?>"><?php echo get_field('link_to_contact_page')['title'] ?></a>
    </section>
</main>

<?php get_footer() ?>