<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      https://github.com/zendframework/zend-file for the canonical source repository
 * @copyright Copyright (c) 2017 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-file/blob/master/LICENSE.md New BSD License
 */

namespace ZendTest\File\TestAsset\Anonymous;

final class WithAnonymousClass
{
    private $anonymous;

    public function __construct()
    {
        $this->anonymous = new class extends \stdClass {

        };
    }
}

