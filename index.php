<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title Goes Here</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
</head>
<script type="text/javascript" src="script.js"></script>
<body>
	<?php include "includes/topnav.php"; ?>
	
	<!-- SLIDE white SHOW -->
	<input class="slideControlForm" type="radio" id="i1" name="images" checked>
	<div class="section group slide white" id="s1">
		<label for="i4" class="col span_1_of_9 textCenter slideControl white">
			<span class="slideButton">&#x2039;</span>
		</label>
		<div class="col span_7_of_9 textCenter slideContent">
			<div class="col span_1_of_2 textCenter">
				<img src="images/truck1.jpeg" class="slideImage">
			</div>
			<div class="col span_1_of_2 textCenter">
				<div class="bigTitle leftFadeIn">
					Product name
				</div>
				<div class="smallTitle rightFadeIn">
					Description<br>
				</div>
			</div>
		</div>
		<label for="i2" class="col span_1_of_9 textCenter slideControl white">
			<span class="slideButton">&#x203a;</span>
		</label>
	</div>
	<input class="slideControlForm" type="radio" id="i2" name="images">
	<div class="section group slide white" id="s2">
		<label for="i1" class="col span_1_of_9 textCenter slideControl white">
			<span class="slideButton">&#x2039;</span>
		</label>
		<div class="col span_7_of_9 textCenter slideContent" id="s1">
			<div class="col span_1_of_2 textCenter">
				<img src="images/truck3.jpeg" class="slideImage">
			</div>
			<div class="col span_1_of_2 textCenter">
				<div class="bigTitle leftFadeIn">
					Product name
				</div>
				<div class="smallTitle rightFadeIn">
					Description<br>
				</div>
			</div>
		</div>
		<label for="i3" class="col span_1_of_9 textCenter slideControl white">
			<span class="slideButton">&#x203a;</span>
		</label>
	</div>
	<input class="slideControlForm" type="radio" id="i3" name="images">
	<div class="section group slide white" id="s3">
		<label for="i2" class="col span_1_of_9 textCenter slideControl white">
			<span class="slideButton">&#x2039;</span>
		</label>
		<div class="col span_7_of_9 textCenter slideContent" id="s1">
			<div class="col span_1_of_2 textCenter">
				<img src="images/truck2.JPG" class="slideImage">
			</div>
			<div class="col span_1_of_2 textCenter">
				<div class="bigTitle leftFadeIn">
					Product Name
				</div>
				<div class="smallTitle rightFadeIn">
					Description<br>
				</div>
			</div>
		</div>
		<label for="i4" class="col span_1_of_9 textCenter slideControl white">
			<span class="slideButton">&#x203a;</span>
		</label>
	</div>
	<input class="slideControlForm" type="radio" id="i4" name="images">	
	<div class="section group slide white" id="s4">
		<label for="i3" class="col span_1_of_9 textCenter slideControl white">
			<span class="slideButton">&#x2039;</span>
		</label>
		<div class="col span_7_of_9 textCenter slideContent" id="s1">
			<div class="col span_1_of_2 textCenter">
				<img src="images/machine.png" class="slideImage">
			</div>
			<div class="col span_1_of_2 textCenter">
				<div class="bigTitle leftFadeIn">
					Product Name
				</div>
				<div class="smallTitle rightFadeIn">
					Description<br>
				</div>
			</div>
		</div>
		<label for="i1" class="col span_1_of_9 textCenter slideControl white">
			<span class="slideButton">&#x203a;</span>
		</label>
	</div>



	<!-- SLIDE whiteCONTROL -->
	<div class="slideNav shadow-bottom white">
		<label for="i1" class="dots" id="dot1"></label>
		<label for="i2" class="dots" id="dot2"></label>
		<label for="i3" class="dots" id="dot3"></label>
		<label for="i4" class="dots" id="dot4"></label>
	</div>




	<div class="section group grey textCenter shadow-bottom">
		<div class="bigTitle leftFadeIn">About Us</div>
		<div class="smallTitle rightFadeIn">
			We are a great company
		</div>
		<div class="bigTitle leftFadeIn">About Us</div>
		<div class="smallTitle rightFadeIn">
			We are a great company
		</div>
		<div class="bigTitle leftFadeIn">About Us</div>
		<div class="smallTitle rightFadeIn">
			We are a great company
		</div>
	</div>
	<div class="footer black">
		
	</div>

</body>
</html>
