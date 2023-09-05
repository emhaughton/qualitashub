# Qualitashub

Prueba técnica
## How to

1- Ejecutar ```composer install``` para instalar las dependencias.

2- Se debe configurar en filesystems.php en ```s3``` un bucket a amazon. Las pruebas se realizaron con la configuración de ```public```.

3- Se implementó ```GetContentDocumentController``` para controlar las respuesta del endpoint, ```GetContentDocumentServices``` para la lógica de negocio y ```DocumentVo``` para validar la existencias de la carpeta y el fichero en el servidor.
El resultado en caso exitoso se muestra en ```document.blade.php``` y en caso de existir error en ```message_error```.

4- URL de ejemplo ```http://qualitashub.test/prueba/documentos/1001/document.pdf```


## Feedback
De presentarse algún problema con la instalación escribir a ernesto.marcelino@outlook.com

## A mejorar
1- El código css que está en ```message_error``` debe de estar en un fichero destinado para estilos.
