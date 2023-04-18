<?php
get_header();
?>


		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12">
							<h1><?php the_title();?></h1>
							<p><?php the_content();?></p>
							<p><?php the_content();?></p>
							<p><?php the_content();?></p>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-6">
							<img <?php the_post_thumbnail_url('full');?> />
						</div>
					</div>
				</div>
			</section>
		</main>

        



<?php
get_footer();
?>