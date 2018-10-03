<!DOCTYPE html>
<html lang="en">
<head>
<title>Posts</title>
<link rel="stylesheet" type="text/css" href="style.css">
<?php include "functions.php"; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
</head>
<script type="text/javascript" src="script.js"></script>
<body>
	<?php include "includes/topnav.php"; ?>
	<div class="section group white selectionMenu">
		<div class="col_m_1_6 span_1_of_2_m_1_6">
			<div class="selectionMaterial" onclick="dropDown('selection1');">
				<div class="selectionControl lightShadow">
						<span class="dropDes">
						Category
						</span>
						<span class="drop">
						<img src="images/down.png" style="width: 10px;padding-top: 20px">
						</span>	
				</div>
				<div class="selectionOptions shadow-dropdown" id="selection1">
					<div onclick="showAllPost()" class="option" value="group1"><span class="dropDes">Show All</span></div>
					<?php
						$table = getAllCategory();
						while ($row = mysqli_fetch_assoc($table)) {
							$cat_title = $row['cat_title'];
						 	?>
						 	<div onclick="makeGone('<?php echo $cat_title; ?>')" class="option" value="group3"><span class="dropDes"><?php echo $cat_title;?></span></div>
						 	<?php
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<?php 
		$table = getAllPosts();
		while ($row = mysqli_fetch_assoc($table)) {
			$id = "post";
			$id .= $row['post_id'];
			$category = getPostCategory($row['post_id']);
			?>
			<a href="#" class="post">
				<div class="postCard lightShadow <?php echo $category; ?>" id="<?php echo $id; ?>">
					<div class="postTitle">
						<?php echo $row['post_title']; ?>
					</div>
					<div class="postDate">
						<?php echo $row['post_date']; ?>
					</div>
				</div>
			</a>
			<?php 
		} 
	?>
</body>
</html>
