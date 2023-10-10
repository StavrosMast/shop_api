<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Shop API Project

The shop Api project has been developed with the use of Laravel.

Packages installed:

-   Jetstream for User Registration and Login
-   Livewire for rendering components at the fron-end

Instructions about the project

-   Download the contents of the project into .zip format and extract the contents
-   Move the folder with the contents to your desired directory
-   Open the terminal window and navigate to the project's directory
-   Inside the project directory run `composer install`
-   You can open the `.env` file inside the directory and change only the `DATABASE_NAME` if you wish otherwise leave the `.env` file with its default values
-   Then you need to run `php artisan migrate` aat the terminal window and if there is no database created press yes to create a new one.(You can see the database with the use of tools like TablePlus depending on what you are comfortable using)
-   Run `npm install` and `npm run build`
-   Run `php artisan serve` to start the local server application.

Instructions to navigate throught the application

-   On the first page is the welcome page where the Shop List is located
-   There is the possibility for the user to login and register we can find these two buttons on the top corner
-   Register and login your desired user via the jetsream views that render when you press the above buttons.

Because we are testing the api we have registered the routes at the api.php and didn't create views. All the tests are located inside the `tests/Feature` folder.

Keep in mind that all the tests create the data and import them inside the db with data that we pass inside a `$data` array inside each test. For testing purposes we can do that
and then fetch the data we want to add dynamicaly.

-   First we want to run `php artisan test --filter CategoryTest` at the terminal in order to create the shop category that the user wants.To add change the value of `name` inside the `$data` array with your desired one.
-   Then we can run `php artisan test --filter ShopTest` at the terminal to create a shop and change the `$data` array values accordingly.
-   Lastly we need to run `php artisan test --filter OfferTest` at the terminal to create an offer.

Once done with the above steps if all steps where completed we should see the registered user in both `users` table and `shop_owners` table. We can manipulate this functionality depending on the project and the requirements.

Also there should be data inside the `shop_categories` , `shops` and `offers` tables which means our api endpoints work. Inside the `OfferController.php` which is located inside `app/Http/Controllers` directory,
we have added the notification functionality so when an offer is created all the users are getting notified.

Lastly you can logout from the application and at the welcome page now there should be a list with the shops you have added when running the test. We can also add this list inside the dashboard or in a different tab
but for this project we want the guest users to see this list.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**
-   **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
-   **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
