## Manual
<!-- We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com). -->
Commands and instructions

### Database commands (run from container)

- **Makemigrations from container: php artisan make:migration create_listings_table**
- **Migrate from container: php artisan migrate**
- **Seed data from DatabaseSeeder.php: php artisan db:seed**
- **Rollback by using migrations: php artisan migrate:refresh**
- **Rollback by using migrations AND seed: php artisan migrate:refresh --seed**
- **Make model: php artisan make:model ModelName**
- **Make model: php artisan make:factory FactoryName**
- **Make controller: php artisan make:controller ControllerName**
- **Copy to vendor folder: php artisan vendor:publish**
- **Link storage (images, etc): php artisan storage:link**
- **Use Tinker: php artisan tinker**
- **When in Tinker mode: \App\Models\Listing::find(3)->user**
- **[Simple MYSQL user cheatsheet](https://gist.github.com/bradtraversy/c831baaad44343cc945e76c2e30927b3)**
- **If error to storage/laravel.log: chmod 777 storage/ -R**


<!-- ## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions). -->
