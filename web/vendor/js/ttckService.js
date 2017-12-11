grilleTournoi.factory('grilleTournoiFactory' , function(){
	var joueurs = [];
	return {
		getGrillePDF : function (pdf , joueurs) {
			$.ajax({
				method : 'POST',
				url : url,

			})
        },
        setJoueurs : function (arrayJoueur) {
			joueurs = arrayJoueur;
        }
	}
});


dragModule.factory('gestionEquipeFactory' , ['$http' , function($http){
	return {
		getAllJoueurs : function(url){
			return $http.get(url);
		},

		setEquipe : function(equipes , url ){
			$.ajax({
				method : 'POST',
				url : url,
				data : {
					'equipes' : JSON.stringify(equipes),
				},
				success : function(data){
					// Gerer la popup
				},
				error : function(data){

				},
			})
		},

		getAllEquipe : function(url){
			return $http.get(url);
		},		
}

}]);

angular.module('ttckApp').factory('modalFactory' , function(){
	var modal = {};

	return {

		setModal : function(modalUser){
			modal.popup = modalUser;
		},
		setMessage : function(msg){
			modal.popup.find('.modal-body').html("<div class='alert alert-danger' style='text-align: center'>"+ msg + "</div>");
		},
		openPopup : function(){
			modal.popup.modal('show');
		},
		closePopup : function(){
			modal.popup.modal('hide');
		},
		getModal : function(){
			return modal.popup;
		}
	}

});