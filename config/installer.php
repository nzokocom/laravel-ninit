<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    | The name displayed in the installer wizard.
    */
    'name' => env('APP_NAME', 'Laravel App'),

    /*
    |--------------------------------------------------------------------------
    | Logo Path
    |--------------------------------------------------------------------------
    | Path to your logo image (relative to public/).
    */
    'logo' => null,

    /*
    |--------------------------------------------------------------------------
    | PHP Requirements
    |--------------------------------------------------------------------------
    */
    'requirements' => [
        'php_version' => '8.2',
        'extensions' => [
            'bcmath',
            'ctype',
            'curl',
            'dom',
            'fileinfo',
            'gd',
            'json',
            'mbstring',
            'openssl',
            'pcre',
            'pdo',
            'pdo_mysql',
            'tokenizer',
            'xml',
            'zip',
        ],
        'memory_limit' => '128M',
        'opcache' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Writable Directories
    |--------------------------------------------------------------------------
    | Directories that must be writable for installation.
    */
    'writable_directories' => [
        'storage/app',
        'storage/framework',
        'storage/logs',
        'bootstrap/cache',
    ],

    /*
    |--------------------------------------------------------------------------
    | Installation Steps
    |--------------------------------------------------------------------------
    | The ordered list of step classes that form the installation wizard.
    | Each class must implement InstallerStep. You can add, remove, or
    | reorder steps as needed for your application.
    */
    'steps' => [
        \Nzoko\Ninit\Steps\CheckRequirements::class,
        \Nzoko\Ninit\Steps\CheckPermissions::class,
        \Nzoko\Ninit\Steps\ConfigureEnvironment::class,
        \Nzoko\Ninit\Steps\RunMigrations::class,
        \Nzoko\Ninit\Steps\CreateAdmin::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin User Model
    |--------------------------------------------------------------------------
    | The model class for creating admin users.
    */
    'admin_model' => \App\Models\User::class,

    /*
    |--------------------------------------------------------------------------
    | After Admin Created Callback
    |--------------------------------------------------------------------------
    | Called after the admin user is created/saved. Receives the user model
    | instance. Use this to assign roles, permissions, or run any
    | post-creation logic specific to your application.
    |
    | Provide the fully qualified class name of an invokable class.
    |
    | Example:
    |   'on_admin_created' => \App\Installer\Callbacks\AdminCreated::class,
    */
    'on_admin_created' => null,

    /*
    |--------------------------------------------------------------------------
    | Extra Environment Fields
    |--------------------------------------------------------------------------
    | Additional .env variables to write during the environment step.
    | Each entry maps an env key to its UI configuration. These are
    | rendered as extra form fields on the database setup screen.
    |
    | Example:
    |   'environment_fields' => [
    |       'MULTI_TENANT' => [
    |           'type' => 'checkbox',
    |           'label' => 'Enable Multi-Tenancy',
    |           'description' => 'Host multiple businesses under one install.',
    |           'default' => false,
    |           'state_key' => 'multi_tenant',
    |       ],
    |   ],
    */
    'environment_fields' => [],

    /*
    |--------------------------------------------------------------------------
    | Seeder Class
    |--------------------------------------------------------------------------
    | The seeder to run if "Load Demo Data" is selected.
    | Default: 'DemoSeeder'
    */
    'seeder' => 'DemoSeeder',

    /*
    |--------------------------------------------------------------------------
    | Installation Lock File
    |--------------------------------------------------------------------------
    | The file that marks the application as installed.
    */
    'installed_file' => storage_path('installed'),

    /*
    |--------------------------------------------------------------------------
    | Theme
    |--------------------------------------------------------------------------
    | Accent tracks Krikkit (black in light, white in dark). Override to
    | match a host app's Settings → Themes accent. Mode: light|dark|system.
    */
    'theme' => [
        'accent' => '#262626',
        'accent_foreground' => '#ffffff',
        'accent_dark' => '#ffffff',
        'accent_dark_foreground' => '#1a1a1a',
        'mode' => 'system',
        // Legacy aliases — still read if `accent` is unset.
        'primary' => '#262626',
        'primary_dark' => '#1a1a1a',
    ],

    /*
    |--------------------------------------------------------------------------
    | After Install Callback
    |--------------------------------------------------------------------------
    | Called after successful installation, before the redirect.
    | Receives no arguments. Use this for custom post-install logic
    | like activating modules, sending notifications, etc.
    |
    | Provide the fully qualified class name of an invokable class.
    |
    | Example:
    |   'after_install' => \App\Installer\Callbacks\AfterInstall::class,
    */
    'after_install' => null,

    /*
    |--------------------------------------------------------------------------
    | Redirect After Install
    |--------------------------------------------------------------------------
    */
    'redirect_after_install' => '/admin/dashboard',
];
