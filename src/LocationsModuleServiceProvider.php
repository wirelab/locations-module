<?php namespace Wirelab\LocationsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Wirelab\LocationsModule\Location\Contract\LocationRepositoryInterface;
use Wirelab\LocationsModule\Location\LocationRepository;

class LocationsModuleServiceProvider extends AddonServiceProvider
{

    protected $plugins = [];

    protected $commands = [];

    protected $routes = [
        'admin/locations'                                    => 'Wirelab\LocationsModule\Http\Controller\Admin\LocationsController@index',
        'admin/locations/create'                             => 'Wirelab\LocationsModule\Http\Controller\Admin\LocationsController@create',
        'admin/locations/edit/{id}'                          => 'Wirelab\LocationsModule\Http\Controller\Admin\LocationsController@edit',
        'admin/locations/assignments'                        => 'Wirelab\LocationsModule\Http\Controller\Admin\LocationsController@assignments',
        'admin/locations/fields'                             => 'Wirelab\LocationsModule\Http\Controller\Admin\FieldsController@index',
        'admin/locations/fields/choose'                      => 'Wirelab\LocationsModule\Http\Controller\Admin\FieldsController@choose',
        'admin/locations/fields/create'                      => 'Wirelab\LocationsModule\Http\Controller\Admin\FieldsController@create',
        'admin/locations/fields/edit/{id}'                   => 'Wirelab\LocationsModule\Http\Controller\Admin\FieldsController@edit',
        'admin/locations/fields/assignments/{stream}'        => 'Wirelab\LocationsModule\Http\Controller\Admin\AssignmentsController@index',
        'admin/locations/fields/assignments/{stream}/choose' => 'Wirelab\LocationsModule\Http\Controller\Admin\AssignmentsController@choose',
        'admin/locations/fields/assignments/{stream}/create' => 'Wirelab\LocationsModule\Http\Controller\Admin\AssignmentsController@create',
    ];


    protected $middleware = [];

    protected $listeners = [];

    protected $aliases = [];

    protected $bindings = [];

    protected $providers = [];

    protected $singletons = [
        LocationRepositoryInterface::class => LocationRepository::class,
    ];

    protected $overrides = [];

    protected $mobile = [];

    public function register()
    {
    }

    public function map()
    {
    }

}
