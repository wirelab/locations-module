<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WirelabModuleLocationsCreateAddressesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'addresses',
        'title_column' => 'title',
        'translatable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'title' => [
            'required' => true,
        ],
        'name' => [
            'required' => true,
        ],
        'country' => [
            'translatable' => true,
            'required'     => true
        ],
        'city' => [
            'translatable' => true,
            'required'     => true
        ],
        'address' => [
            'translatable' => true,
            'required'     => true
        ],
        'address_additonal' => [
            'translatable' => true,
            'required'     => false
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
