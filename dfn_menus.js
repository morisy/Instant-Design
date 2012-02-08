/* Navigation */
.menu ul, .menu ul li ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
 
.menu {
	z-index: 10;
	position: relative;
	text-align: left;
	width: 800px;
	height: 33px;
}
 
/* TOP LEVEL MENU ITEM */
.menu ul li {
	float: left;
	margin: 0;
	padding: 0;
	position: relative;
}
 
/* TOP LEVEL MENU ITEM */
.menu ul li a,
.menu ul li a:link,
.menu ul li a:active,
.menu ul li a:visited {
	font: 1.1em/27px Verdana;
	color: #555555;
	display: block;
	padding: 1px 34px 0px 34px;
	margin-top: 1px;
	text-decoration: none;
	border-left: 1px solid #ddd;
	outline: none;
}
 
/* Make sure the first item in the list doesnt have a left border */
.menu ul li.first a {
	border-left: 0px;
	outline: none;
}
 
/* TOP LEVEL MENUS ITEMS ON HOVER */
.menu ul li:hover a,
.menu ul li.sfHover a,
.menu ul li a:hover {
	background-color: red;
	background-position: -15px -33px;
	height: 30px;
	outline: none;
}
 
/* SECOND LEVEL MENU ITEM */
.menu ul li:hover ul li a,
.menu ul li:hover ul li a:visited,
.menu ul li.sfHover ul li a,
.menu ul li.sfHover ul li a:visited {
	font-weight: normal;
	color: #666666;
	background:#e8f0f3;
	margin: 0px;
	border: 0px;
	outline: none;
	height: 23px;
	padding: 0px 34px 3px 34px;
}
 
/* SECOND LEVEL MENU ITEM HOVER */
.menu ul li:hover ul li a:hover,
.menu ul li:hover ul li.first a:hover,
.menu ul li:hover ul li.last a:hover,
.menu ul li.sfHover ul li a:hover,
.menu ul li.sfHover ul li.first a:hover,
.menu ul li.sfHover ul li.last a:hover {
	height: 23px;
	background: #FFFFFF;
	padding: 0px 34px 3px 34px;
	color: #000;
	width: auto;
}
 
/* SECOND LEVEL MENU ITEM */
.menu ul li ul {
	width: 200px; /* expand as needed for longer submenu names */
	color: #000000;
	list-style: none;
	margin: 0px;
	padding: 0px;
	position: absolute;
	top: -999em;
	left: 0px;
	border: 1px solid #dddddd; /* border around dropdown menu */
	opacity: 0.9;
	-moz-opacity: 0.9;
}
 
.menu ul li:hover ul, .menu ul li.sfHover ul { top: 30px; }
 
.menu ul li ul li {
	border: 0px;
	float: none;
	padding: 0px;
	margin: 0px;
	color: #000000;
}
 
.menu ul li ul li a {
	border: 0px;
	white-space: nowrap;
	float: none;
	padding: 1px 34px 1px 15px;
	margin: 0px;
	display: block;
	height: 29px;
	color: #000000;
}
 
.menu ul li ul li a:visited { color: #000000; }
 
.menu ul li ul li a:hover {
	background: #CEFFCE;
	color: #000;
	border: 0px;
	margin: 0px;
