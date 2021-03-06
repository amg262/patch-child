<?php
/**
 * The template for displaying all single posts.
 *
 * @package Patch
 * @since   Patch 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post();

			/* Include the Post-Format-specific template for the content.
			* If you want to override this in a child theme, then include a file
			* called content-___.php (where ___ is the Post Format name) and that will be used instead.
			*/

			get_template_part( 'content-single', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>
          <div class="row">

            <form action="" method="post" role="form">
              <legend> Form Title</legend>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">


                  <input type="text" class="form-control" name="" id="" placeholder="Input...">
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">


                <button type="submit" class="btn btn-primary"> Submit</button>
              </div>

            </form>
          </div>
		<?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
