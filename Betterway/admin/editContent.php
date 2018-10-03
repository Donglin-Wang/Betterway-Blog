<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title Goes Here</title>
<link rel="stylesheet" type="text/css" href="../style.css">
<script type="text/javascript" src="../script.js"></script>
<?php include "../functions.php"; ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php include "includes/adminSubNav.php"; ?>
	<?php 
		$row = getPostData(2);
		$post_title = $row['post_title'];
		$post_tag = $row['post_tags'];
		$post_category = getPostCategory(2);
		$post_content = $row['post_content'];
	?>
	
	<div class="section group white selectionMenu">
		<div class="col_m_1_6 span_2_of_2_m_1_6">
			<form method="post">
				<label for="postTitle" style="display: block; text-align: center; margin-top: 20px">Title</label>
				<input type="text" name="postTitle" style="display: block; height: 35px; margin-top: 10px; font-size: 18px; font-weight: lighter; border-radius: 5px; width: 100%;" value="<?php echo $post_title; ?>">
				<label for="postTag" style="display: block; text-align: center; margin-top: 20px;">Key Wrod</label>
				<input type="text" name="postTag" style="display: block; height: 35px; margin-top: 10px; font-size: 18px; font-weight: lighter; border-radius: 5px; width: 100%;" value="<?php echo $post_tag; ?>">
				<label for="postCategory" style="display: block; text-align: center; margin-top: 20px;">Category</label>
				<select name="postCategory" style="display: block; height: 35px; margin-top: 10px; font-size: 18px; font-weight: lighter; border-radius: 5px; width: 100%; background-color: white;" value="<?php echo $post_category; ?>"  >
					<?php
						$table = getAllCategory();
						while ($row = mysqli_fetch_assoc($table)) {
							$cat_id = $row['cat_id'];
							$cat_name = $row['cat_title'];
							echo "<option value='{$cat_id}'>{$cat_name}</option>";
						}
					?>
				</select>
				
				<label for="postContent" style="display: block; text-align: center; margin-top: 20px;">Content</label>
				<textarea name="postContent" style="display: block; height: 35px; margin-top: 10px; font-size: 18px; font-weight: lighter; border-radius: 5px; width: 100%; height: 200px;"  ><?php echo $post_content; ?></textarea>
				
				<input type="submit" name="add-post" value="Edit Post" style="margin: auto;height: 40px;width: 80px;border-radius: 5px; margin-top: 30px;">
			</form>
		</div>
	</div>
</body>
</html>
