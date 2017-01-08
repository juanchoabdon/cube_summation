
Cube Summation
------------------------
Aplicación desarrollada en laravel, renderiza una vista que es controlada por angularjs

![App](https://s23.postimg.org/z6qwstikb/Screen_Shot_2017_01_07_at_8_22_02_PM.png)


Capas de la aplicación
=======

**Capa cliente:**
La capa del cliente es ejecutada en el navegador web y desarrollada en angularjs , su función es capturar datos desde el cliente, enviarlos al  backend y recibir respuesta en un json.

 **Logica de negocio:**
 Esta capa se encarga de procesar la información que llega mediante peticiones del cliente y dar respuesta al mismo, consiste en las siguientes clases:

 - **Cube.php:** Model que contiente los metodos que ejecutan las operaciones que solucionan el problema
 
 - **CubeCtrl.php:** Es el controlador que se encarga de procesar las peticiones del usuario, requiriendo al model **Cube.php** para realizar operaciones y retornar los datos obtenidos mediante json.
