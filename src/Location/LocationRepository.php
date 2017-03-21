<?php namespace Wirelab\LocationsModule\Location;

use Wirelab\LocationsModule\Location\Contract\LocationRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class LocationRepository extends EntryRepository implements LocationRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var LocationModel
     */
    protected $model;

    /**
     * Create a new LocationRepository instance.
     *
     * @param LocationModel $model
     */
    public function __construct(LocationModel $model)
    {
        $this->model = $model;
    }
}
