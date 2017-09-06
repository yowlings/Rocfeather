<?php get_header(); ?>
<div id="page">
	<div class="content">
		<article class="article">
			<div id="content_box" >
				<div id="content" class="hfeed">
					<header>
						<div class="title">
							<h1><?php get_search_form();?></h1>
						</div>
					</header>
					<div class="post-content">						
						
						<img src="<?php echo get_template_directory_uri(); ?>/images/404.jpg">
					</div><!--.post-content--><!--#error404 .post-->
				</div><!--#content-->
			</div><!--#content_box-->
		</article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>