<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property string $id
 * @property int $user_id
 * @property string $title
 * @property string $excerpt
 * @property string $text
 * @property string $keywords
 * @property string $description
 * @property string $time
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'excerpt', 'text'], 'required'],
            [['user_id'], 'integer'],
            [['text'], 'string'],
            [['time'], 'safe'],
            [['title', 'excerpt', 'keywords', 'description'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'excerpt' => 'Excerpt',
            'text' => 'Text',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'time' => 'Time',
        ];
    }
}
