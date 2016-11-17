<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	Angular Js | ng-Model &amp; Expression</title>
	<script type="text/javascript" src="assets/vendor/angular.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<?php 
		// $dir    = '/xampp/htdocs/magento/angularBasicAssignments';
		// $files1 = scandir($dir);
		// echo "<pre>";
		// print_r($files1);
		// echo "</pre>";
	?>
	<div class="container">
		<div class="row">
			<h2>AngularJS is a JavaScript Framework</h2>
			<p>AngularJS extends HTML with <strong>ng-directives</strong>.</p>
			<p>The <strong>ng-app</strong> directive defines an AngularJS application.
				<br><br>	
				The <strong>ng-model</strong> directive binds the value of HTML controls (input, select, textarea) to application data.
				<br><br>
				The <strong>ng-bind</strong> directive binds application data to the HTML view.</p>
				<div class="panel panel-default">
					<div class="panel-body">
						<div ng-app="">
							<p>Input something in the input box:</p>
							<p>Name: <input type="text" ng-model="name"></p>
							This is ng-bind : <strong>_<</strong> <span ng-bind="name"></span><br>
							This is Expression : <strong>_<</strong> {{name}}
						</div>
					</div>
				</div>
		</div>
	</div>
</body>
</html>