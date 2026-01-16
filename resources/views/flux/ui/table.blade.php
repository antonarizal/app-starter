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
            <caption
                class="px-5 py-2 font-medium text-left rtl:text-right text-heading bg-slate-200 dark:text-slate-400 dark:bg-zinc-900">

                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/2">
                        <div class="flex flex-row w-md">
                            <div class="basis-2/6 pt-3">Per Page :</div>
                            <div class="basis-2/6">
                                <flux:select size="sm" wire:model.live="limit" class="my-2">
                                    {{-- <flux:select.option>name</flux:select.option> --}}
                                    <flux:select.option value=10>Jumlah Data</flux:select.option>
                                    <flux:select.option>10</flux:select.option>
                                    <flux:select.option>20</flux:select.option>
                                    <flux:select.option>50</flux:select.option>
                                    <flux:select.option>100</flux:select.option>
                                </flux:select>
                            </div>
                            <div class="basis-4/6">
                                {{-- <p class="pt-3 pl-2"> Page {{ $results->currentPage() }} from {{ $results->lastPage() }} (Total Data :
                                    {{ $results->total() }})</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/ clearfix">
                        <p class="pt-3">{{ $text }}</p>
                    </div>
                </div>
                <p class=" mt-1 {{ $showDeleteButton ? '' : 'hidden' }}">
                    <flux:button size="sm" variant="danger" wire:click="deleteSelected"
                        wire:confirm="Yakin menghapus data ini?">Delete Selected
                    </flux:button>
                </p>
            </caption>
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
