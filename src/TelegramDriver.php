<?php

namespace Fiks\VisStudio\Drivers\Telegram;

use Fiks\VisStudio\Requests\Request;

class TelegramDriver
{
    /**
     * Объект от чат-бота
     *
     * @var array
     */
    public array $object;

    /**
     * Получить конфигурацию чат-бота.
     *
     * @var array
     */
    public array $config;

    /**
     * Объект запроса
     *
     * @var Request
     */
    public Request $request;

    /**
     * Это Driver телеграм?
     *
     * @var bool
     */
    private bool $isTelegram = false;

    /**
     * Проверить объект и найти соответствие
     *
     * @param Request $request
     * @param $object
     * @param array $config
     * @return $this
     */
    public function validation(Request $request, $object, array $config): TelegramDriver
    {
        # Сохранить объект
        $this->object = $object;
        # Сохранить конфигурацию
        $this->config = $config;
        # Сохраняем объект запроса.
        $this->request = $request;

        # Проверяем, что это Telegram-бот
        if( isset($this->object['update_id']))
            $this->isTelegram = true;

        # Возвращаем объект класса
        return $this;
    }

    /**
     * Выдает результат тот ли это драйвер
     *
     * @return bool
     */
    public function isDriver(): bool
    {
        return $this->isTelegram;
    }

    public function run()
    {
        print_r('ok');
    }
}