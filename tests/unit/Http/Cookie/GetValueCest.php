<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Test\Unit\Http\Cookie;

use UnitTester;

class GetValueCest
{
    /**
     * Tests Phalcon\Http\Cookie :: getValue()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function httpCookieGetValue(UnitTester $I)
    {
        $I->wantToTest('Http\Cookie - getValue()');

        $I->skipTest('Need implementation');
    }
}
