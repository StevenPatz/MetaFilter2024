<?php

declare(strict_types=1);

use App\Enums\RouteNameEnum;

return [
    'www' => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Popular Posts',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Recent Comments',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'My MeFi',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'My Favorites',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'My Comments',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
    ],
    'ask' => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::AskPostIndex->value,
        ],
        [
            'name' => 'Popular Questions',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Answered',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Unanswered',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'My Favorites',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'My Ask',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
    ],
    'fanfare' => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::FanfarePostIndex->value,
        ],
        [
            'name' => 'Recent Comments',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'FanFare Talk',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Clubs',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Watercooler',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'My FanFare',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
    ],
    'irl' => [
        [
            'name' => 'Upcoming Events',
            'route' => RouteNameEnum::IrlPostIndex->value,
        ],
        [
            'name' => 'Past Events',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Future Events',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Proposed Events',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Recently Posted',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'My IRL',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
    ],
    'metatalk' => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::MetaTalkPostIndex->value,
        ],
        [
            'name' => 'Popular Posts',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Recent Comments',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'My Favorites',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
    ],
    'music' => [
        [
            'name' => 'Songs',
            'route' => RouteNameEnum::MusicPostIndex->value,
        ],
        [
            'name' => 'Talk',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Charts',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Challenges',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
    ],
    'podcast' => [
        [
            'name' => 'Recent Posts',
            'route' => RouteNameEnum::PodcastPostIndex->value,
        ],
        [
            'name' => 'Best of the Web',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
        [
            'name' => 'Out of the Blue',
            'route' => RouteNameEnum::MetaFilterPostIndex->value,
        ],
    ],
];
