<?php

namespace App\Services;

use GuzzleHttp\Client as HttpClient;

class TelegramSender
{
    const METHOD_SEND_MESSAGE = 'sendMessage';

    const PARSE_MODE_HTML = 'HTML';
    const PARSE_MODE_MARKDOWN = 'Markdown';

    protected $apiUrl;
    protected $chatId;

    public function __construct()
    {
        $this->apiUrl = 'https://api.telegram.org/bot' . env('TELEGRAM_ACCESS_TOKEN') . '/';
        $this->chatId = env('TELEGRAM_CHAT_ID');
    }

    public function sendMessage($text)
    {
        // Формирую запрос.
        $httpClient = new HttpClient([
            'base_uri' => $this->apiUrl
        ]);

        $response = $httpClient->request('POST', self::METHOD_SEND_MESSAGE, [
            'json' => [
                'chat_id' => $this->chatId,
                'text' => $text,
                'parse_mode' => self::PARSE_MODE_HTML
            ]
        ]);

        return $response;
    }
}