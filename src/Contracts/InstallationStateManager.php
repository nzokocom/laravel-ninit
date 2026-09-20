<?php

namespace Nzoko\Ninit\Contracts;

interface InstallationStateManager
{
    /**
     * Check if the application is installed.
     */
    public function isInstalled(): bool;

    /**
     * Mark the application as installed.
     */
    public function markInstalled(): void;
}
