<?php
/**
 * Tests for PMA_StorageEngine_binlog
 *
 * @package PhpMyAdmin-test
 */
namespace PhpMyAdmin\Tests\Engines;

use PhpMyAdmin\Engines\Binlog;

/**
 * Tests for PhpMyAdmin\Engines\Binlog
 *
 * @package PhpMyAdmin-test
 */
class BinlogTest extends \PMATestCase
{
    /**
     * @access protected
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     *
     * @access protected
     * @return void
     */
    protected function setUp()
    {
        $GLOBALS['server'] = 0;
        $this->object = new Binlog('binlog');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     *
     * @access protected
     * @return void
     */
    protected function tearDown()
    {
        unset($this->object);
    }


    /**
     * Test for getMysqlHelpPage
     *
     * @return void
     */
    public function testGetMysqlHelpPage()
    {
        $this->assertEquals(
            $this->object->getMysqlHelpPage(),
            'binary-log'
        );
    }
}
