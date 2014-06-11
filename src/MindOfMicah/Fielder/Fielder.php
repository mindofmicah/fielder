<?php

namespace MindOfMicah\Fielder;

use MindOfMicah\Fielder\Generators\GeneratorInterface;

class Fielder
{
    protected $generator;

    public function __construct(GeneratorInterface $generator)
    {
        $this->generator = $generator;
    }

    public function text($argument1, $argument2)
    {
        return $this->generator->textField($argument1, $argument2);
    }

    public function select($argument1, $argument2, array $argument3)
    {
        return $this->generator->selectField($argument1, $argument2, $argument3);
    }
}
