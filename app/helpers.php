<?php

/**
 * Global helpers file with misc functions
 *
 */

if (! function_exists('org_name')) {
    /**
     * Helper to grab the application name
     *
     * @return mixed
     */
    function org_name()
    {
        return config('app.org_name');
    }
}

if (! function_exists('theme_path')) {
    /**
     * Helper to grab the application name
     *
     * @return mixed
     */
    function theme_path()
    {
        return asset('public/themes/backend/modular_admin');
    }
}