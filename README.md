# Stripe Charge APP using Laravel 10 and Laravel Cashier

Simple Shopping application with generated products to display on Home page. Ordered the Product using single checkout page after Authentication and payment made using Stripe payment gatway.

### Steps:

### Used following modules in Laravel:

1. Laravel UI Bootstrap.
2. Laravel default Authentication.
3. Migrations for Product and Users.
4. Product seeder.
5. Laravel Cashier Integration with 'Stripe' payment.

### Configuration Steps:

1. Clone the project

    git clone REPO_URL PROJECT_NAME

2. Go the Project URL

3. Install all the packages using composer

    composer install

4. Install Node packages using NPM

    npm install

5. Copy the example .env-example file to .env file and update the database credentials.

6. Create a new empty database and Stripe test account with developer mode.

7. In Stripe, generate the corresponding keys and update in .env file as below (You can specify CURRENCY as per your need)

    STRIPE_KEY=publishable-key

    STRIPE_SECRET=secret-key

    CASHIER_CURRENCY=usd

8. Generate a new Laravel application key

    php artisan key:generate

9. Run the database migrations using below

    php artisan migrate

10. Run the database seeder for dummy products and user

    php artisan db:seed

11. After running the above you can get the dummy user credentials ramfsp@gmail.com / test1234

12. Start the local development server

    php artisan serve

13. Shop will be accessed by browser url: http://127.0.0.1:8000

14. You can able to access the checkout page after Logged in or Register yourself.
