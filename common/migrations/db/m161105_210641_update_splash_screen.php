<?php

use yii\db\Migration;

class m161105_210641_update_splash_screen extends Migration
{
    public function up()
    {
        $this->update('{{%widget_carousel_item}}', [
            'carousel_id'=>1,
            'base_url' => Yii::getAlias('@frontendUrl'),
            'path'=>'img/scripture_app_in_hand.jpg',
            'type'=>'image/jpeg',
            'url'=>'/',
            'status'=>1
        ]);

        $this->insert('{{%widget_carousel_item}}', [
            'carousel_id'=>1,
            'base_url' => Yii::getAlias('@frontendUrl'),
            'path'=>'img/dictionary_app_in_hand.jpg',
            'type'=>'image/jpeg',
            'url'=>'/',
            'status'=>1
        ]);

        $this->insert('{{%widget_carousel_item}}', [
            'carousel_id'=>1,
            'base_url' => Yii::getAlias('@frontendUrl'),
            'path'=>'img/reading_app_in_hand.jpg',
            'type'=>'image/jpeg',
            'url'=>'/',
            'status'=>1
        ]);

    }

    public function down()
    {
        return true;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
