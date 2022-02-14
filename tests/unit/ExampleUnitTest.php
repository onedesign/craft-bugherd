<?php
/**
 * Bugherd plugin for Craft CMS 3.x
 *
 * Easily install Bugherd on your Craft CMS site
 *
 * @link      https://onedesigncompany.com/
 * @copyright Copyright (c) 2022 One Design Company
 */

namespace onedesign\bugherdtests\unit;

use Codeception\Test\Unit;
use UnitTester;
use Craft;
use onedesign\bugherd\Bugherd;

/**
 * ExampleUnitTest
 *
 *
 * @author    One Design Company
 * @package   Bugherd
 * @since     1.0.0
 */
class ExampleUnitTest extends Unit
{
    // Properties
    // =========================================================================

    /**
     * @var UnitTester
     */
    protected $tester;

    // Public methods
    // =========================================================================

    // Tests
    // =========================================================================

    /**
     *
     */
    public function testPluginInstance()
    {
        $this->assertInstanceOf(
            Bugherd::class,
            Bugherd::$plugin
        );
    }

    /**
     *
     */
    public function testCraftEdition()
    {
        Craft::$app->setEdition(Craft::Pro);

        $this->assertSame(
            Craft::Pro,
            Craft::$app->getEdition()
        );
    }
}
