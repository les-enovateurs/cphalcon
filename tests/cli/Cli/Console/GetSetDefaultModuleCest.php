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

namespace Phalcon\Test\Cli\Cli\Console;

use CliTester;
use Phalcon\Cli\Console as CliConsole;
use Phalcon\Di\FactoryDefault\Cli as DiFactoryDefault;

class GetSetDefaultModuleCest
{
    /**
     * Tests Phalcon\Cli\Console - getDefaultModule() / setDefaultModule()
     * Tests Phalcon\Cli\Console :: setDefaultModule()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     *
     * @author Nathan Edwards <https://github.com/npfedwards>
     * @since  2018-12-26
     */
    public function cliConsoleSetGetDefaultModule(CliTester $I)
    {
        $I->wantToTest("Cli\Console - getDefaultModule() / setDefaultModule()");

        $console = new CliConsole(new DiFactoryDefault());

        $console->setDefaultModule('moduleName');

        $I->assertEquals(
            'moduleName',
            $console->getDefaultModule()
        );
    }
}
