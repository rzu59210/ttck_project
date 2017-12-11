grilleTournoi.controller("mainCtrl" , ['$scope' , function($scope){
	var ctrl = this;

	ctrl.$onInit = function(){
		console.log("Initialisation controller");
	}


	$scope.genererGrille = function(name){
		console.log("Vous avez cliquer sur le bouton");
		console.log($scope.putName());
		var arrayJoueur = $scope.putName();
		/*  requête ajax a fournir */
		$.ajax({
			url : '/generateGrillePdf',
			data : {
				joueurs : JSON.stringify(arrayJoueur)
			},
			async : false,
			success : function (data){
				var blob = new Blob([data]);
                var link= document.createElement('a');
                link.href=window.URL.createObjectURL(blob);
                link.download="grillettck.pdf";
                document.body.appendChild(link);
                link.click();

                console.log("fichier : " + JSON.stringify(data));

			},
			error : function (error) {

            }
		})
	}

	$scope.putName = function(){
		var arrayName = [];
		angular.element('input:text').each(function(){
			var name = $(this).val();
			if(name){
				arrayName.push(name)
			}
	
		});

		return arrayName;		
	}

}]);


angular.module('menuModule').controller('menuCtrl' , ['$scope',function($scope){
	$scope.openPopup = function(){
		angular.element('#popup').modal('show');
	}
	
}]);

angular.module('indexModule').controller('indexCtrl', function(){
	
});

angular.module('popupModule').controller('popupCtrl' , function(){

});

angular.module('dragModule').controller('OverviewCtrl' , ['$scope' , 'gestionEquipeFactory' , 'modalFactory' ,function($scope, gestionEquipeFactory, modalFactory){

	$scope.messageModal = "";
	$scope.showModal = false;

	$scope.validerEquipe = function(joueurs){
		var isCorrect = 0;
		showModal = false;
		console.log("Validation des équipes " + joueurs.length);
		angular.forEach(joueurs , function(value , index){
			if(value.length != 0 ){
				isCorrect++;	
			}	
		});
		alert(JSON.stringify(joueurs));
		if(isCorrect == joueurs.length){
			$scope.messageModal = "Les équipes sont valides !";
			gestionEquipeFactory.setEquipe(joueurs ,'/saveEquipe');
		} else {
			$scope.messageModal = "Les équipes ne sont pas valides !";		
		}		
		$scope.showModal = true;
		modalFactory.setMessage($scope.messageModal);
		modalFactory.openPopup();

	}

	$scope.saveEquipe = function(equipe){
		$scope.arrayEquipe = equipe;
		console.log(equipe);
	}


}]);