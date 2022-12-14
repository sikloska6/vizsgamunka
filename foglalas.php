
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Foglalás</title>
	<link type="text/css" rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="foglal.css" />
	<link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
	<style>
		body{
    
	background-repeat: no-repeat;
    background-image:url(foglalashatter.jpg);
	background-size: cover;
	
   
  }

				/*topscroll*/
				#myBtn {
			display: none;
			position: fixed;
			bottom: 20px; 
			right: 10px;  
			z-index: 99;  
			border: none; 
			outline: none; 
			background-color: rgb(99, 99, 99);
			color: black; 
			cursor: pointer;
			padding: 10px; 
			border-radius: 20px; 
			font-size: 16px;
		  }
		  
		  #myBtn:hover {
			background-color: rgb(255, 255, 255); 
		  }
		/*footer*/
		#footer{
			margin:0;
			margin-top: 10px !important;
			background: black !important;
		  
			font-size:20px;
			text-align: center !important;
		}
		.list-footer-height-1{
			min-height:40px;
			max-height:60px
		}
		
		.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus{
			background: grey !important;
		}
		
		.list-group-item-dark,button.list-group-item-dark{
			background: black !important;
		}
		a.list-group-item-dark,button.list-group-item-dark{
			color:#f8f8f8 !important;
		}
		.list-group-item{
			padding: 0 !important;
			background: black;
		
		}
		#bottom-footer{
			display:block;
			width:100%;
			margin:0;
			padding:15px 0 15px 0;
			color:#fff;
			background-color:#000000 !important;
			text-align:center
		}
		img, svg {
    	vertical-align: super;
		}
		@media (min-width: 768px){
		.col-md-3 {
    	flex: 0 0 auto;
    	width: 50%;
		}
	}

	@media (min-width: 768px){
	.col-md-12 {
    	flex: 0 0 auto;
		width: 70%;
    	text-align: center;
	}
	}

		.section{
			display: block;
			font-family: 'Gruppo', cursive;
    		text-align: -webkit-center;
			color: white;
		}
		@media (max-width: 500px){
			.section{
			display: flex;
    		flex-direction: column;
   		 	margin-inline: 10px;
		}}

		footer.row.col-md-12.col-sm-12.col-xs-12{
			width: -webkit-fill-available;
		}
		footer#footer.row{
    	display: flex;
    	justify-content: center;

		}
		input{
			height: 50px;
			border-radius: 45px;
			border: thin solid;
			box-shadow: 2px 2px 2px 2px #00ffe580;
			background-color: #000b15ad;
			color: white;
		}
		@media (max-width: 700px){
			input{
		width: inherit;
			}}
		.submit-btn{
			color: white !important;
			margin-top: 10px;
		}
		input#egyeb.col-md-12{
			color: white !important;
		}
		select{
			border-radius: 45px;
			border: thin solid;
			box-shadow: 2px 2px 2px 2px #00ffe580;
    		height: 50px;
			background-color: #000b15ad;
			color: white;
		}
		@media (max-width: 700px){
			select{
		width: inherit;
			}}
		::placeholder{
			color: white;
		}
		
		.row {
     	--bs-gutter-x: none !important;
		}

		div.row.col-md-12{
			display: block;
		}
		label.row.col-md-12{
			display: inline-block;
			text-align: center;
		}
		label.row.col-md-6{
			display: block !important;
		}
		label.row.col-md-3{
			display: block !important;
		}
	</style>
</head>
<body>
<div class="container"><a href="vizsgamunka.html"><button style="background: none; border: none;"><img src="homevissza.png" alt="" style="height:50px;"></button></a></div>

