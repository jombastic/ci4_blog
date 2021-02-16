<section>
	<div class="container">
		<article class="blog-post">
			<h1><?php echo $post['title'] ?></h1>
			<?php echo $post['body'] ?>
			<div class="details">
				Posted: <?php echo date('M d Y', strtotime($post['created_at'])) ?> by <a href="https://github.com/jombastic" target="_blank">Slavcho Mitrov</a>
			</div>
		</article>
	</div>
</section>