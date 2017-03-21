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
        'name'     => 'anomaly.field_type.text',
        'email'    => 'anomaly.field_type.email',
        'location' => 'anomaly.field_type.geocoder',
    ];

}