<div id="booking" class="section">
	<div class="foglalas">
		<form action="adatfeltolt.php" method="POST">
			<div class="row">
				<div class="col md-6">
					<label for="nev" class="row col-md-6">Teljes Név</label>
					<input class="col-md-6" name="nev" id="nev" type="text" placeholder="Pl: Jane Doe">
				</div>
				<div class="col-md-6">
					<label for="email" class="row col-md-6">Email</label>
					<input class="col-md-6" name="email" id="email" type="text" placeholder="janedoe@gmail.com">
				</div>
			</div>
		<div class="row">
			<div class="col-md-6">
				<label for="telefonszam" class="row col-md-6">Telefonszám</label>
				<input class="col-md-6" name="telefonszam" id="telefonszam" type="text" placeholder="Pl:+36701234567">
			</div>
			<div class="col-md-6">
				<label for="tb_szam" class="row col-md-6">Társadalombiztosítás száma</label>
				<input class="col-md-6" name="tb_szam" id="tb_szam" type="text" placeholder="Pl: 1234567">
			</div>
		</div>	
		
		<div class="row">
			<div class="col-md-3">
				<label for="utasok_szama" class="row col-md-3">Utasok száma</label>
					<select class="col-md-3" name="utasok_szama" id="utasok_szama">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
					</select>
			</div>
			<div class="col-md-3">
				<label for="plusz_agy" class="row col-md-3">Kér plussz ágyat?</label>
					<select class="col-md-3" name="plusz_agy" id="plusz_agy">
						<option>Kér</option>
						<option>Nem kér</option>
					</select>
			</div>
    	    <div class="col-md-3">
				<label for="idegenvezetes" class="row col-md-3">Idegenvezetés Más nyelven</label>
					<select class="col-md-3" name="idegenvezetes" id="idegenvezetes">
						<option>Nem</option>
						<option>Igen</option>
					</select>
			</div>
    	    <div class="col-md-3">
				<label for="utasbiztositas" class="row col-md-3">Kér utasbiztosítást?</label>
					<select class="col-md-3" name="utasbiztositas" id="utasbiztositas">
						<option>Kér</option>
						<option>Nem kér</option>
					</select>
			</div>
		</div>
    	<div class="row col-md-12">
        	<label for="egyeb" class="row col-md-12">Egyéb kérések</label>
            <input class="col-md-12" type="text" name="egyeb" id="egyeb" style="height: 100px;" placeholder="például: legyen wifi, légkondi.">
    	</div>
	
		<div class="row col-md-2">
			<input type="submit" name="submit" id="btn" value="submit" class="submit-btn">
		</div>
			
						
		</form>
	</div>
</div>
	
</body>
<!--footer-->  
</div>
<footer id="footer" class="row">
  <footer class="col-md-12 col-sm-12 col-xs-12">
      <footer class="footer-list">
          <a href="https://goo.gl/maps/whTYCJzegyj4KvRF8" target="_blank" class="list-footer-height-1 list-group-item list-group-item-action list-group-item-dark"><i class="fa fa-location-arrow fa-2x"></i>
          &nbsp;&nbsp;&nbsp; 1182 Budapest, Királyhágó utca 79.</a>
          <a href="mailto:aurorautazas@borealis.hu" class="list-footer-height-1 list-group-item list-group-item-action list-group-item-dark"><i class="fa fa-envelope fa-2x"></i>
          &nbsp;&nbsp;&nbsp; aurorautazas@borealis.hu</a>
          <a href="tel:+36203673101" class="list-footer-height-1 list-group-item list-group-item-action list-group-item-dark"><i class="fa fa-phone fa-2x"></i>
          &nbsp;&nbsp;&nbsp; Ügyfélszolgálat(+36) - 20 - 367 3101 ( Kizárólag hétköznapokon 10-16-óráig)</a>
      </footer>
  </footer>
</footer>
<footer id="bottom-footer">Copyright [2022] Aurora Borealis Fiction Travel Kft. © - Minden jog fenntartva! - 
  <a title="Adatvédelmi nyilatkozat " href="#" target="_blank">Adatvédelmi nyilatkozat </a> 
  | <a title="Felhasználási feltételek" href="#" target="_blank">Felhasználási feltételek</a> 
  | <a title="Impresszum" href="kapcsolat.html" target="_blank">Impresszum</a>
</footer>
<!--buttontopscroll-->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
	
	
		//topscroll button//
	mybutton = document.getElementById("myBtn");
	window.onscroll = function() {scrollFunction()};
	function scrollFunction() 
	{
    	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      	mybutton.style.display = "block";
    }   else {
      mybutton.style.display = "none";
    }
  }
  function topFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0; 
}
</script>
</html>

