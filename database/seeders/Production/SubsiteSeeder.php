<?php

declare(strict_types=1);

namespace Database\Seeders\Production;

use App\Models\Subsite;
use App\Traits\StringFormattingTrait;
use Illuminate\Database\Seeder;

final class SubsiteSeeder extends Seeder
{
    use StringFormattingTrait;

    public function run(): void
    {
        $subsites = config('metafilter.seeders.subsites');

        foreach ($subsites as $subsite) {
            (new Subsite())->firstOrCreate([
                'name' => $subsite['name'],
                'nickname' => $subsite['nickname'] ?? null,
                'logo_filename' => $subsite['logo_filename'] ?? null,
                'white_text' => $subsite['white_text'] ?? null,
                'green_text' => $subsite['green_text'] ?? null,
                'tagline' => $subsite['tagline'] ?? null,
                'subdomain' => $subsite['subdomain'],
                'route' => $subsite['route'],
                'view' => $subsite['view'],
                'has_theme' => $subsite['has_theme'] ?? false,
            ]);
        }
    }
}
