$(document).ready(function(){
 const $seleccionArchivos = document.querySelector("#seleccionArchivos1"),
 $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion1");

// Escuchar cuando cambie
 $seleccionArchivos.addEventListener("change", () => {
  // Los archivos seleccionados, pueden ser muchos o uno
  const archivos = $seleccionArchivos.files;
  // Si no hay archivos salimos de la función y quitamos la imagen
  //if (!archivos || !archivos.length) {
  	if (!archivos) {
    $imagenPrevisualizacion.src = "";
    return;
  }
  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
  const primerArchivo = archivos[0];
  // Lo convertimos a un objeto de tipo objectURL
  const objectURL = URL.createObjectURL(primerArchivo);
  // Y a la fuente de la imagen le ponemos el objectURL
  $imagenPrevisualizacion.src = objectURL;
});
 });

$(document).ready(function(){
 const $seleccionArchivos = document.querySelector("#seleccionArchivos2"),
 $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion2");

// Escuchar cuando cambie
 $seleccionArchivos.addEventListener("change", () => {
  // Los archivos seleccionados, pueden ser muchos o uno
  const archivos = $seleccionArchivos.files;
  // Si no hay archivos salimos de la función y quitamos la imagen
  //if (!archivos || !archivos.length) {
    if (!archivos) {
    $imagenPrevisualizacion.src = "";
    return;
  }
  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
  const primerArchivo = archivos[0];
  // Lo convertimos a un objeto de tipo objectURL
  const objectURL = URL.createObjectURL(primerArchivo);
  // Y a la fuente de la imagen le ponemos el objectURL
  $imagenPrevisualizacion.src = objectURL;
});
 });


$(document).ready(function(){
 const $seleccionArchivos = document.querySelector("#seleccionArchivos3"),
 $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion3");

// Escuchar cuando cambie
 $seleccionArchivos.addEventListener("change", () => {
  // Los archivos seleccionados, pueden ser muchos o uno
  const archivos = $seleccionArchivos.files;
  // Si no hay archivos salimos de la función y quitamos la imagen
  //if (!archivos || !archivos.length) {
    if (!archivos) {
    $imagenPrevisualizacion.src = "";
    return;
  }
  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
  const primerArchivo = archivos[0];
  // Lo convertimos a un objeto de tipo objectURL
  const objectURL = URL.createObjectURL(primerArchivo);
  // Y a la fuente de la imagen le ponemos el objectURL
  $imagenPrevisualizacion.src = objectURL;
});
 });



