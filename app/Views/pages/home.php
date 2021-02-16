<section>
	<?php 
		$session = \Config\Services::session();
	 ?>
	 <?php if (isset($session->success)): ?>
	 	<div class="alert alert-success text-center alert-dismissible show fade mb-0" role="0">
	 		<?php echo $session->success ?>
	 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	 			<span adria-hidden="true">&times;</span>
	 		</button>
	 	</div>
	 <?php endif ?>
	<div class="jumbotron">
		<div class="container">
			<h1 class="display-4">Ci4 Blog!</h1>
			<p class="lead">CodeIgniter is awesome framework for creating fast web apps.</p>
			<hr class="my-4">
			<p>Hey, checkout my first web app built with CodeIgniter 4.</p>
			<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
		</div>
	</div>
</section>

<section class="blog-section">
	<div class="container">
		<?php if ($news): ?>
			<?php foreach ($news as $news_item): ?>
				<h3><a href="/blog/<?php echo $news_item['slug'] ?>"><?php echo $news_item['title'] ?></a></h3>
			<?php endforeach ?>
		<?php else: ?>
			<p class="text-center">No posts have been found</p>
		<?php endif ?>
	</div>
</section>