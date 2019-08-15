<?php
/**
 * @file
 * Example view file
 */

/** @var WGR_ExamplePageModel $pageModel */
/** @var WGR_ExamplePageView $this */

?>
<html>
	<body>
		<?php

		if ($pageModel->members) {
			// Loop names of members
			foreach ($pageModel->members as $member) {
				?>
				<?= $member->name ?><br>
				<?php
			}
		}
		else {
			?>
			<a href="?action=members">Members</a>
			<?php
		}

		?>
		<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="js/scripts.js"></script>
		<script>
		WGR.example();
		</script>
	</body>
</html>
