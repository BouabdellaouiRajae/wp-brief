<?php get_header();?>




<!--show image post-->

<?php if(has_post_thumbnail()):?>


<img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail" >
<?php endif;?>


<h1><?php the_title();?></h1>
<p><?php the_content();?></p>


<?php get_template_part('includes/section','blogcontent');?>


<!--page swip link -->
 <?php wp_link_pages();?>

 <?php get_footer();?>
           
           