<?php
namespace Stack\Tests;

use Stack\Stack;

/**
 * Created by PhpStorm.
 * User: mat
 * Date: 14/12/12
 * Time: 16:08
 */
class StackTest extends \PHPUnit_Framework_TestCase
{
    /** @var  \Stack\Stack */
    private $stack;

    public function setUp()
    {
        $this->stack = new Stack();
    }

    /**
     * newしたときにスタックが空
     */
    public function testCreatedStackIsEmpty()
    {
        $this->assertTrue($this->stack->isEmpty());
    }

    /**
     * pushしてtopしたとき同じものが返却されるか
     */
    public function testPushTop()
    {
        $this->stack->push(1);
        $this->assertEquals(1, $this->stack->top());
    }

    /**
     * pushするたびsizeがふえる
     */
    public function testSize()
    {
        $this->stack->push(1);
        $this->assertEquals(1, $this->stack->size());
        $this->stack->push(2);
        $this->assertEquals(2, $this->stack->size());
    }

    /**
     * いきなりtopしたとき例外が発生するか
     * @expectedException \Exception
     */
    public function testTopThrowException()
    {
        $this->stack->top();
    }

    /**
     * いきなりpopしたとき例外が発生するか
     * @expectedException \Exception
     */
    public function testPopThrowException()
    {
        $this->stack->pop();
    }

    /**
     * pushしてpopしたらサイズが0になっているか
     */
    public function testPushAndPop()
    {
        $this->stack->push(1);
        $this->stack->pop();
        $this->assertEquals(0,$this->stack->size());
    }

    public function testPushPushTopPoPTop()
    {
        $this->stack->push("キュアピース");
        $this->stack->push("キュアエース");
        $this->assertEquals("キュアエース", $this->stack->top());
        $this->stack->pop();
        $this->assertEquals("キュアピース", $this->stack->top());
    }

}