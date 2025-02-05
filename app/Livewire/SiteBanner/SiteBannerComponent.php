<?php

declare(strict_types=1);

namespace App\Livewire\SiteBanner;

use App\Models\BannerLink;
use App\Repositories\BannerLinkRepository;
use App\Traits\CacheTimeTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

final class SiteBannerComponent extends Component
{
    use CacheTimeTrait;

    private const int LINKS_TO_SHOW = 3;

    public bool $collapsed = false;
    public string $altText = 'Collapse';
    public string $iconFilename = 'arrows-collapse';
    public Collection $bannerLinks;

    protected BannerLinkRepository $bannerLinkRepository;

    public function mount(BannerLinkRepository $bannerLinkRepository): void {
        $this->bannerLinkRepository = $bannerLinkRepository;

        $this->bannerLinks = $this->bannerLinkRepository->getBannerLinks();
    }

    public function render(): View
    {
        return view('livewire.site-banner.site-banner-component');
    }

    public function toggleBanner(): void {
        $this->collapsed = !$this->collapsed;

        $this->altText = $this->collapsed ? trans('Expand') : trans('Collapse');

        $this->iconFilename = $this->collapsed ? trans('arrows-expand') : trans('arrows-collapse');
    }
}
