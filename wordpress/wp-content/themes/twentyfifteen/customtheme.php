<?php /* Template Name: CustomPageT1 */ ?>
<?php get_header(); ?>
<div id="primary" class="content-area">
  <main id="main" class="site-man" role="man">
    <?php
      // Start the loop
      while( have_posts() ) : the_post();

      // Include the page content template
        get_template_part('template-parts/content', 'page');

      // If comments are open or we have at least one comment, load up the comment template
      if(comments_open() || get_comments_number()) {
        comments_template();
      }

      // End of the loop
      endwhile;
    ?>
  </main> <!--end site-man-->
</div> <!--end content-area-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>