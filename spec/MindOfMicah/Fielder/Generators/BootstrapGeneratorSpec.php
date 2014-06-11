<?php

namespace spec\MindOfMicah\Fielder\Generators;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BootstrapGeneratorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('MindOfMicah\Fielder\Generators\BootstrapGenerator');
    }
    public function it_is_a_valid_generator()
    {
        $this->shouldImplement('MindOfMicah\Fielder\Generators\GeneratorInterface');
    }

    public function it_will_format_text_fields()
    {
       $this->textField('id', 'label')->shouldBe('<div class="form-group"><label class="control-label" for="id">label</label><input type="text" name="id" id="id" /></div>'); 
    }

    public function it_will_format_select_fields()
    {
        $this->selectField('id','label',array('k'=>'v'))->shouldBe('<div class="form-group"><label class="control-label" for="id">label</label><select name="id" id="id" class="form-control"><option value="k">v</option></select></div>');

    }
}
