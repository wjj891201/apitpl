<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property int $id ID
 * @property string $title 标题
 * @property string $content 内容
 * @property int $category_id 分类
 * @property int $status 状态
 * @property int $created_by 创建人
 * @property int $created_at 创建时间
 * @property int $updated_at 最后修改时间
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['content'], 'string'],
            [['category_id', 'status', 'created_by', 'created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 512],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'content' => '内容',
            'category_id' => '分类',
            'status' => '状态',
            'created_by' => '创建人',
            'created_at' => '创建时间',
            'updated_at' => '最后修改时间',
        ];
    }
}
