var appartement=300;
var bungalow=500;
var chambre_simple=200;
var chambre_double=250;

function checkApp(){
  document.getElementById("apart").innerHTML=""

  if (document.getElementById("apprtmnt").checked)
  {
  document.getElementById("apart").innerHTML="<input id='valeur_appartement'  min='0' max='8' type='number'>"
}
}
 

function checkBunglow(){
  document.getElementById("bng").innerHTML=""

  if (document.getElementById("bunglw").checked)
  {
  document.getElementById("bng").innerHTML="<input id='valeur_bungalow'  min='0' max='8' type='number'>"
}
}

function checkChamb(){
  document.getElementById("chmbre").innerHTML=""

  if (document.getElementById("chmbr").checked)
  {
  document.getElementById("chmbre").innerHTML="<input type='checkbox'  min='0' max='8' id='ChSp' onclick='checkChamSpl()' name='chambreSimple'> <label> Chambre simple</label><div id='chmbresimple'></div> <input type='checkbox' id='ChDb' onclick='checkChamDbl()' name='chambreDouble'> <label> Chambre double</label> <div id='doubleChambre'></div>"
}
}

function checkChamSpl(){
  document.getElementById("chmbresimple").innerHTML=""

  if (document.getElementById("ChSp").checked)
  {
  document.getElementById("chmbresimple").innerHTML="<input id='numberofchambre'  min='0' max='8' oninput='myFunction()' type='number'><div id='chmbredouble'></div><div class='nbChsimple'></div>"
}
}

function myFunction (){
   nbChambreSimple = document.querySelector('#numberofchambre');
        document.querySelector('.nbChsimple').innerHTML = ''
        for(let i = 1 ; i<= nbChambreSimple.value ; i++){
          
            document.querySelector(".nbChsimple").innerHTML +=
             `
            
             <span>Chambre simple </span>
             <span>Numero${i} :</span><br>
             <select oncklick='checkVUE()' id="VIEW">
             <option   value='0'>Vue Interieur</option>
             <option    value='1'>Vue Exterieur</option>
             
               `
        }
}




function checkChamDbl(){
  document.getElementById("doubleChambre").innerHTML=""

  if (document.getElementById("ChDb").checked)
  {
  document.getElementById("doubleChambre").innerHTML="<input id='numberofchambre2' oninput='myFunction2()' type='number'><div class='nbChdb'></div>"
}
}



function myFunction2 (){
  nbChambreDoub = document.querySelector('#numberofchambre2');
       document.querySelector('.nbChdb').innerHTML = ''
       for(let i = 1 ; i<= nbChambreDoub.value ; i++){
         
           document.querySelector(".nbChdb").innerHTML +=
            `
            <span>Chambre Double </span>
            <span>Numero${i} :</span><br>
            <select class="lit" onchange='checklit()' >
            <option>Choose</option>
            <option   value='litSimple'>2lit Simple</option>
            <option   value='litDouble'>lit Double</option>
            </select>
            <div class="nbLitdb"></div>


              `
              document.querySelector(".nbLitdb").innerHTML +=""

       }
}




function checklit(){
  document.querySelector(".nbLitdb").innerHTML +=""

      Lit= document.querySelector(`.lit`).value
      if(Lit=='litSimple'){
        document.querySelector(".nbLitdb").innerHTML +=
        `  
        <span>Vue chambre 2 lit simple </span>
        <select oncklick='checklitVue()' id="vueL">
        <option   value='vueInt'>vue interieur</option>
          `

      }

      else if(Lit=='litDouble'){

        document.querySelector(".nbLitdb").innerHTML +=

        `          
        <span>Vue chambre lit doule </span>
        <select onchange='checklitVue2()' id="vueL">
        <option>Choose</option>
        <option   value='vueInt'>vue interieur</option>
        <option   value='vueExt'>vue Exterieur</option>

          `
      }
    
  }


prix=0;
function pension(){
  var choix = document.getElementById("pensio").value;
  switch (choix) {
      case "complete": document.getElementById("Demip").innerHTML ="";
          prix = 120;

          break;
      case "sans":  document.getElementById("Demip").innerHTML ="";
          prix = 0;
          break;
          
          case "demi": document.getElementById("Demip").innerHTML = "<select> <option>ptDej/dej</option> <option> ptDej/diner</option> </select>";
         
          break;
          
}
}

window.addEventListener('load', () => {
  nbchild = document.querySelector('#nbchild');
nbchild = document.querySelector('#nbchild');
nbchild.addEventListener('input', () => {
    document.querySelector('.children').innerHTML = ''
    for(let i = 1 ; i<= nbchild.value ; i++){
      
        document.querySelector(".children").innerHTML += `<span>enfant${i} :</span><span id = "affiche-prix${i}"></span> <input type="number" min="1" id="id-age${i}"/><div id="en${i}></div>"`
    }
})
})
function Calcule(){
  nbchild = document.querySelector('#nbchild')

  for(let i = 1 ; i<= nbchild.value ; i++){
      age =document.querySelector(`#id-age${i}`).value;

      if(age <= 2  ){
        document.querySelector(`#en${i}`).innerHTML =  '<input type="checkbox">supplément lit enfant 25% chambre simple';
        
      }
}
}












// total=0;
// function checkVUE() {
//   nbChambreSimple = document.querySelector('#numberofchambre');
//   for(let i = 1 ; i<= nbChambreSimple.value ; i++){
//     Vue= document.querySelector(`#VIEW`).value
//     if(Vue==0){
//         view = 0;
//         total +=  view
//     }
//     else if(Vue==1){
//       view = chambre_simple*0.2
//         total +=  view
//     }
  
// }
// appart = document.querySelector('#valeur_appartement').value;
// totale1=appartement*appart
// bngl = document.querySelector('#valeur_bungalow').value;
// totale2=bungalow*bngl

// ChambreSimple = document.querySelector('#numberofchambre').value;
// totale3=chambre_simple*ChambreSimple

// Totale=totale1+totale2+totale3
//   document.querySelector("#affichePrix").innerHTML=Totale;
// console.log(Totale)

// }

