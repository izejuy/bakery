<?php
declare(strict_types=1);
/**
 * Baker - A simple PHP extension for basic cookie functions.
 */
namespace Bakery\Oven\Exception;

use Exception;

class CookieWrongfullyMadeException extends Exception implements ExceptionInterface { }
