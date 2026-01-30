<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>LEGO Questions Feed</title>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#ee2b2b",
                        "lego-blue": "#0055ad",
                        "lego-yellow": "#f7d117",
                        "background-light": "#f8f6f6",
                        "background-dark": "#221010",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                },
            },
        }
    </script>
<style>
        .lego-studs {
            background-image: radial-gradient(circle, rgba(0,0,0,0.1) 20%, transparent 20%);
            background-size: 20px 20px;
        }
        .brick-shadow {
            box-shadow: 4px 4px 0px rgba(0,0,0,0.1);
        }
        .brick-shadow-primary {
            box-shadow: 4px 4px 0px #b01e1e;
        }
        .brick-shadow-blue {
            box-shadow: 4px 4px 0px #003d7a;
        }
        .brick-shadow-yellow {
            box-shadow: 4px 4px 0px #c9aa12;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#181111] dark:text-white transition-colors duration-200">
<div class="relative flex min-h-screen w-full flex-col">
<!-- Top Navigation Bar -->
<div class="px-4 md:px-40 flex justify-center py-4">
<div class="layout-content-container flex flex-col max-w-[960px] flex-1">
<header class="flex items-center justify-between whitespace-nowrap border-b-4 border-solid border-[#e6dbdb] bg-white rounded-xl px-10 py-4 brick-shadow">
      <div class="flex items-center gap-8">
      <div class="flex items-center gap-3 text-primary">
      <div class="size-8 bg-primary rounded-lg flex items-center justify-center text-white brick-shadow">
      <span class="material-symbols-outlined text-2xl">extension</span>
      </div>
      <h2 class="text-[#181111] dark:text-white text-2xl font-black leading-tight tracking-tight">BRICKASK</h2>
      </div>
      <nav class="hidden md:flex items-center gap-4">
      <a class="px-4 py-2 bg-lego-yellow text-black text-sm font-bold rounded-lg brick-shadow border-b-2 border-black/10 hover:translate-y-[-2px] transition-transform" href="/">Home</a>
      <a class="px-4 py-2 bg-lego-blue text-white text-sm font-bold rounded-lg brick-shadow border-b-2 border-black/10 hover:translate-y-[-2px] transition-transform" href="/questions">Browse</a>
      </nav>
      </div>
      <div class="flex flex-1 justify-end gap-6 items-center">
      @if (!Auth::check())
          <a href="/login" class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-11 px-5 bg-primary text-white text-sm font-black uppercase tracking-wider brick-shadow brick-active">
           <span class="truncate">Login</span>
          </a>
      @else
          <a href="/logout" class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-11 px-5 bg-primary text-white text-sm font-black uppercase tracking-wider brick-shadow brick-active">
              <span class="truncate">Log Out</span>
          </a>
          <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-11 border-4 border-lego-yellow" data-alt="User avatar profile picture" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBxIwoA8ZVrjVVm5rjltqnuMNQ5_iYN1JLEzNUFe4UzppOqsE9MtLlWH8Vkh7gWkc4YcSYWVoeMzGpWverga23H4ZBtuE4iDr_nfFV3cbV9HXl3YZIj4RI6dmtO0EP6ARzzHQG8h9RAyfHtj9ialgqCoi0npd8kX251ALoFc2gEAu6aOTYF1Bp3f9f3EYtSzKZE532q4t4XDpQVLppVZBbx-E7HyHCok8TR3onJbkecBIOgvbj421ngMK0rVT_LShdFlmrF7Uisd6o");'></div>
          </div>
      @endif
  </header>
 </div>
</div>
<main class="flex-1 max-w-[1200px] mx-auto w-full px-0 py-2 mt-8">
<!-- Filter Section (Chips) -->
<div class="flex flex-wrap gap-3 mb-8">
<div class="flex h-10 items-center justify-center gap-2 rounded-lg bg-primary text-white px-4 cursor-pointer hover:brightness-110 transition-all brick-shadow-primary">
<span class="material-symbols-outlined text-xl">schedule</span>
<span class="text-sm font-bold">Newest</span>
</div>
<div class="flex h-10 items-center justify-center gap-2 rounded-lg bg-white dark:bg-[#3a1d1d] border border-solid border-[#f4f0f0] dark:border-[#4d2626] px-4 cursor-pointer hover:bg-gray-50 dark:hover:bg-[#4d2626] transition-all">
<span class="material-symbols-outlined text-xl text-primary">star</span>
<span class="text-sm font-bold">Popular</span>
</div>
<div class="flex h-10 items-center justify-center gap-2 rounded-lg bg-white dark:bg-[#3a1d1d] border border-solid border-[#f4f0f0] dark:border-[#4d2626] px-4 cursor-pointer hover:bg-gray-50 dark:hover:bg-[#4d2626] transition-all">
<span class="material-symbols-outlined text-xl text-primary">chat_bubble</span>
<span class="text-sm font-bold">Unanswered</span>
</div>
</div>
<!-- Main Feed Grid -->

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Red Question Card -->
@foreach ($questions as $item)
<div class="flex flex-col bg-primary rounded-xl overflow-hidden brick-shadow-primary group transition-transform hover:-translate-y-1">
<div class="h-4 w-full lego-studs opacity-30"></div>

<a href="/questions/{{$item->id}}">
<div class="p-5 flex flex-col gap-3">
<div class="flex justify-between items-start">
<span class="text-xs font-bold text-white/80 uppercase tracking-widest">{{$item->location}}</span>
<span class="material-symbols-outlined text-white/50 group-hover:text-white transition-colors">more_horiz</span>
</div>
<h3 class="text-white text-xl font-extrabold leading-tight">{{$item->titile}}</h3>
<p class="text-white/90 text-sm leading-relaxed">
  {{$item->content}}
