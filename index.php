<?php
get_header();
?>

    <div id="primary" class="content-area container">
	<i class="far fa-space-station-moon-alt"></i>
        <main id="main" class="site-main">

	        <?php
	        while(have_posts()) : the_post();
		        ?>

                <section>
			        <?php the_title('<h1>', '</h1>'); ?>

			        <?php
			        the_content();
			        ?>
                </section>

		        <?php
	        endwhile; // End of the loop.
	        ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();