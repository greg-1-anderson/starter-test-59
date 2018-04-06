<?php

namespace ExampleProject\Cli;

class ExampleCommands extends \Robo\Tasks
{
    /**
     * @command multiply
     */
    public function multiply($a, $b)
    {
        $model = new \ExampleProject\Example($a);
        $result = $model->multiply($b);

        $this->io()->text("$a times $b is $result");
    }
}
