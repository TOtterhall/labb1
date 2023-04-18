<?php
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-9" id="primary">
                    <h1>
                        <?php wp_title() ?>
                    </h1>
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            get_template_part('template-parts/content', 'archive');
                        }
                    }
                    ?>
                    <?php
                    $args = array(
                        'prev_text' => '<span class="pagination-prev">Föregående</span>',
                        'next_text' => '<span class="pagination-next">Nästa</span>',
                        'before_page_number' => '<span class="pagination-page-number">',
                        'after_page_number' => '</span>',
                    );
                    echo '<div class="pagination">';
                    echo paginate_links($args);
                    echo '</div>';

                    ?>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <?php get_sidebar(); ?>
                </aside>
            </div>
        </div>
    </section>
</main>




<?php
get_footer();
?>