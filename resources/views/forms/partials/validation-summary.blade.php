@if ($errors->any())
    <div class="notification is-danger" role="alert">
        <p>
            <x-icons-icon-component filename="exclamation-triangle-fill" />
            Sorry, there @if ($errors->count() > 1) are some issues @else is an issue @endif with your form.
        </p>

        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif
