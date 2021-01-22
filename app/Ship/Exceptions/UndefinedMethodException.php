<?php

namespace App\Ship\Exceptions;

use App\Ship\Parents\Exceptions\Exception;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

/**
 * Class UndefinedMethodException
 *
 */
class UndefinedMethodException extends Exception
{

    public $httpStatusCode = SymfonyResponse::HTTP_FORBIDDEN;

    public $message = 'Undefined HTTP Verb!';

}
