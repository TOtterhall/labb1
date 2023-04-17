<?php
get_header();
?>

<main>
	<section>
		<div class="container">
			<div class="row">
                
				<div class="col-xs-12">
					<?php
                    if(have_posts() ){
                        while (have_posts()) {
                        the_post();
                        the_content();
                        the_post_thumbnail();
                       
                        
                        }
                    }
                    ?>
                </div>
			</div>
	</section>
</main>







<?php
get_footer();
?>