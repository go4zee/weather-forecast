<!DOCTYPE html>
<!--Gets the weather forecast for a city -->
<html>
<head>
    <title>Weather Predictor</title>
	<meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html"; charset="utf-8" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="style/styles.css" rel="stylesheet"/>

</head>

<body>
    <script   src="//code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
    <script src="scripts/script.js"></script>


    <div class="container">
    	<div class="row">
    		<div class="col-md-6 col-md-offset-3 center">
    			<h1 class="center white">Weather Forecast</h1>
    			<p class="lead center white">Enter your city below to get a forecast of weather.</p>

    			<form>
    				<div class="form-group">
    					<input type="text" class="form-control" name="city" id="city" placeholder="Eg. Toronto, London, New York..." />
    				</div>

    				<button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>

    			</form>
    		
    		</div>
    	</div>

        <div class="alert alert-success center" id="success">
                Success!
        </div>

         <div class="alert alert-danger center" id="fail">
                Could not find the data for that city, Please try that again!
        </div>

         <div class="alert alert-danger center" id="noCity">
                Please enter a city!
        </div>
    </div>
</body>
</html>


