<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DisposableEmail implements Rule
{
    const MAIL_DUMP_CHECKER_URL = 'https://api.mailcheck.ai/domain/';

    const ALLOWED_DOMAIN_EMAIL = ['gmail.com','yahoo.co.id','yahoo.com'];

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
        return $this->requestForCheckingDumpEmail($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Sorry, You use disposable email domain try using yahoo or google email.';
    }

    /**
     * Check if email domain is disposable
     *
     * @param string $email
     * @return boolean
     */
    private function requestForCheckingDumpEmail($email)
    {
        $emailRaw = explode('@', $email);
        $domainEmail = $emailRaw[1];
        $endpoint = self::MAIL_DUMP_CHECKER_URL.$domainEmail;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
 
        $decodeResult = json_decode($response, true);
        if ($decodeResult['status'] == 200) {
            if ($decodeResult['disposable'] == false) {
                return true;
            } else {
                return false;
            }
        }  elseif (in_array($domainEmail, self::ALLOWED_DOMAIN_EMAIL)) {
            return true;
        }
        
        return false;
    }
}
