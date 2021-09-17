<?php
/* Template Name: Kontakt */
?>

<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
</head>
<body>

	<div id="wrap">

        <?php
            get_header();
        ?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-offset-2">
							<h1>Kontakt</h1>
                            <?php
the_content();
?>
						</div>
					</div>
				</div>
			</section>
		</main>
		<?php
			get_footer();
		?>