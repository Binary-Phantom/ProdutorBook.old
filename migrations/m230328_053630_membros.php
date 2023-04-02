<?php

use yii\db\Migration;

/**
 * Class m230328_053630_membros
 */
class m230328_053630_membros extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #membros (id, nome, email, senha, localidade_fk)
        $this ->createTable('membros', [
            'produtor_id'=>$this->primarykey(),
            'nome'=>$this->string()->notNull(),
            'email'=>$this->string()->notNull(),
            'senha'=>$this->string()->notNull(),
            'localidade_id'=>$this->integer()
        ]);
        $this->addForeignKey('localidade_fk','membros', 'localidade_id','localidade','localidade_id', 'RESTRICT');
     
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropforeignKey('localidade_fk','membros');
        $this->dropTable ('membros') ;

        
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230328_053630_membros cannot be reverted.\n";

        return false;
    }
    */
}
