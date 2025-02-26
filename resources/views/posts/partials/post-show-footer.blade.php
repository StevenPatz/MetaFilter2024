<footer class="post-footer post-show-footer">
    <address>
        <a title="View {{ $post->user->username }}'s profile"
           href="/members/{{ $post->user->id }}">
            @if ($post->user->id === auth()->id())
                <x-icons.icon-component filename="person-fill" />
            @else
                <x-icons.icon-component filename="person" />
            @endif
            {{ $post->user->username }}
        </a>
    </address>

    <span>
        <x-icons.icon-component filename="chat" />
        {{ $commentsCount > 0 ?: 0 }}
    </span>

    @if (isset($favoritesCount) && $favoritesCount > 0)
        {{ $favoritesCount }}

        {{ Str::plural('member', $favoritesCount) }}
        {{ trans('marked this as a favorite') }}
    @endif

    @if (isset($canonicalUrl))
        <x-buttons.copy-url-button url="{{ $canonicalUrl }}" />
    @endif
</footer>

@auth()
    <footer class="post-footer post-admin-footer">
        <button>
            <x-icons.icon-component filename="pencil-square" />
            {{ trans('Edit') }}
        </button>

        <button>
            <x-icons.icon-component filename="card-text" />
            {{ trans('Note') }}
        </button>

        {{-- MetaTalk only --}}
        <button>
            <x-icons.icon-component filename="x-square" />
            {{ trans('Close Thread') }}
        </button>

        <livewire:admin.watch-component :model="$post" />

        <button>
            <x-icons.icon-component filename="eye" />
            {{ trans('Watch') }}
        </button>
    </footer>
@endauth
