<?php
namespace Werkint\Qiwi\Status;

class StatusResult extends Status
{

    protected static $messageCodes = array(
        0   => null,
        13  => 'Сервер занят, повторите запрос позже',
        150 => 'Ошибка авторизации (неверный логин/пароль)',
        210 => 'Счет не найден',
        215 => 'Счет с таким txn-id уже существует',
        241 => 'Сумма слишком мала',
        242 => 'Превышена максимальная сумма платежа – 15 000р.',
        278 => 'Превышение максимального интервала получения
списка счетов',
        298 => 'Агента не существует в системе',
        300 => 'Неизвестная ошибка',
        330 => 'Ошибка шифрования',
        370 => 'Превышено максимальное кол-во одновременно
выполняемых запросов',
    );

}