<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Session key
    |--------------------------------------------------------------------------
    |
    | Session key for messages.
    |
    */
    'session_key' => 'notifications',

    /*
    |--------------------------------------------------------------------------
    | Default container name
    |--------------------------------------------------------------------------
    |
    | This name will be used to name default container (when calling it with null value).
    |
    */
    'default_container' => 'default',

    /*
    |--------------------------------------------------------------------------
    | Default types for dynamic containers.
    |--------------------------------------------------------------------------
    |
    | These types will be added for new containers.
    |
    */
    'default_types' => ['info', 'success', 'warning', 'error'],

    /*
    |--------------------------------------------------------------------------
    | Types for containers
    |--------------------------------------------------------------------------
    |
    | Specify available types for each container separately.
    |
    */
    'types' => [],

    /*
    |--------------------------------------------------------------------------
    | Default message format
    |--------------------------------------------------------------------------
    |
    | This format will be used when no format is specified.
    | Available place holders:
    |
    | :type - type of message (error, warning, info, success).
    | :message - message text.
    |
    */
    'default_format' => "<script>$.notify({message: ':message'}, {type: ':type', mouse_over: 'pause', z_index: 9999, animate:{enter: \"animated fadeIn\", exit: \"animated fadeOut\"}});</script>",

    /*
    |--------------------------------------------------------------------------
    | Default message format for containers
    |--------------------------------------------------------------------------
    |
    | This format will be used to override global default format for each container.
    |
    | 'format' => array(
    |       'myContainer' => ':message - :type',
    | )
    |
    |
    | Available place holders:
    |
    | :type - type of message (error, warning, info, success).
    | :message - message text.
    |
    */
    'format' => [],

    /*
    |--------------------------------------------------------------------------
    | Default message formats for types
    |--------------------------------------------------------------------------
    |
    | These formats can override default format for each type of message (error, warning, info, success).
    | Available place holders:
    |
    | :type - type of message (error, warning, info, success).
    | :message - message text.
    |
    */
    'default_formats' => [],

    /*
    |--------------------------------------------------------------------------
    | Message formats for types and container types
    |--------------------------------------------------------------------------
    |
    | These formats can override default format for each type of message (error, warning, info, success).
    | You can set formats for each container by using this syntax:
    |
    | 'formats' => array(
    |       'myContainer' => array(
    |           'info' => ':key - :message'
    |       )
    |   )
    |
    | Available place holders:
    |
    | :type - type of message (error, warning, info, success).
    | :message - message text.
    |
    */
    'formats' => [],

];
