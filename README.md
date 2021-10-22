Started This File For Dhanaraj At 09/10/2021
1)First Run Composer install And Update
2)Passport install
    1.composer require laravel/passport
    2.php artisan migrate
    3.php artisan passport:install
    3)To Run Migration Command For Admin Table Ralated   
        php artisan migrate --path=/database/migrations/admin_rel_tables_2021
    4)To Run Seeder Command For Admin Ralated Parent Tables 
        php artisan db:seed --class=GenderSeeder
        php artisan db:seed --class=BloodGroupSeeder
        php artisan db:seed --class=AddressTypeSeeder
    5)php artisan migrate --path=/database/migrations/person_rel_tables_2021


create Seeder File Command For
    php artisan make:seeder seedername
seeder Table For
1)Gender
2)BloodGroup
3)Salutation
4)Status Category
5)address Type
6)IdentityDocument Types
7)Language Status
8)Language
9)Person Current Status
10)personLife Status
11)person Depone Status

