> Tis is an example to display a session expired modal box that redirect to login page after clicking the OK button on the modal.

## Features

* **Bootstrap** - modal and Javascript are done to go modal"s Bootstrap v5.2.
* **PHP** - tested with php 8.0+ but should work with 7.4+ too since it's very basic.
* **JQuery** - This example works with jquery but feel free to modify the code if ever you don't want to use it. Also, Don't use the slim version since the ajax module isn't included.
* **Free** - Under the MIT license, you can use it anywhere, whatever you want.

## Requirement
PHP 8.0+
JQuery 3.6+

## Get Started (example-page.php)
At the beginning of the page, change $timeout to whatever seconds you want, but keep in mind that longer the number, the higher the risk of being hack. Normally we don't go over 1200 seconds (20minutes). This value is set per page loaded.
```php
    //-- 10 seconds session/cookie lifetime (for test only)
    $timeout = 10; 
    ini_set( "session.gc_lifetime", $timeout ); 
    ini_set( "session.gc_maxlifetime", $timeout ); 
    ini_set( "session.cookie_lifetime", $timeout );
    session_start();
    
    $_SESSION['name'] = "this is a test value";
    setcookie( "LastVisitedSection", $_SESSION['name'], time() + $timeout, "/" );
    
```

That's it - Enjoy!

## License
is under the MIT license, you can use it anywhere, whatever you want.

