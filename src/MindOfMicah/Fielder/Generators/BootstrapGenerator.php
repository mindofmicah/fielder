<?php

namespace MindOfMicah\Fielder\Generators;

class BootstrapGenerator implements GeneratorInterface
{
    public function textField($id, $display_text)
    {
        return $this->wrap($id, $display_text, '<input type="text" name="'.$id.'" id="'.$id.'" />');
    }

    public function selectField($id, $display_text, array $options)
    {
        $ret='<select name="'.$id.'" id="'.$id.'" class="form-control">';
        foreach ($options as $k=>$option) {
            $ret.='<option value="'.$k.'">'.$option.'</option>';
        }
        $ret.='</select>';

        return $this->wrap($id, $display_text, $ret);
    }


    private function wrap($id, $display_text, $field_info)
    {
        return '<div class="form-group"><label class="control-label" for="' . $id . '">' . $display_text . '</label>' . $field_info . '</div>';
    }
}
