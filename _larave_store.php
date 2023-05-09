products (id, name, slug uniq, desc,price)
Categories (id, name, slug, parent_id)

id parent_id  name 
1  null       clothes
2  1          child


orders (id, number, user_id,  status)
orders_items (order_id, product_id, qty )

===========================================
php artisan make:migration create_stores_table
store ==> table name / it's between create and table
table name shoud be plural

php artisan migrate:status
php artisan migrate:rollback
php artisan migrate:rollback --step=2
php artisan migrate:reset
php artisan migrate:fresh
php artisan migrate:refresh


php artisan make:model Category 
Category name is model and shoud be singular 
categories --> name table , category name model

php artisan make:model Product -m


$table->id();
$table->bigInteger('id')->unsigned()->autoIncrement()->primary();
$table->unsigneBigInteger('id')->autoIncrement()->primary();
$table->bigIncrement('id')

$table->uuid('id')

$table->string('slug')->unique();

php artisan make:migration create_categories_table

$table->foreignId('parent_id')->constrained('categories','id')
    ->nullOnDelete();     ->> when delete, make value null
    ->cascadeOnDelete();  ->> when delete it ,, delete all 
    ->restricOnDelete();  ->> prevent delete when id link other


==================

Remove Package
composer remove laravel/laravel breeze --dev

npm ==> node package manger ===> To js 