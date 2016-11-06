<?php

use yii\db\Migration;

class m161105_213226_update_seed_data extends Migration
{
    public function up()
    {
        $this->update('{{%page}}', [
            'id' => 1,
            'body' => '<p style="font-size:20px">The Scripture App Publishing Service helps you publish your App from Scripture App Builder into the Google Play Store. We will help you gather all the information necessary to list your App in the store. You will use Send/Receive inside Scripture App Builder and we will handle making builds and publishing them to the store for you. We make it straightforward to publish Apps to the store so that people can read and hear the scriptures on their mobile devices.
</p>',
            'updated_at' => time(),
        ]);

        $this->update('{{%widget_menu}}', [
            'id' => 1,
            'items'=>json_encode([
                [
                    'label'=>'My Apps',
                    'url'=>'/app/index',
                    'options'=>['tag'=>'span'],
                    'template'=>'<a href="{url}" class="btn btn-lg btn-success">{label}</a>'
                ],
                [
                    'label'=>'My Work',
                    'url'=>'/work/index',
                    'options'=>['tag'=>'span'],
                    'template'=>'<a href="{url}" class="btn btn-lg btn-primary">{label}</a>'
                ],
                [
                    'label'=>'Find a bug?',
                    'url'=>'http://software.sil.org/scriptureappbuilder/support/',
                    'options'=>['tag'=>'span'],
                    'template'=>'<a href="{url}" class="btn btn-lg btn-danger">{label}</a>'
                ]

            ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
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
