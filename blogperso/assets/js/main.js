//***********variables
var email = document.getElementById("newsletter");
var mail = document.getElementById("mail");
var emailVerify = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
var contact = document.getElementById("formMsg");
var nom = document.getElementById("nom");
var prenom = document.getElementById("prenom");
var mailContact = document.getElementById("mailcontact");
let maj = /^[a-z]+/;
//script newsletter
email.addEventListener("submit", function letters(e){
	e.preventDefault();
	if (emailVerify.test(mail.value)) {//verification du mail (si il est bien ecrit)
   document.getElementById("newsletter").classList.add("display-none");
   document.getElementById("txt").classList.add("display-none");
   document.getElementById("loading").classList.remove("display-none");
} else {
   document.getElementById("alert").innerHTML ="Formulaire mal renseigné";
}
setTimeout(function(){//pre-loader et message se fin
	if (emailVerify.test(mail.value)) {
	document.getElementById("loading").classList.add("display-none");
	document.getElementById("alert").innerHTML ="Merci d’avoir souscrit à notre newsletter";
}
}, 3000);
});



//script formulaire de contact
contact.addEventListener("submit", function(e){
	e.preventDefault();
	if (!mailContact.value || !nom.value || !prenom.value) {//verification des champs obligatoires (si il sont rempli)
	document.getElementById("alertform").innerHTML ="Formulaire incomplet (remplire les champs obligatoires)";

	}else{
		var champs=true;
	}
	if (!maj.test(nom.value)){//verification de l'ecriture du nom
		var tettre=true;
	}else{
		document.getElementById("alertnom").innerHTML ='Ecrire le nom en lettres capitales ou juste la premiere lettre';
	}
	if (!emailVerify.test(mailContact.value)) {//verification du mail
   	document.getElementById("alertmail").innerHTML ='e-mail mal renseigné';
	}else{
		//
		var regex=true;
	}
	if(champs==true && tettre==true && regex==true){//message de fin apres envoie
		document.getElementById("alertform").innerHTML ="Message envoyé";
		document.getElementById("alertnom").innerHTML =' ';
		document.getElementById("alertmail").innerHTML =' ';
	}
});

//script de la map

function initMap() {
  // Les coordonees
  var coordonee = {lat: -0.3901, lng:  9.4544};
  // appelle de la map
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 7, center: coordonee});
  // le marker
  var marker = new google.maps.Marker({position: coordonee, map: map});
}
