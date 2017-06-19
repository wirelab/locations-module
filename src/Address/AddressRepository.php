<?php namespace Wirelab\LocationsModule\Address;

use Wirelab\LocationsModule\Address\Contract\AddressRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class AddressRepository extends EntryRepository implements AddressRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var AddressModel
     */
    protected $model;

    /**
     * Create a new AddressRepository instance.
     *
     * @param AddressModel $model
     */
    public function __construct(AddressModel $model)
    {
        $this->model = $model;
    }
}
