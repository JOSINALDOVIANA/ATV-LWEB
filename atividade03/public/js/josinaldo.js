var colection=document.getElementsByTagName('p');
for (let index = 0; index < colection.length; index++) {
  colection[index].addEventListener('click',(e)=>{
    // document.getElementById("rend").innerHTML=`<object type="text/html" id='objt' data="${'modulos/'+e.target.innerText+"/"+e.target.innerText}.html" ></object>`;
    $("#rend").load(`${'modulos/'+e.target.innerText+"/"+e.target.innerText}.html`);
    
  })
  
}

