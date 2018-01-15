<h2>Blog</h2>

<?php
$posts = get_posts();

foreach($posts as $post){
	print_r($post);
}

foreach($posts as $post){
	echo $post->title."<br/>";
}


?>