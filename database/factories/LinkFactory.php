<?php

use Faker\Generator as Faker;

$factory->define(email_tracker\Link::class, function (Faker $faker) {
    return [
        //
    ];
});
<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(email_tracker\Link::class, function (Faker $faker) {
    return [
        'title' => substr($faker->sentence(2), 0, -1),
        'url' => $faker->url,
        'description' => $faker->paragraph,
    ];
});

