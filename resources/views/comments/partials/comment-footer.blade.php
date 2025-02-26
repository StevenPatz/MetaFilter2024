<footer class="comment-footer">
    <div class="level">
        <div>
            <address>
                <x-members.profile-link-component :user="$comment->user" />
            </address>

            @include('comments.partials.comment-timestamp', [
                'comment' => $comment,
            ])

            <livewire:favorites.favorite-component
                :comment="$comment"
                :favorites="$favoritesCount"
            />
        </div>

        <livewire:post.flag-component
            :comment="$comment"
            :flags="$flagsCount"
        />
    </div>

    @if (isset($showFlagCommentForm) && $showFlagCommentForm === true)
        <livewire:post.flag-comment-form-component
            :comment="$comment"
            :flagReasons="$flagReasons"
            :type="$type"
        />
    @endif
</footer>

@auth
    <footer class="comment-footer comment-admin-footer">
        <button>
            <x-icons.icon-component filename="pencil-square" />
            {{ trans('Edit') }}
        </button>

        <button>
            <x-icons.icon-component filename="x-square-fill" />
            {{ trans('Delete') }}
        </button>

        <button>
            <x-icons.icon-component filename="card-text" />
            {{ trans('Note') }}
        </button>

        <button>
            <x-icons.icon-component filename="ip-address" />
            {{ trans('IP Search') }}
        </button>
    </footer>
@endauth
