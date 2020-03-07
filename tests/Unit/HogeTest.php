<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;

class HogeTest extends TestCase
{
    use DatabaseMigrations;
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

        //assertArrayHasKey()
        //assertClassHasAttribute()
        //assertArraySubset()
        //assertClassHasStaticAttribute()
        //assertContains()
        //assertContainsOnly()
        //assertContainsOnlyInstancesOf()
        //assertCount()
        //assertDirectoryExists()
        //assertDirectoryIsReadable()
        //assertDirectoryIsWritable()
        //assertEmpty()
        $arr = [];
        $this->assertEmpty($arr);

        //assertEqualXMLStructure()
        //assertEquals()
        $msg = "Hello";
        $this->assertEquals('Hello',$msg);

        //assertFalse()
        $this->assertFalse(false);

        //assertFileEquals()
        //assertFileExists()
        //assertFileIsReadable()
        //assertFileIsWritable()
        //assertGreaterThan()
        $n = "101";
        $this->assertGreaterThan(100,$n);

        //assertGreaterThanOrEqual()
        $n = "100";
        $this->assertGreaterThanOrEqual(100,$n);

        //assertInfinite()
        //assertInstanceOf()
        //assertIsArray()
        //assertIsBool()
        //assertIsCallable()
        //assertIsFloat()
        //assertIsInt()
        //assertIsIterable()
        //assertIsNumeric()
        //assertIsObject()
        //assertIsResource()
        //assertIsScalar()
        //assertIsString()
        //assertIsReadable()
        //assertIsWritable()
        //assertJsonFileEqualsJsonFile()
        //assertJsonStringEqualsJsonFile()
        //assertJsonStringEqualsJsonString()
        //assertLessThan()
        $n = "99";
        $this->assertLessThan(100,$n);

        //assertLessThanOrEqual()
        $n = "100";
        $this->assertLessThanOrEqual(100,$n);

        //assertNan()
        //assertNull()
        $this->assertNull(null);

        //assertObjectHasAttribute()
        //assertRegExp()
        //assertStringMatchesFormat()
        //assertStringMatchesFormatFile()
        //assertSame()
        //assertStringEndsWith()
        $this->assertStringEndsWith("efj","abcdefj");

        //assertStringEqualsFile()
        //assertStringStartsWith()
        $this->assertStringStartsWith("abc","abcdefj");

        //assertThat()
        //assertTrue()
        $this->assertTrue(true);
        $this->assertTrue(false);

        //assertXmlFileEqualsXmlFile()
        //assertXmlStringEqualsXmlFile()
        //assertXmlStringEqualsXmlString()

        //assertStatus()
        $response = $this->get('/');
        $response->assertStatus(200);

        //assertNotEquals()
        $msg = "Hellox";
        $this->assertNotEquals('Hello',$msg);

        //assertNotEmpty
        $arr = [1];
        $this->assertNotEmpty($arr);

        //assertNotNull()
        $this->assertNotNull("hoge");

        //assertDatabaseHas()
        factory(User::class)->create([
            'name' => 'AAA',
            'email' => 'BBB@CCC.COM',
            'password' => 'ABCABC',
        ]);
        $this->assertDatabaseHas('users',[
            'name' => 'AAA',
            'email' => 'BBB@CCC.COM',
            'password' => 'ABCABC',
        ]);

    }

}
