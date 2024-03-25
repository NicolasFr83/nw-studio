<?php /* Template Name: Modèle page galerie photos */ ?>

<?php get_header() ?>

    <main class="all-pictures-page page-flux">
        <h1 class="all-pictures-page__title"><?php the_field('title_pictures_page') ?></h1>
        <p class="all-pictures-page__text"><?php the_field('text_pictures_page')?></p>

        <?php $params = array(
            'post_type' => 'picture',
            'numberposts' => '-1',
        )?>

        <?php $allProjects = get_posts($params) ?>

        <ul class="all-pictures-page__pictures-list">
            <?php for ($i=0; $i < count($allProjects); $i++) : ?>
                <li class="all-pictures-page__pictures-list-element">
                    <?php $idProject = $allProjects[$i]->ID ?>
                    <a class="all-pictures-page__pictures-list-element--link" href="<?php echo get_permalink($idProject); ?>">
                        <img class="all-pictures-page__pictures-list-element--picture" src="<?php echo get_field('picture', $idProject)['url'] ?>" alt="<?php echo get_field('picture', $idProject)['alt'] ?>">
                    </a>
                </li>
            <?php endfor ?>
        </ul>
    </main>

<?php get_footer() ?>