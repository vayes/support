<?php

namespace Vayes\Support\Enum\Crud;

use Vayes\Enum\BaseEnum;

abstract class DataType extends BaseEnum
{
    # Numeric

    const TINYINT = "tinyint";          // A 1-byte integer, signed range is -128 to 127, unsigned range is 0 to 255
    const SMALLINT = "smallint";        // A 2-byte integer, signed range is -32,768 to 32,767, unsigned range is 0 to 65,535
    const MEDIUMINT = "mediumint";      // A 3-byte integer, signed range is -8,388,608 to 8,388,607, unsigned range is 0 to 16,777,215
    const INT = "int";                  // A 4-byte integer, signed range is -2,147,483,648 to 2,147,483,647, unsigned range is 0 to 4,294,967,295
    const BIGINT = "bigint";            // An 8-byte integer, signed range is -9,223,372,036,854,775,808 to 9,223,372,036,854,775,807, unsigned range is 0 to
    const DECIMAL = "decimal";          // A fixed-point number (M, D) - the maximum number of digits (M) is 65 (default 10), the maximum number of decimals (D) is
    const FLOAT = "float";              // A small floating-point number, allowable values are -3.402823466E+38 to -1.175494351E-38, 0, and 1.175494351E-38 to
    const DOUBLE = "double";            // A double-precision floating-point number, allowable values are -1.7976931348623157E+308 to -2.2250738585072014E-308, 0, and
    const BIT = "bit";                  // A bit-field type (M), storing M of bits per value (default is 1, maximum is 64)
    const BOOLEAN = "boolean";          // A synonym for TINYINT(1), a value of zero is considered false, nonzero values are considered true
    const SERIAL = "serial";            // An alias for BIGINT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE

    # Date and time

    const DATE = "date";                // A date, supported range is 1000-01-01 to 9999-12-31
    const DATETIME = "datetime";        // A date and time combination, supported range is 1000-01-01 00:00:00 to 9999-12-31 23:59:59
    const TIMESTAMP = "timestamp";      // A timestamp, range is 1970-01-01 00:00:01 UTC to 2038-01-09 03:14:07 UTC, stored as the number of seconds since the
    const TIME = "time";                // A time, range is -838:59:59 to 838:59:59
    const YEAR = "year";                // A year in four-digit (4, default) or two-digit (2) format, the allowable values are 70 (1970) to 69 (2069) or 1901 to 2155 and 0000

    # String

    const CHAR = "char";                // A fixed-length (0-255, default 1) string that is always right-padded with spaces to the specified length when stored
    const TINYTEXT = "tinytext";        // A TEXT column with a maximum length of 255 (2^8 - 1) characters, stored with a one-byte prefix indicating the length of
    const TEXT = "text";                // A TEXT column with a maximum length of 65,535 (2^16 - 1) characters, stored with a two-byte prefix indicating the length of the
    const MEDIUMTEXT = "mediumtext";    // A TEXT column with a maximum length of 16,777,215 (2^24 - 1) characters, stored with a three-byte prefix indicating
    const LONGTEXT = "longtext";        // A TEXT column with a maximum length of 4,294,967,295 or 4GiB (2^32 - 1) characters, stored with a four-byte prefix
    const BINARY = "binary";            // Similar to the CHAR type, but stores binary byte strings rather than non-binary character strings
    const VARBINARY = "varbinary";      // Similar to the VARCHAR type, but stores binary byte strings rather than non-binary character strings
    const TINYBLOB = "tinyblob";        // A BLOB column with a maximum length of 255 (2^8 - 1) bytes, stored with a one-byte prefix indicating the length of the
    const BLOB = "blob";                // A BLOB column with a maximum length of 65,535 (2^16 - 1) bytes, stored with a two-byte prefix indicating the length of the value
    const MEDIUMBLOB = "mediumblob";    // A BLOB column with a maximum length of 16,777,215 (2^24 - 1) bytes, stored with a three-byte prefix indicating the
    const LONGBLOB = "longblob";        // A BLOB column with a maximum length of 4,294,967,295 or 4GiB (2^32 - 1) bytes, stored with a four-byte prefix indicating
    const ENUM = "enum";                // An enumeration, chosen from the list of up to 65,535 values or the special '' error value
    const SET = "set";                  // A single value chosen from a set of up to 64 members

    # Spatial

    const GEOMETRY = "geometry";        // A type that can store a geometry of any type
    const POINT = "point";              // A point in 2-dimensional space
    const LINESTRING = "linestring";    // A curve with linear interpolation between points
    const POLYGON = "polygon";          // A polygon
    const MULTIPOINT = "multipoint";    // A collection of points
    const MULTILINESTRING = "multilinestring"; // A collection of curves with linear interpolation between points
    const MULTIPOLYGON = "multipolygon";       // A collection of polygons
    const GEOMETRYCOLLECTION = "geometrycollection"; // A collection of geometry objects of any type

    # JSON

    const JSON = "json";                // Stores and enables efficient access to data in JSON (JavaScript Object Notation) documents

    # UUID

    const UUID = "uuid";                // uuid_create(UUID_VARIANT_DCE)
}
