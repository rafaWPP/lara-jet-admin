<?php

namespace App\Livewire;

use App\Models\User;
use RamonRietdijk\LivewireTables\Columns\Column;
use RamonRietdijk\LivewireTables\Columns\DateColumn;
use RamonRietdijk\LivewireTables\Livewire\LivewireTable;

class UserTable extends LivewireTable
{
    protected string $model = User::class;

    protected function columns(): array
    {
        return [
            Column::make(__('Id'), 'id')
                ->sortable(),
            Column::make(__('Name'), 'name')->searchable()
                ->sortable(),
            Column::make(__('Email'), 'email')->searchable()
                ->sortable(),
            DateColumn::make(__('Created at'), 'created_at')
                ->sortable(),
            DateColumn::make(__('Updated at'), 'updated_at')
                ->sortable(),
        ];
    }
}
