grilleTournoi.component('generateGrille' , {
	template : '<div class="col-lg-6"><div class="form-group">' +
					'<div class="input-group">'+
					   '<span class="input-group-addon" id="basic-addon1">Nombre de joueurs : </span>' +
					   '<select class="form-control"  ng-model="modelSelect" ng-change="$ctrl.updateJoueur()" placeholder="Sélectionner le nombre de joueurs" style="width : 200px !important">' +
					   		'<option value="1">1</option>'+
					   		'<option value="2">2</option>'+
					   		'<option value="3">3</option>'+
					   		'<option value="4">4</option>'+
					   	'</select>'+
					'</div>'+						
				'</div></div>' +
				'<div class="col-lg-12">'+
					   		'<generate-name ng-repeat="n in $ctrl.range()" people="$ctrl.nbJoueur" ng-show="$ctrl.show()"></generate-name>' +
				'</div>' ,
	bindings : {
		nbJoueur : '<',
		onUpdate : '&'
	},
	controller : ['$scope' , function($scope) {
		var ctrl = this;
		var array = [];


		ctrl.$onInit = function(){
			ctrl.nbJoueur = 0;			
		}

		ctrl.updateJoueur = function(){
			ctrl.nbJoueur = parseInt($scope.modelSelect);
			ctrl.show();
		}

		ctrl.show = function(){
			if(ctrl.nbJoueur != 0){
				return true;
			}
			return false;
		}

		ctrl.range = function(){
			ctrl.array = [];
			for(var i = 0 ; i < ctrl.nbJoueur ; i++){
				ctrl.array.push(i);
			}
			return ctrl.array;
		}
	}]
});



grilleTournoi.component('generateName' , {
	template : '<div class="form-group">' +
					'<div class="input-group">'+
						'<span class="input-group-addon"  id="basic-addon1">Nom du joueur : </span>' +
						'<input type="text" width="70%" class="form-control">' + 
					'</div>'+
				'</div>',
	bindings : {
		people : '<',
	},
	controller : function(){
		var ctrl = this;

		ctrl.$onInit = function(){
			console.log("People : " + ctrl.people);
		}	
	}
})

/* 
	1. Récupérer les articles de la base 
	2. Les enregistrer dans une liste
	3. Cliquer "Ajouter un article"
	4. Ajouter le template d'ajout dans la liste
*/
indexModule.component('listArticle' , {
	template : '<ul class="list-group" ng-repeat="n in $ctrl.objArticle">'+
					'<li class="list-group-item">'+
							'<div class="media">'+
							  '<img class="d-flex mr-3" src="..." alt="Generic placeholder image">'+
							  '<div class="media-body">'+
							  		'<h5>{{$ctrl.objArticle[$index].titre}}</h5>'+	
							  		'<p>{{$ctrl.objArticle[$index].content}}</p>'+						   		
					   		 		'<div class="text-right">' +
					   		 			'<footer class="blockquote-footer">{{$ctrl.objArticle[$index].auteur}} <cite title="Source Title">{{ $ctrl.objArticle[$index].date}}</cite></footer>'+
					   		 		'</div>' +
					   		 		'<div class="text-right">' +
					   		 			'<span class="badge badge-warning" style="color: white !important">Modifier cet article</span>' +
					   		 			'<span class="badge badge-danger">Supprimer cet article</span>'+
					   		 		'</div>'+ 						   		 
							  '</div>' +
							'</div>'+
						'</li>' +
					'</ul>' +
					'nb article : {{ $ctrl.objArticle.length }}<ajouter-article elements="$ctrl.listArticle"></ajouter-article>',
	bindings : {
		listArticle : '<',
	},
	controller : function(){
		var ctrl = this;
		var objArticle = [];

		ctrl.$onInit = function(){			
			ctrl.objArticle = [{
					'titre' : 'Article 1',
					'photo' : 'photo.jpg',
					'content' : 'Je suis un article',
					'auteur' : 'Wallaert Kevin',
					'date' : '22/09/2017'
			 },{
			 		'titre' : 'Article 2',
					'photo' : 'photo.jpg',
					'content' : 'Je suis un article',
					'auteur' : 'Wallaert Kevin',
					'date' : '22/09/2017'
			 }];

			 ctrl.listArticle = ctrl.objArticle;
		

			console.log("Nombre d'article : " + ctrl.listArticle.length);
		} 
	}
})


indexModule.component('ajouterArticle' , {
	template : '<li ng-click="$ctrl.ajouterElement()" class="list-group-item list-group-item-success pointer" style="text-align: center;">'+
					'<i class="fa fa-plus" aria-hidden="true"></i>'+
						  	'Ajouter un article' +
				'</li>',
	bindings : {
		elements : '<'
	},
	controller : ['$scope' , function($scope){
		var ctrl = this;

		ctrl.$onInit = function(){
			console.log("Initialisation ajouter article : " + JSON.stringify(ctrl.elements));
		}

		ctrl.ajouterElement = function(){
			alert('clic');			
		}
	}]

})

indexModule.component('content-article' , {
	template : '<div class="input-group">'+
   				 	'<textarea class="form-control custom-control" rows="3" style="resize:none"></textarea>'+     
    				'<span class="input-group-addon btn btn-primary">Ajouter</span>'+
				'</div>',
	controller : function(){
		var ctrl = this;

		ctrl.$onInit = function(){

		}
	}
})

