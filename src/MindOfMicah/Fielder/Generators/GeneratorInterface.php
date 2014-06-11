<?php
namespace MindOfMicah\Fielder\Generators;

interface GeneratorInterface
{
    public function textField($id, $display_text);
    public function selectField($id, $display_text, array $options);
}
