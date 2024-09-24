# GymStore Project

This project is a web application for managing an online store for gym equipment developed with Laravel.

## Prerequisites

- PHP 8.1 or higher
- Composer
- MySQL 8.0 or higher
- Node.js and npm

## Setup

1. Clone the repository:
   ```
   git clone https://github.com/jmonto98/gymstore.git
   cd gymstore
   ```

2. Install PHP dependencies:
   ```
   composer install
   ```

3. Install JavaScript dependencies:
   ```
   npm install
   ```

4. Copy the environment configuration file:
   ```
   cp .env.example .env
   ```

5. Generate the application key:
   ```
   php artisan key:generate
   ```

6. Configure the database in the `.env` file:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=gymstoredb
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

7. Create the `gymstoredb` database in MySQL:
   ```
   mysql -u root -p
   CREATE DATABASE gymstoredb;
   EXIT;
   ```

8. Run migrations:
   ```
   php artisan migrate
   ```

9. To populate the database with initial data, connect to MySQL and run the script:
   ```
   mysql -u your_username -p gymstoredb 
   source scripts/populate_models.sql
   ```

## Running the Application

1. Start the Laravel development server:
   ```
   php artisan serve
   ```

2. Open a web browser and visit `http://localhost:8000` to access the application.


## License

This project is licensed under the MIT License - see the LICENSE.md file
