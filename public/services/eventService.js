
angular.module('eventService', [])

.factory('Event', function($http){
	return {
		get : function(){
			return $http.get('/api/events');
		},
		save : function(eventData){
			return $http({
				method: 'POST',
				url: '/api/events',
				headers: { 'Content-Type' : 'application/x-www-form-urlencoded'},
				data: $.param(eventData)
			});
		},
		destroy : function(id){
			return $http.delete('/api/events/' + id);
		}
	}
});