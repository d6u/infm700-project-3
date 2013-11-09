<?php
/*
Template Name: All Event Page
*/
get_header();
?>


<section class="se-events-calendar">
  <div class="container">
    <h1 class="se-events-calendar-header">Patterson Park Event Calendar</h1>
    <div class="row">
      <!-- Local Navigation -->
      <div class="col-md-3 col-sm-4"><?php get_sidebar(); ?></div>

      <!-- Page Content -->
      <div class="col-md-9 col-sm-8">
        <iframe src="https://www.google.com/calendar/embed?title=Patterson%20Park%20Event%20Calendar&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=d1ifugmce5j9n0thnfhhiq7qc8%40group.calendar.google.com&amp;color=%23A32929&amp;src=751hjlovt86cdiubu5tqd20o4k%40group.calendar.google.com&amp;color=%23060D5E&amp;src=895tb2vcn38bgpu9b7neqnudsg%40group.calendar.google.com&amp;color=%230D7813&amp;src=2en1op1qfdpd648cfbm1a0v3hs%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=America%2FNew_York" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
      </div>

    </div>
  </div>
</section>


<?php get_footer();
