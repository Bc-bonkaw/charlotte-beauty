<?php

return [
    'phone' => '+15105387311',

    // Keys are stored on booking requests and form each city page's URL: /hair-braiding-{key}.
    // Leave 'booksy' null for a location without online booking.
    'locations' => [
        'hayward' => [
            'name' => 'Hayward',
            'street' => '762 A St',
            'city' => 'Hayward, CA 94541',
            'locality' => 'Hayward',
            'zip' => '94541',
            'nearby' => ['San Lorenzo', 'Castro Valley', 'San Leandro', 'Union City'],
            'intro' => 'Looking for hair braiding in Hayward? Ruffine creates knotless braids, box braids, Senegalese twists, cornrows and more at our A Street studio, a short drive from across the East Bay.',
            'maps' => 'https://www.google.com/maps/search/?api=1&query=762+A+St+Hayward+CA+94541',
            'booksy' => 'https://booksy.com/en-us/1205345_charlotte-beauty-braids_braids-locs_119449_hayward#ba_s=seo',
        ],
        'tracy' => [
            'name' => 'Tracy',
            'street' => '3579 Junefield St',
            'city' => 'Tracy, CA 95377',
            'locality' => 'Tracy',
            'zip' => '95377',
            'nearby' => ['Mountain House', 'Lathrop', 'Manteca'],
            'intro' => 'Looking for a hair braider in Tracy? Book knotless braids, French curl braids, Fulani braids, twists and cornrows by Ruffine at our Junefield Street location, close to home for San Joaquin County clients.',
            'maps' => 'https://www.google.com/maps/search/?api=1&query=3579+Junefield+St+Tracy+CA+95377',
            'booksy' => 'https://booksy.com/en-us/1205345_charlotte-beauty-braids_braids-locs_119449_hayward#ba_s=seo',
        ],
    ],
];
