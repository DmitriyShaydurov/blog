<?php
require __DIR__ . '/vendor/autoload.php';

$message = ['author_id' => 1, 'body' => 'Cобщения от пользователя с id =1'];
$managerId = 2;
$manager = new \shaydurov\blog\Manager($managerId);

if ($manager->isCorrectId($managerId) & $manager->isCorrectId($message['author_id'])) {
    echo $manager->getName();
    echo $manager->canEdit($message) ? ' может редактировать, ' : ' не может редактировать, ';
    echo $manager->canDelete($message) ? ' может удалять' : ' не может удалять';
} else {
    echo 'Использован некорректный id';
}