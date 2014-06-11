<?php

namespace spec\MindOfMicah\Fielder;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;


use MindOfMicah\Fielder\Generators\GeneratorInterface;

class FielderSpec extends ObjectBehavior
{
    public function let(FakeGenerator $g)
    {
        $this->beConstructedWith($g);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('MindOfMicah\Fielder\Fielder');
    }

    public function it_should_be_able_to_format_text_fields(FakeGenerator $g)
    {
        $g->textField('id', 'display text')->willReturn('output')->shouldBeCalled();
        $this->beConstructedWith($g);
        $this->text('id', 'display text')->shouldBe('output');;
    }

    public function it_should_be_able_to_format_dropdown_fields(FakeGenerator $g)
    {
        $g->selectField('id', 'display text', array())->willReturn('output')->shouldBeCalled();
        $this->beConstructedWith($g);
        $this->select('id', 'display text', array())->shouldBe('output');;
    }
}

class FakeGenerator implements GeneratorInterface{
    public function textField($id, $display_text){}
    public function selectField($id, $display_text, array $options){}
}
