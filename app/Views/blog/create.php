<div class="container">
	<h1>Create new posts</h1>
	<?php if ($_POST): ?>
		<?php echo \Config\Services::validation()->listErrors() ?>
	<?php endif ?>
	<form action="/blog/create" method="post">
		<div class="form-group">
			<label for="title"><strong>Title</strong></label>
			<input type="text" class="form-control" name="title" id="title" value="">
		</div>
		<div class="form-group">
			<label for="body"><strong>Body</strong></label>
			<textarea class="form-control" name="body" id="change"></textarea>
		</div>
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Create</button>
		</div>
	</form>
</div>