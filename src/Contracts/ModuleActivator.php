<?php

namespace Nzoko\Ninit\Contracts;

interface ModuleActivator
{
    /**
     * Activate the specified module or vertical.
     *
     * @param string $moduleSlug The slug of the module/vertical to activate.
     * @param array $state The installer state data.
     */
    public function activate(string $moduleSlug, array $state = []): void;
}
