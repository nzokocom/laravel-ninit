<?php

namespace Nzoko\Ninit\Services;

use Nzoko\Ninit\Contracts\InstallationStateManager;

class FileInstallationStateManager implements InstallationStateManager
{
    public function isInstalled(): bool
    {
        return file_exists($this->getFile());
    }

    public function markInstalled(): void
    {
        file_put_contents($this->getFile(), now()->toIso8601String());
    }

    protected function getFile(): string
    {
        return config('installer.installed_file') ?? storage_path('installed');
    }
}
