<?php
$post = get_post();
if($post == false){
	header("Location:index.php?page=error");//redirection vers une autre page URL
}else{
	?>
	</div>
		<div class="parallax-container">
			<div class="parallax">
				<img src="img/posts/<?= $post->image ?>" alt="<?= $posts->title ?>"/>
			</div>
		</div>

	<div class="container">

		<h2><?= $post->title ?></h2>
		<h6><?= $post->name ?> le <?= date("d/m/Y à H:i", strtotime($post->date)) ?></h6> 
		<p><?= nl2br($post->content)?></p>
	<?php
}
?>

<hr>
	<h4>Commentaires:</h4>
	<form method="post">
		<div class="row">
			<div class="input-field col s12 m6">
				<input type="text" name="name" id="name"/>
				<label for="name">Nom</label>
			</div>
			<div class="input-field col s12 m6">
				<input type="email" name="email" id="email"/>
				<label for="email">Adresse mail</label>
			</div>
			<div class="input-field col s12">
				<textarea class="materialize-textarea" name="comment" id="comment"></textarea>
				<label for="comment">Commentaire</label>
			</div>
			<div class="col s12">
				<button type="submit" name="submit" class="btn waves-effect">Envoyer
				<i class="material-icons right">send</i></button>
			</div>
		</div>
	</form>