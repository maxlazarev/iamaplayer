angular.module('mainCtrl', [])
	.controller('mainController', function($scope, $http, Newsitem) {

		$scope.newsitemData = {};
		$scope.loading = true;

		Newsitem.get()
			.success(function(data) {
				$scope.newsitems = data.data;
                $scope.loading = false;
			});

        $scope.login = function(){
            $scope.loginLoading = true;

        }
	});