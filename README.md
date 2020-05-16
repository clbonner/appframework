A simplistic MVC app framework for small applications.

Copyright (C) 2020 clb-dev

Routes
------

To create a route duplicate the public/index.php file and rename it to your new
route name, for example public/login.php.

Also, put your css and javascript in the public/css and public/js folders.

Controllers
-----------

Create your controllers in the controllers folder with the same name as your
routes. For example controllers/login.php.

Views
-----

These are the html files to be displayed after the controller has done it's
work, again views/login.php. These only need to contain the <body> part of the
html. The header and footer files take care of the rest.
