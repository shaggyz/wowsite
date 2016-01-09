var App = function(){};

/**
 * Application bootstrap
 * @return {void} 
 */
App.prototype.initialize = function() {
    if (window.console) {
    	console.log('Application started...');
    }

    this.externalLinks();
};

/**
 * All external links in a new window
 * @return {void} 
 */
App.prototype.externalLinks = function() {
	$('a[rel=external]').attr('target', '_blank');
};

module.exports = App;