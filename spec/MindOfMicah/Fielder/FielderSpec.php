<?php

namespace spec\MindOfMicah\Fielder;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;



class FielderSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('MindOfMicah\Fielder\Fielder');
    }

    public function it_should_be_able_to_format_text_fields()
    {
       $this->text('id', 'label')->shouldBe('<div class="form-group"><label class="control-label" for="id">label</label><input class="form-control" type="text" name="id" id="id" /></div>'); 

    }

    public function it_should_be_able_to_format_dropdown_fields()
    {
        $this->select('id','label',array('k'=>'v'))->shouldBe('<div class="form-group"><label class="control-label" for="id">label</label><select name="id" id="id" class="form-control"><option value="k">v</option></select></div>');

    }

    public function it_should_be_able_to_format_textarea_fields()
    {
       $this->textarea('id', 'label')->shouldBe('<div class="form-group"><label class="control-label" for="id">label</label><textarea class="form-control" name="id" id="id"></textarea></div>'); 

    }

}
