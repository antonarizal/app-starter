@props([
    'showCreateButton' => false,
    'showDeleteButton' => false,
    'search' => '',
    'placeholder' => 'Search',
    'sortField' => 'id',
    'sortDirection' => 'desc',
    'showFields' => false,
    'fields' => ['name'=>'Name'],
    'searchField' => 'name',
])
<div class="flex justify-between items-center mb-4 gap-3">
    <!-- Input Search -->
    <div class="w-full lg:w-1/2">
        <p class="mb-0 ">
        <div class="flex flex-row gap-4">
            @if($showFields)
            <div class="flex-1">
                <flux:select size="sm" wire:model.live="searchField">
                {{-- <flux:select.option>name</flux:select.option> --}}
                <flux:select.option value="name">Pilih Kolom</flux:select.option>

                @foreach ($fields as $field=>$label)
                    <flux:select.option value="{{ $field }}">{{$label }}</flux:select.option>
                @endforeach
            </flux:select>
            </div>
            @endif
            <div class="flex-2">
                <flux:input size="sm"  placeholder="{{ $placeholder }}"
                    wire:model.live="search" clearable />
            </div>
        </div>
        <flux:input type="hidden" wire:model.live="sortDirection" />
        <flux:input type="hidden" wire:model.live="sortField" />
        </p>
        <p class="mt-1 {{ $showDeleteButton ? '' : 'hidden' }}">
            <flux:button size="sm" variant="danger" wire:click="deleteSelected"
                wire:confirm="Yakin menghapus data ini?">Delete Selected
            </flux:button>
        </p>
    </div>
    @if ($showCreateButton)
        <flux:button size="sm" icon="plus" variant="primary" wire:click="create">Tambah</flux:button>
    @endif
</div>
