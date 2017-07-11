<?php
/**
 * LoggerTest
 *
 * PHP version 7+
 *
 * Copyright (c) 2016 Federico Lozada Mosto <mosto.federico@gmail.com>
 * For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 *
 * @category  Mostofreddy\Loggy
 * @package   Mostofreddy\Loggy\Tests
 * @author    Federico Lozada Mosto <mosto.federico@gmail.com>
 * @copyright 2016 Federico Lozada Mosto <mosto.federico@gmail.com>
 * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link      http://www.mostofreddy.com.ar
 */
namespace Mostofreddy\Loggy\Tests;

use Mostofreddy\Loggy\Logger;
use Mostofreddy\Loggy\Handler\Dummy;
// PSR
use Psr\Log\LoggerInterface;
// PHPUnit
use PHPUnit\Framework\TestCase;

/**
 * LoggerTest
 *
 * @category  Mostofreddy\Loggy
 * @package   Mostofreddy\Loggy\Tests
 * @author    Federico Lozada Mosto <mosto.federico@gmail.com>
 * @copyright 2016 Federico Lozada Mosto <mosto.federico@gmail.com>
 * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link      http://www.mostofreddy.com.ar
 */
class LoggerLevelTraitTest extends TestCase
{
    /**
     * Test getLogLevelName - Emergency
     * 
     * @return void
     */
    public function testGetLogLevelNameEmergency()
    {
        $logger = new Logger;
        $level = $logger->getLogLevelName(Logger::EMERGENCY);

        $this->assertEquals("EMERGENCY", $level);
    }
}
