<?php
/**
* Имитирует работу базы данных
* Реализован только метод получения данных пользователя
* сlass Db
*/
namespace shaydurov\blog;

class Db
{
    /**
    * Получает данные пользователя
    * @return array blogger
    */

    public function getBlogger($id)
    {
        switch ($id) {
            case 0:
                $blogger = ['name'=> 'John'];
                break;
            case 1:
                $blogger = ['name'=> 'David'];
                break;
            case 2:
                $blogger = ['name'=> 'Max'];
                break;
            default:
                $blogger = false;
                break;
        }

        return $blogger;

    }

}