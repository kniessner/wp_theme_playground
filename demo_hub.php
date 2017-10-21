<?php
/**
 * Page Template
 *
 * Template Name: Hub
 * Template Post Type: post, snippets, projects, demos
 */
get_header(); ?>


<div class="container">

<?php
getTaxTerms('location');
getTaxTerms('category');

?>
</div>
<a href="https://www.facebook.com/dialog/share?app_id=1519004611748468&href=http://kniessner.com/complex/wp-content/uploads/2016/06/20160206-P2060206-300x225.jpg" target="_blank">
<button class="btn btn-social btn-facebook"> <i class="fa fa-facebook fa-2x"  aria-hidden="true"></i> Share on Facebook</button>
</a>
						

<?php get_footer(); ?>
