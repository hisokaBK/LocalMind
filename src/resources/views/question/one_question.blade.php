<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>LEGO Show Question - BrickTalk</title>
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
                        "primary": "#ee2b2b",
                        "lego-yellow": "#FFD500",
                        "lego-blue": "#0055BF",
                        "lego-green": "#00AD43",
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
                    boxShadow: {
                        'brick': '0 4px 0 0 rgba(0,0,0,0.2)',
                        'brick-lg': '0 6px 0 0 rgba(0,0,0,0.2)',
                        'brick-active': '0 2px 0 0 rgba(0,0,0,0.2)',
                    }
                },
            },
        }
    </script>
<style>
        .stud-pattern {
            background-image: radial-gradient(circle, #e5e7eb 20%, transparent 20%);
            background-size: 24px 24px;
        }
        .lego-studs-top::before {
            content: "";
            position: absolute;
            top: -8px;
            left: 10px;
            right: 10px;
            height: 8px;
            background-image: radial-gradient(circle, currentColor 40%, transparent 41%);
            background-size: 20px 20px;
            opacity: 0.3;
        }
        .brick-shadow {
            box-shadow: 0 6px 0 0 rgba(0,0,0,0.15);
        }
        .brick-shadow-primary {
            box-shadow: 0 4px 0 0 #b31d1d;
        }
        .brick-shadow-yellow {
            box-shadow: 0 4px 0 0 #ccaa00;
        }
        .brick-shadow-green {
            box-shadow: 0 4px 0 0 #007a2f;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#181111] transition-colors duration-200">

<div class="px-4 md:px-40 flex flex-1 justify-center py-5">
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
</div>
</div>

<main class="max-w-5xl mx-auto px-4 py-8">

<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<div class="lg:col-span-9">
<article class="relative bg-lego-yellow rounded-xl p-8 mb-12 brick-shadow-yellow transition-transform hover:-translate-y-1">
<div class="absolute -top-4 -left-4 bg-primary text-white text-xs font-black px-3 py-1 rounded shadow-brick uppercase tracking-widest">
                        High Priority
                    </div>
<div class="flex justify-between items-start gap-4 mb-6">
<h2 class="text-3xl md:text-4xl font-800 leading-none tracking-tight uppercase">{{$question->title}}</h2>

<div class="flex gap-2 shrink-0">
<a href="/questions/{{$question->id}}/edit" class="bg-white p-2 rounded shadow-brick hover:translate-y-0.5 hover:shadow-brick-active transition-all" title="Edit">
<span class="material-symbols-outlined text-lego-yellow">edit</span>
</a>
<form action="/questions/{{$question->id}}" method="POST" >
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-primary p-2 rounded shadow-brick-primary hover:translate-y-0.5 hover:shadow-brick-active transition-all" title="Delete">
      <span class="material-symbols-outlined text-white">delete</span>
    </button>
</form>

</div>
</div>
   <p class="text-xl font-medium leading-relaxed mb-8 opacity-90">
        {{$question->content}}
   </p>
<div class="flex flex-wrap items-center justify-between gap-4 pt-6 border-t-2 border-black/10">
<div class="flex items-center gap-4">

<form action="/questions/{{$question->id}}/like" method="POST">
    @csrf
  <button class="flex items-center gap-2 bg-primary text-white px-5 py-2 rounded-full font-bold shadow-brick-primary hover:scale-105 transition-transform">
  <span class="material-symbols-outlined fill-1">favorite</span>
  <span> {{$question->likes_count}} Likes</span>
  </button>
</form>

<div class="flex items-center gap-2 bg-lego-blue text-white px-5 py-2 rounded-full font-bold shadow-brick">
<span class="material-symbols-outlined">forum</span>
<span>{{$question->responses_count}} Responses</span>
</div>
</div>
<div class="flex items-center gap-3">
<div class="text-right">
<p class="text-xs font-bold uppercase opacity-60 leading-none">{{$question->user->name}}</p>
<p class="text-xs opacity-60">Posted {{$question->created_at}}</p>
</div>
<div class="w-10 h-10 bg-white rounded-full border-2 border-black/10 flex items-center justify-center overflow-hidden">
<span class="material-symbols-outlined text-3xl mt-2 text-lego-yellow">face</span>
</div>
</div>
</div>
</article>

<div class="flex items-center justify-between px-4 mb-6">
<h3 class="text-2xl font-800 uppercase italic">The Discussion</h3>
</div>
<form action="{{ route('responses.store') }}" method="POST" class="mb-5">
    @csrf
    
    <div class="bg-gray-200 dark:bg-zinc-900 rounded-xl p-6 stud-pattern border-4 border-gray-300 dark:border-zinc-700">
        <h4 class="text-lg font-800 uppercase italic mb-4 flex items-center gap-2">
            <span class="material-symbols-outlined">add_comment</span>
            Add your brick to the conversation
        </h4>
        <input type="hidden" name="question_id" value="{{ $question->id }}">
        <div class="bg-white dark:bg-zinc-800 rounded-lg p-2 shadow-inner">
            <textarea name="content"  class="w-full bg-transparent border-none focus:ring-0 text-lg min-h-[120px]" placeholder="Type your response here..."></textarea>
        </div>
        <div class="mt-4 flex justify-end">
            <button class="bg-lego-green text-white font-black uppercase px-8 py-3 rounded shadow-brick-green hover:translate-y-0.5 hover:shadow-brick-active transition-all flex items-center gap-2">
                <span>Post Brick</span>
                <span class="material-symbols-outlined">send</span>
            </button>
        </div>
    </div>
</form>

<div class="space-y-6 mb-12">
@foreach ($question->responses as $response)
    
<div class="relative bg-white dark:bg-zinc-800 rounded-xl p-6 shadow-brick border-t-8 border-gray-100 dark:border-zinc-700">
<div class="flex gap-4">
<div class="shrink-0">
<div class="w-12 h-12 bg-lego-green rounded shadow-brick flex items-center justify-center overflow-hidden">
<span class="material-symbols-outlined text-3xl mt-2 text-white">face_6</span>
</div>
</div>
<div class="flex-1">
<div class="flex items-center justify-between mb-2">
<span class="font-black uppercase text-sm tracking-wide">{{$response->user->name}}</span>
</div>
    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
         {{$response->content}}
    </p>

</div>
</div>
<div class="absolute top-3 right-3 flex gap-2">

    <a href="{{ route('responses.edit', $response->id) }}"
       class="bg-yellow-400 border-2 border-black text-black px-3 py-1 text-xs font-extrabold uppercase rounded-md shadow-[3px_3px_0px_#000] active:shadow-none active:translate-x-[3px] active:translate-y-[3px] transition ">
        ✏️ Edit
    </a>

    <form action="{{ route('responses.destroy', $response->id) }}"
          method="POST"
          onsubmit="return confirm('Wash mt2aked bghiti tms7 had response؟')">
        @csrf
        @method('DELETE')

        <button type="submit"
            class=" bg-red-500 border-2 border-black text-white px-3 py-1 text-xs font-extrabold uppercase rounded-md shadow-[3px_3px_0px_#000] active:shadow-none active:translate-x-[3px] active:translate-y-[3px] transition">
            🗑 Delete
        </button>
    </form>

</div>

</div>
@endforeach
</div>

</div>

<aside class="lg:col-span-3 space-y-8">

<div class="h-40 bg-cover bg-center" data-alt="Lego Technic Excavator Liebherr R 9800 Set" style="background-image: url('https://www.lego.com/cdn/cs/set/assets/blt742e8599eb5e8931/40649.png?format=webply&fit=bounds&quality=70&width=800&height=800&dpr=1.5')"></div>

</aside>
</div>
</main>
<form action="{{ route('questions.favorite', $question->id) }}" method="POST">
    @csrf

<button class="fixed bottom-8 right-8 w-16 h-16 bg-primary text-white rounded shadow-brick-primary hover:translate-y-1 hover:shadow-brick-active transition-all flex flex-col items-center justify-center z-50 group">
<span class="material-symbols-outlined text-3xl">star</span>
<span class="text-[8px] font-black uppercase">Favorite</span>
<div class="absolute -top-12 right-0 bg-black text-white px-3 py-1 rounded text-xs font-bold opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
            add to Favorite
        </div>
</button>
</form>

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
</body></html>