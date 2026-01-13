
<div class="flex flex-col items-center justify-center text-center">
    <div class="flex aspect-square size-20 items-center justify-center rounded-md">
        <x-app-logo-icon class="size-18 fill-current text-white dark:text-black" />
    </div>
    <div class="mt-1 grid">
        <span class="mb-0.5 truncate leading-tight font-semibold">{{ App\Models\Option::getValue('site_name') }}</span>
    </div>
</div>
