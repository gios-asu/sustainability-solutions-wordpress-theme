<?php
/**
 * Template Name: about
 *
 
 */

get_header(); ?>

 	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wptemplate-gios-v1' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
    <div class="container">
    <div class="continer">
 <div id="accordion" class="panel-group">
<div class="panel panel-primary">
<a class="accordion-link" href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
<div class="panel-heading">

<h2 style="padding-top:10px; padding-bottom:0" class="panel-title">
How are the Rob and Melani Walton Sustainability Solutions Initiatives funded?
</h2>

</div></a>
<!--close panel heading-->
<div id="collapseOne" class="panel-collapse collapse in">
<div class="panel-body">The Rob and Melani Walton Sustainability Solutions Initiatives, a unit of Arizona State University's Julie Ann Wrigley Global Institute of Sustainability, were made possible by a generous investment from the Rob and Melani Walton Fund of the Walton Family Foundation. This investment, in the amount of $27.5 million, was made subject to the accomplishment of agreed-upon goals. The investment is designated entirely for program support.</div>
</div>
<!-- close collapseOne-->

</div>
<!--close panel primary-->
<div class="panel panel-primary">
<a class="accordion-link" href="#collapseTwo" data-toggle="collapse" data-parent="#accordion">
<div class="panel-heading">
<h2 style="padding-top:10px; padding-bottom:0" class="panel-title">
Do the Walton Sustainability Solutions Initiatives make grants or provide seed money for sustainability projects?
</h2>
</div></a>
<!--close panel heading-->
<div id="collapseTwo" class="panel-collapse collapse">
<div class="panel-body">While the Initiatives span a wide range of education, research and application activities, it is not an external grant maker. The Walton Sustainability Solutions Initiatives, through the <a class="link-styles" href="/solutionsfestival/">Sustainability Solutions Festival</a>, is proud to provide multiple monetary awards for student-based and entrepreneurial projects.</div>
</div>
<!-- close collapseTwo -->

</div>
<!-- close panel primary-->
<div class="panel panel-primary">
<a class="accordion-link" href="#collapseThree" data-toggle="collapse" data-parent="#accordion">
<div class="panel-heading">
<h2 style="padding-top:10px; padding-bottom:0" class="panel-title">
Do the Walton Sustainability Solutions Initiatives provide funding support for educational expenses?
</h2>
</div></a>
<!-- close panel heading-->
<div id="collapseThree" class="panel-collapse collapse">
<div class="panel-body">Yes, scholarships are available to qualified students applying for both the <a class="link-styles" href="/executivemasters/">Executive Master's for Sustainability Leadership</a> and the <a class="link-styles" href="/global-studies/">Global Sustainability Studies Program</a>.</div>
<!--close panel body-->

</div>
<!-- close collapseThree-->

</div>
<!-- close panel primary-->
<div class="panel panel-primary">
<a class="accordion-link" href="#collapseFour" data-toggle="collapse" data-parent="#accordion">
<div class="panel-heading">
<h2 style="padding-top:10px; padding-bottom:0" class="panel-title">
What are the goals of the Walton Sustainability Solutions Initiatives?

</h2>
</div></a>
<!-- close panel heading-->
<div id="collapseFour" class="panel-collapse collapse">
<div class="panel-body">

The Walton Sustainability Solutions Initiatives are chartered to help create a sustainable way of life through three overarching goals:
<ol>
	<li>To deliver scalable sustainability solutions through the <a class="link-styles" href="/solutionsservices/">Global Sustainability Solutions Services</a></li>
	<li>To provide advanced sustainability-oriented educational programs that accelerate global impact through the <a class="link-styles" href="executivemasters">Executive Master's for Sustainability Leadership</a>, the <a class="link-styles" href="/global-studies/">Global Sustainability Studies Program</a> and the <a class="link-styles" href="/fellowships/">Walton Sustainability Fellows</a></li>
	<li>To engage and inform the public of all ages to explore and create innovative sustainability solutions through the <a class="link-styles" href="/solutionsfestival/">Sustainability Solutions Festival</a>, the Walton National Sustainability Teachers' Academy and the Sustainability for Science Museums program.</li>
</ol>
</div>
<!-- close panel body-->

</div>
<!--close collapseFour-->

</div>
<!-- close panel primary-->

</div>
<!-- close accordion-->

		</main><!-- #main -->
	</div><!-- #primary -->
 
  </div>
 
 <?php get_footer(); ?>
