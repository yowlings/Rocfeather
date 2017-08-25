<?php $options = get_option('softpress'); ?>
	</div><!--#page-->
</div><!--.container-->
</div>
	<footer>
		<div class="container">
			<div class="footer-widgets">
				<?php widgetized_footer(); ?>
			</div><!--.footer-widgets-->

			<div class="foot-link">
				<ul class="friendship-link">
					<li><a href="mailto:yowlings@gmail.com" title="mail"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
					<li><a href="https://github.com/yowlings" title="github"><i class="fa fa-github" aria-hidden="true"></i></a></li>
					<li><a href="https://www.linkedin.com/in/yowlings/" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<li><a href="https://yowlings.github.io/" title="blog"><i class="fa fa-rss-square" aria-hidden="true"></i></a></li>
					<li><a href="http://weibo.com/2690241235/" title="weibo"><i class="fa fa-weibo" aria-hidden="true"></i></a></li>
					<li><a href="#end" title="微信"><i class="fa fa-weixin" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div><!--.container-->
		
		<div class="copyrights"><?php mts_copyrights_credit(); ?></div> 
	</footer><!--footer-->
<?php mts_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>