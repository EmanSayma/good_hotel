* Good Hotel
Small Web Application to sell hotels deals using laravel 

how to use the application:
- You need to have php, mysql, composer, nodejs in your machine.
- Pull the project from github to you machine.
- Run the following commands:
1- composer install.
2- npm install.
3- npm run dev.
- Create a database with name good_hotel.
- Put DB_USERNAME and DB_PASSWORD in .env file.
- To create the database tables run:
 php artisan migrate 
 - To seed some data in the database run:
 php artisan db:seed
 - To run the application using the browser run:
 php artisan serve