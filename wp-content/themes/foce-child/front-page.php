<?php

get_header();
?>
<section class="banner">
        <div class="parallax-video">
        <video id="background-video" autoplay loop muted poster="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?>">
            <source src="<?php echo get_stylesheet_directory_uri() ?> /assets/videos/StudioVideo.mp4  " type="video/mp4">
        </video>
        <img class="logoAnim" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </div>
        
    </section>
<main id="primary" class="site-main">
    

    <section id="story" class="story">
        <h2><span>L'histoire</span></h2>
        <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>
        <?php
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key'  => '_main_char_field',
            'orderby'   => 'meta_value_num',

        );
        $characters_query = new WP_Query($args);

        // Passer la variable au template partiel
        set_query_var('characters_query', $characters_query);

        get_template_part('template-parts/characters');
        ?>
       

        <article id="place">
            <div class="nuages">   
            <img class="little-cloud" src="<?php echo get_stylesheet_directory_uri() ?> /assets/images/little_cloud.png" alt="Petit nuage">
            <img class="big-cloud" src="<?php echo get_stylesheet_directory_uri() ?> /assets/images/big_cloud.png" alt="Grand nuage">
            </div>
            <div> 
                 <h3>Le Lieu</h3> 
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>

        </article>
    </section>


    <section id="studio">
        <h2><span>Studio Koukaki</span></h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>

    <?php get_template_part('template-parts/nominations'); ?>

</main><!-- #main -->

<?php
get_footer();
