<?php get_header(); ?>

<div class="quote-wrap">

  <?php if (have_posts()) : ?>
    <h2>Your search have searched "<?php the_search_query(); ?>"</h2>
    <form role="search" method="get" id="searchform" class="search-input" action="http://theme-t/">
      <div class="search-results">
        <input type="text" value="" name="s" id="s" class="search-query" placeholder="Try again..." />
        <input type="submit"></input>
      </div>
    </form>
    <h2>Результаты поиска:</h2>
    <?php while (have_posts()) : the_post(); ?>
      <div class="main-posts">
        <div class="post-image">
          <a href="<?php the_permalink(); ?>">
            <?php echo get_the_post_thumbnail( $id, $size, $attr ); ?>
          </a>
        </div>
        <h4>
          <span>  
            <a href="<?php the_permalink(); ?>#comments">
              <?php comments_number('no comments','1 comment','% comments'); ?>
            </a>
          </span>
          <a href="<?php the_permalink() ?>"> 
            <?php the_title(); ?>
          </a> 
        </h4>
        <div class="main-post-content">
          <p>
            <?php the_excerpt(); ?>   
          </p>
        </div>
      </div>
    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="pagenavi">
      <?php if(function_exists('my_pagenavi')) { my_pagenavi(); } ?>
    </div> <!--end pagination-->
  <?php else : ?>
    <h2>No results for "<?php the_search_query(); ?>"</h2>
    <form role="search" method="get" id="searchform" class="search-input" action="http://theme-t/">
      <div class="search-results">
        <input type="text" value="" name="s" id="s" class="search-query" placeholder="Try again..." />
        <input type="submit"></input>
      </div>
    </form>
  <?php endif; ?>
  <?php get_sidebar(); ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
