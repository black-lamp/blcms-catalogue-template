<?php

use yii\db\Migration;

class m161012_131336_add_languages extends Migration
{
    public function safeUp()
    {
        $this->insert('language', [
            'name' => 'Russian',
            'lang_id' => 'ru',
            'show' => 1,
            'active' => 1,
            'default' => 1
        ]);
    }

    public function safeDown()
    {
        $this->delete('language', ['lang_id' => 'ru']);

        return true;
    }
}
