<?php namespace Wirelab\LocationsModule\Location;

use Anomaly\Streams\Platform\Entry\EntryPresenter;
use Illuminate\View\Factory;

class LocationPresenter extends EntryPresenter
{
    protected $view;
    protected $object;

    public function __construct(Factory $view, $object)
    {
        $this->view = $view;
        parent::__construct($object);
    }

	public function render()
	{
		return $this->view->make('wirelab.module.locations::location.show', ['location' => $this->object]);
	}
}
