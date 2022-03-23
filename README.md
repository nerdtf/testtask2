# IMO PHP Laravel Test

### IT Technical Requirements (they come preinstalled)
* PHP >= 7.1.3
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* Ctype PHP Extension
* JSON PHP Extension
* Composer 1.9.0 at least
* GIT client

### Project details
#### This project starts from Laravel 5.6, and it incorporates these functionalities so far:
* User login/register
* Posts CRUD (Create, Read, Update, and Delete)
* Photo upload (for Posts)
#### Photo uploads are used only for Posts

### Project setup 
* Clone this GIT repo into your local machine
* Copy `.env.example` to `.env` and change MySQL credentials to match your system
* From CMD run:
  * `composer install`
  * `php artisan key:generate`
  * `php artisan storage:link`
  * `php artisan migrate`
  * `php artisan db:seed`
  * `php artisan serve`
* Now the project's source code is available on your system ready to go, you can reach it at this address in the browser:
  * http://127.0.0.1:8000

### Your assignments
* Follow the instructions from **Project setup** section
* Register a new account on the project's address: i.e. http://127.0.0.1:8000
* Login and familiarise with the dashboard, the current features and the codebase
* Implement a Category system (with subcategories) for the Posts module both in backend and frontend code
* Once finished, reach the supervisor to hand over the files

### Good luck!


