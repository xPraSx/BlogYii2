<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "options".
 *
 * @property int $id
 * @property string $siteurl
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property int $status
 */
class Options extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'options';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['meta_keywords'], 'string'],
            [['status'], 'integer'],
            [['siteurl', 'meta_title'], 'string', 'max' => 200],
            [['meta_description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'siteurl' => 'Siteurl',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
            'status' => 'Status',
        ];
    }
}
