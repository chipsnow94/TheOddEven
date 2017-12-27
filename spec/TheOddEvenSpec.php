<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TheOddEvenSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('TheOddEven');
    }
    public function it_return_Even_when_1()
    {
        $this->caculate(1)->shouldReturn('Odd');
    }
    public function it_return_Prime_when_2()
    {
        $this->caculate(2)->shouldReturn(2);
    }
    public function it_return_Prime_when_3()
    {
        $this->caculate(3)->shouldReturn(3);
    }
    public function it_return_Odd_when_4()
    {
        $this->caculate(4)->shouldReturn('Even');
    }
    public function it_return_Odd_2_3_Odd_when_Array_1_4()
    {
        $this->caculateArray(1, 4)->shouldReturn(['Odd',2,3,'Even']);
    }
    public function it_return_Odd_2_3_Even_5_Even_7_Even_Odd_Even_when_Array_1_10()
    {
        $this->caculateArray(1, 10)->shouldReturn(['Odd',2,3,'Even',5,'Even',7,'Even','Odd','Even']);
    }
    public function it_return_Odd_Even_Odd_Even_Odd_Even_97_Even_Odd_Even_when_Array_91_100()
    {
        $this->caculateArray(91, 100)->shouldReturn(['Odd','Even','Odd','Even','Odd','Even',97,'Even','Odd','Even']);
    }
    public function it_invalid_number_exception()
    {
        $this->shouldThrow(new \InvalidArgumentException('Range must be number'))->duringCaculateArray('a', 5);
    }
}
