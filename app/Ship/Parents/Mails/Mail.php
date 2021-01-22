<?php

namespace App\Ship\Parents\Mails;

use Apiato\Core\Abstracts\Mails\Mail as AbstractMail;
use Illuminate\Queue\SerializesModels;

/**
 * Class Mail.
 *
 *
 */
abstract class Mail extends AbstractMail
{
    use SerializesModels;
}
