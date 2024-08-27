
## INSTALLATION GUIDE

<ol>
    <li>Clone the repository</li>
    <li>Now make a copy of the .env.example file</li>
    <li>Rename it to .env</li>
    <li>Add values to necessary varaibles in the .env file, like DB connection and Google SSO tokens</li>
    <li>Open unix based terminal (Like gitbash)</li>
    <li>Run "composer install"</li>
    <li>Run "php artisan migrate" and say yes to creating a new database. This will create a database and migrate the tables needed</li>
    <li>Run "npm install"</li>
</ol>


## RUN THE APPLICATION LOCALLY

<ol>
    <li>Open unix based terminal (Like gitbash) from the application root</li>
    <li>Run "npm run dev"</li>
    <li>Open new terminal from the application root</li>
    <li>Run "php artisan serve" and open the url in a browser</li>
    <li>You should now be prompted to login with google SSO and then redirected to the application</li>
</ol>





