<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Curl;

class CurrencyController extends Controller
{
    use Curl;

    /* Страница с таблицей валют */
    public function dashboard()
    {
        $currencies = $this->checkCurrency($this->getCurrency());

        return view('currency.dashboard', [
            'currencies' => $currencies
        ]);
    }

    /* Получить массив с валютой */
    public function getCurrency()
    {
        $currency = $this->send("http://phisix-api3.appspot.com/stocks.json", "GET");
        return ['status' => 'ok', 'currency' => $currency];
    }

    /* Проверка массива с валютой */
    public function checkCurrency($currency)
    {
        $currency = $currency["currency"];
        return isset($currency->stock) ? $currency->stock : [];
    }
}
