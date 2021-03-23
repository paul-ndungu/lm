<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "assignbook".
 *
 * @property int $assignBookId
 * @property int $studentId
 * @property int $bookId
 * @property string $borrowDate
 * @property string $returnDate
 */
class AssignBook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'assignbook';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studentId', 'bookId', 'borrowDate', 'returnDate'], 'required'],
            [['studentId', 'bookId'], 'integer'],
            [['borrowDate', 'returnDate'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'assignBookId' => 'Assign Book ID',
            'studentId' => 'Student ID',
            'bookId' => 'Book ID',
            'borrowDate' => 'Borrow Date',
            'returnDate' => 'Return Date',
        ];
    }
}
