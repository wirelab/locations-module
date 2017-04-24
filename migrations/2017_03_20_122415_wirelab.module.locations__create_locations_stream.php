<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WirelabModuleLocationsCreateLocationsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'locations',
        'title_column' => 'name',
        'translatable' => true,
        'sortable'     => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name' => [
            'translatable' => false,
            'required'     => true
        ],
        'email' => [
            'translatable' => false,
            'required'     => true
        ],
        'country' => [
            'translatable' => true,
            'required'     => true
        ],
        'city' => [
            'translatable' => true,
            'required'     => true
        ],
        'street' => [
            'translatable' => true,
            'required'     => true
        ],
        'postal_code' => [
            'translatable' => false,
            'required'     => true
        ],
        'region' => [
            'translatable' => true,
            'required'     => false
        ],
    ];

}
