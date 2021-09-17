<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="index.html">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
							<div>
								<label class="screen-reader-text">Sök efter:</label>
								<input type="text" />
								<input type="submit" value="Sök" />
							</div>
						</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul class="menu">
						<?php wp_nav_menu( array(
    'theme_location' => 'main-menu', 'menu_class' => "menu"
) ); ?>
						</ul>
					</div>
				</div>
			</div>
        </nav>
        
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1>Blogg</h1>


                    <ul>

                        <!-- the loop -->

                        <article>
                            <?php the_post_thumbnail() ?>
                            <h2 class="title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <ul class="meta">
                                <li>
                                    <i class="fa fa-calendar"></i> <?php echo get_the_date() ?>
                                </li>
                                <li>
                                    <i class="fa fa-user"></i> <a href="forfattare.html"> <?php the_author() ?></a>
                                </li>
                                <li>
                                    <i class="fa fa-tag"></i> <a href="kategori.html"><?php the_category(", ") ?></a>
                                </li>
                            </ul>
                            <p> <?php the_content(); ?></p>
                        </article>

                        <!-- end of the loop -->

                    </ul>

                    <?php wp_reset_postdata(); ?>

                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div>
												<label class="screen-reader-text">Sök efter:</label>
												<input type="text" />
												<input type="submit" value="Sök" />
											</div>
										</form>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
										<h2>Sidor</h2>
										<ul>
										<?php wp_nav_menu( array(
    'theme_location' => 'side-bar2', 'menu_class' => "menu"
) ); ?>
										</ul>
									</li>
									<li>
										<h2>Arkiv</h2>
										<ul>
											<li>
												<a href="arkiv.html">oktober 2016</a>
											</li>
										</ul>
									</li>
									<li class="categories">
										<h2>Kategorier</h2>
										<ul>
										<?php wp_nav_menu( array(
    'theme_location' => 'side-bar', 'menu_class' => "menu"
) ); ?>
										</ul>
									</li>
								</ul>
							</div>
						</aside>
            </div>
        </div>
    </section>
</main>

<?php 
get_footer();
?>

</div>

<script src="js/script.js"></script>

</body>

</html>