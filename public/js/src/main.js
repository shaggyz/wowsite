var App = require('./app');
var app = new App();

$(document).on('ready', function(){
	app.initialize();
});