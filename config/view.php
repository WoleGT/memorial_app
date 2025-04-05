<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the view files will be stored. In
    | most cases, you will not change this path, but you may want to
    | customize it if you're storing views in a different location.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | View Compiled Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade files will be stored.
    | A typical value for this is the storage/framework/views directory.
    |
    */

    'compiled' => env('VIEW_COMPILED_PATH', realpath(storage_path('framework/views'))),

];
