<div>
    
    <span>Icons</span><br><br>
<!--Icons-->
    <a href="https://heroicons.com" target="_blank">Icons https://heroicons.com </a>
    
<button class="btn-primary-gradient">Meu botão com gradiente</button>


    <x-section-border />
    <span>Buttons icons sizes & open modal action</span><br><br>
<!--Buttons icons sizes & open modal action-->
    <x-action-button loading="confirmUserDeletion" color="blue" size="small" icon="fa-solid fa-trash"></x-action-button>
    <x-action-button loading="confirmUserDeletion" color="red" size="small" icon="fa-solid fa-pen-to-square"></x-action-button>
    <x-action-button loading="confirmUserDeletion" color="gray" size="medium" icon="fa-solid fa-pen-to-square"></x-action-button>
    <x-action-button loading="confirmUserDeletion" color="yellow" size="medium" icon="fa-solid fa-pen-to-square"></x-action-button>
    <x-action-button loading="confirmUserDeletion" color="green" size="large" icon="fa-solid fa-pen-to-square"></x-action-button>
    <x-action-button loading="confirmUserDeletion" color="purple" size="large" icon="fa-solid fa-pen-to-square"></x-action-button>

    <x-section-border />

    <span>Buttons text icons & open modals</span><br><br>
<!--Buttons text icons & open modals-->
    <x-button-with-spinner loading="openModal" color="blue" icon="fas fa-plus">Blue</x-button-with-spinner>
    <x-button-with-spinner loading="openModal" color="green" icon="fas fa-plus">Green</x-button-with-spinner>
    <x-button-with-spinner loading="openModal" color="cyan" icon="fas fa-plus">Cyan</x-button-with-spinner>
    <x-button-with-spinner loading="openModal" color="teal" icon="fas fa-plus">Teal</x-button-with-spinner>
    <x-button-with-spinner loading="openModal" color="lime" icon="fas fa-plus">Lime</x-button-with-spinner>
    <x-button-with-spinner loading="openModal" color="red" icon="fas fa-plus">Red</x-button-with-spinner>
    <x-button-with-spinner loading="openModal" color="pink" icon="fas fa-plus">Pink</x-button-with-spinner>
    <x-button-with-spinner loading="openModal" color="purple" icon="fas fa-plus">Purple</x-button-with-spinner>

    <x-section-border />

    
    <span>Alerts</span><br><br>
<!--Alerts-->
    <x-button-with-spinner loading="alertSuccess" color="green" icon="fas fa-plus">Alerta Sucess</x-button-with-spinner>
    <x-button-with-spinner loading="alertWarning" color="lime" icon="fas fa-plus">Alerta warning</x-button-with-spinner>
    <x-button-with-spinner loading="alertError" color="red" icon="fas fa-plus">Alerta error</x-button-with-spinner>

    <x-alert alert="warning" message="Operação realizada com sucesso." on="saved-atemp" />
    <x-alert alert="success" message="Operação realizada com sucesso." on="saved" />
    <x-alert alert="error" message="Operação realizada com sucesso." on="saved-error" />

<!--Modals-->
    <x-confirmation-modal wire:model="confirmingUserDeletion">
        <x-slot name="title">
             Title
        </x-slot>

        <x-slot name="content">
             <h3>Content</h3>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                Nevermind
            </x-secondary-button>

            <x-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                Delete Account
            </x-danger-button>
        </x-slot>
    </x-confirmation-modal>


    <x-dialog-modal wire:model.live="showModal">
        <x-slot name="title">
            Title
        </x-slot>

        <x-slot name="content">
          <h3>Content</h3>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('showModal')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ms-3" wire:click="logoutOtherBrowserSessions" wire:loading.attr="disabled">
                {{ __('Log Out Other Browser Sessions') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>

</div>