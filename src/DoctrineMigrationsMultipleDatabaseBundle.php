<?php

namespace AvaiBookSports\Bundle\MigrationsMultipleDatabase;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DoctrineMigrationsMultipleDatabaseBundle extends Bundle
{
    public function getParent(): string
    {
        return 'DoctrineMigrationsBundle';
    }
}
