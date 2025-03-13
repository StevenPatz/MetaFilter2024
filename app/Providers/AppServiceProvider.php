<?php

declare(strict_types=1);

namespace App\Providers;

use App\Traits\LoggingTrait;
use App\Traits\SubsiteTrait;
use App\Traits\UrlTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

final class AppServiceProvider extends ServiceProvider
{
    use LoggingTrait;
    use SubsiteTrait;
    use UrlTrait;

    private const string DEFAULT_COLOR_SCHEME = 'light';

    public function boot(): void
    {
        try {
            $sessionLocale = session()->get('locale') ?? null;

            if (!is_null($sessionLocale)) {
                app()->setLocale($sessionLocale);
            }
        } catch (NotFoundExceptionInterface|ContainerExceptionInterface $exception) {
            $this->logError($exception);
        }

        Model::shouldBeStrict();

        Relation::morphMap([
            'posts' => 'App\Models\Post',
            'users' => 'App\Models\User',
        ]);

        $subdomain = $this->getSubdomain();

        $subsite = $this->getSubsiteBySubdomain($subdomain);
        $subsite->route = $this->getSubsiteRoute($subdomain);

        view()->share([
            'subdomain' => $subdomain,
            'subsite' => $subsite,
            'subsiteHasTheme' => $subsite->has_theme ?? null,
            'subsiteName' => $subsite->name ?? null,
            'greenText' => $subsite->green_text ?? null,
            'whiteText' => $subsite->white_text ?? null,
            'tagline' => $subsite->tagline ?? null,
        ]);
    }

    private function getSubsiteRoute(string $subdomain): string
    {
        return match ($subdomain) {
            'chat' => 'chat.home.index',
            'labs' => 'labs.home.index',
            'mall' => 'mall.home.index',
            'www' => 'metafilter.posts.index',
            default => "$subdomain.posts.index",
        };
    }
}
