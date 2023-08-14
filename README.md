# CodeIgniter 4 con Jaspersoft Rest Client

![Proyecto](./assets/images/1.png)

## Qué es CodeIgniter?

CodeIgniter es un framework de desarrollo de aplicaciones web de código abierto y basado en PHP. Fue creado por EllisLab y ahora es mantenido por la comunidad de desarrolladores. CodeIgniter proporciona una estructura ligera y sencilla para desarrollar aplicaciones web rápidas y eficientes, siguiendo el patrón de diseño MVC [official site](https://codeigniter.com).

## Qué es Jaspersoft Rest Client?

Es una librería que se utilizar para realizar peticiones e interactuar con los reportes alojados en Jasper Reports Server a través de la API REST en PHP nativo. Esto permite incrustar más fácilmente los datos en el servidor de reportes, o realizar tareas administrativas en el servidor utilizando PHP.

## Requerimientos para éste ejemplo

- SO Fedora 38 (Puede usarse otro SO, sin embargo se utilizó una distro GNU/Linux)
- XAMPP 8.2.4
- PHP 8.2.4
- Codeigniter 4
- Jaspersoft Rest Client 2.0
- Composer

## Installación de Jaspersoft Rest Client en Codeigniter 3

### Configuración de Jasper Server
** Importante! Se asume que se cuenta con Jasper Server configurado y con al menos un reporte, ya sea con conexión a base de datos o no.

### Descargar Codeigniter 4

Crear un nuevo proyecto con composer

```
composer create-project codeigniter4/appstarter civ4-jasper
```


O bien ir al [official site](https://codeigniter.com) y descargar la versión 3, éste ejemplo es para la versión 3.


### Configurar el archivo .env

En el archivo .env se configuran los accesos para jasperreports añadir lo siguiente y adaptarlo al proyecto que se use

```
JASPER_SERVER_USERNAME=jasperadmin
JASPER_SERVER_PASSWORD=jasperadmin
JASPER_SERVER_URL=http://localhost:8080/jasperserver
```


### Descomprimir el archivo en htdocs de xampp

Entrar al proyecto desde la terminal y descargar el paquete:


```
composer require jaspersoft/rest-client
```


### Configurar autoload

Añadir que se autocarguen los siguiente elementos:

```
[...]

public $psr4 = [
    APP_NAMESPACE   => APPPATH,
	'App'           => APPPATH,
    'Config'        => APPPATH.'Config',
	'Helper'        => APPPATH.'Helper',
];

[...]
```

### Añadir archivo helper llamado reports

Crear en dentro del directorio helpers  el archivo reports_helper.php y añadir lo siguiente
** Aquí se configura la jasper server, por lo que si las contraseñas o dirección url, no corresponden a las predeterminadas, realizar el cambio

```
<?php
use Jaspersoft\Client\Client; 

function reporte($idRegistro, $name, $params, $type = 'pdf')
{
	//$ci = &get_instance();
    try {
		$client = new Client('http://localhost:8080/jasperserver', 'jasperadmin', 'jasperadmin');
        $report = $client->reportService()->runReport('/reports/'.$name, $type, null, null, $params);
        $nombre_temporal = str_replace('/', '_', $name).'_'.$idRegistro.'.'.$type;
		$config['upload_path'] 		= '../files/reports/';
		/* $config['max_size']     	= '1000000';
		$config['max_width'] 		= '10240000000';
		$config['max_height'] 		= '76889';
		$config['encrypt_name'] 	= true;
		$config['allowed_types'] 	= 'jpg|jpeg|png|gif|pdf';
		$config['file_name'] 		= $nombre_temporal; */
		if (! write_file($config['upload_path'].$nombre_temporal, $report)) {
			return 'Unable to write the file';
		} else {
			return $config['upload_path'].$nombre_temporal;
		}
    } catch (Throwable $error) {
        return 'error '.$error;
    }
}

```

## Adicional el controlador y la vista ya están en el repositorio para su uso

## Crédito
Éste código es mi autoría y utilizando los siguientes enlaces como ayuda:

- https://stackoverflow.com/questions/39633886/how-to-integrate-jasper-reports-in-codeigniter-php
- https://blog.e-zest.com/integration-of-jaspersoft-report-php-codeigniter-web-framework
- https://forum.codeigniter.com/thread-77397.html
- https://forum.codeigniter.com/thread-1202.html

## Licencia

Y por supuesto:

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)