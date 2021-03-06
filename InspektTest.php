<?php
require_once 'PHPUnit/Framework.php';

require_once 'Inspekt.php';

/**
 * Test class for Inspekt.
 * Generated by PHPUnit on 2009-07-18 at 19:53:18.
 */
class InspektTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var	   Inspekt
	 * @access protected
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @access protected
	 */
	protected function setUp()
	{
		// $this->object = new Inspekt;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 *
	 * @access protected
	 */
	protected function tearDown()
	{
	}

	/**
	 * Generated from @assert ('1)@*(&UR)HQ)W(*(HG))') === '1URHQWHG'.
	 */
	public function testGetAlnum()
	{
		$this->assertSame(
		  '1URHQWHG',
		  Inspekt::getAlnum('1)@*(&UR)HQ)W(*(HG))')
		);
	}

	/**
	 * Generated from @assert ('1)@*(&UR)HQ)56W(*(HG))') === '156'.
	 */
	public function testGetDigits()
	{
		$this->assertSame(
		  '156',
		  Inspekt::getDigits('1)@*(&UR)HQ)56W(*(HG))')
		);
	}

	/**
	 * Generated from @assert ('/usr/lib/php/Pear.php') === '/usr/lib/php'.
	 */
	public function testGetDir()
	{
		$this->assertSame(
		  '/usr/lib/php',
		  Inspekt::getDir('/usr/lib/php/Pear.php')
		);
	}

	/**
	 * Generated from @assert ('1)45@*(&UR)HQ)W.0000(*(HG))') === 1.
	 */
	public function testGetInt()
	{
		$this->assertSame(
		  1,
		  Inspekt::getInt('1)45@*(&UR)HQ)W.0000(*(HG))')
		);
	}

	/**
	 * Generated from @assert ('A1)45@*(&UR)HQ)W.0000(*(HG))') === 0.
	 */
	public function testGetInt2()
	{
		$this->assertSame(
		  0,
		  Inspekt::getInt('A1)45@*(&UR)HQ)W.0000(*(HG))')
		);
	}

	/**
	 * Generated from @assert ('NCOFWIERNVOWIEBHV12047057y0650ytg0314') === true.
	 */
	public function testIsAlnum()
	{
		$this->assertSame(
		  true,
		  Inspekt::isAlnum('NCOFWIERNVOWIEBHV12047057y0650ytg0314')
		);
	}

	/**
	 * Generated from @assert ('NCOFWIERNVOWIEBHV2@12047057y0650ytg0314') === false.
	 */
	public function testIsAlnum2()
	{
		$this->assertSame(
		  false,
		  Inspekt::isAlnum('NCOFWIERNVOWIEBHV2@12047057y0650ytg0314')
		);
	}

	/**
	 * Generated from @assert ('funkatron') === true.
	 */
	public function testIsAlnum3()
	{
		$this->assertSame(
		  true,
		  Inspekt::isAlnum('funkatron')
		);
	}

	/**
	 * Generated from @assert ('funkatron_user') === false.
	 */
	public function testIsAlnum4()
	{
		$this->assertSame(
		  false,
		  Inspekt::isAlnum('funkatron_user')
		);
	}

	/**
	 * Generated from @assert ('funkatron-user') === false.
	 */
	public function testIsAlnum5()
	{
		$this->assertSame(
		  false,
		  Inspekt::isAlnum('funkatron-user')
		);
	}

	/**
	 * Generated from @assert ('_funkatronuser') === false.
	 */
	public function testIsAlnum6()
	{
		$this->assertSame(
		  false,
		  Inspekt::isAlnum('_funkatronuser')
		);
	}

	/**
	 * Generated from @assert ('NCOFWIERNVOWIEBHV12047057y0650ytg0314') === false.
	 */
	public function testIsAlpha()
	{
		$this->assertSame(
		  false,
		  Inspekt::isAlpha('NCOFWIERNVOWIEBHV12047057y0650ytg0314')
		);
	}

	/**
	 * Generated from @assert ('NCOFWIERNVOWIEBHV2@12047057y0650ytg0314') === false.
	 */
	public function testIsAlpha2()
	{
		$this->assertSame(
		  false,
		  Inspekt::isAlpha('NCOFWIERNVOWIEBHV2@12047057y0650ytg0314')
		);
	}

	/**
	 * Generated from @assert ('funkatron') === true.
	 */
	public function testIsAlpha3()
	{
		$this->assertSame(
		  true,
		  Inspekt::isAlpha('funkatron')
		);
	}

	/**
	 * Generated from @assert ('funkatron_user') === false.
	 */
	public function testIsAlpha4()
	{
		$this->assertSame(
		  false,
		  Inspekt::isAlpha('funkatron_user')
		);
	}

	/**
	 * Generated from @assert ('funkatron-user') === false.
	 */
	public function testIsAlpha5()
	{
		$this->assertSame(
		  false,
		  Inspekt::isAlpha('funkatron-user')
		);
	}

	/**
	 * Generated from @assert ('_funkatronuser') === false.
	 */
	public function testIsAlpha6()
	{
		$this->assertSame(
		  false,
		  Inspekt::isAlpha('_funkatronuser')
		);
	}

	/**
	 * Generated from @assert (12, 0, 12) === TRUE.
	 */
	public function testIsBetween()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isBetween(12, 0, 12)
		);
	}

	/**
	 * Generated from @assert (12, 0, 12, FALSE) === FALSE.
	 */
	public function testIsBetween2()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isBetween(12, 0, 12, FALSE)
		);
	}

	/**
	 * Generated from @assert ('f', 'a', 'm', FALSE) === TRUE.
	 */
	public function testIsBetween3()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isBetween('f', 'a', 'm', FALSE)
		);
	}

	/**
	 * Generated from @assert ('p', 'a', 'm', FALSE) === FALSE.
	 */
	public function testIsBetween4()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isBetween('p', 'a', 'm', FALSE)
		);
	}

	/**
	 * Generated from @assert ('2009-06-30') === TRUE.
	 */
	public function testIsDate()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isDate('2009-06-30')
		);
	}

	/**
	 * Generated from @assert ('2009-06-31') === FALSE.
	 */
	public function testIsDate2()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isDate('2009-06-31')
		);
	}

	/**
	 * Generated from @assert ('2009-6-30') === TRUE.
	 */
	public function testIsDate3()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isDate('2009-6-30')
		);
	}

	/**
	 * Generated from @assert ('2-6-30') === TRUE.
	 */
	public function testIsDate4()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isDate('2-6-30')
		);
	}

	/**
	 * Generated from @assert ('1029438750192730t91740987023948') === FALSE.
	 */
	public function testIsDigits()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isDigits('1029438750192730t91740987023948')
		);
	}

	/**
	 * Generated from @assert ('102943875019273091740987023948') === TRUE.
	 */
	public function testIsDigits2()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isDigits('102943875019273091740987023948')
		);
	}

	/**
	 * Generated from @assert (102943875019273091740987023948) === FALSE.
	 */
	public function testIsDigits3()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isDigits(102943875019273091740987023948)
		);
	}

	/**
	 * Generated from @assert ('coj@poop.com') === TRUE.
	 */
	public function testIsEmail()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isEmail('coj@poop.com')
		);
	}

	/**
	 * Generated from @assert ('coj+booboo@poop.com') === TRUE.
	 */
	public function testIsEmail2()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isEmail('coj+booboo@poop.com')
		);
	}

	/**
	 * Generated from @assert ('coj!booboo@poop.com') === FALSE.
	 */
	public function testIsEmail3()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isEmail('coj!booboo@poop.com')
		);
	}

	/**
	 * Generated from @assert ('@poop.com') === FALSE.
	 */
	public function testIsEmail4()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isEmail('@poop.com')
		);
	}

	/**
	 * Generated from @assert ('a@b') === FALSE.
	 */
	public function testIsEmail5()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isEmail('a@b')
		);
	}

	/**
	 * Generated from @assert ('webmaster') === FALSE.
	 */
	public function testIsEmail6()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isEmail('webmaster')
		);
	}

	/**
	 * Generated from @assert (10244578109.234451) === TRUE.
	 */
	public function testIsFloat()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isFloat(10244578109.234451)
		);
	}

	/**
	 * Generated from @assert ('10244578109.234451') === FALSE.
	 */
	public function testIsFloat2()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isFloat('10244578109.234451')
		);
	}

	/**
	 * Generated from @assert ('10,244,578,109.234451') === FALSE.
	 */
	public function testIsFloat3()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isFloat('10,244,578,109.234451')
		);
	}

	/**
	 * Generated from @assert (5, 0) === TRUE.
	 */
	public function testIsGreaterThan()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isGreaterThan(5, 0)
		);
	}

	/**
	 * Generated from @assert (2, 10) === FALSE.
	 */
	public function testIsGreaterThan2()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isGreaterThan(2, 10)
		);
	}

	/**
	 * Generated from @assert ('b', 'a') === TRUE.
	 */
	public function testIsGreaterThan3()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isGreaterThan('b', 'a')
		);
	}

	/**
	 * Generated from @assert ('a', 'b') === FALSE.
	 */
	public function testIsGreaterThan4()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isGreaterThan('a', 'b')
		);
	}

	/**
	 * Generated from @assert ('6F') === TRUE.
	 */
	public function testIsHex()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isHex('6F')
		);
	}

	/**
	 * Generated from @assert ('F6') === TRUE.
	 */
	public function testIsHex2()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isHex('F6')
		);
	}

	/**
	 * 
	 */
	public function testMakeServerCage()
	{
		$cage = Inspekt::makeServerCage();
		$this->assertTrue($cage instanceof Inspekt_Cage);
	}

	/**
	 * 
	 */
	public function testMakeGetCage()
	{
		$cage = Inspekt::makeGetCage();
		$this->assertTrue($cage instanceof Inspekt_Cage);
	}

	/**
	 * 
	 */
	public function testMakePostCage()
	{
		$cage = Inspekt::makePostCage();
		$this->assertTrue($cage instanceof Inspekt_Cage);
	}

	/**
	 * 
	 */
	public function testMakeCookieCage()
	{
		$cage = Inspekt::makeCookieCage();
		$this->assertTrue($cage instanceof Inspekt_Cage);
	}

	/**
	 * 
	 */
	public function testMakeEnvCage()
	{
		$cage = Inspekt::makeEnvCage();
		$this->assertTrue($cage instanceof Inspekt_Cage);
	}

	/**
	 * 
	 */
	public function testMakeFilesCage()
	{
		$cage = Inspekt::makeFilesCage();
		$this->assertTrue($cage instanceof Inspekt_Cage);
	}

	/**
	 * session cages currently aren't supported
	 */
	public function testMakeSessionCage()
	{
		
	}

	/**
	 * 
	 */
	public function testMakeSuperCage()
	{
		$cage = Inspekt::makeSuperCage();
		$this->assertTrue($cage instanceof Inspekt_SuperCage);
	}

	/**
	 * 
	 */
	public function testUseFilterExt()
	{
		$this->assertTrue(Inspekt::useFilterExt(true));
		$this->assertTrue(Inspekt::useFilterExt());
		$this->assertFalse(Inspekt::useFilterExt(false));
		$this->assertFalse(Inspekt::useFilterExt());
	}

	/**
	 * 
	 */
	public function testConvertArrayToArrayObject()
	{
		$arr = array(1,2,3,4);
		$ao  = Inspekt::convertArrayToArrayObject($arr);
		$this->assertTrue($ao instanceof ArrayObject);
	}

	/**
	 * 
	 */
	public function testGetAlpha()
	{
		$input  = '0qhf01 *#R& !)*h09hqwe0fH! )efh0hf';
		$output = 'qhfRhhqwefHefhhf';
		$this->assertTrue(Inspekt::getAlpha($input) === $output);
	}

	/**
	 * 
	 */
	public function testGetPath()
	{
		$expected  = dirname(__FILE__);
		$this->assertTrue(Inspekt::getPath('./') == $expected);

		$expected = dirname(dirname(dirname(__FILE__)));
		$this->assertTrue(Inspekt::getPath('./../../') == $expected);
	}

	/**
	 * 
	 */
	public function testGetROT13()
	{
		$input = 'I am not an animal!';
		$expect= 'V nz abg na navzny!';
		$this->assertSame($expect, Inspekt::getROT13($input));
	}

	/**
	 * @todo Implement testIsCcnum().
	 */
	public function testIsCcnum()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testIsHostname().
	 */
	public function testIsHostname()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testIsInt().
	 */
	public function testIsInt()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testIsIp().
	 */
	public function testIsIp()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testIsLessThan().
	 */
	public function testIsLessThan()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testIsOneOf().
	 */
	public function testIsOneOf()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testIsPhone().
	 */
	public function testIsPhone()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testIsRegex().
	 */
	public function testIsRegex()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testIsUri().
	 */
	public function testIsUri()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testIsZip().
	 */
	public function testIsZip()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * 
	 */
	public function testNoTags()
	{
		$input = '<SCRIPT>alert(\'foobar\');</SCRIPT>';
		$expect= 'alert(\'foobar\');';
		$this->assertSame($expect, Inspekt::noTags($input));
	}

	/**
	 * What might look like blank spaces below are mostly low ASCII chars
	 */
	public function testNoTagsOrSpecial()
	{
		$input = '    <SCRIPT<strong>>alert(\'foobar\');<</strong>/SCRIPT>';
		$expect= '&#21;&#21;&#21;&#21;&#21;&#21;&#22; &#22; &#22; &#22; alert(&#039;foobar&#039;);';
		$this->assertSame($expect, Inspekt::noTagsOrSpecial($input));
	}

	/**
	 * 
	 */
	public function testNoPath()
	{
		$input = './../../../../../../../../../etc/passwd';
		$expect= 'passwd';
		$this->assertSame($expect, Inspekt::noPath($input));
	}

	/**
	 * @todo Implement testEscMySQL().
	 */
	public function testEscMySQL()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testEscPgSQL().
	 */
	public function testEscPgSQL()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testEscPgSQLBytea().
	 */
	public function testEscPgSQLBytea()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}
}
?>
