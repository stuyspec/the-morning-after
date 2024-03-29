<?php
/*
Template Name: Archives Page
*/
?>

<?php get_header(); ?>        
        
        <div id="topbanner_arch" class="column span-14">   <!-- start top banner -->
            <div class="pagetitle">
                // archives
            </div>
        </div>   <!-- end top banner -->
        
        
        <div id="arch_content" class="column span-14">   <!-- start home_content -->
        
        	<div class="column span-3 first">        
            	<h2 class="archive_name">Archives for <?php bloginfo('name'); ?></h2>                 	
            	</div>
                        
            <div class="column span-8">
            <h3 class="mast">PDFs</h3>

				<p><strong><a href="http://stuyspectator.com/archives/pdfs/">Browse our PDFs here.</a></strong></p>

<p>If you're looking for the past, our <a href="http://stuyspectator.com/spectator/">previous site (2001-2006)</a> has <a href="http://stuyspectator.com/spectator/archives.cgi">extensive archives</a>. The Wayback Machine also has archives from <a href="http://web.archive.org/web/*/http://spectator.stuy.edu/">2002–2005</a> as well as from <a href="http://web.archive.org/web/*/http://stuyspectator.org/">2001</a>. </p>
            	<div>
            		<h3 class="mast">By Category</h3>

					<?php $catid = $wpdb->get_var("SELECT term_ID FROM $wpdb->terms WHERE name='featured'"); ?>

					<?php $catid2 = $wpdb->get_var("SELECT term_ID FROM $wpdb->terms WHERE name='frontpage'"); ?>

            		<ul class="archives">
						<?php wp_list_categories('title_li=&sort_column=name&show_count=1&show_last_updated=1&use_desc_for_title=1&exclude=' .$catid. ','  .$catid2. '') ?> 
					</ul>
					
					<h3 class="mast">By Month</h3>
            		<ul class="archives">
						<?php wp_get_archives('type=monthly&show_post_count=1') ?>
					</ul>
					
					<!-- <h3 class="mast">By Tag</h3>
            		<?php wp_tag_cloud('format=list&smallest=12&largest=12&unit=px'); ?> -->
					
            	</div>
            	
            	
            </div>
            
            <?php get_sidebar(); ?>
        
        </div>   <!-- start home_content -->
        
        
<?php get_footer(); ?>
