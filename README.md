# Role management

This project implements a basic RESTful API using the Laravel framework. The API allows users to perform CRUD operations (Create, Read, Update, Delete) on a resource called "products". Each product has attributes including ID, Name, Description, Price, and Quantity.

## Requirements
- Laravel 5.8 or above
- PHP 8.x or above

## Features
- Implement CRUD operations for the "products" resource.
- Validate input data for each operation.
- Write tests for the API endpoints using PHPUnit or any other testing framework.
- User Authentication and Authorization: Utilize Laravel's built-in authentication system for login, registration, and password reset. Manage user roles and permissions to ensure secure access.
- User Registration Form: Create a validated HTML form to collect and store user information in the database.
- User Profile Page: Develop a user-friendly page for viewing and updating profile information with form validation.
- User Registration Form: Create a validated HTML form to collect and store user information in the database.
- Admin Panel: Implement a secure admin panel to manage user roles and permissions, allowing admins to view, edit, and delete user accounts.

## Usage
This is not a package - it's a full Laravel project that you should use as a starter boilerplate, and then add your own custom functionality.
```sh
Clone the repository with git clone
Copy .env.example file to .env and edit database credentials there
Run composer install
Run php artisan key:generate
Run php artisan migrate --seed (it has some seeded data)
Run php artisan serve.
Run php artisan test (it will perform UnitTest for APIs)
That is it: launch the main URL and login with default credentials email - admin@example.com and Password - Vijay@123

![image](https://github.com/Vijaypare7/user-management/assets/46006347/a7bc1161-b287-43dc-8f41-0c190b423828)


```

## API Endpoints
- GET /api/products: Retrieve a list of all products.
- GET /api/products/{id}: Retrieve a specific product by ID.
- POST /api/products: Create a new product.
- PUT /api/products/{id}: Update an existing product by ID.
- DELETE /api/products/{id}: Delete a product by ID.


## License

MIT

****