</p>
</div>
<!-- Reaction Bar -->
<div class="px-5 py-3 flex gap-4 bg-black/10 border-t border-white/10">

<form action="/questions/{{$item->id}}/like" method="POST">
    @csrf
     <button class="flex items-center gap-1 text-white">
     <span class="material-symbols-outlined text-lg fill-1">favorite</span>
     <span class="text-xs font-bold">{{$item->likes_count}}</span>
     </button>
</form>
<div class="flex items-center gap-1 text-white">
<span class="material-symbols-outlined text-lg">extension</span>
<span class="text-xs font-bold">{{$item->responses_count}}</span>
</div>
</div>
</a>
<!-- Response Plate -->
<form action="{{ route('responses.store') }}" method="POST">
    @csrf
    <div class="p-3 bg-[#e0e0e0] dark:bg-[#4d4d4d] lego-studs">
    <div class="bg-white dark:bg-[#221010] rounded-lg p-2 flex items-center gap-2 border border-black/5">
    <input type="hidden" name="question_id" value="{{ $item->id }}">
    <input name="content"  class="flex-1 bg-transparent border-none text-xs focus:ring-0 placeholder:text-gray-400" placeholder="Click to snap a reply..." type="text"/>
    <button type="submit" class="bg-primary text-white p-1 rounded">
    <span class="material-symbols-outlined text-sm">send</span>
    </button>
    </div>
    </div>
</form>

</div>

@endforeach

<!-- Yellow Question Card 
<div class="flex flex-col bg-lego-yellow rounded-xl overflow-hidden brick-shadow-yellow group transition-transform hover:-translate-y-1">
<div class="h-4 w-full lego-studs opacity-30"></div>
<div class="p-5 flex flex-col gap-3">
<div class="flex justify-between items-start">
<span class="text-xs font-bold text-[#5c4d00] uppercase tracking-widest">Space • 10m ago</span>
<span class="material-symbols-outlined text-[#5c4d00]/50 group-hover:text-[#5c4d00] transition-colors">more_horiz</span>
</div>
<h3 class="text-[#181111] text-xl font-extrabold leading-tight">Best way to clean dusty old LEGO bricks from the 90s?</h3>
<p class="text-[#181111]/80 text-sm leading-relaxed">
                            Just found my old space sets in the attic. They are covered in dust. Dishwasher? Hand wash only?
                        </p>
</div>
<div class="px-5 py-3 flex gap-4 bg-black/5 border-t border-black/5">
<div class="flex items-center gap-1 text-[#181111]">
<span class="material-symbols-outlined text-lg">favorite</span>
<span class="text-xs font-bold">89</span>
</div>
<div class="flex items-center gap-1 text-[#181111]">
<span class="material-symbols-outlined text-lg">extension</span>
<span class="text-xs font-bold">21</span>
</div>
</div>
<div class="p-3 bg-[#e0e0e0] dark:bg-[#4d4d4d] lego-studs">
<div class="bg-white dark:bg-[#221010] rounded-lg p-2 flex items-center gap-2 border border-black/5">
<input class="flex-1 bg-transparent border-none text-xs focus:ring-0 placeholder:text-gray-400" placeholder="Share your expertise..." type="text"/>
<button class="bg-primary text-white p-1 rounded">
<span class="material-symbols-outlined text-sm">send</span>
</button>
</div>
</div>
</div>
-->
</div>

</div>
</main>

<!-- Floating Action Button (2x2 Brick) -->
<div class="fixed bottom-8 right-8 z-[100]">
    <a href="/questions/create" class="group relative bg-primary size-16 rounded-lg flex flex-col items-center justify-center brick-shadow-primary hover:scale-105 active:scale-95 transition-all">
        <!-- Studs on top of the button -->
        <div class="absolute -top-1 left-0 w-full flex justify-around px-2">
            <div class="size-3 bg-primary border-b border-black/10 rounded-full"></div>
            <div class="size-3 bg-primary border-b border-black/10 rounded-full"></div>
        </div>
        <span class="material-symbols-outlined text-white text-3xl">add</span>
        <span class="absolute -bottom-8 right-0 text-primary font-bold text-xs opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">New Question</span>
    </a>
</div>
<!-- Decorative elements to make it feel more "LEGO" -->
<div class="fixed top-20 left-4 -z-10 opacity-20 pointer-events-none hidden lg:block">
    <div class="w-12 h-24 bg-lego-blue rounded-lg lego-studs brick-shadow-blue"></div>
</div>
<div class="fixed bottom-20 left-10 -z-10 opacity-20 pointer-events-none hidden lg:block rotate-12">
    <div class="w-20 h-10 bg-lego-yellow rounded-lg lego-studs brick-shadow-yellow"></div>
</div>
</div>


<footer class="mt-20 bg-gray-300 dark:bg-zinc-900 stud-pattern py-12 px-4 border-t-8 border-gray-400 dark:border-zinc-800">
<div class="max-w-5xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8">
<div class="flex items-center gap-3">
<div class="bg-primary p-1 rounded shadow-brick">
<span class="material-symbols-outlined text-white text-xl">extension</span>
</div>
<h2 class="text-xl font-800 tracking-tighter uppercase italic">BrickTalk</h2>
</div>
<div class="flex gap-8 text-sm font-black uppercase text-gray-600 dark:text-gray-400">
<a class="hover:text-primary" href="#">Guidelines</a>
<a class="hover:text-primary" href="#">Inventory</a>
<a class="hover:text-primary" href="#">API</a>
<a class="hover:text-primary" href="#">Privacy</a>
</div>
<p class="text-xs font-bold text-gray-500 uppercase">© 2024 Build Your Dreams, One Brick at a Time.</p>
</div>
</footer>
</body>
</html>

