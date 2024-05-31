@props(['items'])

<div>
    <div class="mb-4">
        <input wire:model="search" type="text" placeholder="Search..." class="form-control">
    </div>

    <div class="mb-4">
        <label for="perPage">Items per page:</label>
        <select wire:model="perPage" id="perPage" class="form-control">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
        </select>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                {{ $header }}
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <!-- Renderizando o conteúdo do slot para cada item -->
                    {{ $slot->with(['item' => $item])->render() }}
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $items->links() }}
    </div>
</div>
