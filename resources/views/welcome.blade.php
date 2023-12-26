<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <div class="p-7 text-center bg-light">
            <h1 class="font-semibold">INFORMACINĖ SISTEMA SKIRTA ŽVEJYBAI</h1>
        </div>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-blue-500 selection:text-blue">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <img class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" src="http://zvejyba.test/fish.png" alt="description of myimage" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                <form method="POST" action="{{ route('categories.store') }}">
                                    @csrf
                                    Žuvies pavadinimas:
                                    <br />
                                    <form id="L" method="post">
                                        <select name="Zuvies rusis">
                                            <option selected="selected" value="Zuvis">Žuvis</option>
                                            <option value="Zuvis">Paprastasis lynas</option>
                                            <option value="Zuvis">Srovinė aukšlė</option>
                                            <option value="Zuvis">Paprastoji aukšlė</option>
                                            <option value="Zuvis">Paprastoji saulažuvė</option>
                                            <option value="Zuvis">Paprastasis karšis</option>
                                            <option value="Zuvis">Paprastasis ūsorius</option>
                                            <option value="Zuvis">Paprastasis plakis</option>
                                            <option value="Zuvis">Paprastasis (auksinis) karosas</option>
                                            <option value="Zuvis">Paprastasis skersasnukis</option>
                                            <option value="Zuvis">Paprastasis gružlys</option>
                                            <option value="Zuvis">Europinis šapalas</option>
                                            <option value="Zuvis">Paprastoji meknė</option>
                                            <option value="Zuvis">Paprastasis strepetys</option>
                                            <option value="Zuvis">Ežerinė rainė</option>
                                            <option value="Zuvis">Paprastoji rainė</option>
                                            <option value="Zuvis">Paprastoji kartuolė</option>
                                            <option value="Zuvis">Paprastoji raudė</option>
                                            <option value="Zuvis">Paprastoji kuoja</option>
                                            <option value="Zuvis">Salatis</option>
                                            <option value="Zuvis">Šližys</option>
                                            <option value="Zuvis">Paprastasis kirtiklis</option>
                                            <option value="Zuvis">Šiaurinis auksaspalvis kirtiklis</option>
                                            <option value="Zuvis">Paprastasis vijūnas</option>
                                            <option value="Zuvis">Paprastasis kūjagalvis</option>
                                            <option value="Zuvis">Raibapelekis kūjagalvis</option>
                                            <option value="Zuvis">Europinė lydeka</option>
                                            <option value="Zuvis">Devynspyglė dyglė</option>
                                            <option value="Zuvis">Vėgėlė</option>
                                            <option value="Zuvis">Seliava</option>
                                            <option value="Zuvis">Ežerinis sykas</option>
                                            <option value="Zuvis">Margasis upėtakis</option>
                                            <option value="Zuvis">Kiršlys</option>
                                            <option value="Zuvis">Paprastasis šamas</option>
                                            <option value="Zuvis">Ukraininė nėgė</option>
                                            <option value="Zuvis">Mažoji nėgė</option>
                                            <option value="Zuvis">Upinė nėgė</option>
                                            <option value="Zuvis">Aštriašnipis eršketas</option>
                                            <option value="Zuvis">Europinis upinis ungurys</option>
                                            <option value="Zuvis">Perpelė</option>
                                            <option value="Zuvis">Trispyglė dyglė</option>
                                            <option value="Zuvis">Juodasis grundalas</option>
                                            <option value="Zuvis">Paplūdimių grundalas</option>
                                            <option value="Zuvis">Europinė stinta</option>
                                            <option value="Zuvis">Paprastasis žiobris</option>
                                            <option value="Zuvis">Ožka</option>
                                            <option value="Zuvis">Starkis</option>
                                            <option value="Zuvis">Ešerys</option>
                                            <option value="Zuvis">Pūgžlys</option>
                                            <option value="Zuvis">Upinė plekšnė</option>
                                            <option value="Zuvis">Atlantinė lašiša</option>
                                            <option value="Zuvis">Šlakis</option>
                                            <option value="Zuvis">Jūrinis sykas</option>
                                            <option value="Zuvis">Jūrinė nėgė</option>
                                            <option value="Zuvis">Sidabrinis karosas</option>
                                            <option value="Zuvis">Paprastasis karpis</option>
                                            <option value="Zuvis">Baltasis amūras</option>
                                            <option value="Zuvis">Juodasis amūras</option>
                                            <option value="Zuvis">Prienai</option>
                                            <option value="Zuvis">Radviliškis</option>
                                            <option value="Zuvis">Ramygala</option>
                                            <option value="Zuvis">Raseiniai</option>
                                            <option value="Zuvis">Rietavas</option>
                                            <option value="Zuvis">Rokiškis</option>
                                            <option value="Zuvis">Rūdiškės</option>
                                            <option value="Zuvis">Salantai</option>
                                            <option value="Zuvis">Seda</option>
                                            <option value="Zuvis">Simnas</option>
                                            <option value="Zuvis">Skaudvilė</option>
                                            <option value="Zuvis">Skuodas</option>
                                            <option value="Zuvis">Smalininkai</option>
                                            <option value="Zuvis">Subačius</option>
                                            <option value="Zuvis">Šakiai</option>
                                            <option value="Zuvis">Šalčininkai</option>
                                            <option value="Zuvis">Šeduva</option>
                                            <option value="Zuvis">Šiauliai</option>
                                            <option value="Zuvis">Šilalė</option>
                                            <option value="Zuvis">Šilutė</option>
                                            <option value="Zuvis">Širvintos</option>
                                            <option value="Zuvis">Švenčionėliai</option>
                                            <option value="Zuvis">Švenčionys</option>
                                            <option value="Zuvis">Tauragė</option>
                                            <option value="Zuvis">Telšiai</option>
                                            <option value="Zuvis">Tytuvėnai</option>
                                            <option value="Zuvis">Trakai</option>
                                            <option value="Zuvis">Troškūnai</option>
                                            <option value="Zuvis">Ukmergė</option>
                                            <option value="Zuvis">Utena</option>
                                            <option value="Zuvis">Užventis</option>
                                            <option value="Zuvis">Vabalninkas</option>
                                            <option value="Zuvis">Varėna</option>
                                            <option value="Zuvis">Varniai</option>
                                            <option value="Zuvis">Veisiejai</option>
                                            <option value="Zuvis">Venta</option>
                                            <option value="Zuvis">Viekšniai</option>
                                            <option value="Zuvis">Vievis</option>
                                            <option value="Zuvis">Vilkaviškis</option>
                                            <option value="Zuvis">Vilkija</option>
                                            <option value="Zuvis">Vilnius</option>
                                            <option value="Zuvis">Virbalis</option>
                                            <option value="Zuvis">Visaginas</option>
                                            <option value="Zuvis">Zarasai</option>
                                            <option value="Zuvis">Žagarė</option>
                                            <option value="Zuvis">Žiežmariai</option>
                                        </select>
                                    </form>

                                    Miesto pavadinimas:
                                    <br />
                                    <form id="L" method="post">
                                        <select name="Apskrities pavadinimas">
                                            <option selected="selected" value="Miestas ">Apskritis</option>
                                            <option value="Miestas ">Akmenė</option>
                                            <option value="Miestas">Alytus</option>
                                            <option value="Miestas">Anykščiai</option>
                                            <option value="Miestas">Ariogala</option>
                                            <option value="Miestas">Baltoji Vokė</option>
                                            <option value="Miestas">Birštonas</option>
                                            <option value="Miestas">Biržai</option>
                                            <option value="Miestas">Daugai</option>
                                            <option value="Miestas">Druskininkai</option>
                                            <option value="Miestas">Dūkštas</option>
                                            <option value="Miestas">Dusetoss</option>
                                            <option value="Miestas">Eišiškės</option>
                                            <option value="Miestas">Elektrėnai</option>
                                            <option value="Miestas">Ežerėlis</option>
                                            <option value="Miestas">Gargždai</option>
                                            <option value="Miestas">Garliava</option>
                                            <option value="Miestas">Gelgaudiškis</option>
                                            <option value="Miestas">Grigiškės</option>
                                            <option value="Miestas">Ignalina</option>
                                            <option value="Miestas">Jieznas</option>
                                            <option value="Miestas">Jonava</option>
                                            <option value="Miestas">Joniškėlis</option>
                                            <option value="Miestas">Joniškis</option>
                                            <option value="Miestas">Jurbarkas</option>
                                            <option value="Miestas">Kaišiadorys</option>
                                            <option value="Miestas">Kalvarija</option>
                                            <option value="Miestas">Kaunas</option>
                                            <option value="Miestas">Kavarskas</option>
                                            <option value="Miestas">Kazlų Rūda</option>
                                            <option value="Miestas">Kėdainiai</option>
                                            <option value="Miestas">Kelmė</option>
                                            <option value="Miestas">Kybartai</option>
                                            <option value="Miestas">Klaipėda</option>
                                            <option value="Miestas">Kretinga</option>
                                            <option value="Miestas">Kudirkos Naumiestis	</option>
                                            <option value="Miestas">Kupiškis</option>
                                            <option value="Miestas">Kuršėnai</option>
                                            <option value="Miestas">Lazdijai</option>
                                            <option value="Miestas">Lentvaris</option>
                                            <option value="Miestas">Linkuva</option>
                                            <option value="Miestas">Marijampolė</option>
                                            <option value="Miestas">Mažeikiai</option>
                                            <option value="Miestas">Molėtai</option>
                                            <option value="Miestas">Naujoji Akmenė</option>
                                            <option value="Miestas">Nemenčinė</option>
                                            <option value="Miestas">Neringa</option>
                                            <option value="Miestas">Obeliai</option>
                                            <option value="Miestas">Pabradė</option>
                                            <option value="Miestas">Pagėgiai</option>
                                            <option value="Miestas">Pakruojis</option>
                                            <option value="Miestas">Palanga</option>
                                            <option value="Miestas">Pandėlys</option>
                                            <option value="Miestas">Panemunė</option>
                                            <option value="Miestas">Panevėžys</option>
                                            <option value="Miestas">Pasvalys</option>
                                            <option value="Miestas">Plungė</option>
                                            <option value="Miestas">Priekulė</option>
                                            <option value="Miestas">Prienai</option>
                                            <option value="Miestas">Radviliškis</option>
                                            <option value="Miestas">Ramygala</option>
                                            <option value="Miestas">Raseiniai</option>
                                            <option value="Miestas">Rietavas</option>
                                            <option value="Miestas">Rokiškis</option>
                                            <option value="Miestas">Rūdiškės</option>
                                            <option value="Miestas">Salantai</option>
                                            <option value="Miestas">Seda</option>
                                            <option value="Miestas">Simnas</option>
                                            <option value="Miestas">Skaudvilė</option>
                                            <option value="Miestas">Skuodas</option>
                                            <option value="Miestas">Smalininkai</option>
                                            <option value="Miestas">Subačius</option>
                                            <option value="Miestas">Šakiai</option>
                                            <option value="Miestas">Šalčininkai</option>
                                            <option value="Miestas">Šeduva</option>
                                            <option value="Miestas">Šiauliai</option>
                                            <option value="Miestas">Šilalė</option>
                                            <option value="Miestas">Šilutė</option>
                                            <option value="Miestas">Širvintos</option>
                                            <option value="Miestas">Švenčionėliai</option>
                                            <option value="Miestas">Švenčionys</option>
                                            <option value="Miestas">Tauragė</option>
                                            <option value="Miestas">Telšiai</option>
                                            <option value="Miestas">Tytuvėnai</option>
                                            <option value="Miestas">Trakai</option>
                                            <option value="Miestas">Troškūnai</option>
                                            <option value="Miestas">Ukmergė</option>
                                            <option value="Miestas">Utena</option>
                                            <option value="Miestas">Užventis</option>
                                            <option value="Miestas">Vabalninkas</option>
                                            <option value="Miestas">Varėna</option>
                                            <option value="Miestas">Varniai</option>
                                            <option value="Miestas">Veisiejai</option>
                                            <option value="Miestas">Venta</option>
                                            <option value="Miestas">Viekšniai</option>
                                            <option value="Miestas">Vievis</option>
                                            <option value="Miestas">Vilkaviškis</option>
                                            <option value="Miestas">Vilkija</option>
                                            <option value="Miestas">Vilniaus apskritis</option>
                                            <option value="Miestas">Virbalis</option>
                                            <option value="Miestas">Visaginas</option>
                                            <option value="Miestas">Zarasai</option>
                                            <option value="Miestas">Žagarė</option>
                                            <option value="Miestas">Žiežmariai</option>
                                        </select>
                                    </form>

                                    <html>
                                    <body>

                                    <h1>Data:</h1>

                                    <form action="/action_page.php">
                                        <input type="date" id="birthday" name="birthday">
                                    </form>

                                    </body>
                                    </html>
                                    <form id="L" method="post">
                                        <h1>Valandos pasirinkimas:</h1>
                                        <select name="Valandos pasirinkimas">
                                            <option selected="selected" value="Valanda">Valanda</option>
                                            <option value="Valanda">00:00</option>
                                            <option value="Valanda">01:00</option>
                                            <option value="Valanda">02:00</option>
                                            <option value="Valanda">03:00</option>
                                            <option value="Valanda">04:00</option>
                                            <option value="Valanda">05:00</option>
                                            <option value="Valanda">06:00</option>
                                            <option value="Valanda">07:00</option>
                                            <option value="Valanda">08:00</option>
                                            <option value="Valanda">09:00</option>
                                            <option value="Valanda">10:00</option>
                                            <option value="Valanda">11:00</option>
                                            <option value="Valanda">12:00</option>
                                            <option value="Valanda">13:00</option>
                                            <option value="Valanda">14:00</option>
                                            <option value="Valanda">15:00</option>
                                            <option value="Valanda">16:00</option>
                                            <option value="Valanda">17:00</option>
                                            <option value="Valanda">18:00</option>
                                            <option value="Valanda">19:00</option>
                                            <option value="Valanda">20:00</option>
                                            <option value="Valanda">21:00</option>
                                            <option value="Valanda">22:00</option>
                                            <option value="Valanda">23:00</option>
                                        </select>
                                    </form>
                                    <br /><br />
                                    <button type="$submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Žiūrėti rezultatą</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-w-7xl mx-auto p-6 lg:p-8">
                    <div class="flex justify-center">

                    </div>
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900 dark:text-gray-100">
                                    2023-11-08 12:00 h
                                    <br />
                                    <h1>Informacija:</h1>
                                    <br />
                                    Oro temperatūra:
                                    <br />
                                    Vėjo greitis:
                                    <br />
                                    Vėjo kryptis:
                                    <br />
                                    Debesuotumas:
                                    <br />
                                    Atmosferos slėgis:
                                    <br />
                                    Oro drėgnis:
                                    <br />
                                    Mėnulio fazė:
                                    <br />
                                    <br />
                                    <h1>Žuvies kibimas: </h1>
                                    <br />
                                    <br />



                                </div>
                            </div>
                        </div>
                    </div>


                    </div>
                </div>

                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
