const button = document.querySelector('i.fa-copy');
const input = document.querySelector('#url');
const mensaje = document.querySelector('#mensaje');
button.addEventListener('click', function(){
  input.focus();
  document.execCommand('SelectAll');
  document.execCommand('copy');
  
  //Deseleccionar el texto
  //window.getSelection().removeAllRanges(); 
  /*Al quitar el focus de la caja el texto
    en automatico se deselecciona asi que esto
    no es necesario
  */
  //Quitar el focus del input
  document.getElementById("url").blur();
  mensaje.innerHTML =" ¡Texto copiado!";
  mensaje.classList.add('fade-in');
  //mensaje.style.transition = "opacity 0.3s ease";
  //setTimeout(()=>mensaje.innerHTML="",1000):
  setTimeout(function(){
    mensaje.classList.remove('fade-in');
    mensaje.classList.add('fade-ou');
  },1000);
  
  
  
})

const button2 = document.querySelector('i.fa-clipboard');
const input2 = document.querySelector('#url2');
const mensaje2 = document.querySelector('#mensaje2');
button2.addEventListener('click', function(){
  input2.focus();
  document.execCommand('SelectAll');
  document.execCommand('copy');
  
  //Deseleccionar el texto
  //window.getSelection().removeAllRanges(); 
  /*Al quitar el focus de la caja el texto
    en automatico se deselecciona asi que esto
    no es necesario
  */
  //Quitar el focus del input
  document.getElementById("url2").blur();
  mensaje2.innerHTML =" ¡Texto copiado!";
  mensaje2.classList.add('fade-in');
  //mensaje.style.transition = "opacity 0.3s ease";
  //setTimeout(()=>mensaje.innerHTML="",1000):
  setTimeout(function(){
    mensaje2.classList.remove('fade-in');
    mensaje2.classList.add('fade-ou');
  },1000);
  
  
  
})