<?php namespace Wirelab\LocationsModule\Location;

use Anomaly\Streams\Platform\Model\Locations\LocationsLocationsEntryModel;
use Wirelab\LocationsModule\Location\Contract\LocationInterface;

class LocationModel extends LocationsLocationsEntryModel implements LocationInterface
{
	public function getSlug()
	{
		return $this->slug;
	}
}
