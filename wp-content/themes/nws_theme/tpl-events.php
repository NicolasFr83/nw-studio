<?php /* Template Name: Modèle page évènements */ ?>

<?php get_header() ?>
    <main class="all-events-page page-flux">
        <h1 class="all-events-page__title"><?php the_field('title_events_page') ?></h1>
        <p class="all-events-page__text"><?php the_field('text_events_page')?></p>

        <?php $params = array(
            'post_type' => 'event',
            'numberposts' => '-1',
        )?>

        <?php $allProjects = get_posts($params) ?>

        <ul class="all-events-page__list">
            <?php for ($i=0; $i < count($allProjects); $i++) : ?>
                <li class="events-list-element">
                    <?php $idProject = $allProjects[$i]->ID ?>
                    <img class="events-list-element__image" src="<?php echo get_field('picture_of_event', $idProject)['url'] ?>" alt="<?php echo get_field('picture_of_event', $idProject)['alt'] ?>">
                    <h2 class="events-list-element__title"><?php the_field('title_of_event', $idProject) ?></h2>
                    <a class="events-list-element__link" href="<?php echo get_permalink($idProject); ?>">Découvrir l'évènement</a>
                </li>
            <?php endfor ?>
        </ul>
    </main>
<?php get_footer() ?>