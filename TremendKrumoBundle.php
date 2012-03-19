<?php

namespace Tremend\KrumoBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TremendKrumoBundle extends Bundle
{
    public function boot() {
        parent::boot();

        // Initialize krumo service to be available globally
        $this->container->get('krumo');
    }
}
