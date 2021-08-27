<?php
    get_header();
    /*
    Template Name:Manager

    */
    $args =array ('post_type'=>'post');
    // The Query
    $the_query = new WP_Query( $args );
    
    // The Loop
    if ( $the_query->have_posts() ) {
        echo '<ul>';
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            echo '<li>' . get_the_title() . '</li>';
        }
        echo '</ul>';
    } else {
        // no posts found
    }
    /* Restore original Post Data */
    wp_reset_postdata();
?>
<form>
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Enter Manager</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" name="mname" >
    </div>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2 float-right" name="mngr_sbmt">Submit</button>
    </div>
  </div>
</form>