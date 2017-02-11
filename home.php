<?php /* Template Name: Home */ get_header(); ?>

	<main role="main">
			<section class="">
				<?php
					// get the Frontpage
					$current_page = get_post(776); // insert ID of Stage (Image)
					echo "<div class='hero'>" . apply_filters( 'the_content', $current_page->post_content ) . "</div>";
				?>
			</section>


			<section  class="container">
				<h2>Resume CV</h2>
				<a href="" id="resume" class="nav-anchor visuallyhidden">Resume</a>

				<?php

					//$current_page = get_post(780);
					// echo apply_filters('the_content', $current_page->post_content);

					// get the Download Button
					// insert ID of CV-Page having the pdf as attachment
					// using the "Attchment" Plugin
					// https://github.com/jchristopher/attachments
					if(get_locale() == "en_US") {
						// english attachment
						$attachments = new Attachments( 'attachments', 921 );
						if( $attachments->exist() ) :
							while( $attachments->get() ) :
								echo "<a class='btn btn-default' href='" . $attachments->url() . "'>Resume as pdf</a>";
						 	endwhile;
						endif;
					}
					else {
						// german attachment
						$attachments = new Attachments( 'attachments', 780 );
						if( $attachments->exist() ) :
							while( $attachments->get() ) :
								echo "<a class='btn btn-default' href='" . $attachments->url() . "'>Lebenslauf als pdf</a>";
						 	endwhile;
						endif;
					}
				?>
				<?php if( $attachments->exist() ) : ?>
						<?php while( $attachments->get() ) : ?>
							<?php echo "<a class='btn btn-default' href='" . $attachments->url() . "'>Resume pdf</a>"; ?>
						<?php endwhile; ?>
				<?php endif; ?>

				<div class="row">
					<div class="work-wrapper col-md-9">
						<?php
						// Heading for Film Section
						$current_page = get_post(783);
						echo "<h3>" . translate($current_page->post_title)  . "</h3>";
						?>

						<div class="work-list">
						<?php

							// The Loop (CV-Entries: Film)
							$work_posts = get_posts( array("category_name" => "film", 'numberposts'=>-1) );
							foreach($work_posts as $work_post) {
								echo "<div class='work-entry'>";
							 	echo "<h4>" . $work_post->post_title . "</h4>";
							 	echo apply_filters( 'the_content', $work_post->post_content );
								echo "</div>";
							}
						?>
						</div>

						<?php
							// Heading for Theatre Section
							$current_page = get_post(785);
							echo "<h3>" . translate($current_page->post_title)  . "</h3>";
						?>

						<div class="work-list">
						<?php
							// The Loop (CV-Entries: Theater)
							$work_posts = get_posts( array("category_name" => "theatre",'numberposts'=>-1) );
							foreach($work_posts as $work_post) {
								echo "<div class='work-entry'>";
							 	echo "<h4>" . $work_post->post_title . "</h4>";
							 	echo apply_filters( 'the_content', $work_post->post_content );
								echo "</div>";
							}
						?>
						</div>

					</div>

					<div class="sidebar sidebar-cv col-md-3">
						<?php
							// get the CV Sidebar
							$sidebar = get_post(792); // insert ID of CV-sidebar here
							echo "<div class=''>" . apply_filters( 'the_content', $sidebar->post_content ) . "</div>";
						?>
					</div>
				</div>
			</section>

			<div id="first-divider" class="divider">
			</div>

			<section  class="container">

				<?php
					// get the Photos Page (only used for heading)
					$current_page = get_post(790); // insert ID of photo-page here
				 	echo "<h2>" . translate($current_page->post_title) . "</h2>";
			 	?>
				<a href="" id="photos" class="nav-anchor visuallyhidden">Photos</a>

				<div class="row">
			 		<div class="col-sm-9">
		 				<div class="row">
		 					<?php
							// The Loop (Gallery-Entries)
							$gallery_posts = get_posts( array("category_name" => "gallery") );
							foreach($gallery_posts as $gallery_post) {
								echo "<div class='col-xs-6'>";
							 	echo "<h4 class='gallery-title'>" . $gallery_post->post_title . "</h4>";
							 	echo apply_filters( 'the_content', $gallery_post->post_content );
								echo "</div>";
							}
							?>
		 				</div>

			 		</div>

					<div class="sidebar sidebar-photos col-sm-3">
						<?php
							// get the Photo Sidebar
							$current_sidebar = get_post(794); // insert ID of photo-sidebar here
							echo apply_filters( 'the_content', $current_sidebar->post_content );
						?>
					</div>

				</div>
			</section>

			<section  class="container">

				<h2>Reels</h2>
				<a href="" id="reels" class="nav-anchor visuallyhidden">Reels</a>

				<div class="row">
					<div class="reels-wrapper col-md-9">
						<div class="row">
							<?php if(get_locale() == "en_US") {
										$work_posts = get_posts( array("category_name" => "reel-en",'numberposts'=>-1) );
									}
									else {
										$work_posts = get_posts( array("category_name" => "reel",'numberposts'=>-1) );
									}

								// get the Reels Page
								// The Loop (Reel-Entries)
								foreach($work_posts as $work_post) {
									echo "<div class='col-sm-6'>";
								 	echo "<h4>" . $work_post->post_title . "</h4>";
								 	echo apply_filters( 'the_content', $work_post->post_content );
									echo "</div>";
								}
								?>
						</div>
					</div>
					<div class="sidebar sidebar-reels col-md-3">
						<?php
							// get the Reels Sidebar
							$current_sidebar = get_post(796); // insert ID of reels-sidebar here
							// AUDIO
							echo "<h3>".apply_filters( 'the_title', $current_sidebar->post_content )."</h3>";
							echo apply_filters( 'the_content', $current_sidebar->post_content );
						?>
					</div>
				</div>

			</section>

			<div id="second-divider" class="divider">

			</div>

			<section  class="container">

				<?php

					// get the Writings Page
					$current_page = get_post(798); // insert ID of writings-page here
					echo "<h2>";
					echo translate($current_page->post_title);
					echo "</h2>"?>

					<a href="" id="writings" class="nav-anchor visuallyhidden">Reels</a>
				<?php
					echo "<div class='row'>";

					// get the Writings Posts
					$writing_posts = get_posts( array("category_name" => "writing",'numberposts'=>-1) );
					foreach($writing_posts as $writing_post) {
						echo "<div class='entry-writing col-xs-6'>";
					 	echo "<h3>" . apply_filters( 'the_title', $writing_post->post_title ) . "</h3>";
					 	?>

						<div class="row">
							<div class='entry-writing-text col-sm-7'>
							 	<?php echo apply_filters( 'the_content', $writing_post->post_content ); ?>
						 	</div>
							<div class='entry-writing-image col-sm-5'>
								<?php $attachments = new Attachments( 'attachments', $writing_post->ID ); ?>
								<?php if( $attachments->exist() ) : ?>
									<?php while( $attachments->get() ) : ?>
										<?php echo $attachments->image('')?>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>

					<?php


						echo "</div>";
					}
					?>

			</section>


		<!-- </section> -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
