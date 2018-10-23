<?php 

// Define connection
//$db['db_host'] = ;
//$db['db_user'] = ;
//$db['db_pass'] = ;
//$db['db_name'] = ;
//foreach($db as $key => $value){
//	define(strtoupper($key), $value);
//}
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
$connection = mysqli_connect("localhost", "donglin", "werwer456", "donglin_betterway");

function confirmQuery($result) {
    global $connection;
    if(!$result) {
        die("QUERY FAILED. " . mysqli_error($connection));
    }
}
function addPosts() {
	global $connection;
	if(isset($_POST['add-post'])) {
		$post_title = $_POST['postTitle'];
		$post_tag = $_POST['postTag'];
		$post_category = $_POST['postCategory'];
		$post_content = $_POST['postContent'];
		$query = "INSERT INTO posts(post_cat_id, post_title, post_tags, post_content, post_date)";
		$query .= " VALUE({$post_category}, '{$post_title}', '{$post_tag}', '{$post_content}', now())";
		$action = mysqli_query($connection, $query);
		confirmQuery($action);
	}
}
function getAllPosts() {
	global $connection;
	$query = "SELECT * FROM posts";
	$table = mysqli_query($connection, $query);
	return $table;
}
function getPostCategory($id) {
	global $connection;
	$post_query  = "SELECT * FROM posts WHERE post_id = {$id}";
	$post_result = mysqli_query($connection, $post_query);
	$post_row = mysqli_fetch_assoc($post_result);
	$cat_query = "SELECT * FROM category WHERE cat_id = {$post_row['post_cat_id']}";
	$cat_result = mysqli_query($connection, $cat_query);
	$cat_row = mysqli_fetch_assoc($cat_result);
	return $cat_row['cat_title'];
}
function getPostData($id) {
	global $connection;
	$query = "SELECT * FROM posts WHERE post_id = {$id}";
	$query_result = mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($query_result);
	return $row;
}
function getAllCategory() {
	global $connection;
	$query = "SELECT * FROM category";
	$table = mysqli_query($connection, $query);
	confirmQuery($table);
	return $table;
}


?>
