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
		$tags = $this->fields->create([
			'namespace' => $this->namespace,
			'slug' => 'tags',
			'type' => 'anomaly.field_type.tags',
			'locked' => 0,
			'en' => [
				'name' => 'Tags'
			]
		]);

        $this->assignments->create(
            [
                'stream'       => $this->stream,
                'field'        => $tags,
                'required'     => false
            ]
        );

        $wirelab = $this->locations->create([
        	'name'        => 'Wirelab',
        	'email'       => 'info@wirelab.nl',
        	'postal_code' => '7511 PG',
        	'phone'       => '053 203 0700',
        	'tags'        => ['wirelab', 'The Netherlands', 'Enschede', 'Willem Wilminkplein 9', 'Overijssel','7511 PG','053 203 0700', 'info@wirelab.nl'],
        	'en' => [
				'country'  => 'The Netherlands',
				'city'     => 'Enschede',
				'street'   => 'Willem Wilminkplein 9',
				'region'   => 'Overijssel',
        	]
        ]);
    }
}
