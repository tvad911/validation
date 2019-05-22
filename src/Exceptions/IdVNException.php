<?php
/**
 * @link https://github.com/phpviet/validation
 *
 * @copyright (c) PHP Viet
 * @license [MIT](https://opensource.org/licenses/MIT)
 */

namespace PHPViet\Validation\Exceptions;

use Respect\Validation\Exceptions\ValidationException;

/**
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 *
 * @since 1.0.0
 */
class IdVNException extends ValidationException
{
    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} must be a valid Viet Nam id number',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} must be a valid Viet Nam id number',
        ],
    ];
}
