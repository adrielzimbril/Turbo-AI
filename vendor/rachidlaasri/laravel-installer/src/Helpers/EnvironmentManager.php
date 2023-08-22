<?php

namespace RachidLaasri\LaravelInstaller\Helpers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EnvironmentManager
{
    /**
     * @var string
     */
    private $envPath;

    /**
     * @var string
     */
    private $envExamplePath;

    /**
     * Set the .env and .env.example paths.
     */
    public function __construct()
    {
        $this->envPath = base_path('.env');
        $this->envExamplePath = base_path('.env.example');
    }

    /**
     * Get the content of the .env file.
     *
     * @return string
     */
    public function getEnvContent()
    {
        if (! file_exists($this->envPath)) {
            if (file_exists($this->envExamplePath)) {
                copy($this->envExamplePath, $this->envPath);
            } else {
                touch($this->envPath);
            }
        }

        return file_get_contents($this->envPath);
    }

    /**
     * Get the the .env file path.
     *
     * @return string
     */
    public function getEnvPath()
    {
        return $this->envPath;
    }

    /**
     * Get the the .env.example file path.
     *
     * @return string
     */
    public function getEnvExamplePath()
    {
        return $this->envExamplePath;
    }

    /**
     * Save the edited content to the .env file.
     *
     * @param Request $input
     * @return string
     */
    public function saveFileClassic(Request $input)
    {
        $message = trans('installer_messages.environment.success');

        try {
            file_put_contents($this->envPath, $input->get('envConfig'));
        } catch (Exception $e) {
            $message = trans('installer_messages.environment.errors');
        }

        return $message;
    }

    /**
     * Save the form content to the .env file.
     *
     * @param Request $request
     * @return string
     */
    public function saveFileWizard(Request $request)
    {
        $results = trans('installer_messages.environment.success');

        $envFileData =
        'APP_NAME=\''.$request->app_name."'\n".
        'APP_ENV='.$request->environment."\n".
        'APP_KEY='.'base64:'.base64_encode(Str::random(32))."\n".
        'APP_DEBUG='.$request->app_debug."\n".
        'APP_LOG_LEVEL='.$request->app_log_level."\n".
        'APP_URL='.$request->app_url."\n\n".

        'NODE_ENV='.$request->environment."\n\n".

        'BROADCAST_DRIVER=log'."\n".
        'CACHE_DRIVER=file'."\n".
        'SESSION_DRIVER=file'."\n".
        'QUEUE_DRIVER=sync'."\n".
        'SESSION_LIFETIME=2400'."\n\n".

        'QUEUE_CONNECTION=database'."\n\n".

        'DB_CONNECTION='.$request->database_connection."\n".
        'DB_HOST='.$request->database_hostname."\n".
        'DB_PORT='.$request->database_port."\n".
        'DB_DATABASE='.$request->database_name."\n".
        'DB_USERNAME='.$request->database_username."\n".
        'DB_PASSWORD='.$request->database_password."\n\n".

        'MAIL_DRIVER=smtp'."\n".
        'MAIL_HOST=smtp.mailtrap.io'."\n".
        'MAIL_PORT=2525'."\n".
        'MAIL_USERNAME=""'."\n".
        'MAIL_PASSWORD=""'."\n".
        'MAIL_ENCRYPTION=""'."\n".
        'MAIL_FROM_ADDRESS=""'."\n".
        'MAIL_FROM_NAME=""'."\n\n".

        'PUSHER_APP_ID='.$request->pusher_app_id."\n".
        'PUSHER_APP_KEY='.$request->pusher_app_key."\n".
        'PUSHER_APP_SECRET='.$request->pusher_app_secret."\n\n".

        'OPENAI_API_KEY=""'."\n\n".

        'GOOGLE_CLIENT_ID=""'."\n".
        'GOOGLE_CLIENT_SECRET=""'."\n".
        'FACEBOOK_APP_ID=""'."\n".
        'FACEBOOK_APP_SECRET=""'."\n\n".

        'RECAPTCHA_SITE_KEY=""'."\n".
        'RECAPTCHA_SECRET_KEY=""'."\n\n".

        'TWILIO_SID=""'."\n".
        'TWILIO_AUTH_TOKEN=""'."\n".
        'VALID_TWILIO_NUMBER=""'."\n\n".

        'DEFAULT_CURRENCY="usd"'."\n".
        'CASHIER_CURRENCY="usd"'."\n\n".

        'DEFAULT_CURRENCY_RATE="1"'."\n".
        'DEFAULT_CURRENCY_SYMBOL="$"'."\n".
        'DEFAULT_CURRENCY_SYMBOL_ALIGNMENT="0"'."\n\n".

        'PAYPAL_CLIENT_ID=""'."\n".
        'PAYPAL_CLIENT_SECRET=""'."\n".
        'PAYPAL_CURRENCY="USD"'."\n\n".

        'STRIPE_PUBLISHABLE_KEY=""'."\n".
        'STRIPE_SECRET_KEY=""'."\n".
        'STRIPE_CURRENCY="USD"'."\n\n".

        'FLUTTERWAVE_PUBLIC_KEY=""'."\n".
        'FLUTTERWAVE_SECRET_KEY=""'."\n".
        'FLUTTERWAVE_SECRET_HASH=""'."\n".
        'FLUTTERWAVE_CURRENCY=""'."\n\n".

        'PAYTM_ENVIRONMENT="local"'."\n".
        'PAYTM_MERCHANT_ID=""'."\n".
        'PAYTM_MERCHANT_KEY=""'."\n".
        'PAYTM_MERCHANT_WEBSITE=""'."\n".
        'PAYTM_CHANNEL="WEB"'."\n".
        'PAYTM_INDUSTRY_TYPE=""'."\n".
        'PAYTM_CURRENCY=""'."\n\n".

        'PAYSTACK_PUBLIC_KEY=""'."\n".
        'PAYSTACK_SECRET_KEY=""'."\n".
        'PAYSTACK_CURRENCYY=""'."\n\n".

        'RAZORPAY_KEY=""'."\n".
        'RAZORPAY_SECRET=""'."\n".
        'RAZORPAY_CURRENCY=""'."\n\n".

        'IYZICO_API_KEY=""'."\n".
        'IYZICO_SECRET_KEY=""'."\n".
        'IYZICO_CURRENCY=""'."\n";


        try {
            file_put_contents($this->envPath, $envFileData);
        } catch (Exception $e) {
            $results = trans('installer_messages.environment.errors');
        }

        return $results;
    }
}
