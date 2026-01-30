<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>BrickAsk - New Question</title>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Theme Configuration -->
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#ee2b2b",
              "background-light": "#f8f6f6",
              "background-dark": "#221010",
              "lego-green": "#28a745",
              "lego-blue": "#0055ad",
              "lego-yellow": "#ffcf00",
            },
            fontFamily: {
              "display": ["Plus Jakarta Sans", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem"},
          },
        },
      }
    </script>
<style>
        .lego-studs {
            background-image: radial-gradient(circle, #00000010 20%, transparent 20%);
            background-size: 20px 20px;
        }
        .brick-shadow {
            box-shadow: 4px 4px 0px 0px rgba(0,0,0,0.1);
        }
        .brick-active:active {
            transform: translateY(2px);
            box-shadow: 2px 2px 0px 0px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display min-h-screen relative overflow-x-hidden">
<!-- LEGO City Skyline Background Layer -->
<div class="fixed inset-0 z-0 opacity-20 pointer-events-none">
<div class="absolute bottom-0 w-full h-64 flex items-end justify-center gap-2 px-10">
<div class="w-32 h-64 bg-primary rounded-t-lg relative">
<div class="absolute top-4 left-4 right-4 h-8 bg-white/20 rounded"></div>
<div class="absolute top-16 left-4 right-4 h-8 bg-white/20 rounded"></div>
</div>
<div class="w-40 h-80 bg-lego-blue rounded-t-lg relative">
<div class="absolute top-10 left-6 right-6 h-12 bg-white/20 rounded"></div>
<div class="absolute top-28 left-6 right-6 h-12 bg-white/20 rounded"></div>
</div>
<div class="w-24 h-48 bg-lego-yellow rounded-t-lg relative">
<div class="absolute top-8 left-4 right-4 h-6 bg-black/10 rounded"></div>
</div>
<div class="w-48 h-96 bg-gray-400 rounded-t-lg relative">
<div class="grid grid-cols-2 gap-4 p-6">
<div class="h-10 bg-white/30 rounded"></div>
<div class="h-10 bg-white/30 rounded"></div>
<div class="h-10 bg-white/30 rounded"></div>
<div class="h-10 bg-white/30 rounded"></div>
</div>
</div>
<div class="w-32 h-72 bg-lego-green rounded-t-lg relative"></div>
<div class="w-20 h-40 bg-primary rounded-t-lg"></div>
</div>
</div>
<div class="relative z-10 flex h-auto min-h-screen w-full flex-col group/design-root">
<div class="layout-container flex h-full grow flex-col">
<!-- Header Section -->
<div class="px-4 md:px-40 flex flex-1 justify-center py-5">
<div class="layout-content-container flex flex-col max-w-[960px] flex-1">
<header class="flex items-center justify-between whitespace-nowrap border-b-4 border-solid border-[#e6dbdb] bg-white rounded-xl px-10 py-4 brick-shadow">
      <div class="flex items-center gap-8">
      <div class="flex items-center gap-3 text-primary">
      <div class="size-8 bg-primary rounded-lg flex items-center justify-center text-white brick-shadow">
      <span class="material-symbols-outlined text-2xl">extension</span>
      </div>
      <h2 class="text-[#181111] dark:text-white text-2xl font-black leading-tight tracking-tight"> LEGO Q&amp;A</h2>
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
<main class="mt-12 mb-20 flex flex-col items-center">

<div class="mb-8">
<h1 class="text-[#181111] dark:text-white tracking-tight text-[40px] font-black leading-tight text-center uppercase">
<span class="bg-lego-yellow px-4 py-1 rounded-lg brick-shadow inline-block transform -rotate-2 mr-2">Ask</span>
<span class="inline-block transform rotate-1">a New Question</span>
</h1>
</div>

<form action="{{ route('questions.update', $question->id) }}"
      method="POST"
      class="w-full max-w-[700px] flex flex-col gap-0 border-4 border-gray-800 rounded-2xl overflow-hidden brick-shadow bg-gray-800">

    @csrf
     @method('PUT')
    

<div class="h-4 w-full bg-white flex justify-around items-center px-10 opacity-50">
<div class="size-3 rounded-full bg-gray-200"></div>
<div class="size-3 rounded-full bg-gray-200"></div>
<div class="size-3 rounded-full bg-gray-200"></div>
<div class="size-3 rounded-full bg-gray-200"></div>
<div class="size-3 rounded-full bg-gray-200"></div>
<div class="size-3 rounded-full bg-gray-200"></div>
</div>

<div class="bg-white p-8 border-b-4 border-gray-100">
<label class="flex flex-col gap-3">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary font-bold">label</span>
<p class="text-[#181111] text-lg font-black uppercase tracking-tight">Question Title</p>
</div>
<input required value="{{$question->title}}" name="title" class="form-input w-full rounded-xl text-[#181111] focus:ring-4 focus:ring-primary/20 border-2 border-gray-200 bg-gray-50 h-16 placeholder:text-[#896161] px-6 text-lg font-medium leading-normal" placeholder="What's on your mind? (e.g. How to build a tower?)" value=""/>
</label>
</div>

<div class="bg-[#f4f0f0] p-8 border-b-4 border-gray-200">
<label class="flex flex-col gap-3">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-lego-blue font-bold">description</span>
<p class="text-[#181111] text-lg font-black uppercase tracking-tight">Details</p>
</div>

   <textarea required name="content" class="form-input w-full rounded-xl text-[#181111] focus:ring-4 focus:ring-lego-blue/20 border-2 border-gray-200 bg-white min-h-[200px] placeholder:text-[#896161] p-6 text-lg font-medium leading-normal" placeholder="Describe your question in detail...">
       {{$question->content}}
   </textarea>

</label>
</div>

<div class="bg-white p-8">
<label class="flex flex-col gap-3">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-lego-yellow font-bold">location_on</span>
<p class="text-[#181111] text-lg font-black uppercase tracking-tight">Location Tag</p>
</div>
<div class="relative">
<select required name='location' class="form-input w-full rounded-xl text-[#181111] focus:ring-4 focus:ring-lego-yellow/20 border-2 border-gray-200 bg-gray-50 h-16 appearance-none px-6 text-lg font-medium leading-normal">
<option value="">Select a City Region</option>
<option @if ($question->location == 'Casablanca') selected @endif  value="Casablanca">Casablanca</option>
<option @if ($question->location == 'Fas') selected @endif  value="Fas">Fas</option>
<option @if ($question->location == 'Meknes') selected @endif  value="Meknes">Meknes</option>
<option @if ($question->location == 'Rabat') selected @endif  value="Rabat">Rabat</option>
<option @if ($question->location == 'Marakech') selected @endif  value="Marakech">Marakech</option>

</select>
<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
<span class="material-symbols-outlined">expand_more</span>
</div>
</div>
</label>
</div>

<div class="bg-gray-100 p-8 flex justify-center border-t-4 border-gray-200">
<button type="submit" class="group relative w-full sm:w-auto min-w-[300px] h-20 bg-lego-green rounded-xl brick-shadow brick-active flex flex-col items-center justify-center transition-all">

<div class="absolute -top-3 left-0 w-full flex justify-around px-8">
<div class="size-6 bg-green-600 rounded-full border-b-4 border-black/10"></div>
<div class="size-6 bg-green-600 rounded-full border-b-4 border-black/10"></div>
<div class="size-6 bg-green-600 rounded-full border-b-4 border-black/10"></div>
<div class="size-6 bg-green-600 rounded-full border-b-4 border-black/10"></div>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-white text-3xl font-bold">rocket_launch</span>
<span class="text-white text-xl font-black uppercase tracking-widest">Build Question</span>
</div>
</button>
</div>
</form>


<div class="mt-12 flex items-center gap-2 px-6 py-2 bg-gray-800 rounded-full text-white text-xs font-bold uppercase tracking-widest brick-shadow">
<span class="text-lego-yellow">Powered by</span>
<span class="text-primary">Bilal Bakessou</span>
<span class="w-1 h-1 bg-white rounded-full"></span>
<span>© 2026 Bakessou bilal . Youcode </span>
</div>
</main>
</div>
</div>
</div>
</div>
</body></html>