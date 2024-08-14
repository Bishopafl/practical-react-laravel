<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Admin | React and Laravel: A Practical Guide with Docker

Laravel is a web application framework with expressive, elegant syntax. We are using it in this project to connect an application using Docker and docker-compose. Within the repo you can locate these files for your reference. 

- Laravel 8 
- React with Typescript 
- Docker
- Redux
- Exporting CSV
- Laravel Sanctum

Learn how to create an Admin App using React and Laravel. 

In Laravel we will setup: 
1. How to create Rest APIs with Laravel
2. Authenticate using Laravel Sanctum
3. Authorization using Laravel Gates
4. Login with HttpOnly Cookies
5. Laravel JSON Resources
6. Install and use Docker
7. Upload Images
8. Export CSV's

In React we will setup: 

1. Create a React project with Typescript
2. Use Docker
3. Use React Hooks
4. Use Redux
5. Create public and private routes
6. React Animations
7. Upload Images
8. Export CSV's
9. Build a chart with c3.js (part of d3.js), 

## Getting started

After cloning the project from the repository, you can start the project by running 

`docker-compose up`

Which will build the docker container and the mysql used for your application instance within your Laravel application.

To run any migrations, within the terminal, run:

`docker-compose exec backend sh`

Which will ssh into the mysql instance of our application. Allowing you to type commands such as 'php artisan migrate' or run 'php artisan make:'.

## Thanks for reviewing my documents

We would like to extend our thanks to you the reader of this file to get familiar with setting up your Laravel application using docker. More information will be added iteratively.
