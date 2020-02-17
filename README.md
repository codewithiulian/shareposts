# SharePosts

## Installation

### 1. Add the following file `config.php` to `app\config\`:
#### The .gitignore already excludes the config file.
```php
<?php
  // Database parameters.
  define('DB_HOST', 'YOUR_HOST');
  define('DB_USER', 'YOUR_ROOT');
  define('DB_PASS', 'YOUR_DB_PASSWORD');
  define('DB_NAME', 'YOUR_DB_NAME');

  // App Root.
  define('APPROOT', dirname(dirname(__FILE__)));

  // URL Root.
  define('URLROOT', 'YOUR_URL_ROOT');

  // Site name.
  define('SITENAME', 'SITE_NAME');

  // App version.
  define('APPVERSION', '1.0.0');
?> 
```

### 2. Install [XAMPP](https://www.apachefriends.org/index.html) Control Panel.
#### I use XAMPP for this project, alternatively [WAMPSERVER](http://www.wampserver.com/en/) can be used (or any other server manager).
![github-large](https://github.com/iulianoana/Assets/blob/master/xampp-img.png "XAMPP")

### 3. Start Apache and MySQL servers from XAMPP Controll Panel.
#### Make sure to install them first beforehand (start the app in admin mode).

### 4. Create a database instance.
#### You might want to refer to the following schema I used for this project.
![github-large](https://github.com/iulianoana/Assets/blob/master/dbexample.png "phpMyAdmin")


