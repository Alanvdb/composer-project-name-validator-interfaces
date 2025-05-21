<?php declare(strict_types=1);

namespace AlanVdb\Composer\Definition;

use AlanVdb\Validator\Definition\ValidatorInterface;

interface ComposerProjectNameValidatorFactoryInterface
{
    public function create(string $errorMessage = 'The project name must be in the format vendor/package.') : ValidatorInterface;
}
