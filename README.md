# Aplicación para importar archivos excel(.xlsx) a una base de datos
Esta aplicación permite importar archivos de tipo .xlsx a una base de datos (MySQL) y esta enfocada específicamente en importar algunos catálogos del SAT, ya que algunos catálogos cuentan con miles registros e insertarlos a través de consultas sql no es lo más optimo. 
Los catálogos que se pueden importar son los siguientes:
* Estados
* Localidades
* Municipios
* Colonias
* Códigos postales
* Métodos de pagos
* Formas de pago
* Regímenes fiscales
* Uso CFDI
* Claves de productos y servicios
* Claves de unidad

Si se desean importar otros catálogos se tiene que crear su respectiva migración, controlador, modelo así como su archivo import.

En los archivos imports, que se encuentran en la ubicación *app/Imports*, es donde se realiza toda la funcionalidad para realizar el proceso de importación, para esto se utilizó la librería **Laravel Excel**. Para cada catálogo se creo una clase de importación y se indicó con que modelo tiene que trabajar. De esta forma se tiene una conexión a la base de base de datos y por último, en su respectivo controlador se llama a su clase relacionada para importar para que en la función store se guarden los registros. 

**Es importante aclarar que las columnas del archivo excel debe coincidir con los campos o columnas de la tabla que se encuentre en la base de datos.**

A continuación, se señalan las interfaces que se utilizaron de la librería **Laravel Excel**:
* ToModel: Importa cada fila a un modelo Eloquent.
* WithHeadingRow: Permite importar los datos con los nombres que vienen en la cabecera del excel.
* WithBatchInserts: Cuando se trabaja con archivos bastantes grandes se recomienda utilizar WithBatchInserts ya que nos permite reducir drásticamente el número de importaciones, es decir, en vez que realice la importación una sola vez, hará la importación con la cantidad de filas que se definan.
* WithChunkReading: Ayuda a manejar los archivos bastantes grandes y se recomienda utilizar junto a WithBatchInserts.
* WithValidation: Permite indicar las reglas que debe de cumplir cada fila.
* WithCalculatedFormulas: Calcula las fórmulas al importar. Por defecto, esto está desactivado.
* ShouldQueue: Al usar *WithChunkReading* también se puede optar por ejecutar cada fragmento en un trabajo de cola. 
* SkipsEmptyRows: Salta filas vacías. Permite omitir las filas vacías, por ejemplo, al usar la regla *required* de validación.

Para ver la documentación de Laravel excel: [https://docs.laravel-excel.com/3.1/getting-started/](https://docs.laravel-excel.com/3.1/getting-started/)

Por último, se creo una sección llamada "Seleccionar datos". Esta vista funciona correctamente una vez que se tiene cargado el catálogo de estados, municipios, localidades, códigos postales y colonias. Está sección se creo con la finalidad de poder entender y aprender utilizar peticiones HTTP asíncronas de JavaScript con Fetch. 

## Vistas de la app
### Vista home
Esta es la vista que se muestra al entrar a la aplicación. Del lado izquierdo se tienen las seccciones para importar los catálogos así como cada sección cuenta con una tabla para ver los registros una vez que se han importado.

![Vista de home de la app](https://i.ibb.co/VmDWPyr/home-import-filesexcel.jpg "Vista de home de la app")

### Vista de la sección *Estado*
A modo de ejemplo se muestra la sección de "Estados", pero el diseño esta planteado igual para todas las demás secciones, es decir, en la página principal de cada sección se tiene una tabla donde se muestran los registros una vez que se han importado. Al momento de dar clic en el botón "Importar nuevos datos" nos redirecciona a otra vista en donde se puede cargar el archivo excel. El botón "Importar" se encuentra desactivado, se activa hasta que el archivo se haya cargado.

![Sección estados - Vista index](https://i.ibb.co/1m9hwrf/estados-import-filesexcel.jpg "Sección estados - Vista index")

![Sección estados - Vista importar registros](https://i.ibb.co/9ySYf8R/estados-cargar-Archivo-import-filesexcel.jpg "Sección estados - Vista importar registros")

### Vista de la sección *Seleccionar datos*
Como se mencionó anteriormente se creo una sección llamada "Seleccionar datos", con la finalidad de poder entender y aprender el funcionamiento de las peticiones HTTP asíncronas con Fetch. Desde el controlador se cargan todos los registros de estados y se envían a la vista, especifícamente al select de estados. Una vez que se selecciona un estado se activan los selects de municipios y localidades, esto de acuerdo al estado seleccionado. Luego, en el input de código postal se ingresa un registro y al momento de que sean los 5 dígitos se quita el foco del input, se hace la búsqueda y en el select de colonias, muestra toda las colonias que tengan ese código postal.

![Sección seleccionar datos](https://i.ibb.co/FsFcGrG/seleccionar-Datos-import-filesexcel.jpg "Sección seleccionar datos")

![Sección seleccionar datos - registros cargados](https://i.ibb.co/Wn2HFhv/seleccionar-Datos-catálogos-import-filesexcel.jpg "Sección seleccionar datos - registros cargados")

## ¿Como usar?
- Clona el repositorio con **git clone**
- Copia el archivo .env.example y renombralo a .env. Pon las credenciales de su bases de datos.
  - Si en dado caso no cuenta con una, debe crear una nueva base de datos.
- Ejecuta el comando **composer install**
- Ejecuta el comando **php artisan key:generate**
- Ejecuta el comando **php artisan migrate:fresh --seed**
- Listo para usar.

<hr>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
