let salaire = document.getElementById('salaire');
let mois = document.getElementById('moyenne');
let simulateur = document.getElementById('simulateur');

simulateur.addEventListener("submit", function(){
    let pension = ((((salaire*moyenne)/moyenne)*40)/100);
    console.log(pension)
})                                              

