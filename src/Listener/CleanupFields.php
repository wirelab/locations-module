<?php namespace Wirelab\LocationsModule\Listener;

use Anomaly\Streams\Platform\Field\Contract\FieldRepositoryInterface;
use Anomaly\Streams\Platform\Addon\Module\Event\ModuleWasUninstalled;
use Anomaly\Streams\Platform\Stream\Contract\StreamRepositoryInterface;

class CleanupFields
{
    public function handle(ModuleWasUninstalled $event)
    {
        $fields = app(FieldRepositoryInterface::class);
        $oldFields = $fields->findAllByNamespace('locations');
        foreach($oldFields as $field) {
            $field->delete();
        }
    }
}
