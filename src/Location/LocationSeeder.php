<?php namespace Wirelab\LocationsModule\Location;

use Anomaly\Streams\Platform\Assignment\Contract\AssignmentRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Anomaly\Streams\Platform\Field\Contract\FieldRepositoryInterface;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;
use Anomaly\Streams\Platform\Stream\StreamModel;
use Wirelab\LocationsModule\Location\Contract\LocationRepositoryInterface;
use Wirelab\LocationsModule\Address\Contract\AddressRepositoryInterface;

class LocationSeeder extends Seeder
{
	protected $namespace;
	protected $locations;
	protected $fields;
	protected $assignments;
	protected $stream;
    protected $addresses;

	public function __construct(
        AddressRepositoryInterface $addresses,
		LocationRepositoryInterface $locations,
        AssignmentRepositoryInterface $assignments,
		FieldRepositoryInterface $fields,
		StreamModel $streams
	)
	{
		$this->namespace = 'locations';
		$this->locations = $locations;
		$this->fields = $fields;
		$this->assignments = $assignments;
		$this->stream = $streams->where('slug','=','locations')->first();
        $this->addresses = $addresses;
	}

    /**
     * Run the seeder.
     */
    public function run()
    {
        $address1 = $this->addresses->create([
            'title' => 'Bezoekadres',
            'name' => 'Wirelab',
        	'postal_code' => '7511 PG',
            'country' => 'The Netherlands',
            'city' => 'Enschede',
            'address' => 'Willem Wilminkplein 9',
            'region' => 'Overijssel',
        ]);

        $wirelab = $this->locations->create([
            'name' => 'Wirelab',
            'email' => 'info@wirelab.nl',
            'phone' => '053 203 0700',
        	'tags' =>  ['wirelab', 'The Netherlands', 'Enschede', 'Willem Wilminkplein 9', 'Overijssel','7511 PG','053 203 0700', 'info@wirelab.nl'],
        ]);
        $wirelab->addresses()->attach($address1);
    }
}
