<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>LEGO Favorites Page</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f9f506",
                        "background-light": "#f8f8f5",
                        "background-dark": "#23220f",
                        "lego-red": "#e60012",
                        "lego-blue": "#0055bf",
                        "lego-green": "#00a95c",
                        "lego-yellow": "#f9f506",
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
        .lego-gradient {
            background: linear-gradient(135deg, #e0e7ff 0%, #f3e8ff 100%);
            position: relative;
            overflow: hidden;
        }
        .star-field {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            background-image: 
                radial-gradient(2px 2px at 20px 30px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 40px 70px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(1px 1px at 90px 40px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 160px 120px, #ffffff, rgba(0,0,0,0));
            background-repeat: repeat;
            background-size: 200px 200px;
            opacity: 0.4;
        }
        .brick-letter {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 56px;
            position: relative;
            color: white;
            font-weight: 800;
            font-size: 2rem;
            text-shadow: 2px 2px 0px rgba(0,0,0,0.2);
            border-bottom: 6px solid rgba(0,0,0,0.2);
            margin: 0 2px;
            border-radius: 4px;
        }
        .brick-letter::before {
            content: '';
            position: absolute;
            top: -6px;
            left: 50%;
            transform: translateX(-50%);
            width: 24px;
            height: 6px;
            border-radius: 4px 4px 0 0;
            background: inherit;
            filter: brightness(1.2);
        }
        .lego-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 6px 6px 0px 0px rgba(0,0,0,0.1);
        }
        .lego-card:hover {
            transform: translateY(-4px);
            box-shadow: 10px 10px 0px 0px rgba(0,0,0,0.1);
        }
        .stud-overlay {
            position: absolute;
            top: -12px;
            left: 20px;
            display: flex;
            gap: 12px;
        }
        .stud {
            width: 16px;
            height: 12px;
            border-radius: 4px 4px 0 0;
            filter: brightness(1.1);
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display">
<div class="lego-gradient min-h-screen">
<div class="star-field"></div>
<!-- TopNavBar -->
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
     
       @if (Auth::check())
      <a class="px-4 py-2 bg-lego-green text-white text-sm font-bold rounded-lg brick-shadow border-b-2 border-black/10 hover:translate-y-[-2px] transition-transform" href="/favorite">Favorite</a>
      @endif

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
</div></div>
 
 <main class="relative z-10 px-6 lg:px-40 py-12">
<!-- 3D Brick Header Section -->
<div class="flex flex-col items-center mb-12">
<div class="flex flex-wrap justify-center mb-4">
<div class="brick-letter bg-lego-red">M</div>
<div class="brick-letter bg-lego-blue">Y</div>
<div class="w-8"></div>
<div class="brick-letter bg-lego-green">F</div>
<div class="brick-letter bg-lego-yellow !text-black">A</div>
<div class="brick-letter bg-lego-red">V</div>
<div class="brick-letter bg-lego-blue">O</div>
<div class="brick-letter bg-lego-green">R</div>
<div class="brick-letter bg-lego-red">I</div>
<div class="brick-letter bg-lego-yellow !text-black">T</div>
<div class="brick-letter bg-lego-blue">E</div>
<div class="brick-letter bg-lego-green">S</div>
</div>
<p class="text-slate-600 text-lg font-bold bg-white/50 px-4 py-1 rounded-full border border-slate-300">You have <span class="text-red-500/75">{{ $user->favorates_count }} </span>items in your collection</p>
</div>
<!-- Filter Chips -->
<div class="flex gap-3 mb-8 justify-center flex-wrap">
<div class="flex h-10 items-center justify-center rounded-lg bg-primary border-2 border-black px-6 shadow-[3px_3px_0px_#000] cursor-pointer">
<p class="text-black text-sm font-bold uppercase tracking-tight">All Bricks</p>
</div>
</div>
<!-- Favorites Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
<!-- Card 1 (Red) -->
@foreach($questions as $question)
<div class="lego-card relative flex flex-col bg-white border-[4px] border-lego-red rounded-lg p-6">
<div class="stud-overlay">
<div class="stud bg-lego-red"></div>
<div class="stud bg-lego-red"></div>
<div class="stud bg-lego-red"></div>
</div>
<form action="{{ route('questions.favorite', $question->id) }}" method="POST">
    @csrf

<button class="absolute -top-4 -right-4 size-10 bg-primary border-2 border-black rounded-full flex items-center justify-center shadow-md hover:bg-red-500 hover:cursor-pointer">
<span class="material-symbols-outlined text-black font-bold text-xl" style="font-variation-settings: 'FILL' 1">remove</span>
</button>
</form>
<div class="flex flex-col flex-1">
    <div class="w-full h-48 bg-gray-100 rounded-lg mb-4 bg-center bg-cover border border-slate-200" data-alt="Close up of SNOT building technique bricks" style='background-image: url("../../assets/image.jpg");'></div>
<div class="flex items-center gap-2 mb-2">
<span class="bg-lego-red text-white text-[10px] font-black px-2 py-0.5 rounded uppercase tracking-tighter">Q</span>
<div class="flex items-center gap-1 bg-slate-100 px-2 py-0.5 rounded-sm border border-slate-200">
<span class="material-symbols-outlined text-xs">location_on</span>
<span class="text-[10px] font-bold text-slate-600">{{$question->location}}</span>
</div>
</div>
<h3 class="text-black text-xl font-extrabold leading-tight mb-2">{{$question->user->name}}</h3>
<p class="text-slate-600 text-sm font-medium leading-relaxed mb-6">{{$question->content}}</p>
<div class="mt-auto flex gap-2">
<div class="flex items-center gap-1.5 bg-slate-50 border-2 border-black px-3 py-1 rounded-lg">
<span class="material-symbols-outlined text-sm font-bold">thumb_up</span>
<span class="text-xs font-black">{{$question->likes_count}}</span>
</div>
<div class="flex items-center gap-1.5 bg-slate-50 border-2 border-black px-3 py-1 rounded-lg">
<span class="material-symbols-outlined text-sm font-bold">chat_bubble</span>
<span class="text-xs font-black">{{$question->responses_count}}</span>
</div>
</div>
</div>
</div>
@endforeach
</div>
</main>
<!-- Floating Action Button -->
<a href="/questions/create" class="fixed bottom-8 right-8 size-16 bg-primary border-4 border-black rounded-xl shadow-[6px_6px_0px_#000] flex items-center justify-center hover:translate-y-[-4px] active:translate-y-[0px] active:shadow-none transition-all z-50">
<span class="material-symbols-outlined text-black text-3xl font-black">add</span>
</a>
</div>

<footer class="mt-20 bg-gray-300 dark:bg-zinc-900 stud-pattern py-12 px-4 border-t-8 border-gray-400 dark:border-zinc-800">
<div class="max-w-5xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8">
<div class="flex items-center gap-3">
<div class="bg-primary p-1 rounded shadow-brick">
<span class="material-symbols-outlined text-white text-xl">extension</span>
</div>
<h2 class="text-xl font-800 tracking-tighter uppercase italic">BrickTalk</h2>
</div>
<p class="text-xs font-bold text-gray-500 uppercase">© 2026 Bakessou Bilal . Youcode</p>
</div>
</footer>
</body></html>