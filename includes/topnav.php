<nav class="navbar shadow-bottom">
    <div class="logo"><img src="images/diamond.jpg"><a href="index.php">Company Name</a></div>
    <ul class="topnav">
		<li><a href="admin/admin.php">Admin</a></li>
		<!-- <li><a href="products.php">产品中心</a></li> -->
		<li><a href="posts.php">Posts</a></li>
		<li><a href="index.php">Home</a></li>
    </ul>
    <ul class="sideIcon">
    	<a onclick="openNav('mySidenav')"> &#9776;</a>
    </ul>
</nav>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav('mySidenav')">&times;</a>
    <a href="index.php">Home</a>
    <a href="posts.php">Posts</a>
    <!-- <a href="products.php">产品中心</a> -->
    <a href="admin/admin.php">Admin</a>
</div>