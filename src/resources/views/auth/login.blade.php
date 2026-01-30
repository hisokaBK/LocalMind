<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>LEGO Q&amp;A - Login</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                "primary": "#ee2b2b",
                "background-light": "#f8f6f6",
                "background-dark": "#221010",
            },
            fontFamily: { "display":["Plus Jakarta Sans","sans-serif"] },
            borderRadius: { "DEFAULT":"0.125rem","lg":"0.25rem","xl":"0.5rem","full":"0.75rem" },
        },
    },
}
</script>
<style>
.lego-pattern {
    background-color: #f8f6f6;
    background-image: radial-gradient(#e5e7eb 20%, transparent 20%), radial-gradient(#e5e7eb 20%, transparent 20%);
    background-position: 0 0, 20px 20px;
    background-size: 40px 40px;
}
.dark .lego-pattern {
    background-color: #221010;
    background-image: radial-gradient(#3a1e1e 20%, transparent 20%), radial-gradient(#3a1e1e 20%, transparent 20%);
}
.brick-shadow { box-shadow: 0 4px 0 0 #c41e1e; }
.brick-shadow:active { box-shadow:0 1px 0 0 #c41e1e; transform: translateY(3px); }
.baseplate-studs {
    background-image: radial-gradient(circle, #f0f0f0 2px, transparent 2.5px);
    background-size: 24px 24px;
}
.dark .baseplate-studs { background-image: radial-gradient(circle, #2d1818 2px, transparent 2.5px); }
</style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#181111] dark:text-white antialiased">
<div class="relative min-h-screen flex flex-col items-center justify-center lego-pattern p-6">

<!-- Success message -->
@if(session('success'))
<div class="mb-4 w-full max-w-[480px] p-4 bg-green-100 text-green-800 font-bold rounded">
    {{ session('success') }}
</div>
@endif

<main class="w-full max-w-[480px] bg-white dark:bg-[#1a0a0a] rounded-lg border-4 border-[#e6dbdb] dark:border-[#3d2424] shadow-2xl relative overflow-hidden">
<div class="absolute inset-0 baseplate-studs opacity-50 pointer-events-none"></div>
<div class="relative z-10 p-8 @container">

<div class="mb-8">
<h2 class="text-3xl font-bold leading-tight mb-2 dark:text-white">Welcome Back, Builder!</h2>
<p class="text-[#896161] dark:text-gray-400">Time to assemble some answers.</p>
</div>

<form method="POST" action="/login" class="space-y-6">
@csrf

<!-- Email / Builder ID -->
<div class="flex flex-col gap-2">
<label class="text-sm font-bold uppercase tracking-wider text-[#181111] dark:text-gray-300">Builder ID / Email</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-[#896161]">person</span>
<input type="text" name="email" value="{{ old('email') }}" class="w-full pl-12 pr-4 h-14 bg-background-light dark:bg-[#2d1818] border-2 border-[#e6dbdb] dark:border-[#3d2424] rounded font-medium focus:ring-primary focus:border-primary transition-all dark:text-white placeholder:text-[#896161]/60" placeholder="e.g. MasterBuilder99"/>
</div>
@error('email')
<p class="text-red-600 text-sm mt-1">{{ $message }}</p>
@enderror
</div>

<!-- Password -->
<div class="flex flex-col gap-2">
<div class="flex justify-between items-center">
<label class="text-sm font-bold uppercase tracking-wider text-[#181111] dark:text-gray-300">Password</label>
<a class="text-xs font-bold text-primary hover:underline uppercase" href="#">Forgot?</a>
</div>
<div class="relative">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-[#896161]">lock</span>
<input type="password" name="password" class="w-full pl-12 pr-4 h-14 bg-background-light dark:bg-[#2d1818] border-2 border-[#e6dbdb] dark:border-[#3d2424] rounded font-medium focus:ring-primary focus:border-primary transition-all dark:text-white placeholder:text-[#896161]/60" placeholder="••••••••"/>
</div>
@error('password')
<p class="text-red-600 text-sm mt-1">{{ $message }}</p>
@enderror
</div>

<!-- Login Button -->
<button type="submit" class="w-full bg-primary text-white h-14 font-extrabold text-lg uppercase tracking-widest rounded brick-shadow flex items-center justify-center gap-2 hover:brightness-110 transition-all">
<span>Assemble Login</span>
<span class="material-symbols-outlined">login</span>
</button>
</form>

<div class="mt-10 pt-6 border-t-2 border-[#f4f0f0] dark:border-[#3d2424] flex flex-col items-center gap-4">
<p class="text-[#896161] dark:text-gray-400 font-medium">New to the grid?</p>
<a class="text-primary font-bold text-lg hover:underline" href="/register">Join the Crew</a>
</div>

</div>
</main>

<!-- Footer -->
<footer class="mt-12 text-sm font-bold text-[#896161] dark:text-gray-500 flex gap-6 uppercase tracking-tighter">
<a class="hover:text-primary transition-colors" href="#">Brick Support</a>
<a class="hover:text-primary transition-colors" href="#">Terms of Play</a>
<a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
</footer>

</div>
</body>
</html>
