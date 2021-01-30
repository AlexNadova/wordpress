<?php
/**
 * Template Name: Cover Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">
  <?php
    get_template_part('template-parts/content-cover');
  ?>
  <div class="custome__products-container" id="post-inner">
    <ul class="custome__products-list">
      <?php
        /** fetch records from db anc create rows in a table */
        global $wpdb;
        $result = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."products");
        foreach ($result as $print) {
            $src = get_theme_file_uri()."/assets/images/donuts/";
            echo "
              <li class='custome__products-item'>
                <h4>$print->name</h4>
                <img src='".$src.$print->product_id.".png' onerror = 'this.src=`".$src."x.png`' />
                <p>$print->description</p>
                <div>$print->price €</div>
              </li>
            ";
        }
      ?>
    </ul>
  </div>
</main><!-- #site-content -->

<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php get_footer(); ?>
