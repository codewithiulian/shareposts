# SharePosts

## Installation

### 1. Add the following file `config.php` to `app\config\`:
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

### 2. Create a database instance.
I use phpMyAdmin for this prototype.
(https://github.com/iulianoana/Assets/blob/master/dbexample.png "phpMyAdmin")