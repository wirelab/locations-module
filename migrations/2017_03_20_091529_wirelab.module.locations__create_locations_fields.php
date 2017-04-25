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
        'email'       => 'anomaly.field_type.email',
        'country'     => 'anomaly.field_type.text',
        'city'        => 'anomaly.field_type.text',
        'address'     => 'anomaly.field_type.text',
        'address_additonal' => 'anomaly.field_type.text',
        'region'      => 'anomaly.field_type.text',
        'postal_code' => 'anomaly.field_type.text'
    ];

}
