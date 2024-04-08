# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> The end of life date for PHP 7.4 was November 28, 2022.
> The end of life date for PHP 8.0 was November 26, 2023.
> If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> The end of life date for PHP 8.1 will be November 25, 2024.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library



**steps to be Fallow:**

**1. Update Composer**

```
Composer update

```

**2. Update Environment Configuration
Go to the .env file and change the CI_ENVIRONMENT variable to development.**

```
CI_ENVIRONMENT = development
```

**3. Set Database Credentials
Go to app\Config\Database.php and add your database credentials:**
```
public array $default = [
        'DSN'          => '',
        'hostname'     => 'localhost',
        'username'     => 'root',
        'password'     => 'Yourpassword',
        'database'     => 'Your_DatabaseName',
        'DBDriver'     => 'MySQLi',
        'DBPrefix'     => '',
        'pConnect'     => false,
        'DBDebug'      => true,
        'charset'      => 'utf8',
        'DBCollat'     => 'utf8_general_ci',
        'swapPre'      => '',
        'encrypt'      => false,
        'compress'     => false,
        'strictOn'     => false,
        'failover'     => [],
        'port'         => 3306,
        'numberNative' => false,
    ];

```
**4. Migrate the Database Tables
Run the following command to migrate the database tables:**
```
php spark migrate

```
**5. Run the Application
To start the application, run the following command:**
```
php spark serve

```
*This will start the development server, and you can access your application at http://localhost:8080*


**Application Features:**
Developed an admin interface for managing user data, including:
1.Adding new users
2.Updating existing user data
3.Fetching user data
4.Deleting user records
5.Implemented signup and signin pages for user authentication.
6.Provided functionality to download/generate user data in PDF format.

Below are screenshots:
**Login Screen**
![image](https://github.com/krishna9901/Codeigneter4_Crudadmin_template-/assets/54264561/ed215c7a-7e1c-4d2c-9a58-41398c8c4488)

**Register Screen**
![image](https://github.com/krishna9901/Codeigneter4_Crudadmin_template-/assets/54264561/e6bea85f-40f2-4c8c-8c12-fd8af6748869)


**Admin Home Page**

![image](https://github.com/krishna9901/Codeigneter4_Crudadmin_template-/assets/54264561/3e0bb79c-722d-4743-acc9-d01e95d7ce41)


**User Form**

![image](https://github.com/krishna9901/Codeigneter4_Crudadmin_template-/assets/54264561/05ad3ffe-ec21-4fba-a73d-06ee37c249ea)


**Genaerating Report**

![image](https://github.com/krishna9901/Codeigneter4_Crudadmin_template-/assets/54264561/47e84b3b-797b-42fd-a265-23c74e3eb0b1)

![image](https://github.com/krishna9901/Codeigneter4_Crudadmin_template-/assets/54264561/e488637a-fb17-471a-b95c-79137455be5d)














