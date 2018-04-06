<?php

namespace StarterTest59\Cli;

class ExampleCommands extends \Robo\Tasks
{
    /**
     * @command multiply
     */
    public function multiply($a, $b)
    {
        $model = new \StarterTest59\Example($a);
        $result = $model->multiply($b);

        $this->io()->text("$a times $b is $result");
    }
}
