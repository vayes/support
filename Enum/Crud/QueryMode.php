<?php

namespace Vayes\Support\Enum\Crud;

use Vayes\Enum\BaseEnum;

abstract class QueryMode extends BaseEnum
{
    const CREATE = "insert";
    const READ = "select";
    const UPDATE = "update";
    const DELETE = "delete";
}
