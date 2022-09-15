<?php

namespace App\Services;

use GuzzleHttp\Client as HttpClient;

class TelegramSender
{
    const METHOD_SEND_MESSAGE = 'sendMessage';
    const METHOD_SEND_CONTACT = 'sendContact';

    const PARSE_MODE_HTML = 'HTML';
    const PARSE_MODE_MARKDOWN = 'Markdown';

    protected $apiUrl;
    protected $chatId;

    public function __construct()
    {
        $this->apiUrl = 'https://api.telegram.org/bot' . config('telegram.token') . '/';
        $this->chatId = config('telegram.chat');
    }

    /**
     * Отправляет текстовое сообщение.
     *
     * @param string $text Текст сообщения.
     * @return mixed
     */
    public function sendMessage($text)
    {
        return $this->makeRequest(self::METHOD_SEND_MESSAGE, [
            'chat_id' => $this->chatId,
            'text' => $text,
            'parse_mode' => self::PARSE_MODE_HTML
        ]);
    }

    protected function makeRequest($method, $parameters)
    {
        $httpClient = new HttpClient([
            'base_uri' => $this->apiUrl
        ]);

        $response = $httpClient->post($method, [
            'json' => $parameters
        ]);

        $bodyResponse = json_decode($response->getBody()->getContents());

        return $bodyResponse;
    }

    /**
     * Отправляет контакт.
     *
     * @param string $phoneNumber Номер телефона.
     * @param string $firstName Имя.
     * @param string|null $lastName Фамилия.
     * @return mixed
     */
    public function sendContact($phoneNumber, $firstName, $lastName = null)
    {
        $parameters = [
            'chat_id' => $this->chatId,
            'phone_number' => $phoneNumber,
            'first_name' => $firstName
        ];

        if (!is_null($lastName)) {
            $parameters['last_name'] = $lastName;
        }

        return $this->makeRequest(self::METHOD_SEND_CONTACT, $parameters);
    }
}