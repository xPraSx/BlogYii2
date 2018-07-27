<?php

use yii\db\Migration;

/**
 * Handles the creation of table `article`.
 */
class m180725_183024_create_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('article', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(8)->notNull(),
            'category_id' => $this->integer(8)->notNull(),
            'title' => $this->string(255)->notNull(),
            'short_text' => $this->string(255)->notNull(),
            'article' => $this->text(),
            'meta_description' => $this->string(255),
            'meta_title' => $this->string(255),
            'meta_keywords' => $this->text(),
            'tags' => $this->string(255),
            'allow_comment' => $this->boolean()->defaultValue(true),
            'viewed' => $this->integer(),
            'status' => $this->boolean()->defaultValue(true),
            'allow_main' => $this->boolean()->defaultValue(true),
            'icon' => $this->string(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'slug' => $this->string(50)->notNull()->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('article');
    }
}
