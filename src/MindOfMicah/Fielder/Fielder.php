<?php

namespace MindOfMicah\Fielder;


class Fielder
{
    private $field_class = 'form-control';

    public function text($id, $label)
    {
        return $this->wrap(
            $id, 
            $label,
            '<input class="' . $this->field_class . '" type="text" name="' . $id . '" id="' . $id . '" />'
        );
    }

    public function select($id, $label, array $options)
    {
        $ret = '<select name="' . $id . '" id="' . $id . '" class="'.$this->field_class.'">';
        foreach($options as $k => $option ) {
            $ret .= '<option value="' . $k . '">' . $option . '</option>';
        }
        $ret .= '</select>';

        return $this->wrap(
            $id,
            $label,
            $ret
        );
        return $ret;
    }

    public function textarea($id, $label)
    {
        return $this->wrap(
            $id, 
            $label, 
            '<textarea class="' . $this->field_class . '" name="' . $id . '" id="' . $id . '"></textarea>'
        );

    }

    private function wrap($id, $label, $field_content)
    {
        return '<div class="form-group"><label class="control-label" for="' . $id . '">'.$label.'</label>' . $field_content . '</div>';
    }
}
