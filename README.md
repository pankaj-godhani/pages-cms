###Steps to setup project:
- clone project
- duplicate .env.example file to .env file.
- create `cms_pages` database.
- after that run below commands
    - `php artisan migrate`
    - `php artisan db:seed`
    - `yarn && yarn run dev` (OR) `npm && npm run dev`
- serve project using below command
    - `php artisan serve`
- open project in browser and do log-in with below credentials.
    - email: admin@admin.com
    - password: password
    
###For test cases:
- run below commands to run test cases.
    - `php artisan test --filter=CreatePageTest`

###Functionality notes:
- one module is added on a main page to add a page on parent level.
- when click on nested list, a page with content & title will open, and there, you can also add its related child page.
