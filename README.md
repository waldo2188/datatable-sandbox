Datatable Sandbox
=================

> Just a sandbix for the [Datatable Bundle](https://github.com/waldo2188/DatatableBundle)

This sandbox comes with a SqLite database. So no need to setup a MySql database. It come with several data to populate the database.


## How to install ?

```bash
git clone git@github.com:waldo2188/datatable-sandbox.git
cd datatable-sandbox
composer install
php app/console doctrine:database:create
php app/console doctrine:schema:create 
php app/console doctrine:fixtures:load
php app/console doctrine:fixtures:load
```
