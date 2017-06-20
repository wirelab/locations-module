<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WirelabModuleLocationsCreateLocationsFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name'        => 'anomaly.field_type.text',
        'title'       => 'anomaly.field_type.text',
        'country'     => 'anomaly.field_type.text',
        'city'        => 'anomaly.field_type.text',
        'address'     => 'anomaly.field_type.text',
        'address_additional' => 'anomaly.field_type.text',
        'region'      => 'anomaly.field_type.text',
        'postal_code' => 'anomaly.field_type.text',
        'addresses' => [
            'type' => 'anomaly.field_type.multiple',
            'config' => [
                'related' => 'Wirelab\LocationsModule\Address\AddressModel',
            ],
            'name' => 'Addresses'
        ],
        'email'       => [
            'type' => 'anomaly.field_type.email',
            'locked' => 0,
            'name' => 'Email'
        ],
        'phone' => [
            'type' => 'anomaly.field_type.text',
            'locked' => 0,
            'name' => 'Phone',
        ],
        'tags' => [
            'type' => 'anomaly.field_type.tags',
			'locked' => 0,
            'name' => 'Tags',
        ],
    ];

}
