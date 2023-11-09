<?php

namespace Shaka\LaravelTraitGenerator\Console;

use Illuminate\Console\GeneratorCommand;

class MakeTraitCommand extends GeneratorCommand
{
    protected $name = 'make:trait';
    protected $description = 'Create a new trait';
    protected $type = 'Trait';

    protected function getStub()
    {
        return __DIR__.'/../stubs/trait.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\\Traits';
    }
}
