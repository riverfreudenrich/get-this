	<?php
	$content = -1;
	if (isset($_GET['content'])) {
		$content = $_GET['content'];
	}
	?>

	<div id="content-a" <?php echo ($content == a) ? 'style="display: block;"' : 'style="display: none;"'; ?>>
		<p>If the URL is equal to "www.example.com/?content=a" this div will be displayed.</p>
	</div>

	<div id="content-b" <?php echo ($content == b) ? 'style="display: block;"' : 'style="display: none;"'; ?>>
		<p>If the URL is equal to "www.example.com/?content=b" this div will be displayed.</p>
	</div>

	<div id="content-c" <?php echo ($content == c) ? 'style="display: block;"' : 'style="display: none;"'; ?>>
		<p>If the URL is equal to "www.example.com/?content=c" this div will be displayed.</p>
	</div>
