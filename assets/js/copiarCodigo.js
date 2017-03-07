function downloadInnerHtml(filename, elId, mimeType) {
  var elHtml = document.getElementById(elId).innerHTML;
  var link = document.createElement('a');
  mimeType = mimeType || 'text/plain';

  // Crea un campo de texto "oculto"
  var aux = document.createElement("input");

  // Asigna el contenido del elemento especificado al valor del campo
  aux.setAttribute("value", document.getElementById(elId).innerHTML);

  // Añade el campo a la página
  document.body.appendChild(aux);

  // Selecciona el contenido del campo
  aux.select();

  // Copia el texto seleccionado
  document.execCommand("copy");

  // Elimina el campo de la página
  document.body.removeChild(aux);

    // link.setAttribute('download', filename);
    // link.setAttribute('href', 'data:' + mimeType + ';charset=utf-8,' + encodeURIComponent(elHtml));
    // link.click();

    // alert(elHtml);
}

var fileName = 'tags.html'; // You can use the .txt extension if you want

$('#copiarCodigo').click(function() {
    downloadInnerHtml(fileName, 'main', 'text/html');
});
