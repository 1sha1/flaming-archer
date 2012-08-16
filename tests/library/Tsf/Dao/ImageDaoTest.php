<?php

namespace Tsf\Dao;

require_once dirname(__FILE__) . '/../../../../library/Tsf/Dao/ImageDao.php';

/**
 * Test class for ImageDao.
 * Generated by PHPUnit on 2012-08-15 at 22:52:25.
 */
class ImageDaoTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var ImageDao
     */
    protected $dao;

    /**
     * @var \PDO
     */
    protected $db;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->db = new \PDO('sqlite::memory:');
        $this->db->exec(file_get_contents(realpath(__DIR__ . '/../../../_files/365.sql')));
        $this->dao = new ImageDao($this->db);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        $this->dao = null;
        $this->db = null;
    }
    
    /**
     * @covers Tsf\Dao\ImageDao::find
     * @todo Implement testFind().
     */
    public function testFind()
    {
        $result = $this->dao->find(1);
        $this->assertInternalType('array', $result);
        $this->assertEquals(1, $result['day']);
        $this->assertEquals(7606616668, $result['photo_id']);
    }

    /**
     * @covers Tsf\Dao\ImageDao::findAll
     * @todo Implement testFindAll().
     */
    public function testFindAll()
    {
        $result = $this->dao->findAll();
        $this->assertInternalType('array', $result);
        $this->assertEquals(7, count($result));
    }

    /**
     * @covers Tsf\Dao\ImageDao::save
     * @todo Implement testSave().
     */
    public function testSave()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Tsf\Dao\ImageDao::delete
     * @todo Implement testDelete().
     */
    public function testDelete()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

}