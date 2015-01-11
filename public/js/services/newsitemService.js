angular.module('newsitemService', [])
	.factory('Newsitem', function($http) {

		return {
			get : function() {
				return $http.get('api/news');
			},
			show : function(id) {
				return $http.get('api/news/' + id);
			},
			save : function(newsitemData) {
				return $http({
					method: 'POST',
					url: 'api/news',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(newsitemData)
				});
			},
			destroy : function(id) {
				return $http.delete('api/news/' + id);
			}
		}

	});