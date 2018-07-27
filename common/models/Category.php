<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property int $position
 * @property string $icon
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property string $description
 * @property int $status
 * @property string $slug
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'position', 'status'], 'integer'],
            [['name'], 'required'],
            [['meta_keywords', 'description'], 'string'],
            [['name', 'slug'], 'string', 'max' => 50],
            [['icon'], 'string', 'max' => 250],
            [['meta_title', 'meta_description'], 'string', 'max' => 200],
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
            'parent_id' => 'Parent ID',
            'name' => 'Name',
            'position' => 'Position',
            'icon' => 'Icon',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
            'description' => 'Description',
            'status' => 'Status',
            'slug' => 'Slug',
        ];
    }
}
