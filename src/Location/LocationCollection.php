<?php namespace Wirelab\LocationsModule\Location;

use Anomaly\Streams\Platform\Entry\EntryCollection;
use Illuminate\View\Factory;

class LocationCollection extends EntryCollection
{
	public function render()
	{
		$locations = '';

		foreach ($this as $location) {
			// Render each location individually
			$locations .= $location->render();
		}

		return $locations;
	}
}
