<?php
get_header();
?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
                    <h1>
                        <?php echo "Sökresultat för: ";
                        the_search_query() ?>
                    </h1>

                    <?php

                    if (have_posts()) {
                        the_post();
                        get_template_part('template-parts/content', 'archive');




                        while (have_posts()) {
                            the_post();
                            get_template_part('template-parts/content', 'archive');
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>