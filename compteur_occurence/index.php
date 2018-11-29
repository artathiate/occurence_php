<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
	<h1> COMPTEUR OCCURENCE</h1>
	<div id="block">
	<form >
		<BR>
		<textarea type="text" id="txt" name="texte" placeholder="texte"></textarea></br><br>
		<input type="text" id="mots" name="rechercher" placeholder="mots"></textarea></br><br>
		<button class="bnt" onclick="compter()"  id="bnt" name="bnt">Recherche</button>

</form>
</div>
</center>


<?php
if (isset($_POST['bnt'])){
	 
		$mots =$_POST['texte'];
		$text =$_POST['rechercher'];



		 echo '<b>"' . $mots . '"</b> contient <b>' . substr_count($mots, $text) . '</b> fois le caractère <b>' . $text . '</b>';
	

}


?> 

<!--<script type="text/javascript">
	/*document.getElementById('bnt').addEventListener('click', function(){
		var txt = document.getElementById('txt').value.toLowerCase();
		var mots = document.getElementById('mots').value;
		 var rep =txt.search(mots);
		 alert (rep);
	});*/
	function compter() {
		var txt = document.getElementById('txt').value.toLowerCase();
		var mots = document.getElementById('mots').value;
		 var rep =txt.split(mots).length-1;
		 alert (rep);
	}
</script>-->

</body>
</html>