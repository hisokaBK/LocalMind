<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>LEGO Q&amp;A - Register</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                "primary": "#ee2b2b",
                "lego-blue": "#0055ad",
                "lego-yellow": "#ffd500",
                "background-light": "#f8f6f6",
                "background-dark": "#221010",
            },
            fontFamily: { "display": ["Plus Jakarta Sans","sans-serif"] },
            borderRadius: { "DEFAULT":"0.125rem","lg":"0.25rem","xl":"0.5rem","full":"0.75rem" },
        },
    },
}
</script>
<style>
.lego-pattern {
    background-color: #ffd500;
    background-image: radial-gradient(#e6c000 20%, transparent 20%);
    background-size: 40px 40px;
}
.brick-shadow { box-shadow:0 6px 0 0 #003a75; }
.brick-shadow:active { box-shadow:0 2px 0 0 #003a75; transform: translateY(4px); }
.baseplate-card { box-shadow: 8px 8px 0px 0px rgba(0,0,0,0.1); }
</style>
</head>
<body class="font-display bg-background-light dark:bg-background-dark min-h-screen">
<div class="relative flex min-h-screen w-full flex-col overflow-x-hidden lego-pattern">

<main class="flex flex-1 items-center justify-center p-6 md:p-12 w-full">
<div class="max-w-[540px] w-full">

<!-- Registration Card -->
<div class="bg-white border-4 border-black p-8 rounded-sm baseplate-card relative overflow-hidden">
<div class="mb-8 text-center">
<h1 class="text-3xl font-black text-[#181111] uppercase tracking-tighter mb-2">Build Your Profile</h1>
<p class="text-[#896161] text-base font-bold">Join the LEGO Q&amp;A community and start building knowledge together.</p>
</div>

<!-- Success Message -->
@if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<!-- Registration Form -->
<form method="POST" action="/register" class="flex flex-col gap-5">
@csrf

<!-- Full Name -->
<div class="flex flex-col gap-2">
<label class="flex flex-col">
<span class="text-[#181111] text-sm font-black uppercase tracking-wide pb-1 flex items-center gap-2">
<span class="material-symbols-outlined text-xs">person</span> Full Name
</span>
<input type="text" name="name" value="{{ old('name') }}" class="form-input w-full rounded-sm text-[#181111] border-2 border-black bg-white h-14 placeholder:text-gray-400 p-4 text-base font-bold focus:ring-0 focus:border-lego-blue transition-all" placeholder="Master Builder Name"/>
</label>
@error('name')
    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
@enderror
</div>

<!-- Email Address -->
<div class="flex flex-col gap-2">
<label class="flex flex-col">
<span class="text-[#181111] text-sm font-black uppercase tracking-wide pb-1 flex items-center gap-2">
<span class="material-symbols-outlined text-xs">mail</span> Email Address
</span>
<input type="email" name="email" value="{{ old('email') }}" class="form-input w-full rounded-sm text-[#181111] border-2 border-black bg-white h-14 placeholder:text-gray-400 p-4 text-base font-bold focus:ring-0 focus:border-lego-blue transition-all" placeholder="brick_fan@example.com"/>
</label>
@error('email')
    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
@enderror
</div>

<!-- Passwords Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<!-- Password -->
<div class="flex flex-col gap-2">
<label class="flex flex-col">
<span class="text-[#181111] text-sm font-black uppercase tracking-wide pb-1 flex items-center gap-2">
<span class="material-symbols-outlined text-xs">lock</span> Password
</span>
<input type="password" name="password" class="form-input w-full rounded-sm text-[#181111] border-2 border-black bg-white h-14 placeholder:text-gray-400 p-4 text-base font-bold focus:ring-0 focus:border-lego-blue transition-all" placeholder="••••••••"/>
</label>
@error('password')
    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
@enderror
</div>

<!-- Confirm Password -->
<div class="flex flex-col gap-2">
<label class="flex flex-col">
<span class="text-[#181111] text-sm font-black uppercase tracking-wide pb-1 flex items-center gap-2">
<span class="material-symbols-outlined text-xs">verified_user</span> Confirm Password
</span>
<input type="password" name="password_confirmation" class="form-input w-full rounded-sm text-[#181111] border-2 border-black bg-white h-14 placeholder:text-gray-400 p-4 text-base font-bold focus:ring-0 focus:border-lego-blue transition-all" placeholder="••••••••"/>
</label>
</div>
</div>

<!-- Terms Checkbox -->
<div class="flex items-center gap-3 py-2">
<input class="size-5 rounded-sm border-2 border-black text-lego-blue focus:ring-0" type="checkbox" name="terms"/>
<span class="text-sm font-bold text-[#181111]">I agree to the <a class="text-primary underline" href="#">Builder's Code</a></span>
</div>

<!-- Register Button -->
<div class="mt-4">
<button type="submit" class="w-full bg-lego-blue text-white text-xl font-black uppercase tracking-widest py-4 rounded-sm brick-shadow transition-all flex items-center justify-center gap-3">
<span class="material-symbols-outlined">add_box</span>
Register
</button>
</div>
</form>

<!-- Footer Link -->
<div class="mt-8 text-center border-t-2 border-dashed border-gray-200 pt-6">
<p class="text-sm font-bold text-[#896161]">
Already a builder? 
<a class="text-primary hover:underline ml-1 font-black" href="/login">Sign in here.</a>
</p>
</div>

</div>
</main>

<footer class="p-8 text-center">
<p class="text-black font-black uppercase tracking-tighter text-sm opacity-60">© 2026 LEGO Q&amp;A - Built with passion &amp; blocks</p>
</footer>
</div>
</body>
</html>
