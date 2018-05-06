		<div id="horizontal_navi_bottom" >
			<div style="position: absolute;">
                <?php
					if ( ( isset($_GET['content']) ) && ($_GET['content']=="home") ) {
						echo '<a href="index.php?content=home">
							<img src="media/buttons/home_over.jpg" alt="home" />
						</a>';
					}
					else {
						echo '<a href="index.php?content=home">
							<img src="media/buttons/home.jpg" alt="home" />
						</a>';
					}
				?>
			</div>
			<div style="position: absolute; top: 0px; left: 162px;">
				<?php
					if ( ( isset($_GET['content']) ) && ($_GET['content']=="speisenkarte") ) {
						echo '<a href="index.php?content=speisenkarte">
							<img src="media/buttons/speisenkarte_over.jpg" alt="speisenkarte" />
						</a>';
					}
					else {
						echo '<a href="index.php?content=speisenkarte">
							<img src="media/buttons/speisenkarte.jpg" alt="speisenkarte" />
						</a>';
					}
				?>
			</div>
			<div style="position: absolute; top: 0px; left: 324px;">
				<?php
					if ( ( isset($_GET['content']) ) && ($_GET['content']=="cafe") ) {
						echo '<a href="index.php?content=cafe">
							<img src="media/buttons/cafe_over.jpg" alt="cafe" />
						</a>';
					}
					else {
						echo '<a href="index.php?content=cafe">
							<img src="media/buttons/cafe.jpg" alt="cafe" />
						</a>';
					}
				?>
			</div>
			<div style="position: absolute; top: 0px; left: 486px;">
				<?php
					if ( ( isset($_GET['content']) ) && ($_GET['content']=="geschichte") ) {
						echo '<a href="index.php?content=geschichte">
							<img src="media/buttons/geschichte_over.jpg" alt="geschichte" />
						</a>';
					}
					else {
						echo '<a href="index.php?content=geschichte">
							<img src="media/buttons/geschichte.jpg" alt="geschichte" />
						</a>';
					}
				?>
			</div>
			<div style="position: absolute; top: 0px; left: 648px;">
				<?php
					if ( ( isset($_GET['content']) ) && ($_GET['content']=="events") ) {
						echo '<a href="index.php?content=events">
							<img src="media/buttons/events_over.jpg" alt="events" />
						</a>';
					}
					else {
						echo '<a href="index.php?content=events">
							<img src="media/buttons/events.jpg" alt="events" />
						</a>';
					}
				?>
			</div>
			<div style="position: absolute; top: 15px; right: -10px; font-size:0.75em">
				<a style="text-decoration: none; color: #afc656; font-size: 1.2em;" href="media/impressum.png" data-lightbox="impressum">Impressum</a>
			</div>
			<div style="text-align: right; position: absolute; top: 20px; right: 0px; font-size:0.75em">
				<?php
				/*
                $file= @fopen("./count.dat", "r+");
				fscanf($file, "%d", $count);
				$count++;
				rewind($file);
				fputs($file, $count);
				fclose($file);

				echo "Besucher<br># $count";
                */
				?>
			</div>
		</div>
