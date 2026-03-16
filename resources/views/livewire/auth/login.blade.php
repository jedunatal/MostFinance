<div class="min-h-screen flex items-center justify-center bg-[#030712] font-sans text-slate-300">
    <div class="w-full max-w-md p-8 bg-[#111827] rounded-2xl shadow-2xl border border-white/5">
        
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-white tracking-tight">MostFinance</h1>
            <h2 class="text-xl font-semibold text-white mt-4">Sign in</h2>
        </div>

        <form wire:submit.prevent="login" class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-slate-200 mb-1">Email address <span class="text-rose-500">*</span></label>
                <input wire:model="email" type="email" class="w-full bg-[#1f2937] border border-slate-700 rounded-lg px-4 py-2.5 text-white focus:ring-2 focus:ring-emerald-500 focus:outline-none transition">
                @error('email') <span class="text-rose-500 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-200 mb-1">Password <span class="text-rose-500">*</span></label>
                <input wire:model="password" type="password" class="w-full bg-[#1f2937] border border-slate-700 rounded-lg px-4 py-2.5 text-white focus:ring-2 focus:ring-emerald-500 focus:outline-none transition">
                @error('password') <span class="text-rose-500 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div class="flex items-center">
                <input wire:model="remember" type="checkbox" id="remember" class="w-4 h-4 rounded border-slate-700 bg-slate-800 text-emerald-500 focus:ring-emerald-500">
                <label for="remember" class="ml-2 text-sm text-slate-300 font-medium">Remember me</label>
            </div>

            <button type="submit" class="w-full py-2.5 bg-emerald-600 hover:bg-emerald-500 text-white font-bold rounded-lg shadow-lg transition-all duration-200 transform active:scale-95">
                <span wire:loading.remove wire:target="login">Sign in</span>
                <span wire:loading wire:target="login">Autenticando...</span>
            </button>
        </form>

        <div class="mt-8 pt-6 border-t border-slate-800 flex flex-col items-center space-y-4">
            <a href="/admin/login" class="text-sm font-medium text-slate-400 hover:text-white transition decoration-emerald-500/50 underline-offset-4 hover:underline">
                Entrar como Administrador
            </a>
            
            <a href="/password/reset" class="text-sm font-medium text-slate-400 hover:text-white transition">
                Esqueceu a senha?
            </a>
            
            <a href="/register" class="text-sm font-bold text-emerald-500 hover:text-emerald-400 transition">
                Cadastrar nova conta
            </a>
        </div>
    </div>
</div>