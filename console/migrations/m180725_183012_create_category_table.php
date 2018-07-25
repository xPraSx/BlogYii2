<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180725_183012_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(11),
            'name' => $this->string(50)->notNull(),
            'position' => $this->integer(8),
            'icon' => $this->string(250),
            'meta_title' => $this->string(200),
            'meta_description' => $this->string(200),
            'meta_keywords' => $this->text(),
            'description' => $this->text(),
            'status' => $this->boolean()->defaultValue(true),
            'slug' => $this->string(50)->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }
}
