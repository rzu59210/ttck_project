'use strict'

var ttckApp = angular.module('ttckApp', [
	// Dépendance du module 
	'grilleTournoi',
	'menuModule',
	'indexModule',
	'dragModule',
	'gestionEquipeModule',
	'popupModule',

]);

var grilleTournoi = angular.module('grilleTournoi' , []);


var menuModule = angular.module('menuModule', ['ui.bootstrap']);

var indexModule = angular.module('indexModule' , []);

var dragModule = angular.module('dragModule' , ['ngDragDrop']);

angular.module('gestionEquipeModule' , []);
angular.module('popupModule',[]);

