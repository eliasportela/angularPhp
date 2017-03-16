<!DOCTYPE html ng>
<html lang="pt-BR" ng-app="app">
<head>
	<title>Teste Angular</title>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div ng-controller="MyCtrl">
			<div class="jumbotron">
				<h1>Live Search</h1>
			</div>
			<input type="text" ng-keyup="pesquisar(search)" ng-model="search" class="form-control input-lg" placeholder="O que você procura?" autofocus autocomplete="off">
			<br>
			<div class="autocomplete" ng-show="completing">
					<a class="link" href="pesquisa/empresa/" ng-repeat="dica in dicas">
						{{dica.nome}};
					</a>
			</div>
			
		</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.12/angular.min.js"></script>
<script src="app.js"></script>
</body>
</html>