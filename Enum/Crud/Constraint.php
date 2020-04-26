<?php

namespace Vayes\Support\Enum\Crud;

use Vayes\Enum\BaseEnum;

/**
 * Integers represent 'id' value of db record at constraint table
 */
abstract class Constraint extends BaseEnum
{
    /*
    |--------------------------------------------------------------------------
    | PRIME CUSTOM CONSTRAINTS
    |--------------------------------------------------------------------------
    */
    const UNIQUE = 'unique'; // CUSTOM -> unique[users.name,users.id]
    const VALID_UUID = 'valid_uuid'; // CUSTOM -> valid_uuid
    const NOT_NULL = 'not_blank'; // CUSTOM -> not_blank[column_name]

    /*
    |--------------------------------------------------------------------------
    | BUILT-IN CODEIGNITER CONSTRAINTS
    |--------------------------------------------------------------------------
    */
    const REQUIRED = 'required';
    const MATCHES = 'matches'; // matches[form_item]
    const REGEX_MATCH = 'regex_match'; // regex_match[/regex/]
    const DIFFERS = 'differs'; // differs[form_item]
    const MIN_LENGTH = 'min_length'; // min_length[3]
    const MAX_LENGTH = 'max_length'; // max_length[12]
    const EXACT_LENGTH = 'exact_length'; // exact_length[8]
    const GREATER_THAN = 'greater_than'; // greater_than[8]
    const GREATER_THAN_EQUAL_TO = 'greater_than_equal_to'; // greater_than_equal_to[8]
    const LESS_THAN = 'less_than'; // less_than[8]
    const LESS_THAN_EQUAL_TO = 'less_than_equal_to'; // less_than_equal_to[8]
    const IN_LIST = 'in_list'; // in_list[red,blue,green]
    const ALPHA = 'alpha';
    const ALPHA_NUMERIC = 'alpha_numeric';
    const ALPHA_NUMERIC_SPACES = 'alpha_numeric_spaces';
    const ALPHA_DASH = 'alpha_dash';
    const NUMERIC = 'numeric';
    const INTEGER = 'integer';
    const DECIMAL = 'decimal';
    const IS_NATURAL = 'is_natural';
    const IS_NATURAL_NO_ZERO = 'is_natural_no_zero';
    const VALID_URL = 'valid_url';
    const VALID_EMAIL = 'valid_email';
    const VALID_EMAILS = 'valid_emails'; // Input must be in CSV string format for email addresses
    const VALID_IP = 'valid_ip'; // Optional parameter of ‘ipv4’ or ‘ipv6’ to specify an IP format.
    const VALID_BASE64 = 'valid_base64';
}
