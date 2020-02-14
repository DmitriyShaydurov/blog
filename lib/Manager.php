<?php
/**
* Менеджер
* Может редактировать свои сообщения и собщения других пользователей
* Удалять сообщения не может
* Class Manager
*/
namespace shaydurov\blog;

class Manager extends Blogger
{
    public function canEdit($message)
    {
        return true;
    }

    public function canDelete($message)
    {
        return false;
    }
}