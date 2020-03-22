<?php

namespace Vayes\Support\Enum\Http;

use Vayes\Enum\BaseEnum;

/**
 * Defines constants for common HTTP request methods.
 */
abstract class RequestMethod extends BaseEnum
{
    const HEAD = 'HEAD';
    const GET = 'GET';
    const POST = 'POST';
    const PUT = 'PUT';
    const PATCH = 'PATCH';
    const DELETE = 'DELETE';
    const PURGE = 'PURGE';
    const OPTIONS = 'OPTIONS';
    const TRACE = 'TRACE';
    const CONNECT = 'CONNECT';

    // Custom Methods
    const LIST = 'LIST';
    const DETAIL = 'DETAIL';
    const UNDELETE = "UNDELETE";

    const WRITE_METHODS = [
        self::POST,
        self::PUT,
        self::PATCH
    ];
}
