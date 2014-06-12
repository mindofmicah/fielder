<?php

namespace MindOfMicah\Fielder;

use MindOfMicah\Fielder\Generators\GeneratorInterface;

class Fielder
{
    public function text($id, $label)
    {
        return '<div class="form-group"><label class="control-label" for="' . $id . '">' . $label . '</label><input class="form-control" type="text" name="'.$id.'" id="'.$id.'" /></div>';
    }

    public function select($id, $label, array $options)
    {
        $ret = '';
        $ret.= '<div class="form-group"><label class="control-label" for="'.$id.'">'.$label.'</label><select name="'.$id.'" id="'.$id.'" class="form-control">';
        foreach($options as $k => $option ) {
            $ret.='<option value="'.$k.'">'.$option.'</option>';
        }
        $ret.='</select></div>';
        return $ret;
    }

    public function textarea($id, $label)
    {

        return '<div class="form-group"><label class="control-label" for="' . $id . '">' . $label . '</label><textarea class="form-control" name="'.$id.'" id="'.$id.'"></textarea></div>';

    }
}
