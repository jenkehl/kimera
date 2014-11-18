This is the content-single
<section class="blog page">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
<div class=”navigation”>
    <?php previous_post_link(); ?>
    <?php next_post_link(); ?>
</div>

    <p class="entry-time"><?php the_date() ?></p>
    <h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <?php the_post_thumbnail(); ?>
  </header>
  <?php the_content() ?>
  <footer class="entry-footer">
<div class="entry-meta">
    <span class="entry-terms author">Written by <a href=""><?php echo get_the_author(); ?></a></span>
    <span class="entry-terms category">Posted in <a href="">

    <?php
$category = get_the_category();
echo $category[0]->cat_name;
?></a></span>
<span class="entry-terms comments"><?php echo get_comments_number() ?> comments <?php if (is_user_logged_in() && current_user_can('edit_posts')): echo '| <a href="' . get_edit_post_link() . '">Edit Post</a>'; endif; ?></span>
</div>
  </footer>

</article>
</section>
