# blcms-catalogue-template


**Configure admin password** in ```console\config\params-local.php``` 
```php
return [
    'adminPassword' => '...'
];
```

### Migrations
```
php yii migrate --migrationPath=@vendor/dektrium/yii2-user/migrations
php yii migrate --migrationPath=@vendor/black-lamp/yii2-multi-lang/migration
php yii migrate --migrationPath=@vendor/black-lamp/yii2-seo/migrations
php yii migrate --migrationPath=@vendor/black-lamp/blcms-redirect/migrations
php yii migrate --migrationPath=@vendor/black-lamp/yii2-articles/common/migrations
php yii migrate --migrationPath=@vendor/black-lamp/blcms-staticpage/migrations
php yii migrate --migrationPath=@yii/rbac/migrations
php yii migrate --migrationPath=@vendor/black-lamp/blcms-shop/migrations
php yii migrate --migrationPath=@vendor/black-lamp/blcms-cart/migrations
php yii migrate
```
or
```
php yii migrate --migrationPath=@vendor/dektrium/yii2-user/migrations --interactive=0 && php yii migrate --migrationPath=@vendor/black-lamp/yii2-multi-lang/migration --interactive=0 && php yii migrate --migrationPath=@vendor/black-lamp/yii2-seo/migrations --interactive=0 && php yii migrate --migrationPath=@vendor/black-lamp/blcms-redirect/migrations --interactive=0 && php yii migrate --migrationPath=@vendor/black-lamp/yii2-articles/common/migrations --interactive=0 && php yii migrate --migrationPath=@vendor/black-lamp/blcms-staticpage/migrations --interactive=0 && php yii migrate --migrationPath=@yii/rbac/migrations --interactive=0 && php yii migrate --migrationPath=@vendor/black-lamp/blcms-shop/migrations --interactive=0 && php yii migrate --migrationPath=@vendor/black-lamp/blcms-cart/migrations --interactive=0 php yii migrate --interactive=0
```