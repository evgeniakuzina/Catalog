Catalog with API routes

Run:
    "php artisan migrate:refresh --seed" 
for migration start and initial database seed

Console command for user registration:
    "php artisan user:create"
Composer package "rap2hpoutre/create-user-command"

API URLs:
1. '/api/categories' to list all categories.
2. '/api/categories/{id}' where id is id number of category to list all goods in a category.

Web URLs:
1. 'categories/create' - create new category.
2. 'categories/{id}/edit' - edit category.
3. 'goods/create' - create new good.
4. 'goods/{id}/edit' - edit good.

