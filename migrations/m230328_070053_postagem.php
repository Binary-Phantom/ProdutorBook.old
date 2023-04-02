<?php

use yii\db\Migration;

/**
 * Class m230328_070053_postagem
 */
class m230328_070053_postagem extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        #postagem (id, produtor_id, data, horario, mensagem)
        $this ->createTable('postagem', [
        'post_id'=>$this->primaryKey(),
        'produtor_id'=>$this->integer(),
        'mensagem'=>$this->string()->notNull()
    
        ]);
        $this->addForeignKey('produtor_fk','postagem', 'produtor_id','membros','produtor_id', 'RESTRICT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('produtor_fk','postagem');
        $this->dropTable ('postagem') ;

        
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230328_070053_postagem cannot be reverted.\n";

        return false;
    }
    */
}
