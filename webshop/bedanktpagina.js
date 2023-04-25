const verzendbutton = document.getElementById("verzenden")
const naam =document.getElementById("naam")
const straatnaamnummer =document.getElementById("straatnaamnummer")
const postcodewoonplaats =document.getElementById("postcodewoonplaats")
const telefoonnr =document.getElementById("telefoonnr")
const email =document.getElementById("email")
const bestelnr =document.getElementById("bestelnr")
const kleur =document.getElementById("kleur")
const aantal =document.getElementById("aantal")

verzendbutton.addEventListener("click",storeItems)

function storeItems(){
  localStorage.setItem('naam', naam.value);
  localStorage.setItem('straatnaamnummer', straatnaamnummer.value);
  localStorage.setItem('postcodewoonplaats', postcodewoonplaats.value);
  localStorage.setItem('telefoonnr', telefoonnr.value);
  localStorage.setItem('email', email.value);
  localStorage.setItem('bestelnr', bestelnr.value);
  localStorage.setItem('kleur', kleur.value);
  localStorage.setItem('aantal', aantal.value);
}
