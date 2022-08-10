Steps to setup project:
- clone project
- duplicate .env.example file to .env file.
- create `cms_pages` database.
- run below command
    - php artisan migrate
    - php artisan db:seed
    - yarn && yarn run dev (OR) npm && npm run dev
- serve project using below command
    - php artisan serve
- open project in browser and do login with below credentials.
    - email: admin@admin.com
    - password: password

Functionality notes:
- module is added on main page to add parent page.
- when click on nested list, a page with content & title will open, and there you can also add, its related child page.
