<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property string $catalog
 * @property int $id
 * @property string $book_name
 * @property string $author
 * @property string $create_time
 * @property string $publish
 * @property string $price
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
            [['id'], 'integer'],
            [['create_time'], 'safe'],
            [['price'], 'number'],
            [['catalog', 'book_name', 'author', 'publish'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'catalog' => 'Catalog',
            'id' => 'ID',
            'book_name' => 'Book Name',
            'author' => 'Author',
            'create_time' => 'Create Time',
            'publish' => 'Publish',
            'price' => 'Price',
        ];
    }
}
