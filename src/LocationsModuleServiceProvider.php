<?php namespace Wirelab\LocationsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Wirelab\LocationsModule\Location\Contract\LocationRepositoryInterface;
use Wirelab\LocationsModule\Location\LocationRepository;
use Anomaly\Streams\Platform\Field\FieldRouter;
use Wirelab\LocationsModule\Http\Controller\Admin\FieldsController;

class LocationsModuleServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'admin/locations'                                    => 'Wirelab\LocationsModule\Http\Controller\Admin\LocationsController@index',
        'admin/locations/create'                             => 'Wirelab\LocationsModule\Http\Controller\Admin\LocationsController@create',
        'admin/locations/edit/{id}'                          => 'Wirelab\LocationsModule\Http\Controller\Admin\LocationsController@edit',
        'admin/locations/assignments'                        => 'Wirelab\LocationsModule\Http\Controller\Admin\LocationsController@assignments',
        'admin/locations/fields/assignments/{stream}'        => 'Wirelab\LocationsModule\Http\Controller\Admin\AssignmentsController@index',
        'admin/locations/fields/assignments/{stream}/choose' => 'Wirelab\LocationsModule\Http\Controller\Admin\AssignmentsController@choose',
        'admin/locations/fields/assignments/{stream}/create' => 'Wirelab\LocationsModule\Http\Controller\Admin\AssignmentsController@create',
    ];

    protected $bindings = [
        'Anomaly\Streams\Platform\Model\Locations\LocationsLocationsEntryModel' => 'Wirelab\LocationsModule\Location\LocationModel',
    ];

    protected $singletons = [
        LocationRepositoryInterface::class => LocationRepository::class,
    ];

    /**
     * Register the addon.
     *
     * @param FieldRouter $fields
     */
    public function register(FieldRouter $fields)
    {
        $fields->route($this->addon, FieldsController::class, 'locations');
    }
}
