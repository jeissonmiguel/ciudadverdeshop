// function verificar(){
// if (window.confirm("!Tenga en cuenta que saldra del Modo editar , desea continuar")) { 

 

//   }};

  function verificar(evt) {
  var txt;
  var r = confirm("!Tenga en cuenta que saldra del Modo editar , desea continuar");
  if (r == true) {
    alert("You pressed OK!");
  } else {
    evt.preventDefault();
    txt = "You pressed Cancel!";
  }};