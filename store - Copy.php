<!DOCTYPE html>
<html>
<head>
<style>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	body {
    		font-size: 28px;
	}
	<style>
	* {
    		box-sizing: border-box;
	}

	/* Create two unequal columns that floats next to each other */
	.column {
	    float: left;
	    padding: 10px;
	    height: 300px; /* Should be removed. Only for demonstration */
	}

	.left {
	  width: 20%;
		height: 400px;
	}

	.right {
	  width: 70%;
		height: 100%;
	}

	/* Clear floats after the columns */
	.row:after {
	    content: "";
	    display: table;
	    clear: both;
	}
	ul {
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    overflow: hidden;
	    background-color: #333;
	    position: -webkit-sticky; /* Safari */
	    position: sticky;
	    top: 0;
	}

	li {
	    float: left;
	}

	li a {
	    display: block;
	    color: white;
	    text-align: center;
	    padding: 14px 16px;
	    text-decoration: none;
	}

	li a:hover {
	    background-color: #111;
	}

	.active {
	    background-color: #4CAF50;
	}
</style>
</head>
<body>
	
	<div class="header">
		<img src="page_logo.jpg" alt="HTML5 Icon" style="width:25%;height:70px;" position="left">
	</div>

	<ul>
		<li><a class="active" href="#home">Home</a></li>
	  	<li><a href="#news">Registration</a></li>
	  	<li><a href="#news">Login</a></li>
	  	<li style="float:right"><a href="#contact">Contact</a></li>
	</ul>

	<h2 style="float:right">Two Unequal Columns</h2>

	<div class="row">
	  	<div class="column left" style="background-color:;">
	    		<img src="home.jpg" alt="HTML5 Icon" style="width:100%;height:200px;" position="left">
	  	</div>
	  	<div class="column right" style="background-color:#bbb;">
	    		<img src="home3.JPG" alt="HTML5 Icon" style="width:100%;height:500px;" position="left">
	  	</div>
	</div>

</body>
</html>

