<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Http;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            $this->sendErrorMessageToTelegram($e);
        });
    }

    private function sendErrorMessageToTelegram(Throwable $e){
        $devType = env('APP_ENV', 'local');
        $errorMessage = $e->getMessage();
        $code = $e->getCode();
        $trace = $e->getTrace();
        $firstTrace = $trace[0];

        $message = "Тип разработки: " . $devType . "\n";
        $message .= "APP_DEBUG: " . env('APP_DEBUG', 'true') . "\n\n";
        $message .= "\n" . $code . "\n" . $errorMessage . "\n\n"
                . "file: " . $firstTrace['file']."\n"
                . "line: " . $firstTrace['line']."\n"
                . "function: " . $firstTrace['function']."\n"
                . "class: " . $firstTrace['class']."\n"
                . "type: " . $firstTrace['type'];

        $tgURL = env('TELEGRAM_API_URL') . env("telegram_chat_token") . env("telegram_api_type_send_message");
        $data = [
            "chat_id" => env("telegram_channel_id"),
            "text" => $message
        ];

        $request = Http::post($tgURL, $data);
//        dd($request);
    }
}
