
<header>	 
	<ul class="nav nav-pills nav-justified">
		<li>
			<a href="index.php" 
			<?php 
				if ($filename=="index.php"){
					echo "class=\"selected\"";
				} 
			?>
			>Home</a>
		</li>
		<li>
			<a href="history.php"
			<?php 
				if ($filename=="history.php"){
					echo "class=\"selected\"";
				} 
			?>
			>Harbaugh History</a>
		</li>
		<li>
			<a href="survey.php"
			<?php 
				if ($filename=="survey.php"){
					echo "class=\"selected\"";
				} 
			?>
			>Survey</a>
		</li>
		<li>
			<a href="photo.php"
			<?php 
				if ($filename=="photo.php"){
					echo "class=\"selected\"";
				} 
			?>
			>Photos</a>
		</li>
		<li>
			<a href="contact.php"
			<?php 
				if ($filename=="contact.php"){
					echo "class=\"selected\"";
				} 
			?>
			>Contact Us</a>
		</li>
	</ul>
</header>