Datatable Sandbox for Symfony 3
===============================

> Just a sandbox for the [Datatable Bundle](https://github.com/waldo2188/DatatableBundle)

> If you need to try with symfony 2, [check ths branch](https://github.com/waldo2188/datatable-sandbox/tree/symfony2) 

This sandbox comes with a SqLite database. So no need to setup a MySql database. It come with several data to populate the database.


## How to install ?

```bash
git clone git@github.com:waldo2188/datatable-sandbox.git
cd datatable-sandbox
composer install
php bin/console doctrine:database:create
php bin/console doctrine:schema:create 
php bin/console doctrine:fixtures:load --append
```
