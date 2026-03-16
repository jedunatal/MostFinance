<div class="min-h-screen flex items-center justify-center bg-[#030712] font-sans text-slate-300 px-4">
    <div class="w-full max-w-md p-8 bg-[#111827] rounded-2xl shadow-2xl ring-1 ring-white/10">
        
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-white tracking-tight">MostFinance</h1>
            <h2 class="text-xl font-semibold text-white mt-4">Criar nova conta</h2>
        </div>

        <form wire:submit.prevent="register" class="space-y-5">
            <div>
                <label class="block text-sm font-medium text-slate-200 mb-1.5">Nome completo</label>
                <input wire:model="name" type="text" required
                    class="w-full bg-[#1f2937] border border-slate-700 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-emerald-500 outline-none transition">
                @error('name') <span class="text-rose-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-200 mb-1.5">E-mail</label>
                <input wire:model="email" type="email" required
                    class="w-full bg-[#1f2937] border border-slate-700 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-emerald-500 outline-none transition">
                @error('email') <span class="text-rose-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-200 mb-1.5">Senha</label>
                <input wire:model="password" type="password" required
                    class="w-full bg-[#1f2937] border border-slate-700 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-emerald-500 outline-none transition">
                @error('password') <span class="text-rose-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-200 mb-1.5">Confirmar Senha</label>
                <input wire:model="password_confirmation" type="password" required
                    class="w-full bg-[#1f2937] border border-slate-700 rounded-lg px-4 py-2 text-white focus:ring-2 focus:ring-emerald-500 outline-none transition">
            </div>

            <button type="submit" 
                class="w-full py-2.5 bg-emerald-600 hover:bg-emerald-500 text-white font-bold rounded-lg shadow-lg transition-all active:scale-[0.98]">
                Cadastrar agora
            </button>
        </form>

        <div class="mt-6 text-center">
            <a href="/" class="text-sm font-medium text-slate-400 hover:text-white transition">
                Já tem uma conta? Voltar para o login
            </a>
        </div>
    </div>
</div>