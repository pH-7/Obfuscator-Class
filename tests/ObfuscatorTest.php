<?php
/**
 * @author           Pierre-Henry Soria <hi@ph7.me>
 * @copyright        (c) 2018-2020, Pierre-Henry Soria. All Rights Reserved.
 * @license          MIT License; <https://opensource.org/licenses/MIT>
 * @link             https://ph7.me
 */

class ObfuscatorTest extends PHPUnit_Framework_TestCase
{
    const EXPECTED_DATA_FILENAME = 'expected-data.txt';

    /**
     * @dataProvider codeSampleProvider
     */
    public function testToString($sData)
    {
        $oObfusationData = new Obfuscator($sData, 'Test code');

        $this->assertEquals($this->getExpectedData(), $oObfusationData);
    }

    /**
     * @return array
     */
    public function codeSampleProvider()
    {
        $sData = "echo 'This is PHP echo to be tested';";

        return array(
            array($sData)
        );
    }

    /**
     * @return bool|string
     */
    private function getExpectedData()
    {
        return file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . self::EXPECTED_DATA_FILENAME);
    }
}
