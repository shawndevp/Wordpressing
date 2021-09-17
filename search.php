<?php

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
</head>
<body>

	<div id="wrap">

        <?php get_header(); ?>
        
        <div wpbsearch="search" placeholder="aaaa"></div>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
                </div>
			</form>
		</div>

		<main>
			<section>
				<div class="container">
                                    <h2>Sökresultat:</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
        </main>
        
        <?php 
// loop för sökfunktion
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        the_title();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;

        ?>

<?php
    get_footer();
?>

	</div>

	<script src="js/script.js"></script>

</body>
</html>