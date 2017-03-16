var app = angular.module('app', []);

// Controller principal, já lê as empresas
app.controller('MyCtrl', function($scope, $http){

	$scope.pesquisar = function(pesquisa){

		// Se a pesquisa for vazia
		if (pesquisa == ""){

			// Retira o autocomplete
			$scope.completing = false;

		}else{

			// Pesquisa no banco via AJAX
			$http.post('modal.php', { "data" : pesquisa}).
	        success(function(data) {

				// Coloca o autocomplemento
				$scope.completing = true;	
				console.log(data)
				// JSON retornado do banco
				$scope.dicas = data;     
	        })
	        .
	        error(function(data) {
				// Se deu algum erro, mostro no log do console
				console.log("Ocorreu um erro no banco de dados ao trazer auto-ajuda da home");
	        });		
		}
	};
});