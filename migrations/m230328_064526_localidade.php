<?php

use yii\db\Migration;

/**
 * Class m230328_064526_localidade
 */
class m230328_064526_localidade extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    { 
        #localidade (id, nome)
        $this ->createTable('localidade', [
            'nome_local'=>$this->string()->notNull(),
            'localidade_id'=>$this->primaryKey()->notNull()
    ]);
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable ('localidade') ;

        
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230328_064526_localidade cannot be reverted.\n";

        return false;
    }
    */
}
