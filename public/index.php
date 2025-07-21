<?php

use Infrastructure\Symfony\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context): \Infrastructure\Symfony\Kernel {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
