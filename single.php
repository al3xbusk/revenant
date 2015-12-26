<?php get_header(); ?>

<div class="quote-wrap">
  <ul class="breadcrumb">
    <?php the_breadcrumb(); ?>
  </ul>
  
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <div class="main-post">
        <h1><?php the_title() ?></h1>
        <div class="main-post-content">

          <?php the_content() ?>
          <?php
          $posttags = get_the_tags();
          if ($posttags) { 
            ?>
            <span class="label label-warning">Метки записи</span>
            <div class="meta"><i class="icon-tags"></i>
              <?php
              foreach($posttags as $tag) {
                $tag_links[] = '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
              }
              echo join( ', ', $tag_links );
              echo "</div>";
            }
            ?>
          </div>
          <div class="post-author">
            <p>More posts by <span> <?php the_author_posts_link(); ?></span></p>
          </div>
        </div>

        <?php comments_template(); ?>



      </div>
    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  <?php else : ?>
  <?php endif; ?>


</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>