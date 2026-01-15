<?php
use function Laravel\Folio\name;
use function Laravel\Folio\{middleware};
middleware(['auth', 'verified','adminAuth']);
name('admin.appearance.edit');
use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>
<x-layouts.admin :title="__('Appearance Settings')">
 @volt
 <div>

<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Appearance')" :subheading="__('Update the appearance settings for your account')">
        <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
            <flux:radio value="light" icon="sun">{{ __('Light') }}</flux:radio>
            <flux:radio value="dark" icon="moon">{{ __('Dark') }}</flux:radio>
            <flux:radio value="system" icon="computer-desktop">{{ __('System') }}</flux:radio>
        </flux:radio.group>
    </x-settings.layout>
</section>
</div>
@endvolt
</x-layouts.admin>