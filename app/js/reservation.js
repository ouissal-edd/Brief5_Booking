
function checkApp(){
  document.getElementById("apart").innerHTML=""

  if (document.getElementById("apprtmnt").checked)
  {
  document.getElementById("apart").innerHTML="<input value=''id='valeur_appartement' name='TypeAppartement' min='0' max='8' type='number'>"
}
}
 

function checkBunglow(){
  document.getElementById("bng").innerHTML=""

  if (document.getElementById("bunglw").checked)
  {
  document.getElementById("bng").innerHTML="<input value='' id='valeur_bungalow' name='TypeBungalow' min='0' max='8' type='number'>"
}
}

function checkChamb(){
  document.getElementById("chmbre").innerHTML=""

  if (document.getElementById("chmbr").checked)
  {
  document.getElementById("chmbre").innerHTML="<input value='chammbre' type='checkbox'  min='0' max='8' id='ChSp' onclick='checkChamSpl()' '> <label> Chambre simple</label><div id='chmbresimple'></div> <input type='checkbox' id='ChDb' onclick='checkChamDbl()' > <label> Chambre double</label> <div id='doubleChambre'></div>"
}
}

function checkChamSpl(){
  document.getElementById("chmbresimple").innerHTML=""

  if (document.getElementById("ChSp").checked)
  {
  document.getElementById("chmbresimple").innerHTML="<input  value='chambre-Simple'id='numberofchambre'  min='0' max='8' oninput='myFunction()' type='number'><div id='chmbredouble'></div><div class='nbChsimple'></div>"
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
             <select name='chambreSimple[${i}][typevue]'  class="simpleSelector">
             <option   value='VueInterieur'>Vue Interieur</option>
             <option    value='VueExterieur'>Vue Exterieur</option>
             
               `
        }
}


function checkChamDbl(){
  document.getElementById("doubleChambre").innerHTML=""

  if (document.getElementById("ChDb").checked)
  {
  document.getElementById("doubleChambre").innerHTML="<input value='chambre-Double' id='numberofchambre2' oninput='myFunction2()' type='number' min='0' max='8'><div class='nbChdb'></div>"
}
}



function myFunction2 (){
  const nbChambreDoub = document.querySelector('#numberofchambre2');
       document.querySelector('.nbChdb').innerHTML = ''
       for(let i = 1 ; i<= nbChambreDoub.value ; i++){
         
           document.querySelector(".nbChdb").innerHTML +=
            `
            <span>Chambre Double </span>
            <span>Numero${i} :</span><br>
            <select  name='chambreDouble[${i}][typeLit]' class="lit${i}" onchange='checklit()' >
            <option>Choose</option>
            <option   value='litSimple'>2lit Simple</option>
            <option   value='litDouble'>lit Double</option>
            </select>
            <div class="nbLitdb${i}"></div>


              `

       }
}




function checklit(){
  document.querySelector(".nbLitdb").innerHTML +=""
  nbChambreDoub = document.querySelector('#numberofchambre2');
  for(let i = 1 ; i<= nbChambreDoub.value ; i++){
         
      Lit= document.querySelector(`.lit${i}`).value
      if(Lit=='litSimple'){
        document.querySelector(`.nbLitdb${i}`).innerHTML =
        `  
        <span>Vue chambre 2 lit simple </span>
        <select  name='chambreDouble[${i}][typevue]' class="doubleSelector" id="vueL">
        <option   value='VueInterieur'>vue interieur</option>
          `

      }

      else if(Lit=='litDouble'){

        document.querySelector(`.nbLitdb${i}`).innerHTML =

        `          
        <span>Vue chambre lit doule </span>
        <select name='chambreDouble[${i}][typevue]' class="doubleSelector"  id="vueL">
        <option>Choose</option>
        <option   value='VueInterieur'>vue interieur</option>
        <option   value='VueExterieur'>vue Exterieur</option>

          `
      }
    
  }
}




function afficher(etat) {
  document.getElementById("enfantsExiste").style.display = etat;
}


un=document.getElementById("un").value;
deux=document.getElementById("deux").value;
trois= document.getElementById("trois").value;
 
document.addEventListener('input',(e)=>{

  if(e.target.id == "un" && e.target.value >0) {
    document.getElementById("uno").innerHTML=" <select class='enfantselector' value='' id='Unno' name='chambreenfbaby'>   <option value='supplit'> lit supplimentaire </option> <option value='paslitSupp'>pas de lit supplimentaire </option> </select>"

  }
  else if(e.target.id == "deux" && e.target.value >0){
    document.getElementById("dos").innerHTML="<select class='enfantselector' value='' id='Unno' name='chambreenfjunior'>   <option value='50%Chambresimple'> 50% Chambre Simple </option>  </select>"

  }
  else if(e.target.id == "trois" && e.target.value >0 ){
    document.getElementById("tres").innerHTML=" <select id='trees' value='' name='chambreenfsenior'>   <option value='ajoute chambre simple'> Ajout chambre simple</option> <option value='70%Chambresimple' >ajout 70% chamre simple + lit  </option> </select>"

  }

  else if(e.target.id == "un" && e.target.value == 0) {
    document.getElementById("uno").innerHTML=""

  }
  else if(e.target.id == "deux" && e.target.value == 0){
    document.getElementById("dos").innerHTML=""

  }
  else if(e.target.id == "trois" && e.target.value == 0 ){
    document.getElementById("tres").innerHTML=""

  }


})



  


  

  
  
  
 










