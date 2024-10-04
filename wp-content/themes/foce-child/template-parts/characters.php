<?php
$characters_query = get_query_var('characters_query');

if ($characters_query->have_posts()) : ?>

<article id="characters">
    <div class="main-character">
        <h3>Les personnages</h3>

    <!-- Swiper container -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
            while ($characters_query->have_posts()) {
                $characters_query->the_post();
                echo '<div class="swiper-slide">';
                echo get_the_post_thumbnail(get_the_ID(), 'full');
                echo '<figcaption>' . get_the_title() . '</figcaption>';
                echo '</div>';
            }
            ?>
        </div>
        </div>
    </div>
</article>

<?php endif; ?>
