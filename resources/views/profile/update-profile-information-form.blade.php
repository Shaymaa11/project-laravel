
<x-jet-form-section submit="updateProfileInformation">
    <div class="container d-grid gap-2">
   <h1> My Profile</h1>

    <x-slot name="title">
        {{-- {{ __('Profile Information') }} --}}
    </x-slot>

    <x-slot name="description">
        {{-- {{ __('Update your account\'s profile information and email address.') }} --}}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          {{-- x-bind:style="'background-image: url(\'' + photoPreview + '\');'"> --}}
                          x-bind:style="'background-image: url(/img/nav1.jpg);'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif
{{-- <h1>helllo</h1> --}}
        <!-- Name -->
             {{-- <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" /> --}}
            {{-- <a wire:model.defer="state.name"> </a> --}}
            {{-- <a id="name"  class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" ></a> --}}
            {{-- <x-jet-input-error for="name" class="mt-2" />
        </div> --}}

        <div class="col-span-6 sm:col-span-4">
            <i class="bi bi-pencil-fill" for="name" value="{{ __('Name') }}">Name</i>
            <x-jet-input id="name" type="text" class="mt-1 block w-full rounded-pill" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

         <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Role') }}" />
         {{-- <div> {{ wire:model.defer="state.role" }} </div> --}}
            {{-- <x-jet-input id="name"  class="mt-1 block w-full" wire:model.defer="state.role" autocomplete="name"/ > --}}
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved" class="btn btn-success">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo" class="btn btn-primary">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
    </div>
</x-jet-form-section>

