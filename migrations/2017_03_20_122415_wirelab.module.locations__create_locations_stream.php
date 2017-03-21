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
            'translatable' => true,
            'required'     => true
        ],
        'email' => [
            'translatable' => true,
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
    ];

}
