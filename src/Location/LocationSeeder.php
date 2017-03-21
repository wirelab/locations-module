<?php namespace Wirelab\LocationsModule\Location;

use Anomaly\Streams\Platform\Assignment\Contract\AssignmentRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Anomaly\Streams\Platform\Field\Contract\FieldRepositoryInterface;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;
use Anomaly\Streams\Platform\Stream\StreamModel;
use Wirelab\LocationsModule\Location\Contract\LocationRepositoryInterface;

class LocationSeeder extends Seeder
{
	protected $namespace;
	protected $locations;
	protected $fields;
	protected $assignments;
	protected $stream;

	public function __construct(
		LocationRepositoryInterface $locations,
        AssignmentRepositoryInterface $assignments,
		FieldRepositoryInterface $fields,
		StreamModel $streams
	)
	{
		$this->namespace   = 'locations';
		$this->locations   = $locations;
		$this->fields      = $fields;
		$this->assignments = $assignments;
		$this->stream      = $streams->where('slug','=','locations')->first();
	}

    /**
     * Run the seeder.
     */
    public function run()
    {
		$phone = $this->fields->create([
			'namespace' => $this->namespace,
			'slug' => 'phone',
			'type' => 'anomaly.field_type.text',
			'locked' => 0,
			'en' => [
				'name' => 'Phone'
			]
		]);

        $this->assignments->create(
            [
                'stream'       => $this->stream,
                'field'        => $phone,
                'required'     => false
            ]
        );

        $wirelab = $this->locations->create([
        	'en' => [
                	'name'     => 'Wirelab',
		        	'email'    => 'info@wirelab.nl',
					'country'  => 'The Netherlands',
					'city'     => 'Enschede',
					'street'   => 'Willem Wilminkplein 9',
        	]
        ]);
    }
}
