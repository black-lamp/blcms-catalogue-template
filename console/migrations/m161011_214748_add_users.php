<?php

use dektrium\user\models\User;
use yii\db\Migration;

class m161011_214748_add_users extends Migration
{
    public function safeUp()
    {
        if (!empty(Yii::$app->params['adminPassword'])) {
            $password_hash = Yii::$app->security->generatePasswordHash(Yii::$app->params['adminPassword']);
        } else {
            $password_hash = null;
        }
        $this->insert('user', [
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password_hash' => $password_hash,
            'auth_key' => Yii::$app->security->generateRandomString(),
            'confirmed_at' => time(),
            'registration_ip' => '127.0.0.1',
            'created_at' => time(),
            'updated_at' => time()
        ]);

        $admin = User::findOne(['username' => 'admin']);

        $this->insert('auth_assignment', [
            'item_name' => 'accessAdminPanel',
            'user_id' => $admin->id,
        ]);

        $this->insert('auth_assignment', [
            'item_name' => 'productManager',
            'user_id' => $admin->id,
        ]);
    }

    public function safeDown()
    {
        /** @var User $admin */
        $admin = User::findOne(['username' => 'admin']);

        $this->delete('auth_assignment', ['user_id' => $admin->id]);
        $this->delete('user', ['username' => 'admin']);
    }
}
