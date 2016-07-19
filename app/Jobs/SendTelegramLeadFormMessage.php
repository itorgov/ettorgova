<?php

namespace App\Jobs;

use App\Client;
use App\Jobs\Job;
use App\Services\TelegramSender;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendTelegramLeadFormMessage extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $client;

    /**
     * Create a new job instance.
     *
     * @param Client $client
     * @return void
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Execute the job.
     *
     * @param TelegramSender $telegram
     * @return void
     */
    public function handle(TelegramSender $telegram)
    {
        $currentDate = date('d.m.Y');
        $clientName = $this->client->name;
        $clientPhone = $this->client->phone;

        $messageText = "Новая заявка с нашего сайта.\n<b>Имя</b>: $clientName\n<b>Номер телефона</b>: $clientPhone\n<b>Дата</b>: $currentDate";

        $telegram->sendMessage($messageText);
        $telegram->sendContact($clientPhone, $clientName);
    }
}
