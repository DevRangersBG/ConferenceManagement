# Conference Management Application
This is a group intern project.


## Getting Started

Follow these steps to **set up** and use the Conference Management Application:

1. Clone or download project from https://github.com/DevRangersBG/conference-management.git
   
 ![1-step](https://github.com/DevRangersBG/conference-management/assets/24313156/81dd8fe6-204d-450a-b3d1-1867596672f8)
 
2. Copy **.env.example** file and rename it as **.env**
3. Set up a **MySQL database** and configure the database connection in the **.env** file.
4. Open the console/terminal into the root directory of the project
5. Run `composer install` command
6. Run `php artisan key:generate`
7. Run the database migrations to create the required tables. Use `php artisan migrate` command
8. Make sure you’ve started your local server
- Configuring your local Laravel development environment(Homstead(Vagrant), Valet(macOS), XAMPP, Docker)
- To start Laravel Development server run `php artisan serve` command
9. Open the application in the browser
