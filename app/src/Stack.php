<?php
namespace Stack;

/**
 * Created by PhpStorm.
 * User: mat
 * Date: 14/12/12
 * Time: 16:13
 */
class Stack
{
    private $array = array();

    public function isEmpty()
    {
        return ((int)$this->size() === 0);
    }

    public function push($value)
    {
        $this->array[] = $value;
    }

    public function top()
    {
        $this->throwExceptionIfEmpty();
        return end($this->array);
    }

    public function size()
    {
        return count($this->array);
    }

    public function pop()
    {
        $this->throwExceptionIfEmpty();
        array_pop($this->array);
    }

    public function throwExceptionIfEmpty()
    {
        if ($this->isEmpty()) {
            throw new \Exception;
        }
    }


}