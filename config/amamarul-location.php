<?php

return [
        'name' => 'Localization Manager',
        /**
         * Views
         */
        'layout' => 'langs::layouts.app',
        'content_section' => 'content_translation',
        'scripts_section' => 'scripts',
        'message_success_variable' => 'flash_success',
        /**
         * Routes
         */
        'prefix' => '/dashboard/admin/translations',
        'middlewares' => ['web', 'admin'],
];
