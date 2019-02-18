//Ecrire un programme qui demande successivement 5 nombres à l’utilisateur, et qui lui dise ensuite quel était le plus grand parmi ces 5 nombres
let nbre1 = prompt("Enter le premier nombre");
let nbre2 = prompt("Enter le deuxieme nombre");
let nbre3 = prompt("Enter le troisieme nombre");
let nbre4 = prompt("Enter le quatrieme nombre");
let nbre5 = prompt("Enter le cinquieme nombre");
let grand = Math.max(nbre1,nbre2,nbre3,nbre4,nbre5);
console.log(`Le plus grand de ces nombres est :`+ grand);