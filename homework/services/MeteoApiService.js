const request = require('request');

module.exports.getPlaces = function() {
	return new Promise(function(resolve) {
		request.get('https://api.meteo.lt/v1/places').then(response => {
			let places = JSON.parse(response.body);

			resolve(places);
		});
	});
}

module.exports.loadPlaceForecasts = function() {
	return new Promise(function(resolve) {
		request.get(`https://api.meteo.lt/v1/places/${code}/log-term`).then(response => {
			let places = JSON.parse(response.body);

			resolve(places);
		});
	});
}