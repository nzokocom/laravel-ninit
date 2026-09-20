# Changelog

All notable changes to Ninit will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Changed
- Installer UI restyled to the Krikkit design system: Sora, semantic surfaces, pill controls, no elevation shadows, and system light/dark.

## [1.0.0] - 2026-08-23

### Added
- Config-driven installation step pipeline via `config('installer.steps')`.
- Server requirements and writable-directory checks.
- Database connection testing with optional database creation.
- Admin account creation with an `on_admin_created` hook.
- Extra `.env` fields via `environment_fields`.
- Full UI localization (`lang/en/installer.php`).
- `php artisan make:installer-step` generator.
- API-friendly 503 middleware until installation is complete.
- Support for Laravel 10–13 and Livewire 3/4.
