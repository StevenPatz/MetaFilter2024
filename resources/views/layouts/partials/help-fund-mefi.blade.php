<section class="help-fund-mefi">
    <h3 class="sr-only">{{ trans('Help Fund MetaFilter') }}</h3>

    <a href="{{ route($fundingIndexRoute) }}" class="button cta-button">
        {{ trans('Help fund MeFi!') }}
    </a>

    <x-snippets.snippet-component slug="help-fund-mefi" small-text=false />
</section>
