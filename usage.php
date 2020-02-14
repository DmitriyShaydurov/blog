<?php
require __DIR__ . '/vendor/autoload.php';
$manager = new \shaydurov\blog\User(1);

$message = ['author_id' => 1, 'body' => 'Cобщения от пользователя с id =1'];
$managerId = 1;

if ($manager->isCorrectId($managerId) & $manager->isCorrectId($message['author_id'])) {
    echo $manager->canEdit($message) ? 'может редактировать, ' : 'не может редактировать, ';
    echo $manager->canDelete($message) ? 'может удалять' : 'не может удалять';
} else {
    echo 'Использован некорректный id';
}


