<?php

// =============================================================================
// VIEWS/RENEW/WP-SINGLE-X-PORTFOLIO.PHP
// -----------------------------------------------------------------------------
// Single portfolio post output for Renew.
// =============================================================================

?>

<?php get_header(); ?>
  
  <div class="x-container-fluid max width offset">
    <div class="x-row-fluid">
      <div class="x-main full" role="main">		
        <?php while ( have_posts() ) : the_post(); ?>
          <?php x_get_view( 'renew', 'content', 'portfolio' ); ?>
          <?php x_get_view( 'global', '_comments-template' ); ?> 
        <?php endwhile; ?>
        <?php x_entry_navigation(); ?>
      </div>

    </div>
  </div>
<?php get_footer(); ?>