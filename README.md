
<h1 align="center">
    <img alt="Jonathan's" src="https://i.pinimg.com/originals/52/1a/fa/521afaada5d1c270249703e2420fbbb3.png" />
    <br>
    Real-state API Rest - Laravel PHP
</h1>

<p align="center">
  <img alt="GitHub top language" src="https://img.shields.io/github/languages/top/JonathansMoon/importxml">

  <img alt="GitHub language count" src="https://img.shields.io/github/languages/count/JonathansMoon/importxml">

  <img alt="Repository size" src="https://img.shields.io/github/repo-size/JonathansMoon/importxml">
  <a href="https://github.com/JonathansMoon/importxml/commits/master">
    <img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/JonathansMoon/importxml">
  </a>

  <a href="https://github.com/JonathansMoon/importxml/issues">
    <img alt="Repository issues" src="https://img.shields.io/github/issues/JonathansMoon/importxml.svg">
  </a>

<p align="center">
  <a href="#Moon-technologies">Technologies</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#information_source-how-to-use">How To Use</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#memo-license">License</a>
</p>

## :computer: Technologies

This project was developed at the [Jonathan's Moon](#) with the following technologies:

-  [Laravel](https://laravel.com/)
-  [jwt-auth](https://github.com/tymondesigns/jwt-auth)
-  [docker](https://www.docker.com/)
-  [PHPUnit](https://phpunit.de/)
-  [Bootstrap](https://getbootstrap.com/)
-  [Swagger - DarkaOnLine](https://github.com/DarkaOnLine/L5-Swagger)
-  [Swagger - Zircote](https://github.com/zircote/swagger-php)
-  [yoeunes/toastr](https://github.com/yoeunes/toastr)
-  [VS Code][vc]

## :information_source: How To Use

To clone and run this application, you'll only need [Docker](https://www.docker.com/) installed on your computer. From your command line:

```bash
# Clone this repository
$ git clone https://github.com/JonathansMoon/importxml.git

# Go into the repository
$ cd importxml

# copying the configuration example file
$ cp .env.example .env

# Run the container and wait until the process is complete
sudo docker-compose up

# Change the access permissions of the run.sh file
$ chmod +x ./run.sh

# Run the command to mount the php and nginx image on the docker
# This will automatically perform the migrations and seeds, 
# in addition to configuring and running your project via docker.
$ sudo ./run.sh

# In this application, the jobs system was used to import files, so execute the code below to run the queues.
$ docker exec -it import-app php artisan queue:work

# Execute to stop execution
$ docker-compose down
```

Examples of hosts configured by default in .env.example, but you can modify them.
app: http://localhost:8080/
Documentatio Swagger: http://localhost:8080/api/documentation


To login to the system you can use your email: "desafio@gmail.com", and password "password".

## :memo: License
This project is under the MIT license.

Made with ♥ by Jonathan Silva :wave: [Get in touch!](https://www.linkedin.com/in/jonathan-silva-gomes-53271a168/)

[vc]: https://code.visualstudio.com/
