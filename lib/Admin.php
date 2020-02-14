<?php
/**
* Администратор
* Может редактировать и удалять любые сообщения
* Class Admin
*/
namespace shaydurov\blog;

class Admin extends Blogger
{
    public function canEdit($message)
    {
        return true;
    }

    public function canDelete($message)
    {
        return true;
    }
}
