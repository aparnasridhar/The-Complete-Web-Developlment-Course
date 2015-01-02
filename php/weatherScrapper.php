<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather Scrapper</title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

		<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    

	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    	.container{
    		width:100%;
    		height:100%;
    		background-image:url("weather.jpeg");
    		background-size:cover;
    		background-position:center;
    		padding-top:150px;
    	}
    	
    	html, body{
    		height:100%;
	  	}
	  	h1,p, #weather{
	  		text-align:center;
	  	}
    </style>
  </head>
  <body >
  
  	<div class="container">
  		
  		<div class="row">
  	
  		<div class="col-md-6 col-md-offset-3">
  	
  		<h1>Weather Scrapper</h1>
  		<p class="lead">Get the weather in your city!</p>
  		
  		<form id="weather">
  		<div class="form-group">
  			<input type="text" name="city" id="city" class="form-control" placeholder="Eg. London, Paris, Chennai.."/>
  		</div>
  		<input id="findMyWeather" type="submit" class="btn btn-success" value="Find My Weather"/>
  		
  		<div class="alert alert-success" id="demoText">
  			Success
  		</div>
  		</div>
  	
  		</div>
	</div>
	
	  	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    
      <script>
      
      	$("#findMyWeather").click(function(event){
      		event.preventDefault();
      		var city=$("#city").val();
      		alert(city);
      		if (city != "")
      		{
      			$.get("weather.php?city="+city,function(data){
      				alert(data);
      			});
      		}
      		else
      		{
      			alert("please enter a city");
      		}
      	});
      
        	
    </script>
  </body>
</html>