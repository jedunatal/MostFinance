<x-filament-panels::page>
    {{-- Cards de Saldo rápidos --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        <x-filament::section>
            <p class="text-sm text-slate-500">Saldo Atual</p>
            <p class="text-2xl font-bold text-emerald-500">R$ {{ number_format(auth()->user()->initial_balance, 2, ',', '.') }}</p>
        </x-filament::section>
    </div>

    {{-- O SEU componente Livewire onde você vai criar o formulário --}}
    @livewire(\App\Livewire\ManageTransactions::class)
</x-filament-panels::page>