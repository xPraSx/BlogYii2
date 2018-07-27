<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property int $user_id
 * @property int $category_id
 * @property string $title
 * @property string $short_text
 * @property string $article
 * @property string $meta_description
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $tags
 * @property int $allow_comment
 * @property int $viewed
 * @property int $status
 * @property int $allow_main
 * @property string $icon
 * @property int $created_at
 * @property int $updated_at
 * @property string $slug
 *
 * @property ArticleTag[] $articleTags
 * @property Comment[] $comments
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'category_id', 'title', 'short_text', 'created_at', 'updated_at', 'slug'], 'required'],
            [['user_id', 'category_id', 'allow_comment', 'viewed', 'status', 'allow_main', 'created_at', 'updated_at'], 'integer'],
            [['article', 'meta_keywords'], 'string'],
            [['title', 'short_text', 'meta_description', 'meta_title', 'tags', 'icon'], 'string', 'max' => 255],
            [['slug'], 'string', 'max' => 50],
            [['slug'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'category_id' => 'Category ID',
            'title' => 'Title',
            'short_text' => 'Short Text',
            'article' => 'Article',
            'meta_description' => 'Meta Description',
            'meta_title' => 'Meta Title',
            'meta_keywords' => 'Meta Keywords',
            'tags' => 'Tags',
            'allow_comment' => 'Allow Comment',
            'viewed' => 'Viewed',
            'status' => 'Status',
            'allow_main' => 'Allow Main',
            'icon' => 'Icon',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'slug' => 'Slug',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleTags()
    {
        return $this->hasMany(ArticleTag::className(), ['article_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['article_id' => 'id']);
    }
}
