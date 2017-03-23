<?php namespace Wirelab\LocationsModule;

use Anomaly\Streams\Platform\Addon\Module\Module;


class LocationsModule extends Module
{

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-map-marker';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'locations' => [
            'buttons' => [
                'new_location' => [
                    'text' => 'module::button.location.new',
                ],
                'assignments' =>[
                    'enabled' => 'admin/locations'
                ],
            ]
        ],
        'fields' => [
            'buttons' => [
                'new_field' => [
                    'text'        => 'module::button.field.new',
                    'data-toggle' => 'modal',
                    'data-target' => '#modal',
                    'href'        => 'admin/locations/fields/choose',
                ],
            ],
            'sections' => [
                'assignments' => [
               'hidden' => true,
                    'href'    => 'admin/locations/fields/assignments/{request.route.parameters.stream}',
                    'buttons' => [
                        'assign_fields' => [
                            'data-toggle' => 'modal',
                            'data-target' => '#modal',
                            'href'        => 'admin/locations/fields/assignments/{request.route.parameters.stream}/choose',
                        ],
                    ]
                ]
            ],
        ],
    ];


}
