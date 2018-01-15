<?php

function get_posts(){


	global $db;

	$req = $db->query("
		SELECT  posts.id,
				posts.title,
				posts.image,
				posts.date,
				posts.content,
				admins.name
		FROM posts
		JOIN admins
		ON posts.writter=admins.email /*faire une jointure lorsque les mail de posts sont les mêmes que email*/
		WHERE posted ='1' /*récupère les articles en ligne*/
		ORDER BY date DESC
		LIMIT 0,2

	");
	$results = array();

	while ($rows = $req ->fetchObject()){
		$results[] = $rows;
	}

	return $results;
}