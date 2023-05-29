<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recuperar los datos del formulario
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];
  
  // Configurar los detalles del correo
  $destinatario = "fjse0505@gmailcom";
  $asunto = "Nuevo mensaje del formulario de contacto";
  $cuerpoMensaje = "Nombre: $nombre\n";
  $cuerpoMensaje .= "Correo: $correo\n";
  $cuerpoMensaje .= "Mensaje: $mensaje\n";
  
  // Enviar el correo
  $resultado = mail($destinatario, $asunto, $cuerpoMensaje);
  
  // Verificar si el correo se envió correctamente
  if ($resultado) {
    echo "El correo se envió correctamente.";
  } else {
    echo "Hubo un error al enviar el correo.";
  }
}
?>
