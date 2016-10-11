# blcms-catalogue-template

### Migrations
```
php yii migrate --migrationPath=@vendor/dektrium/yii2-user/migrations
php yii migrate --migrationPath=@vendor/black-lamp/yii2-multi-lang/migration
php yii migrate --migrationPath=@vendor/black-lamp/yii2-seo/migrations --interactive=0
php yii migrate --migrationPath=@vendor/black-lamp/blcms-redirect/migrations --interactive=0
php yii migrate --migrationPath=@vendor/black-lamp/yii2-articles/common/migrations --interactive=0
php yii migrate --migrationPath=@vendor/black-lamp/blcms-staticpage/migrations --interactive=0
```
or
```
php yii migrate --migrationPath=@vendor/dektrium/yii2-user/migrations --interactive=0 && php yii migrate --migrationPath=@vendor/black-lamp/yii2-multi-lang/migration --interactive=0 && php yii migrate --migrationPath=@vendor/black-lamp/yii2-seo/migrations --interactive=0 && php yii migrate --migrationPath=@vendor/black-lamp/blcms-redirect/migrations --interactive=0 && php yii migrate --migrationPath=@vendor/black-lamp/yii2-articles/common/migrations --interactive=0 && php yii migrate --migrationPath=@vendor/black-lamp/blcms-staticpage/migrations --interactive=0
```