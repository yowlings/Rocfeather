<form method="get" id="searchform" class="search-form" action="<?php echo home_url(); ?>" _lpchecked="1">
	<fieldset>
		<input type="text" name="s" id="s"  placeholder="搜索文章、评论、用户" onblur="if (this.value == '') {this.value = '搜索文章、评论、用户';}" onfocus="if (this.value == '搜索文章、评论、用户') {this.value = '';}" >
	</fieldset>
</form>