<?php
namespace Werkint\IShop\Status;

class StatusBill extends Status
{

    /**
     * Счета:
     * 50 и менее - выставленные, но неоплаченные
     * 51-59 - в процессе
     * 60 - оплачены
     * 100 и выше - отменены (ошибка)
     * @var array
     */
    protected static $messageCodes = array(
        50 => 'Выставлен',
        52 => 'Проводится',
        60 => 'Оплачен',
        150 => 'Отменен (ошибка на терминале)',
        151 => 'Отменен (ошибка авторизации: недостаточно средств на балансе, отклонен абонентом при оплате с лицевого счета оператора сотовой связи и т.п.).',
        160 => 'Отменен',
        161 => 'Отменен (Истекло время)',
    );

}