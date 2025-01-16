<?php

declare(strict_types=1);

namespace App\Providers;

use App\Enums\RouteNameEnum;
use App\Models\Subsite;
use App\Traits\SubsiteTrait;
use App\Traits\UrlTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    use SubsiteTrait;
    use UrlTrait;

    public function boot(): void
    {
        Model::shouldBeStrict();

        $subdomain = $this->getSubdomainFromUrl();
        $subsite = $this->getSubsiteBySubdomain($subdomain);

        session([
            'subdomain' => $subdomain,
            'subsite' => $subsite,
            'subsiteName' => $subsite->name,
        ]);

        view()->share([
            'appLocale' => app()->getLocale(),
            'contactMessageRoute' => RouteNameEnum::ContactMessageCreate,
            'forgotPasswordRoute' => RouteNameEnum::AuthForgotPasswordCreate,
            'fundingIndexRoute' => RouteNameEnum::MetaFilterFundingIndex,
            'loginCreateRoute' => RouteNameEnum::AuthLoginCreate,
            'logoutRoute' => RouteNameEnum::AuthLogout,
            'preferencesEditRoute' => RouteNameEnum::PreferencesEdit,
            'profileEditRoute' => RouteNameEnum::ProfileEdit,
            'profileShowRoute' => RouteNameEnum::ProfileShow,
            'signupCreateRoute' => RouteNameEnum::SignupCreate,
            'signupThanksRoute' => RouteNameEnum::SignupWizard,
            'signupWizardRoute' => RouteNameEnum::SignupWizard,
        ]);

        view()->share('stylesheets', $this->getStylesheets($subsite));
        view()->share('subdomain', $subdomain === 'www' ? 'metafilter' : $subdomain);
        view()->share('subsite', $subsite);
        view()->share('subsiteName', $subsite['name']);
    }

    private function getStylesheets(Subsite $subsite): array
    {
        $stylesheets = [
            'resources/sass/app.scss',
        ];

        if ($subsite->has_theme === true) {
            $subdomain = $subsite->subdomain;

            $stylesheets[] = "resources/sass/themes/$subdomain.scss";
        } else {
            $stylesheets[] = 'resources/sass/themes/metafilter.scss';
        }

        return $stylesheets;
    }
}
