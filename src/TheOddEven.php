<?php

use Psr\Log\InvalidArgumentException;

class TheOddEven
{
    const MAX_NUMBER =100;
    const MIN_NUMBER =1;
    const Condition =2;
    const NOT_PRIME =1;
    const ODD ='Odd';
    const EVEN ='Even';
    private $startnum;
    private $endnum;

    public function caculateArray($startnum, $endnum)
    {
        $this->Is_Number($startnum, $endnum);
        $result=[];
        $arrayNumber=range($startnum, $endnum);
        foreach ($arrayNumber as $number) {
            $result[]= $this->caculate($number);
        }
        return $result;
    }
    public function caculate($number)
    {
        if ($this->Is_Prime($number)) {
            return $number;
        }
        if ($this->Is_Odd($number)) {
            return self::ODD;
        }
        if ($this->Is_Even($number)) {
            return self::EVEN;
        }
    }

    private function Is_Prime($number)
    {
        if ($number==SELF::NOT_PRIME) {
            return false;
        }
        for ($condition=2; $condition < $number ; $condition++) {
            if ($number % $condition ==0) {
                return false;
            }
        }
        return true;
    }
    
    private function Is_Odd($number)
    {
        if (($number % self::Condition !=0)) {
            return true;
        }
    }
    private function Is_Even($number)
    {
        if (!$this->Is_Prime($number) && ($number % self::Condition ==0)) {
            return true;
        }
    }
    private function Is_Valid_Range()
    {
        if ($number < self::MIN_NUMBER) {
            throw new InvalidArgumentException('Min Number start at 1');
        }
        if ($number > self::MAX_NUMBER) {
            throw new InvalidArgumentException('Max Number is 100');
        }
    }
    public function Is_Number($startnum, $endnum)
    {
        if (!is_numeric($startnum) || (!is_numeric($endnum))) {
            throw new InvalidArgumentException('Range must be number');
        }
    }
}
