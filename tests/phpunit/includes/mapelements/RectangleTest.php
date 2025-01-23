<?php

namespace MultiMaps;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-02-26 at 04:41:21.
 */
class RectangleTest extends \PHPUnit\Framework\TestCase {

	/**
	 * @var Rectangle
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp(): void {
		$this->object = new Rectangle;
		parent::setUp();
	}

	/**
	 * @covers MultiMaps\Rectangle::getElementName
	 */
	public function testGetElementName() {
		$this->assertEquals(
				'Rectangle',
				$this->object->getElementName()
				);
	}

	/**
	 * @covers MultiMaps\Rectangle::getElementName
	 */
	public function testParseCoordinates() {
		$this->assertEquals(
				'Rectangle',
				$this->object->getElementName()
				);
	}
}
