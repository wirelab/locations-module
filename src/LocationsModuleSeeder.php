<?php namespace Wirelab\LocationsModule;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Wirelab\LocationsModule\Location\LocationSeeder;

class LocationsModuleSeeder extends Seeder
{

    /**
     * Run the seeder.
     */
    public function run()
    {
        $this->call(LocationSeeder::class);
    }
}
