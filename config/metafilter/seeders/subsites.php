<?php

declare(strict_types=1);

$mefi = 'MeFi';
$metaFilter = config('app.name');

use App\Enums\RouteNameEnum;

return [
    'ask' => [
        'name' => 'Ask ' . $metaFilter,
        'nickname' => 'AskMeFi',
        'logo_filename' => 'ask-mefi.png',
        'white_text' => 'Ask',
        'green_text' => $metaFilter,
        'tagline' => 'querying the hive mind',
        'subdomain' => 'ask',
        'route' => RouteNameEnum::AskPostIndex->value,
        'view' => 'posts.index',
        'in_dropdown' => false,
        'in_footer_nav' => true,
        'footer_navigation_sort_order' => 2,
        'global_navigation_sort_order' => 2,
        'has_theme' => true,
    ],
    'bestof' => [
        'name' => 'Best Of ',
        'nickname' => 'Best Of',
        'white_text' => null,
        'green_text' => null,
        'tagline' => 'Highlighting the best bits from the MetaFilter universe',
        'subdomain' => 'bestof',
        'route' => RouteNameEnum::BestOfHomeIndex->value,
        'view' => 'bestof.home.index',
        'in_dropdown' => true,
        'in_footer_nav' => false,
        'footer_navigation_sort_order' => 9,
        'global_navigation_sort_order' => 9,
        'has_theme' => true,
    ],
    'chat' => [
        'name' => 'MetaChat',
        'nickname' => 'Chat',
        'white_text' => $metaFilter,
        'green_text' => 'Chat',
        'tagline' => 'talk about ' . $metaFilter,
        'subdomain' => 'chat',
        'route' => RouteNameEnum::ChatHomeIndex->value,
        'view' => 'chat.home.index',
        'in_dropdown' => true,
        'in_footer_nav' => false,
        'footer_navigation_sort_order' => 0,
        'global_navigation_sort_order' => 11,
        'has_theme' => false,
    ],
    'fanfare' => [
        'name' => 'FanFare',
        'logo_filename' => 'mefi-fanfare.png',
        'white_text' => 'Fan',
        'green_text' => 'Fare',
        'tagline' => 'overthinking entertainment',
        'subdomain' => 'fanfare',
        'route' => RouteNameEnum::FanFarePostIndex->value,
        'view' => 'posts.index',
        'in_dropdown' => false,
        'in_footer_nav' => true,
        'footer_navigation_sort_order' => 3,
        'global_navigation_sort_order' => 3,
        'has_theme' => true,
    ],
    'faq' => [
        'name' => 'FAQ',
        'subdomain' => 'faq',
        'route' => RouteNameEnum::FaqIndex->value,
        'view' => 'faq.index',
        'in_dropdown' => false,
        'in_footer_nav' => false,
        'footer_navigation_sort_order' => 0,
        'global_navigation_sort_order' => 0,
        'has_theme' => false,
    ],
    'irl' => [
        'name' => 'MeFi IRL',
        'nickname' => 'IRL',
        'logo_filename' => 'mefi-irl.png',
        'white_text' => 'MeFi',
        'green_text' => 'IRL',
        'tagline' => 'get out. meet people.',
        'subdomain' => 'irl',
        'route' => RouteNameEnum::IrlPostIndex->value,
        'view' => 'posts.index',
        'in_dropdown' => false,
        'in_footer_nav' => true,
        'footer_navigation_sort_order' => 7,
        'global_navigation_sort_order' => 7,
        'has_theme' => true,
    ],
    'jobs' => [
        'name' => 'Jobs',
        'logo_filename' => 'mefi-jobs.png',
        'white_text' => 'MeFi',
        'green_text' => 'Jobs',
        'tagline' => 'all work and no play',
        'subdomain' => 'jobs',
        'route' => RouteNameEnum::JobsPostIndex->value,
        'view' => 'posts.index',
        'in_dropdown' => false,
        'in_footer_nav' => true,
        'footer_navigation_sort_order' => 6,
        'global_navigation_sort_order' => 6,
        'has_theme' => true,
    ],
    'labs' => [
        'name' => 'Labs',
        'white_text' => 'MeFi',
        'green_text' => 'Labs',
        'tagline' => 'digital experimentation',
        'subdomain' => 'labs',
        'route' => RouteNameEnum::LabsHomeIndex->value,
        'view' => 'labs.home.index',
        'in_dropdown' => true,
        'in_footer_nav' => false,
        'footer_navigation_sort_order' => 0,
        'global_navigation_sort_order' => 12,
        'has_theme' => false,
    ],
    'mail' => [
        'name' => 'Mall',
        'white_text' => 'MeFi',
        'green_text' => 'Mall',
        'subdomain' => 'mall',
        'route' => RouteNameEnum::MallHomeIndex->value,
        'view' => 'mall.home.index',
        'in_dropdown' => true,
        'in_footer_nav' => false,
        'footer_navigation_sort_order' => 0,
        'global_navigation_sort_order' => 13,
        'has_theme' => false,
    ],
    'mall' => [
        'name' => 'Mall',
        'white_text' => 'MeFi',
        'green_text' => 'Mall',
        'subdomain' => 'mall',
        'route' => RouteNameEnum::MallHomeIndex->value,
        'view' => 'mall.home.index',
        'in_dropdown' => true,
        'in_footer_nav' => false,
        'footer_navigation_sort_order' => 0,
        'global_navigation_sort_order' => 13,
        'has_theme' => false,
    ],
    'metatalk' => [
        'name' => 'MetaTalk',
        'logo_filename' => 'metatalk.png',
        'white_text' => 'Meta',
        'green_text' => 'Talk',
        'tagline' => 'feature requests, bugs, etc.',
        'subdomain' => 'metatalk',
        'route' => RouteNameEnum::MetaTalkPostIndex->value,
        'view' => 'posts.index',
        'in_dropdown' => false,
        'in_footer_nav' => true,
        'footer_navigation_sort_order' => 8,
        'global_navigation_sort_order' => 8,
        'has_theme' => true,
    ],
    'music' => [
        'name' => 'Music',
        'logo_filename' => 'mefi-music.png',
        'white_text' => 'MeFi',
        'green_text' => 'Music',
        'tagline' => 'rock and/or roll',
        'subdomain' => 'music',
        'route' => RouteNameEnum::MusicPostIndex->value,
        'view' => 'posts.index',
        'in_dropdown' => false,
        'in_footer_nav' => true,
        'footer_navigation_sort_order' => 5,
        'global_navigation_sort_order' => 5,
        'has_theme' => true,
    ],
    'podcast' => [
        'name' => 'Podcast',
        'logo_filename' => 'mefi-podcast.png',
        'white_text' => $mefi,
        'green_text' => 'Podcast',
        'tagline' => 'best of the website',
        'subdomain' => 'podcast',
        'route' => RouteNameEnum::PodcastPostIndex->value,
        'view' => 'posts.index',
        'in_dropdown' => true,
        'in_footer_nav' => true,
        'footer_navigation_sort_order' => 10,
        'global_navigation_sort_order' => 10,
        'has_theme' => false,
    ],
    'projects' => [
        'name' => 'Projects',
        'logo_filename' => 'mefi-projects.png',
        'white_text' => 'MeFi',
        'green_text' => 'Projects',
        'tagline' => 'where self-links rule',
        'subdomain' => 'projects',
        'route' => RouteNameEnum::ProjectsPostIndex->value,
        'view' => 'posts.index',
        'in_dropdown' => false,
        'in_footer_nav' => false,
        'footer_navigation_sort_order' => 4,
        'global_navigation_sort_order' => 4,
        'has_theme' => true,
    ],
    'www' => [
        'name' => 'MetaFilter',
        'logo_filename' => 'metafilter.png',
        'white_text' => 'Meta',
        'green_text' => 'Filter',
        'tagline' => 'community weblog',
        'subdomain' => 'www',
        'route' => RouteNameEnum::MetaFilterPostIndex->value,
        'view' => 'posts.index',
        'in_dropdown' => false,
        'in_footer_nav' => false,
        'footer_navigation_sort_order' => 1,
        'global_navigation_sort_order' => 1,
        'has_theme' => true,
    ],
];
