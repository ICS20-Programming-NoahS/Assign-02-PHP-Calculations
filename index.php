<!DOCTYPE html>
<!-- Assign-02-PHP-Calculations -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Assign-02">
    <meta name="keywords" content="immaculata, ICS2O">
    <meta name="author" content="Noah Smith">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  	<!-- Favicon -->
  	<link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon (1).png">
  	<link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32 (1).png">
  	<link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16 (1).png">
  	<link rel="manifest" href="./fav_index/site.webmanifest (1)">
  
  	<!--Link to CSS file-->
  	<link rel="stylesheet" href="./css/style.css">
  
  	<!-- Google's MDL -->
  	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
  
  	<title>Calculating the volume and surface area of a circle, using PHP</title>
  </head>  
  <body>
    <!--header-->
  	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  		<header class="mdl-layout__header">
  			<div class="mdl-layout__header-row">
  				<span class="mdl-layout-title"><i>Calculating the volume and surface area of a circle, using PHP</i></span>
  			</div>
  		</header>
  	</div>
  	<main class="mdl-layout__content">
  		<br>
  		<br>
  		<br>
  		<h2>Formulas:</h2>
  		<img src="./images/sphere.png" alt="sphere formulas">
      <br>
      <br>
       <!-- form to get the radius from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=radius-of-sphere">Radius:</label>
      <input type="text" id="radius-of-sphere" placeholder="Radius..." name="radius-of-sphere">
      <button
          class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit"
          name="submit"
        >
          Calculate
        </button>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				The volume of the sphere is" + $volume + cm<sup>3</sup> and the surface area of the sphere is" + $surfaceArea + cm<sup>2</sup>.
	    </iframe>
  		</form>

      <!--Checkbox-->
      <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
        <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" checked>
        <span class="mdl-checkbox__label">Did you have a ball looking at this webpage?</span>
      </label>
      <img src="./images/laugh.gif" alt="hahahaha">
    </main>
  </body>
</html>