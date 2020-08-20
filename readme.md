<h1>Set up instructions</h1>

<ol>
    <li> Clone the project to your machine</li>
    <li> Open Terminal and navigate to the root folder of the project</li>
    <li> Run <b> "composer install" </b> <i> (this requires composer to be installed in your Machine)</i></li>
    <li> Create a database (MySql DB recommended)</li>
    <li> Open the project in your favorite IDE then locate .env file, open it</li>
    <li> change DB_DATABASE value to your database name (DB you create on step 4)</li>
    <li> fill DB_USERNAME and DB_PASSWORD with your Database login credentials</li>
    <li> Go back to your Terminal then run "php artisan migrate", inside the root dir of the project</li>
    <li> After "Migrating everything successfully" run "php artisan serve"</li>
    <li> The project should be accessible through the browser, open your favorite browser and type http://127.0.0.1:8000 (port might be different on you machine) but the previous command should return the correct url and available port </li>
    <li> When you access the application for the first time you'll land on the login page</li>
    <li> Right below the login form there's a link to register a new account</li>
</ol>