angular.module('gestionEquipeModule').component('gestionEquipe' , {
	templateUrl : 'vendor/js/template/gestion_equipe.html',
	bindings : {
		arrayEquipe : '<',
		arrayJoueur : '<',
		equipeBuild : '&',
		joueurs : '=',
	},
	controller : ['$scope' , '$http' , 'gestionEquipeFactory' , function($scope,$http,gestionEquipeFactory){
		var ctrl = this;
		var equipeBuild = []; // Va contenir les joueurs d'une équipe 


		ctrl.$onInit = function(){
			ctrl.initValue();
			ctrl.getAllEquipes();
			ctrl.getAllJoueurs();
		}

		ctrl.initValue = function(){
			ctrl.arrayJoueur = [];
			ctrl.arrayEquipe = [];
			ctrl.joueurs = [];
			ctrl.test = "Bonjour !! ";
		}
			
		ctrl.hideJoueur = function(){
			return ctrl.arrayJoueur.length > 0;
		}
		

		ctrl.getAllJoueurs = function(){
			gestionEquipeFactory.getAllJoueurs("/getAllPlayers").then(function(data){
				angular.forEach(data.data.joueurs , function(value,index){
					ctrl.arrayJoueur.push(value);					
				});	
			});		
		}

		ctrl.getAllEquipes = function(){
			gestionEquipeFactory.getAllEquipe("/getAllEquipes").then(function(data){
				angular.forEach(data.data.equipes , function(value,index){
					ctrl.arrayEquipe.push(value);
				})
			})
		}

		ctrl.getJoueurFromEquipe = function(){
			return ctrl.equipeBuild;
		}

		ctrl.getJoueursFromEquipe = function(){
			alert('cliquer : ' + JSON.stringify(ctrl.joueurs));

			
		}

	}]
})

angular.module('gestionEquipeModule').component('listJoueurEquipe' , {
	template : '<ul class="list-group"   data-drop="true" ng-model="$ctrl.joueurIn" jqyoui-droppable="{multiple:true}">'+
				'<li class="list-group-item">'+
				  	'{{ $ctrl.equipe.nom }}'+
				  	'<div ng-if="$ctrl.joueurIn.length > 0" class="pull-right"> '+					  		
				  		 '<span class="badge badge-pill badge-success pointer" ng-click="$ctrl.reinitEquipe()">'+
					  		 '<i class="fa fa-cogs" aria-hidden="true"></i>'+
					  		 'Réinitialiser ' +
				  		  '</span>'+
				  	'</div>'+
				 '</li>'+ 
				'<li class="list-group-item list-group-item-success nameJoueur" '+
	 				'ng-repeat="item in $ctrl.joueurIn track by $index" ng-show="item.nom"'+
	 				 'data-drag="true" data-jqyoui-options="{revert: invalid}" ng-model="$ctrl.joueurIn"'+
	 				 'jqyoui-draggable="{index: {{$index}},animate:true}" >{{item.nom}} {{ item.prenom }}'+
	 				 '<div class="pull-right">'
	 				 		+ '{{item.classement}}' +
	 				 '</div>' +
	 			'</li>'+
	   			 '<li class="list-group-item" ng-hide="$ctrl.hideEquipe($ctrl.joueurIn)">' +
	   			 	'Ajouter un joueur'+
				'</li></ul>',
	bindings : {
		joueurIn : '<',
		equipe : '=',
		allJoueur : '<',
		joueurs : '=',
		index : '<',
	},
	controller : function(){
		var ctrl = this;


		ctrl.$onInit = function(){
			ctrl.joueurIn = [];
			ctrl.joueurs[ctrl.index] = ctrl.joueurIn;
		}

		ctrl.reinitEquipe = function(){		
			angular.forEach(ctrl.joueurIn , function(valeur , index){
				ctrl.allJoueur.push(valeur)
			})
			ctrl.joueurIn = [];
			ctrl.joueurs[ctrl.index] = [];
		}


		ctrl.hideEquipe = function(arrayEquipe){
			return arrayEquipe.length > 0;
		}

	}
})


angular.module('gestionEquipeModule').component('popup' , {
	templateUrl : 'vendor/js/template/popup.html',
	bindings : {
		showModal : '<',
		messageModal : '<',
		showMe : '&',
	},
	controller : ['modalFactory' , function(modalFactory){
		var ctrl = this;


		ctrl.$onInit = function(){
			var modal = angular.element('#popupComponent');//.html("<div class='alert alert-danger' style='text-align: center'>"+ ctrl.messageModal + "</div>");	
			modalFactory.setModal(modal);		
			console.log(JSON.stringify(modalFactory.getModal()));
		//	console.log("Initialisation du composent popup " + ctrl.messageModal);
			
		}

		ctrl.showPopup = function(){
			console.log("Dans cette fonction ! ");
			if(ctrl.showModal){
				console.log("Je suis ici");
				angular.element('#popupComponent').modal('show');
			}
			
		}

		ctrl.closePopup = function(){
			angular.element('#popupComponent').modal('hide');
		}

	
	}]
})