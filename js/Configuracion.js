
function validacion(){
    let R1 = false;
    let R2 = false
    let R3 = false;
    var inputName = document.getElementById("InputNombre");
    var Name = inputName.value.trim();
    if(Name !=="" && Name!==null && Name!==undefined){
       R1 = true;
    }else{
        alert("No se introdujo nombre");
    }
    //validacion2
    var inputApe = document.getElementById("InputApellido");
    let Ape = inputApe.value.trim();
    if(Ape !=="" && Ape!==null && Ape!==undefined){
        R2 =true;
    }else{
       alert("No se introdujo apellido");
    }
    //validacion3
    var inputTele = document.getElementById("InputTelefono");
    var Tele = inputTele.value.trim();
    if(Tele !=="" && Tele!==null && Tele!==undefined){
        R3=true;
    }else{
      alert("No se introdujo Telefono");
    }
    //tipo de contacto
    var inputTipo = document.getElementById("ContactoType");
    var Tipo = inputTipo.value;

    if(R1 ==true && R2 ==true && R3 == true){
     let entrada = document.getElementById("containercard");
     agregar(Name,Ape,Tele,Tipo);

    }else {}

     
}

function agregar(Name,Ape,Tele,Tipo){
    var PriContainer = document.getElementById("rowCard");
    var input = document.createElement("input");
    var mainCol = document.createElement("div");
    mainCol.setAttribute("class","col-4 py-3");
   //card
   var prinCard = document.createElement("div");
   prinCard.setAttribute("class","card text-center");
   prinCard.setAttribute("style","width: 18rem;");
   //card body
   var cardBody = document.createElement("div");
   cardBody.setAttribute("class","card-body");
   //h5
   var h5 = document.createElement("h5");
   h5.setAttribute("class","card-title");
   h5.setAttribute("id","Nombre");
   h5.innerText = Name+" "+Ape;
   //p
   var p = document.createElement("p");
   p.setAttribute("class","card-text");
   p.innerText = Tipo;
   var p2 = document.createElement("p");
   p2.setAttribute("class","card-text");
   p2.innerText = Tele;
   //boton
   var button = document.createElement("button");
   button.setAttribute("type","button");
   button.setAttribute("class","btn btn-primary mr-1");
   button.innerText = "Seleccionar";
   button.addEventListener("click",function(){

    var edinom = document.getElementById("edinombre");
    if(edinom.value !=="" && edinom.value!==null && edinom.value!==undefined){
       h5.innerText = edinom.value;
    }else{}
    //validacion2
    var ediape = document.getElementById("ediapellido");
    if(ediape.value !=="" && ediape.value!==null && ediape.value!==undefined){
        h5.innerText += " "+ediape.value;
    }else{ }
    //validacion3
    var editele = document.getElementById("editelefono");
    if(editele.value !=="" && editele.value!==null && editele.value!==undefined){
     p2.innerText = editele.value;
    }else{ }
    //tipo de contacto
    var editipo = document.getElementById("ContactoTipo");
    p.innerText = editipo.value;
    

 

   })
   

   var button2 = document.createElement("button");
   button2.setAttribute("type","button");
   button2.setAttribute("class","btn btn-danger ml-1");
   button2.innerText = "Eliminar";
   button2.addEventListener("click",function(){
       PriContainer.removeChild(mainCol);
       
   })
    //childrens
    PriContainer.appendChild(mainCol);
    mainCol.appendChild(prinCard);
    prinCard.appendChild(cardBody);
    cardBody.appendChild(h5);
    cardBody.appendChild(p);
    cardBody.appendChild(p2);
    cardBody.appendChild(button);
    cardBody.appendChild(button2);

}

function limpiar(){
    let edinombre = document.getElementById("edinombre");
    edinombre.value = "";
    let ediapellido = document.getElementById("ediapellido");
    ediapellido.value = "";
    let editelefono = document.getElementById("editelefono");
    editelefono.value = "";
    let tipo_contacto = document.getElementById("ContactoTipo");
    tipo_contacto.value = "";
    edinombre.focus();
}

