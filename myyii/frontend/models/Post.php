<?php

namespace frontend\models;

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
            'catalog' => '图书分类',
            'id' => '图书编号',
            'book_name' => '图书名称',
            'author' => '作者',
            'create_time' => '出版时间',
            'publish' => '出版社',
            'price' => '价格',
        ];
    }
}
