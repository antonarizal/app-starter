@props([
    'showCheckAll' => false,
    'message' => 'Data berhasil disimpan',
    'showDeleteButton' => false,
    'results' => [],
    'text' => null,
])
<flux:checkbox.group wire:model="selected">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-zinc-200">
        <table
            class="w-full text-sm text-left rtl:text-right text-gray-500 text-gray-700 dark:text-gray-400 dark:bg-zinc-900">
          
            <thead class="text-xs text-gray-700 uppercase bg-slate-100 dark:bg-neutral-700 dark:text-gray-400">
                <tr>
                    @if ($showCheckAll)
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <flux:checkbox.all wire:click="selectAll" />
                            </div>
                        </th>
                    @endif
                    {{ $columns }}
                </tr>
            </thead>
            <tbody>
                {{ $rows }}
            </tbody>
        </table>
    </div>
</flux:checkbox.group>
<div class="p-3">
    {{ $results->onEachSide(1)->links() }}
</div>
<flux:ui.modal.confirm wire:model="showConfirmModal" />
<flux:ui.modal.success message="{{ $message }}" />
