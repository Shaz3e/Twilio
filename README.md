# Send SMS with Twilio in Laravel

![Packagist Version](https://img.shields.io/packagist/v/shaz3e/twilio)
![Packagist Downloads](https://img.shields.io/packagist/dt/shaz3e/twilio)
![License](https://img.shields.io/packagist/l/shaz3e/twilio)
![Laravel Version](https://img.shields.io/badge/laravel-11.x-blue)

## Introduction
This is a Laravel package for sending SMS with Twilio

#### Installation
You can install the package via composer by running the following command in your terminal

```bash
composer require shaz3e/twilio
```

#### Publishing Configurations

Publish config only

```bash
php artisan vendor:publish --tag=twilio-config
```
This is the content of the config file that will be published at config/twilio.php
```
<?php

return [
    'twilio_sid' => env('TWILIO_ACCOUNT_SID'),
    'twilio_token' => env('TWILIO_AUTH_TOKEN'),
    'twilio_from' => env('TWILIO_SMS_FROM'),
];
```

#### Update .env file
Next, edit your .env file with your Twilio Credentials
TWILIO_ACCOUNT_SID=xxxxx
TWILIO_AUTH_TOKEN=xxxxx
TWILIO_SMS_FROM=+xxxxx

#### Usage
To send a SMS message, you can use the notify() method available on the Twilio Facade

```
<?php

use Shaz3e\Twilio\Facades\Twilio;

$sendSms = Twilio::notify('+123456789', 'Hello')

return $sendSms;
```
To send WhatsAp message you can use the notifyWhatsApp method available on the Twilio Facade
```
<?php

use Shaz3e\Twilio\Facades\Twilio;

$sendWhatsApp = Twilio::notifyWhatsApp('+123456789', 'Hello')

return $sendWhatsApp;
```


#### Contributing

* If you have any suggestions please let me know : https://github.com/Shaz3e/twilio/pulls.
* Please help me improve code https://github.com/Shaz3e/twilio/pulls

#### License
Twilio is licensed under the MIT license. Enjoy!

## Credit
* [Shaz3e](https://www.shaz3e.com) | [YouTube](https://www.youtube.com/@shaz3e) | [Facebook](https://www.facebook.com/shaz3e) | [Twitter](https://twitter.com/shaz3e) | [Instagram](https://www.instagram.com/shaz3e) | [LinkedIn](https://www.linkedin.com/in/shaz3e/)
* [Diligent Creators](https://www.diligentcreators.com) | [Facebook](https://www.facebook.com/diligentcreators) | [Instagram](https://www.instagram.com/diligentcreators/) | [Twitter](https://twitter.com/diligentcreator) | [LinkedIn](https://www.linkedin.com/company/diligentcreators/) | [Pinterest](https://www.pinterest.com/DiligentCreators/) | [YouTube](https://www.youtube.com/@diligentcreator) [TikTok](https://www.tiktok.com/@diligentcreators) | [Google Map](https://g.page/diligentcreators)

![GitHub commit activity](https://img.shields.io/github/commit-activity/m/shaz3e/twilio)

![GitHub Stats](https://github-readme-stats.vercel.app/api?username=shaz3e&show_icons=true&count_private=true&theme=default)

![GitHub Contributions Graph](https://github-profile-summary-cards.vercel.app/api/cards/profile-details?username=shaz3e&theme=default)
