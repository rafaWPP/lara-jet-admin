<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class Table extends Component
{
    use WithPagination;

    public $items; // Receberá os itens como uma coleção
    public $search = '';
    public $perPage = 10;
    public $filters = [];

    public function mount($items)
    {
        $this->items = collect($items);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function render()
    {
        $filteredItems = $this->applyFilters();

        $paginatedItems = $this->paginate($filteredItems);

        return view('components.table', ['items' => $paginatedItems]);
    }

    protected function applyFilters(): Collection
    {
        $filtered = $this->items;

        if ($this->search) {
            $filtered = $filtered->filter(function ($item) {
                // Ajuste a lógica de filtragem conforme necessário
                return stripos($item['name'], $this->search) !== false; // Exemplo para um campo 'name'
            });
        }

        foreach ($this->filters as $column => $value) {
            $filtered = $filtered->where($column, $value);
        }

        return $filtered;
    }

    protected function paginate($items): LengthAwarePaginator
    {
        $currentPage = $this->page ?: (LengthAwarePaginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        $perPage = $this->perPage;

        return new LengthAwarePaginator(
            $items->forPage($currentPage, $perPage),
            $items->count(),
            $perPage,
            $currentPage,
            ['path' => LengthAwarePaginator::resolveCurrentPath()]
        );
    }
}

