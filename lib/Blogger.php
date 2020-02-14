<?php

namespace shaydurov\blog;
use shaydurov\blog\Db;


abstract class Blogger
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    public $errors = [];
    protected $db;
    

    public function __construct($id)
    {
        $this->db = new Db();
        $blogger = $this->db->getBlogger($id);
        if ($this->isCorrectId($id)) {
            $this->id = $id;
            $this->name = $blogger['name'];
        } else {
            $this->writeError($id);
        }
    }


    protected function isYourMessage($message)
    {

        return ($message['author_id'] == $this->id) ? true : false;
    }

    protected function writeError($id)
    {
        $this->errors[] = "пользователя с  id = $id  не существует";
    }

    public function isCorrectId($id)
    {
        $blogger = $this->db->getBlogger($id);

        return $blogger ? true : false;
    }

    /**
    * Проверяет, может ли пользователь редактировать сообщение
    * @param Message $message
    * @return bool
    */
    abstract public function canEdit($message);

    /**
    * Проверяет, может ли пользователь удалить сообщение
    * @param Message $message
    * @return bool
    */
    abstract public function canDelete($message);
}
