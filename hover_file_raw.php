<?php
?>
<style type="text/css"> 
.text{ 
	position: relative;
	width: 213px; 
	height: 213px; 
	background: #FCF7E4; 
	opacity: 0; 
} 
.image:hover .text{
	border-radius: 25px;
	border-width: 10px;
	border-style: solid;
	border-color: #DEC1F5;
	position: absolute;
	opacity: 0.9; 
	text-align: center;
	color: #5C5C5C;
	font-size: 26px;
	font-weight: 400; 
	font-family: "Georgia", sans-serif; 
	padding: 25px; 
}
</style>

<div class="text">
	<?php 
	$descriptions = array(
		array("This one looks really nice!"),
		array("Why not try this one out?"),
		array("It's perfect for springtime!"),
		array("It's perfect for a princess!"),
		array("These are really nice colors!"));
	$randomNum = rand(0,4);
	echo '<p>'.$descriptions[$randomNum][0].'</p>'; ?>
</div>
