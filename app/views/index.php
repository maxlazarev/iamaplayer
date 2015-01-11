<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Iamaplayer.ru news!</title>

	<!-- CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<style>
		body 		{ padding-top:30px; }
		form 		{ padding-bottom:20px; }
		.comment 	{ padding-bottom:20px; }
	</style>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->


		<script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
		<script src="js/services/newsitemService.js"></script> <!-- load our service -->
		<script src="js/app.js"></script> <!-- load our application -->

</head>

<body class="container" data-ng-app="newsitemApp" data-ng-controller="mainController">
<div class="col-md-8 col-md-offset-2">

	<!-- PAGE TITLE -->
	<div class="page-header">
		<h2>Iamaplayer.ru web application. Building nice frontend!</h2>
		<h4>Newsitem</h4>
	</div>

    <p><a href="#" ng-click="login()" class="text-muted">Login</a></p>

	<form ng-submit="submitNewsitem()">
		<div class="form-group">
			<input type="text" class="form-control input-lg" name="comment" ng-model="newsitemData.title" placeholder="Here goes title for newsitem">
		</div>

		<div class="form-group text-right">
			<button type="submit" class="btn btn-primary btn-lg">Submit</button>
		</div>
	</form>



	<!-- LOADING ICON -->

	<p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span>LOADING</p>
	<p class="text-center" ng-show="loginLoading"><span class="fa fa-meh-o fa-5x fa-spin"></span>LOADING</p>

	<div class="comment" ng-hide="loading" ng-repeat="newsitem in newsitems">
        #{{newsitem.id}} {{newsitem.title}}

	</div>

</div>
</body>
</html>
