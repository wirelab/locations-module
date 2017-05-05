<?php namespace Wirelab\LocationsModule\Location\Handler;

use Anomaly\RelationshipFieldType\RelationshipFieldType;

class Related
{
	public function handle(RelationshipFieldType $fieldType)
	{
		$model = $fieldType->getRelatedModel();
		$query = $model->newQuery();

		$options = [];
		foreach($query->get() as $model) {
			$options[$model->id] = $model->name . ' (' . $model->city . ')';
		}

        $fieldType->setOptions($options);
	}
}
