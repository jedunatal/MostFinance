<div class="min-h-screen bg-[#030712] text-slate-300 p-6">
    <div class="max-w-7xl mx-auto">
        
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-white">Dashboard MostFinance</h1>
            <div class="bg-emerald-600/20 text-emerald-400 px-4 py-1 rounded-full border border-emerald-500/30 text-sm font-medium">
                {{ auth()->user()->occupation }}
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-[#111827] p-6 rounded-2xl border border-slate-800 shadow-xl">
                <p class="text-slate-400 text-sm mb-1">Saldo Atual</p>
                <h2 class="text-2xl font-bold text-white">
                    {{ auth()->user()->currency }} {{ number_format(auth()->user()->initial_balance, 2, ',', '.') }}
                </h2>
            </div>
            
            </div>

        <div class="bg-[#111827] p-8 rounded-2xl border border-slate-800 shadow-xl text-center">
            <p class="text-slate-400 font-medium">Bem-vindo de volta, {{ auth()->user()->name }}!</p>
            <p class="text-sm text-slate-500 mt-2">Suas transações recentes aparecerão aqui em breve.</p>
        </div>

    </div>
</div>