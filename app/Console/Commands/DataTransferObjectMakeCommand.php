<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class DataTransferObjectMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:dto';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new DTO class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'DataTransferObject';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return base_path('stubs/dto.stub');
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\DataTransferObjects';
    }
}
