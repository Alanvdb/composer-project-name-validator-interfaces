<?php declare(strict_types=1);

namespace AlanVdb\Composer\Definition;

use AlanVdb\Validator\ValidatorInterface;

interface ComposerProjectNameValidatorFactoryInterface
{
    public function create() : ValidatorInterface;
}
