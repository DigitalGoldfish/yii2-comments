<?php

use yii\db\Migration;
use yii\db\Schema;

class m151031_100517_hierarchical_comment extends Migration
{

    public function up()
    {
        $this->addColumn('{{%comment}}', 'parent_id', Schema::TYPE_INTEGER . ' AFTER [[id]]');
    }

    public function down()
    {
        $this->dropColumn('{{%comment}}', 'parent_id');
    }
}
