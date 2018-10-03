<!DOCTYPE html>
<html lang="en">
<head>
<title>Products</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="script.js"></script>
</head>
<body>
	
	<?php include "includes/topnav.php"; ?>



	<div class="section group white selectionMenu">
		<div class="col_m_1_6 span_1_of_2_m_1_6">
			<div class="selectionMaterial" onclick="dropDown('selection1');">
				<div class="selectionControl lightShadow">
						<span class="dropDes">
						文章种类
						</span>
						<span class="drop">
						<img src="images/down.png" style="width: 10px;padding-top: 20px">
						</span>	
				</div>
				<div class="selectionOptions shadow-dropdown" id="selection1">
					<div onclick="showAllPost()" class="option" value="group1"><span class="dropDes">显示所有</span></div>
					<div onclick="makeGone('post1')" class="option" value="group1"><span class="dropDes">种类一</span></div>
					<div onclick="makeGone('post2')" class="option" value="group2"><span class="dropDes">种类二</span></div>
					<div onclick="makeGone('post3')" class="option" value="group3"><span class="dropDes">种类三</span></div>
				</div>
			</div>
		</div>
		<div class="col_m_1_6 span_1_of_2_m_1_6">
			<div class="selectionMaterial" onclick="dropDown('selection2');">
				<div class="selectionControl lightShadow">
						<span class="dropDes">
						文章种类
						</span>
						<span class="drop">
						<img src="images/down.png" style="width: 10px;padding-top: 20px">
						</span>	
				</div>
				<div class="selectionOptions shadow-dropdown" id="selection2">
					<div onclick="showAllPost()" class="option" value="group1"><span class="dropDes">显示所有</span></div>
					<div onclick="makeGone('post1')" class="option" value="group1"><span class="dropDes">种类一</span></div>
					<div onclick="makeGone('post2')" class="option" value="group2"><span class="dropDes">种类二</span></div>
					<div onclick="makeGone('post3')" class="option" value="group3"><span class="dropDes">种类三</span></div>
				</div>
			</div>
		</div>
	</div>





	<div class="section group white productSection">
		<div class="col_m_1_6 span_1_of_2_m_1_6">
			<div class="productCard lightShadow" onclick="dropDown('selection1');">
				<div class="productImage superlightShadow">
					<img src="images/machine.png">
				</div>
				<div class="productDescription">
					<div class="productTitle">
						精密刀具磨削中心
					</div>
					<div class="productDetail">		
					通过高倍放大镜来观察，会发现磨削过的刀具刃口绝大多数仍呈“锯齿”形状，这种“锯齿”在遇到切削力时会很快崩裂，并迅速扩展，致使刀具达不到正常使用寿命，需要科学地加以改善。
					</div>
				</div>
			</div>
		</div>

	
		<div class="col_m_1_6 span_1_of_2_m_1_6">
			<div class="productCard lightShadow" onclick="dropDown('selection1');">
				<div class="productImage superlightShadow">
					<img src="images/machine.png">
				</div>
				<div class="productDescription">
					<div class="productTitle">
						精密刀具磨削中心
					</div>
					<div class="productDetail">		
					通过高倍放大镜来观察，会发现磨削过的刀具刃口绝大多数仍呈“锯齿”形状，这种“锯齿”在遇到切削力时会很快崩裂，并迅速扩展，致使刀具达不到正常使用寿命，需要科学地加以改善。
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section group white productSection">
		<div class="col_m_1_6 span_1_of_2_m_1_6">
			<div class="productCard lightShadow" onclick="dropDown('selection1');">
				<div class="productImage superlightShadow">
					<img src="images/machine.png">
				</div>
				<div class="productDescription">
					<div class="productTitle">
						精密刀具磨削中心
					</div>
					<div class="productDetail">		
					通过高倍放大镜来观察，会发现磨削过的刀具刃口绝大多数仍呈“锯齿”形状，这种“锯齿”在遇到切削力时会很快崩裂，并迅速扩展，致使刀具达不到正常使用寿命，需要科学地加以改善。
					</div>
				</div>
			</div>
		</div>

	
		<div class="col_m_1_6 span_1_of_2_m_1_6">
			<div class="productCard lightShadow" onclick="dropDown('selection1');">
				<div class="productImage superlightShadow">
					<img src="images/machine.png">
				</div>
				<div class="productDescription">
					<div class="productTitle">
						精密刀具磨削中心
					</div>
					<div class="productDetail">		
					通过高倍放大镜来观察，会发现磨削过的刀具刃口绝大多数仍呈“锯齿”形状，这种“锯齿”在遇到切削力时会很快崩裂，并迅速扩展，致使刀具达不到正常使用寿命，需要科学地加以改善。
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer black">
		
	</div>





</body>
</html>
