<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin</title>
<link rel="stylesheet" type="text/css" href="../style.css">
<script type="text/javascript" src="../script.js"></script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php include "includes/adminMainNav.php"; ?>
	<div class="section group white selectionMenu">
		<div class="col_m_1_6 span_2_of_2_m_1_6">
			<div class="adminMaterial" onclick="dropDown('selection1');">
				<div class="adminControl lightShadow">
						<span class="adminDescription">
						Posts Settings
						</span>
						<span class="drop">
						<img src="../images/down.png" style="width: 10px;padding-top: 40px">
						</span>	
				</div>
				<div class="adminOptions shadow-dropdown" id="selection1">
					<a href="addContent.php" class="option" value="group1"><span class="dropDes">Add Content</span></a>
					<a href="editContent.php" class="option" value="group1"><span class="dropDes">Change Content</span></a>
				</div>
			</div>
		</div>
		
		
	</div>
</body>
</html>
