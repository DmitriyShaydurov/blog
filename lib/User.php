<?php
/**
* Пользователь
* Может редактировать только свои сообщения
* Удалять сообщения не может
* Class User
*/
namespace shaydurov\blog;

class User extends Blogger
{
    public function canEdit($message)
    {
        return $this->isYourMessage($message) ? true : false;
    }

    public function canDelete($message)
    {
        return false;
    }
}
