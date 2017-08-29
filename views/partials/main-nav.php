<!-- Primary Navigation
============================================= -->
<nav id="primary-menu" class="style-2">

	<div class="container clearfix">

		<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

        <?php if(has_nav_menu('top-bar')): ?>
            <?php wp_nav_menu(array(
                    'theme_location' => 'top-bar'
            )) ?>
        <?php endif; ?>

        <?php View::render('partials/cart'); ?>

		<!-- Top Search
		============================================= -->
		<div id="top-search">
			<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
			<form action="search.html" method="get">
				<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
			</form>
		</div><!-- #top-search end -->

	</div>

</nav><!-- #primary-menu end -->