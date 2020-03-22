<?php

namespace Vayes\Support\Enum\Crud;

use Vayes\Enum\BaseEnum;

abstract class DataType extends BaseEnum
{
    const VARCHAR    = 'varchar';       // MySQL 64 B or fixed 255 characters with fixed length
    const TINYTEXT   = 'tinytext';      // MySQL 256 B or 255 characters
    const TEXT       = 'text';          // MySQL 64 KB or 65,535 characters
    const MEDIUMTEXT = 'mediumtext';    // MySQL 16 Megabytes or 16,777,215 characters
    const LONGTEXT   = 'longtext';      // MySQL 4 Gigabytes or 4,294,967,295 characters
    const BOOLEAN    = 'boolean';
    const TINYINT    = 'tinyint';       // MySQL -128 to 127 or 0 to 255 UNSIGNED
    const SMALLINT   = 'smallint';      // MySQL -32768 to 32767 or 0 to 65535 UNSIGNED
    const MEDIUMINT  = 'mediumint';     // MySQL -8388608 to 8388607 or 0 to 16777215 UNSIGNED
    const INT        = 'integer';       // MySQL -2147483648 to 2147483647 or 0 to 4294967295 UNSIGNED
    const BIGINT     = 'bigint';        // MySQL -9223372036854775808 to 9223372036854775807 normal. 0 to 18446744073709551615
    const FLOAT      = 'float';         // MySQL m4,d2
    const DECIMAL    = 'decimal';       // MySQL m10,d2
    const DATE       = 'date';
    const TIME       = 'time';
    const DATETIME   = 'datetime';
    const TIMESTAMP  = 'timestamp';
    const ID         = 'id';
    const ID_SMALL   = 'smallId';
    const ID_BIG     = 'bigId';
    const RELATION   = 'relation';
}
