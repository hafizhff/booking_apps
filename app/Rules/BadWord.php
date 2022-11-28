<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class BadWord implements Rule
{
    const BAD_WORD_URL_API = 'https://api.apilayer.com/bad_words';

    const API_KEY = 'QD1hCe0YMUdwZgzSuX13ZuuvCqliIWtv';

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $this->requestForCheckingBadWords($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "Sorry, you're notes contain violation words. Please change the text";
    }

    /**
     * Check if email domain is disposable
     *
     * @param string $email
     * @return boolean
     */
    private function requestForCheckingBadWords($notes)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => self::BAD_WORD_URL_API,
        CURLOPT_HTTPHEADER => array(
            "Content-Type: text/plain",
            "apikey: ".self::API_KEY
        ),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $notes
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $resultDecode = json_decode($response, true);
        if ($resultDecode['bad_words_total'] > 0) {
            return false;
        } else {
            return true;
        }
    }
}
