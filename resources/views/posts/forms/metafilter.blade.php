<form wire:submit.prevent="store()">
    @include('forms.partials.required-fields-note')
    @include('forms.partials.validation-summary')
    @include('livewire.posts.partials.posting-as')

    <fieldset>
        <x-forms.input
                name="title"
                type="text"
                label="{{ trans('Post Title') }}"/>

        <x-forms.input
                name="url"
                type="url"
                label="{{ trans('Link URL') }}"/>

        <x-forms.input
                name="link_text"
                type="text"
                label="{{ trans('Link Text') }}"/>

        <div wire:ignore>
            <x-forms.textarea
                    name="body"
                    label="{{ trans('Body') }}"/>
        </div>
    </fieldset>

    <fieldset>
        <div wire:ignore>
            <x-forms.textarea
                    name="more_inside"
                    label="{{ trans('More Inside') }}"/>
        </div>
    </fieldset>

    <button type="submit" class="button primary-button">
        {{ trans('Add Post') }}
    </button>
</form>
