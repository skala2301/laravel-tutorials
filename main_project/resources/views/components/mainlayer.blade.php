<!-- Updated webpage structure inspired by Nier Automata's serene ruins 

Colores principales
C9213B -> rojo carmesi
931931 -> rojo carmesi oscuro
22252D -> oscuro principal


-->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-[#22252D]">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/output.css" rel="stylesheet">
    

    <title>Magnus Byblos</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    @endif
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50 h-full ">
  <div class="h-full">
    <nav class="bg-[#C9213B]">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="shrink-0">
              <?xml version="1.0" encoding="UTF-8"?>
              <svg version="1.1" viewBox="0 0 1024 1024" width="50" height="50" xmlns="http://www.w3.org/2000/svg">
              <path transform="translate(514,140)" d="m0 0 33 1 42 6 31 8 24 8 22 9 23 11 14 8 17 11 11 8 14 11 13 12 8 7 16 16 7 8 9 10 8 11 12 17 12 19 13 24 8 17 10 26 9 31 6 30 3 23 2 29v13l-3 39-4 27-9 36-11 32-8 18-9 19-14 24-13 18-12 16-11 13-9 10-5 6-8 7-12 11-11 9-17 13-16 10-13 8-23 12-23 10-15 6-23 7-28 6-30 5-11 1h-52l-31-3-32-6-24-7-17-5-34-14-19-10-14-8-16-11-14-10-14-11-11-10-8-7-16-16-7-8-14-17-12-17-7-11-10-17-9-17-12-28-11-33-7-29-5-32-2-25v-36l2-21 5-32 4-19 7-25 8-23 8-19 7-14 12-22 10-15 21-28 12-14 12-13 14-13 11-9 18-14 21-14 15-9 28-14 20-8 24-8 33-8 35-5 11-1zm51 110-6 4-3 5v15l7 1 8-7 2-4v-10l-6-2v-2zm-56 20-3 2v29l1 8 3-1v2h2v-5h4l1-2 2-29-1-3zm33 5-2 13 1 12 4 1 1 8h3l3-9 1-7v-8l-3-6-5-4zm107 23m1 7 1 4 1-4zm-137 7-1 2 3-1zm-3 1m37 0-1 4 1 2h2v-5zm-34 2 1 3 2-3zm296 21m-295 3 1 3zm303 11 1 2zm-146 1-6 3-10 8v5l3 2h17l8-6 6-8-1-3-4-1zm148 5 2 13v7l-7-1 1 2h3v2l-3-1-2 5-4 1-3 4v2l-13-1-10-6-7-3-4 8-3 2-7-1-4-1v8l-4 10-9 12-8 4-3 5 1 3h-3l-2-6-4-2v-2h-2l-2 4h-2l-2-3-4 26-9 27-8 18-6 12-7 10-10 14-13 14-7 8-15 10-7 6v2h40l181-1 3-21 2-27v-26l-3-31-5-28-7-28-6-18-11-26-4-6zm-2 12v3h-2v2h3l1-5zm-195 21-5 2-1 7 7-1 5-1v-5zm-434 6-3 5-7 24-5 24-3 19-2 23v39l2 25 2 13 221 1 2-2-8-6-12-8-13-12-9-11-4-4-7-10-6-9-5-8-5-10-4-10-7-12-3 3v5l-4 1-1-5-2-1-3 1-2 10h-3l-1-2-6 4-4 1-5-5-4-6-7 2-4 5-3 1h-11l-6-4-2-4v-8l5-6 2-1v-2l-8-3-1-4-9-2-10-6-4-4-10-1-7-6-4-9-3-12-6-13zm332 1-2 4 2 2 2-4zm36 5-10 9v2l-4 2v2l-4 2-6 8-7 14-5 12-1 4-4 4-1 4 3 5 3 4-3 4-2 2-4 1 1 4 1 3h-3l1 5 5 1-1 7h-7l-2-1-1-12-1-1-1-13 5-2v-2l-7-5-3-6-6-2-2-1 1 8 4 18v13l-2 18-4 16-6 14-8 11v2l-4 2-5 5-10 7-12 7-18 5-8 1h-220l-22 1 1 9 7 24 5 15 8 19 10 21 12 22 9 14 10 14 11 13 7 8 9 10 14 14 11 9 14 11 13 9 15 10 22 12 17 8 25 10 24 8 25 6 21 4 20 2 27 1 23-1 39-5 25-5 24-7 18-7 18-8 28-14 14-9 12-8 12-9 11-9 13-12 19-19 11-14 10-13 18-28 9-16 8-16 6-13 8-22 9-30 1-8-1-1h-230l-23-3-11-3-9-4-9-5-9-7-6-7h-2l-2-5-6-9-6-15-4-18-1-15v-21l5-18 7-16 9-14 10-10 3-2 2-5 1-2h-6l-1-2zm-41 4m113 0-4 4v4l3 1-1 5 3 2h3l1 3 5 1h14l-1-7-6-8-4-4-3-1zm-121 1 1 3zm-15 3 2 2 1-2zm18 2m4 0v2h-4l-1 7-2 5-1 13 3 1 2 4 2 3 2-5 2-3 1-9-1-18zm-18 2m-1 2 1 2zm-223 35-3 4v6h3l2 4h3v-2h2l1-3-4-1 1-5-3-1v-2zm-17 3-2 3h7v-2z" fill="#EE3B4B"/>
              <path transform="translate(514,140)" d="m0 0 33 1 42 6 31 8 24 8 22 9 23 11 14 8 17 11 11 8 14 11 13 12 8 7 16 16 7 8 9 10 8 11 12 17 12 19 13 24 8 17 10 26 9 31 6 30 3 23 2 29v13l-3 39-4 27-9 36-11 32-8 18-9 19-14 24-13 18-12 16-11 13-9 10-5 6-8 7-12 11-11 9-17 13-16 10-13 8-23 12-23 10-15 6-23 7-28 6-30 5-11 1h-52l-31-3-32-6-24-7-17-5-34-14-19-10-14-8-16-11-14-10-14-11-11-10-8-7-16-16-7-8-14-17-12-17-7-11-10-17-9-17-12-28-11-33-7-29-5-32-2-25v-36l2-21 5-32 4-19 7-25 8-23 8-19 7-14 12-22 10-15 21-28 12-14 12-13 14-13 11-9 18-14 21-14 15-9 28-14 20-8 24-8 33-8 35-5 11-1zm-28 23-22 2-29 5-22 6-16 5-31 12-22 11-16 10-18 12-16 12-12 11-8 7-18 18-9 11-15 20-10 15-14 24-8 15-8 18-5 13 1 4 8 1v15l4 12 9 10 1 1 9 1 10 8 4 2 8 1 4 1h10l1 4h7v-2l12-2 6 12-1 5-6 3-3-2-2 11-3 4-3 1h-11l-6-4-2-4v-8l5-6 2-1v-2l-8-3-1-4-9-2-10-6-4-4-10-1-7-6-4-9-3-12-6-13-4 5-7 24-5 24-3 19-2 23v39l2 25 2 13 203 1h74l5 1-3 3-10 5-15 4-8 1h-220l-22 1 1 9 7 24 5 15 8 19 10 21 12 22 9 14 10 14 11 13 7 8 9 10 14 14 11 9 14 11 13 9 15 10 22 12 17 8 25 10 24 8 25 6 21 4 20 2 27 1 23-1 39-5 25-5 24-7 18-7 18-8 28-14 14-9 12-8 12-9 11-9 13-12 19-19 11-14 10-13 18-28 9-16 8-16 6-13 8-22 9-30 1-8-1-1h-230l-23-3-11-3-9-4-3-3 3-1h97l181-1 3-21 2-27v-26l-3-31-5-28-7-28-6-18-11-26-5-12-10-18-16-25-13-17-8-10-12-13-16-16-8-7-13-11-18-13-16-10-16-9-25-12-26-10-30-8-20-4-22-3-8-1zm-214 287-3 4v6h3l2 4h3v-2h2l1-3-4-1 1-5-3-1v-2zm-17 3-2 3h7v-2z" fill="#F9FAFA"/>
              <path transform="translate(486,163)" d="m0 0h58l24 3 17 3 25 6 17 5 28 11 28 14 18 11 17 12 10 8 13 11 13 12 16 16 9 11 13 17 10 15 13 21 9 17-1 2-4-2 3 13-1 7h-6l3 1v2h-3l-2 4-3 1-4 6-4 1-9-1-10-6-6-3-5 8-3 2-7-1-3-1v7l-4 10-10 13-8 4-2 4v3h-3l-3-6-3-2v-2h-2l-2 5h-4l-3 22-2 6h-1l3-27v-33l-2-19-5-20v-8h-2l-4-9-2-10h-2l-6-12-3-8-4-4-3-7-5-5-11-14-11-12-4-5-5-3-2-3-7-4-13-9-14-8-17-8-14-5v-2h-7l-24-6-21-2-40 1-25 5-17 5-20 8-16 8-4 1-5 5-6 2-5 5-11 9-10 9-7 7-4 3-4 7-4 5-4 4-5 10-8 14-2 1-2 5-3 8-5 12-4 16h-2v10l-4 31v18l1 14 1 2 2 13 3 14 4 12-1 2-6-9-1 7-5 1-2-5h-4l-1 10-2 1-3-2-6 4-4 1-5-5-4-6-7 1 1-10 4 2 6-4-1-5-4-8-1-3-12 2v2h-7l-1-4h-13l-1-1-11-2-9-8-2-1-9-1-8-8-3-6-3-9v-15l-9-1 1-7 6-14 7-15 13-25 13-21 21-28 12-14 20-20 8-7 12-10 20-14 16-10 16-9 21-10 29-11 25-7 20-4 17-3zm323 173m8 14 1 2zm0 18v3h-2v2h3l1-5z" fill="#222730"/>
              <path transform="translate(573,245)" d="m0 0 7 1v8l8-2 6 1 5 4v4h2l1 2 1 18-2 14-4 16-9 21h-2l-2 5-11 14-11 11-6 5h-2v2l-5 3h-3v2h-2l-2 4-7 6-4 7-7 10-3 4v40l5-10 1 3-4 9-2 5v4l-5 2-1 6 3 5v2l3 1v3l-3 1 1 2-4 2h-4l2 4v3h-3l2 5 4 1-1 7-7 1-3-2-1-12-1-1-1-13 6-4-5-2-4-5-1-4h-5l-2-2 1 7 4 18v13l-1 12h-1l-2-31-3-14-6-13v-3h-2l-3-6-5-5-5-6-11-8-11-5-4-1h-14l-22 6-10 7-10 2-11-1-5-3 1-7 5-5 7-6 10-1 7 2v2h6l1-3 8-2-1-3-7-3-6-4-1-2-7-4v-2l-2 1h-10l-8-3-3-4v-2h-16l-8-4-10-10-1-4 5-4 6-2h8l8 5 5 6v2h2l4 6 9 4 2 1-5-10-3-3-7-15-4-16-2-11v-15l4-3h6l2 3 1 11 6 22 5 12 6 10 11 14 7 6 2 1v2h3v2l5 2 4 1v-3h-2l-2-5-3-1-3-6v-12l4-1 7 3 6 7 6 14v3h2l4 6 4 1v2l5 1 13 7 2 3 4 2 4 4 7 5 4 6-3-9-3-7-4-9v-2h-2l-4-8-5-5-5-7-19-14-6-5-18-22-4-11v-6l5-5 4 1 3 3 6 12 3 4v2h2l7 8 4 4v2l5 2 6 4 1-6 2-5-6-2-8-7-3-6v-19l1-1 7 1 5 5 5 4 4 10 6 32 5 12 6 9 3 6 1 4h2l11 21 2 5 1-6v-74l-4-2-12-13-22-22-9-12-9-16-1-3v-7l7-2 6 3v3h2l3 8 4 4 4 8 5 5 6 7 8 7 7 7 5 3 1-48h1l1 28 1 7h2v2h2v-5l4-2 2-24h1v100l5-3 4-5 7-14 4-14v-65l2-6 4 1 5 6-8-4-1 15 1 10 3 1 1 2v6h3l1-8 2-1 1 6v47l10-10 2-3h2l2-4 3-5h-2v-2h2l1-8 1-1 1-9 1-3h2v-2l4-1 2-5 1-13 1-3v-11l-4-4-5-3-7 10-4 2-10-2-2-2v-13l2-2v15h7l6-6h2l1-4v-10l-5-2v-2l-7 3 1-3 7-4zm-60 67-1 2 3-1zm-3 1m37 0-1 4 1 2h2v-5zm-34 2 1 3 2-3zm1 24 1 3zm6 57-2 4 2 2 2-4zm-5 9m-8 1 1 3zm-15 3 2 2 1-2zm18 2m4 0v2h-4l-1 7-2 5-1 13 3 1 2 4 2 3 2-5 2-3 1-9-1-18zm-18 2m-1 2 1 2z" fill="#5A5C63"/>
              <path transform="translate(535,450)" d="m0 0 1 4-3 11-1 13 41-1h90l41-1-3 9-7 16-7 10-9 13-12 14-13 14-17 11-4 5h-57l-5 2-7-4-8-7-4-5-4-4-7-11-6-15-4-18-1-15v-21l5-18z" fill="#931831"/>
              <path transform="translate(492,475)" d="m0 0h1l1 12v25l-4 16-6 14-8 11-7 8-10 7-5 2-5-2h-56v-3l-12-8-8-6-12-11v-2l-3-1-5-7-5-5-7-10-6-9-5-8-5-10-4-10 1-2 54 1h116z" fill="#931931"/>
              <path transform="translate(237,597)" d="m0 0h553l4 4v6l-5 4h-552l-4-3v-7z" fill="#F6F6F6"/>
              <path transform="translate(207,352)" d="m0 0 5 2-1 9-1 4-1 1-1 8-6 2v5l2 1v4l11 2 6-1v-2h2v-2h2l1-4 3-4h2v-2h2l2-4h11v2l4 1 1 3-1 2 4-3h7l3 3v7l-2 2 2 1 1-2 5-1 2 1v10h2v4h2v2l2 1v5h6l2 4h2v2h4v2h2v2h2v2h2v2l7 2 2-5 3 2 1 11 1 2 2 13 3 14 4 12-1 2-6-9-1 7-5 1-2-5h-4l-1 10-2 1-3-2-6 4-4 1-5-5-4-6-7 1 1-10 4 2 6-4-1-5-4-8-1-3-12 2v2h-7l-1-4h-13l-1-1-11-2-9-8-2-1-9-1-8-8-3-6-3-9v-15l-9-1 1-7 12-28h2l3-6z" fill="#43474F"/>
              <path transform="translate(761,269)" d="m0 0 4 1 12 13 15 20 10 15 13 21 9 17-1 2-4-2 3 13-1 7h-6l3 1v2h-3l-2 4-3 1-4 6-4 1-9-1-10-6-6-3-5 8-3 2-7-1-3-1v7l-4 10-10 13-8 4-2 4v3h-3l-3-6-3-2v-2h-2l-2 5h-4l-3 22-2 6h-1l3-27 1-57-1-4v-6h3l1 7 3 1 2 3v9h2v2l6 1 3-1 1-2 7-2 1-4 1-6h2l1-2 5-4h2v-11h-2v-4l-4-2v-2h-2l-4-10v-2h-2l-2-4-2-1h2v-2h2l1-6 2-2h6l4 3-3-5 4-1v-5h2v-2l7-1 2 1v5h-2v2l-2 2 2 1v5l-2 1v5h-2l-1 7 1 1v7l8 2v2h9l2-6h2v-2h6v-2l2-1v-10h-2l-1-8-3-1v-6l-2-2-2-7h-2l-1-5-3-2v-3h-2l-2-3v-3h-2l-3-8-3-4zm48 67m8 14 1 2zm0 18v3h-2v2h3l1-5z" fill="#43474F"/>
              <path transform="translate(535,450)" d="m0 0 1 4-3 11-1 13 41-1h90l41-1-3 9-7 16-5 5h-157l-3-9v-27l5-18z" fill="#ED394A"/>
              <path transform="translate(492,475)" d="m0 0h1l1 12v19h-102l-42-1h-14l-2-3h-2l-7-14-4-10 1-2 54 1h116z" fill="#EE394A"/>
              <path transform="translate(367,306)" d="m0 0h6l2 3 1 11 6 22 5 12 6 10 11 14 7 6 2 1v2h3v2l5 2 4 1v-3h-2l-2-5-3-1-3-6v-12l4-1 7 3 6 7 6 14v3h2l4 6 4 1v2l5 1 13 7 2 3 4 2 2 5-1 3h-5v6l-4-2-9-6-13-5h-14l-22 6-10 7-10 2-11-1-5-3 1-7 5-5 7-6 10-1 7 2v2h6l1-3 8-2-1-3-7-3-6-4-1-2-7-4v-2l-2 1h-10l-8-3-3-4v-2h-16l-8-4-10-10-1-4 5-4 6-2h8l8 5 5 6v2h2l4 6 9 4 2 1-5-10-3-3-7-15-4-16-2-11v-15z" fill="#2C2530"/>
              <path transform="translate(225,643)" d="m0 0h279l13 1 5 5v5l-5 4h-52l-238-1-5-3-1-4 3-6z" fill="#F4F5F5"/>
              <path transform="translate(487,671)" d="m0 0h301l4 4-1 7-5 3h-295l-5-2-2-3v-6z" fill="#F6F6F6"/>
              <path transform="translate(515,624)" d="m0 0h243l4 5v6l-5 4h-124l-22 1h-53l-41-1-5-2-2-2v-7l2-3z" fill="#F4F4F5"/>
              <path transform="translate(573,245)" d="m0 0 7 1v8l8-2 6 1 5 4v4h2l1 2 1 18-2 14-4 16-9 21h-2l-2 5-11 14-11 11-6 5h-2v2l-5 3h-3v2h-2l-2 4-7 6-4 7-3 2v-5l4-4v-7h-2v-2l-2 1-1 3h-2l-1 2-4 3-5-7 2-25 1-36h1v63l5-3 4-5 7-14 4-14v-65l2-6 4 1 5 6-8-4-1 15 1 10 3 1 1 2v6h3l1-8 2-1 1 6v47l10-10 2-3h2l2-4 3-5h-2v-2h2l1-8 1-1 1-9 1-3h2v-2l4-1 2-5 1-13 1-3v-11l-4-4-5-3-7 10-4 2-10-2-2-2v-13l2-2v15h7l6-6h2l1-4v-10l-5-2v-2l-7 3 1-3 7-4zm-26 68-1 4 1 2h2v-5z" fill="#45444D"/>
              <path transform="translate(589,699)" d="m0 0 24 1 5 5v5l-6 5h-235l-3-4v-6l2-4 2-1z" fill="#F9F9F9"/>
              <path transform="translate(650,290)" d="m0 0 6 1 2 2v13l-2 12-4 10-3 9-5 9-3 1v3h-2l-1 5-6 7h-2l-2 4-11 11-2 3-3 1-4 5-7 3h12l24-12 11-11 8-7 9-7 3 1-12 9v5l2 2h-4v9l-4 6-9 7-2 4-4 2h-3v4l10 4 5 5v3l-6-6-3-1h-10l-3 1-1 6 3-1 1 5-1 2 5 2 1 2 5 1 14 1 1-4 1 4-1 1h-19l-8-4-5-6-1-7v-4l-14-2-24-1-9 3-7 5h-2l1-5 1-1h-5l-1-3-7 2 5-5 9-6h3l2-4 5-9 13-11 7-1-2 6-3 6 3 1 2-4 13-11 12-12 12-18 3-8h2l3-11 1-3 1-11 4-11zm-1 8m1 7 1 4 1-4zm-28 84-5 2-1 7 7-1 5-1v-5z" fill="#43464E"/>
              <path transform="translate(334,501)" d="m0 0 2 1v3l14-1 42 1h36l66 1-1 11-2 4v-3l-3 1-32 1h-50l-59-1-1 3-6-9-6-8z" fill="#931831"/>
              <path transform="translate(446,314)" d="m0 0 7 1 5 5 5 4 4 10 6 32 5 12 6 9v2h-3l1 4-2 3-5 5-4-8-5-5-5-7-19-14-6-5-18-22-4-11v-6l5-5 4 1 3 3 6 12 3 4v2h2l7 8 4 4v2l5 2 6 4 1-6 2-5-6-2-8-7-3-6v-19z" fill="#2B2530"/>
              <path transform="translate(642,543)" d="m0 0h15l1 4-8 7-14 9-4 5h-57l-5 2-7-4-8-7-4-5-4-4-1-4 12-1 66-1z" fill="#921B33"/>
              <path transform="translate(472,544)" d="m0 0h6l2 1-2 6-5 5-4 5-10 7-5 2-5-2h-56v-3l-12-8-8-6-5-4v-2h83z" fill="#941B33"/>
              <path transform="translate(535,450)" d="m0 0 1 4-3 11-1 13 41-1h90l41-1-3 9-2 5h-120l-2-1v-5l-4 1-2 4-19 1h-20l-1 9-2-2v-27l5-18z" fill="#931730"/>
              <path transform="translate(321,476)" d="m0 0 55 1 116 1v10l-6 1-18 1h-92l-48-1-1 3-6-14z" fill="#931730"/>
              <path transform="translate(572,529)" d="m0 0h101l-6 8-8 9-2-2h-15l-18 1-66 1-13 1-6-10-2-7z" fill="#931831"/>
              <path transform="translate(213,401)" d="m0 0 10 1 1 3 2 1-2 4v13h2l4 8 8 3 5 1 9-3 8 1v2h2v2l10 1 7 2 2 10 4 8 2 2-4 4-1 5 2 5 3 1 5-5 3-9 2-3h2l2-5h2l1 6h5l1-7 3 1 2 8 2 5-1 3-2-2-1 7-5 1-2-5h-4l-1 10-2 1-3-2-6 4-4 1-5-5-4-6-7 1 1-10 4 2 6-4-1-5-4-8-1-3-12 2v2h-7l-1-4h-13l-1-1-11-2-9-8-2-1-9-1-8-8-3-6-3-9v-7l2 3 1 2 3 1v2h6l4-6z" fill="#626167"/>
              <path transform="translate(191,389)" d="m0 0 3 2 4 1 2 4v5l4 2v4h5l2-6 5-4 5 2h5v2h2v2l2 1v7l-1 2 1 6h8l2 4 2 1 4 3 5-1h9l9 1 4-2h6v-2h2v-2h5l1 11-1 4-6 1 8 3 8 4 5 1 1-2 4 5 1-3h4l-1-12 2 2 2 13 3 14 4 12-1 2-3-5-3-10-1-2v-6h-2l-2 7-5-1-1-6h-2l-1 4-3 3-2 1-3 11-5 4-4-2-2-6 2-5 3-1-6-12-2-8 1-2-7-1-10-2v-2h-2v-2h-9l-9 3-11-3-3-3-2-7h-2l-1-7v-6l2-4-2-3-10-2-1 5-3 7-1-2h-6v-2l-4-1-2-5v-8l-7-2z" fill="#565A62"/>
              <path transform="translate(665,352)" d="m0 0 3 1-12 9v5l2 2h-4v9l-4 6-9 7-2 4-4 2h-3v4l10 4 5 5v3l-6-6-3-1h-10l-3 1-1 6 3-1 1 5-1 2 5 2 1 2 5 1 14 1 1-4 1 4-1 1h-19l-8-4-5-6-1-7v-4l-14-2-24-1-9 3-7 5h-2l1-5 1-1h-5l-1-3-7 2 5-5 9-6 6-3 9 1 2 1v4h8l4 2 2-6 15-2 24-12 11-11 8-7zm-43 37-5 2-1 7 7-1 5-1v-5z" fill="#636369"/>
              <path transform="translate(488,518)" d="m0 0h3l-2 9-2 4-107-1-27-1-4-2-2-4v-4h109z" fill="#D0233D"/>
              <path transform="translate(681,517)" d="m0 0v3l-7 9-102 1h-36l-2-6v-4l30-1 104-1z" fill="#D0233D"/>
              <path transform="translate(573,245)" d="m0 0 7 1v8l8-2 6 1 5 4 2 8v22h-2l1 5-5 3-4-1-1-1-3 11 2 1 2-6 2-2 1 2v9l-3 14-4 3h-2l-1-8 1-2-4-1-1 5-2 1-5 10-3 1v-2h2l1-8 1-1 1-9 1-3h2v-2l4-1 2-5 1-13 1-3v-11l-4-4-5-3-7 10-4 2-10-2-2-2v-13l2-2v15h7l6-6h2l1-4v-10l-5-2v-2l-7 3 1-3 7-4z" fill="#F85460"/>
              <path transform="translate(803,327)" d="m0 0h2l2 5 3 1 5 6 9 17-1 2-4-2 3 13-1 7h-6l3 1v2h-3l-2 4-3 1-4 6-4 1-9-1-10-6-6-3-5 8-3 2-7-1-3-4v-6l4-3h12v-3l2-1h14l7 6 2-10 2-4 5-1v-2h2v-2l-4-2v-5l6-2v-3l-6 1-2-1 1-2v-8l-2-7zm6 9m8 14 1 2zm0 18v3h-2v2h3l1-5z" fill="#78797F"/>
              <path transform="translate(452,266)" d="m0 0 7 2 1 4h2l3 8 4 4 4 8 5 5 6 7 8 7 7 7 7 5 1-3 2 5 2 4-2 4h-2l-1 3h-5l2 7-6-5-7-8-24-24-9-12-9-16-1-3v-7z" fill="#59555D"/>
              <path transform="translate(510,379)" d="m0 0 5 3v2h-3l1 4 3 1 1 2 7-2 1 1-1 11-3 4v40l5-10 1 3-4 9-2 5v4l-5 2-1 6 3 5v2l3 1v3l-3 1 1 2-4 2h-4l2 4v3h-3l2 5 4 1-1 7-7 1-3-2-1-12-1-1-1-13 6-4-5-2-4-5-1-4h-5l-2-3h7l3 5v2h2v2h4l2-5 3-8-3-3-2-7-3-2 2-20 1-3-1-2 1-33h3zm10 17-2 4 2 2 2-4zm-5 9m-8 1 1 3zm3 5m4 0v2h-4l-1 7-2 5-1 13 3 1 2 4 2 3 2-5 2-3 1-9-1-18z" fill="#80858A"/>
              <path transform="translate(188,393)" d="m0 0 6 1 2 1 1 15 4 12 9 10 9 1 10 8 4 2 8 1 4 1h10l1 5h7v-2l7-2h5l4 6 3 6-1 5-6 4-3-2-2 10-4 5-3 1h-11l-6-4-3-5v-8l6-7h2v-2l-7-1-2-2v-4h-7l-9-5-7-6-10-1-8-7-4-9-3-12-5-12-3 4-3 10-1-4 4-12zm84 57-3 4v6h3l2 4h3v-2h2l1-3-4-1 1-5-3-1v-2zm-17 3-2 3h7v-2z" fill="#81868B"/>
              <path transform="translate(758,377)" d="m0 0h1l1 9 2 3h-3v7l-4 10-10 13-8 4-2 4v3h-3l-3-6-3-2v-2h-2l-2 5h-4l-3 22-2 6h-1l3-27 1-39h1l1 6h3l1-3 1 3h5v2h2v2h5l1-2h4v6l5 1 1-4v-11l2-2 5 3 1-5 1-4z" fill="#565A62"/>
              <path transform="translate(483,731)" d="m0 0 44 1 17 1 6 2v1l-10 2h-4l1 3-1 3-5 1-40 1h-25l-4-5v-6l3-3z" fill="#FAFAFA"/>
              <path transform="translate(642,543)" d="m0 0h15l1 4-7 6-5 1h-95l-4-4-1-4 12-1 66-1z" fill="#CD253E"/>
              <path transform="translate(196,407)" d="m0 0 3 4 4 9 6 8 3 2 10 2 6 5 5 4 6-1 6-2h9l2 5 7 1 5-1h3l6 2 5 11 5 4-4 4-1 5 2 5 3 1 5-5 3-9 2-3h2l2-5h2l1 6h5l1-7 3 1 2 8 2 5-1 3-2-2-1 7-5 1-2-5h-4l-1 10-2 1-3-2-6 4-4 1-5-5-4-6-7 1 1-10 4 2 6-4-1-5-4-8-1-3-12 2v2h-7l-1-4h-13l-1-1-11-2-9-8-2-1-9-1-8-8-3-6-3-9z" fill="#78797F"/>
              <path transform="translate(472,544)" d="m0 0h6l2 1-2 6-4 3h-98l-8-7v-2h83z" fill="#CE233D"/>
              <path transform="translate(481,389)" d="m0 0 4 1 3 4v3h2v4h-2l1 8-3 2 1 3 1 2 1 6 2 5v4h3l-1 5 2 5 4 1 1-2 3 5-1 2h-10l-2 5h-2l-1 4-4-8v-3h-2l-3-6-5-5-5-6v-7h5l1-5 9 6 4 6-3-9-3-7-4-9-1-4 5-6z" fill="#555961"/>
              <path transform="translate(490,399)" d="m0 0 4 5 5 10 2 16 2 3h2l-1 6 4 2 3 8 2 3-3 7-3 5h-4v-2h-2l-3-5v-2l-4 1-4-1 6 26v13l-1 12h-1l-2-31-3-14-1-2v-7l3-3 1-2 8-1 2 1-1-5h-4l-3-1-2-6 2-4h-3l-4-11v-5l-2-1 1-4 3-1-1-8h2zm2 10 2 2 1-2zm4 4m-1 2 1 2z" fill="#686D74"/>
              <path transform="translate(541,272)" d="m0 0 4 1 5 6-8-4-1 15 1 10 3 1 1 2v6h3l1-8 2-1 1 6v48l-3 2-8-1-1 2-3 1-1 2 1-9h2v-2h3v-6h-2l-1-2-1-45v-18zm6 41-1 4 1 2h2v-5z" fill="#696E75"/>
              <path transform="translate(446,314)" d="m0 0 7 1 5 5 5 4 4 10 5 27v5l-2-4h-1l-4-1-1-2h-4l1-7 1-3-6-2-8-7-3-6v-19z" fill="#362430"/>
              <path transform="translate(795,313)" d="m0 0 8 8 4 5 5 8-1 2-3-3-2-1-1-5h-2l1 8 1 3v9 1l4-1 2 1v3l-5 2v5l3 2v2h-2v2l-5 2-2 5-2 8-4-2-3-3h-16v3l-3 1-3-2-6-2v-4l9-2 3 2 6-3h11l3-3 1-3h3l1-8-2-6-1-6h2l1-8-3-3-2-8v-4l-2-1z" fill="#565A62"/>
              <path transform="translate(593,259)" d="m0 0h6l2 6v22h-2l1 5-5 3-4-1-1-1-3 11 2 1 2-6 2-2 1 2v9l-3 14-4 3h-2l-1-8 1-2-4-1-1 5-2-1 6-14 3-10 1-7 1-19 1-7z" fill="#636167"/>
              <path transform="translate(510,379)" d="m0 0 5 3v2h-3l1 4 3 1 1 2 7-2 1 1-1 11-3 4v40l5-10 1 3-4 9-4 1-3-2 1-17v-18h-3v2h-4v7l-2 5-1 7h-1v-13l1-3-1-2 1-33h3zm10 17-2 4 2 2 2-4zm-5 9m-8 1 1 3z" fill="#7F8288"/>
              <path transform="translate(387,278)" d="m0 0 9 1 10 7 6 9 2 7-1 5-4 3h-5v-2l-7-2-5-5v-3h-2l-4-9-1-9z" fill="#686C73"/>
              <path transform="translate(328,489)" d="m0 0h48v2l-7 2-5 5-2 4 8 2v1h-34l-2-3h-2l-4-8z" fill="#CD243E"/>
              <path transform="translate(249,457)" d="m0 0h13l6 3 3 7-1 8-4 5-3 1h-11l-6-4-3-5v-8z" fill="#F8F8F8"/>
              <path transform="translate(592,367)" d="m0 0h5l-2 6-3 6 6-1 6 2 2-1v2h2v2l2 1-5 4-4 1 1 2h-4l-1 7-5-1v-2h-8v-4l-11-1h-3l3-3 4-8 13-11z" fill="#42424B"/>
              <path transform="translate(346,355)" d="m0 0h8l8 5 5 6v2h2l3 5-3 4-4 1h-10l-8-4-10-10-2-1 2-4 5-3z" fill="#2B2530"/>
              <path transform="translate(510,264)" d="m0 0h5l2 2v3h3l4 8v6l-2 5-1 28v60h2l10-20 3-7h1l-1 8-7 14-7 8h-3l-1-108h-9l-3 2-1 48h-3l-10-9-9-8-1-3 4 2 7 6h7l2 2 1-7 1-33 2-3h2z" fill="#F65561"/>
              <path transform="translate(760,457)" d="m0 0h11l6 5 2 4v6l-4 6-5 3h-10l-5-3-3-6 1-9 5-5z" fill="#F7F7F7"/>
              <path transform="translate(443,248)" d="m0 0 9 1 5 5v10l-7 4h-3l2 10 9 16 7 9 9 10 13 13h-3l-13-12-4-4-7-1 2-5-6-7-4-6-8-17-3-4-2-5-2-2v-8z" fill="#F85460"/>
              <path transform="translate(821,352)" d="m0 0 3 4-1 2-4-2 3 13-1 7h-6l3 1v2h-3l-2 4-3 1-4 6-4 1-9-1-10-6-6-3-5 8-3 2-7-1-3-4v-6l4-3h7l5 4 2-4 4 2 1-2 3 2v2l5 2 4 2 10-1 4-4 1-11 4-2h4v-8l1-6zm-4 16v3h-2v2h3l1-5z" fill="#81868B"/>
              <path transform="translate(650,290)" d="m0 0 6 1 2 2v13l-2 12-4 10-5 2-1 2-4-1-3-1-4 5 1-6 1-2h2l3-11 1-3 1-11 4-11zm-1 8m1 7 1 4 1-4z" fill="#5E6168"/>
              <path transform="translate(392,406)" d="m0 0 8 2 2 4-4 6-3 4-5 6-10 1-9-3-1-1 1-7 5-5 7-6z" fill="#46464E"/>
              <path transform="translate(333,672)" d="m0 0 32 1 8 2v6l-5 2-17 1-22-1-3-2v-7z" fill="#FAFAFA"/>
              <path transform="translate(573,389)" d="m0 0 9 1 2 1v4h8l4 2 2-6h3l-1 7 13 3-4 2-27-1-9 3-7 5h-2l1-5 1-1h-5l-1-3-7 2 5-5 9-6z" fill="#54585F"/>
              <path transform="translate(630,362)" d="m0 0 1 2 7 1 1 1 8 1-2 1-2 4-7 7-15 7-8 4h-12l-1-2 6-2 5-5 4-2 7-8 7-7z" fill="#D0233D"/>
              <path transform="translate(444,317)" d="m0 0h1l1 17 3 6 7 6 6 3-1 5-2 6-5-2-6-4-7-8-4-4v-2h-2l-6-9-4-9 1-2 3 3 2 4 7 4 5 1z" fill="#F55561"/>
              <path transform="translate(603,330)" d="m0 0 6 2 3 2v10l-5 12-2 2h-8l-3-2-1-9 2-8 6-8z" fill="#58565E"/>
              <path transform="translate(600,261)" d="m0 0 2 2 1 18-2 14-4 16-9 21h-3l-2 4-4 1v-2h-2v-15l3-1 1-5 4 1v10l5-3 3-14v-9l-3 4-1 2-3-1 3-15 2 4 5 1 4-2-1-5h2z" fill="#655E65"/>
              <path transform="translate(619,357)" d="m0 0 4 2h2v3h5l-2 4-11 11-2 3-3 1-1 2h-3v-2h-6l-5-2-2-1 15-13 7-7z" fill="#2C2630"/>
              <path transform="translate(561,547)" d="m0 0h51l10 3-1 2-23 1h-45l-2-4z" fill="#F03B4B"/>
              <path transform="translate(487,315)" d="m0 0 4 2 5 2v-2l5 2 5 4 1-3 2 5 2 4-2 4h-2l-1 3h-5l2 7-6-5-7-8-8-8v-3l4-1z" fill="#43464E"/>
              <path transform="translate(314,417)" d="m0 0h22l4 1v9l-12 2h-17l-1 4-1-15z" fill="#C9213B"/>
              <path transform="translate(196,403)" d="m0 0 2 3 7 12 3 5v2h2v2h10l4 2 3 5 7 3v2l9-2 7-2 4-1 4 1v2h2v2l19 2 2 9 2 4-1 3-4-8-1-3-6-2-3 1v-2l-5 2-7-1-2-4v-2l-9 1-8 3-5-1-9-7-3-2-10-2-6-7-4-6-4-10z" fill="#696E75"/>
              <path transform="translate(803,330)" d="m0 0 2 4 4 10 5 3-1 5-2 3 2 1v7l-4 2-3 4v8l-3 5-8 1-7-8-8 1-5 5-4-2 4-2v-3l2-1h14l7 6 2-10 2-4 5-1v-2h2v-2l-4-2v-5l6-2v-3l-6 1-2-1 1-2v-8l-2-7z" fill="#696E75"/>
              <path transform="translate(467,289)" d="m0 0 5 1 7 8 5 6 8 7 5 6v3l-4-1-4-3-2 1-2 3-4 1-11-11 2-4 5-1-2-3 1-4-5-2v-2h-2v-3h-2z" fill="#665A62"/>
              <path transform="translate(476,545)" d="m0 0h4l-2 6-4 3h-28l-14-2-2-2h2v-2l2-1 32-1z" fill="#EA394A"/>
              <path transform="translate(758,381)" d="m0 0h1l2 6 1 2h-3v7l-4 10-10 13-8 4-2 4v3h-3l-3-6-3-2v-2h-2l-2 5h-4-1l1-13 8 1 6 7 11-5h2l2-5 5-8 3-9 1-8h2z" fill="#80858A"/>
              <path transform="translate(505,273)" d="m0 0h1l1 28 1 7h2v2h2v-5l5-2-1 45-1 4h-2l-2-4v-4l-2-1h2v-4h2v-11l-1-7-3-1h-3v3h-2zm8 39-1 2 3-1zm-3 1m3 2 1 3 2-3zm1 24 1 3z" fill="#72747A"/>
              <path transform="translate(648,289)" d="m0 0h7l1 2h-8l-3 11-1 11-5 14h-2l-3 10-11 16-17 17-10 8-1 2-4-1 5-5 7-5 2-4 5-3 3-3h2l2-4 8-10 4-7 1-4 4-10 6-8 3-20 3-5z" fill="#F35561"/>
              <path transform="translate(414,302)" d="m0 0h1l1 7 4 3v4l5 2-1 3-2-2-4 1-3 3 1 10 5 10 8 9 9 11-2 1-8-5-8-14-5-7-3-5-1-1-1-9-2-3-1-8-3-2 7-2 2-2z" fill="#F05561"/>
              <path transform="translate(509,319)" d="m0 0 4 2 1 8-1 10h-2l1 9 1 4h2l1-4v15l-2 1-5-1-2 1-1-16-2-3-3-5v-4l5-1 2-4h2l-1-5-2-2v-4z" fill="#676C72"/>
              <path transform="translate(505,439)" d="m0 0 4 4 2 6 2 3-3 7-3 5h-4v-2h-2l-3-5v-2l-4 1-4-1 6 26v13l-1 12h-1l-2-31-3-14v-8l5-2 4-1 4 2 3-5 1-3z" fill="#78797F"/>
              <path transform="translate(446,672)" d="m0 0h19l3 3v6l-3 3h-20l-2-2v-7z" fill="#F6F6F6"/>
              <path transform="translate(639,392)" d="m0 0v3l-4 2h-3v4l10 4 5 5v3l-6-6-3-1h-10l-3 1-1 6 3-1 1 5-1 2 5 2 1 2 5 1 14 1 1-4 1 4-1 1h-19l-8-4-5-6-1-7v-4l-7-1 3-2z" fill="#F2525F"/>
              <path transform="translate(367,344)" d="m0 0 2 4 7 16 1 4 3 1 4 7v3l-9-3-5-5-1-3h-2l-4-6-5-4-4-2-7-1v-1h8l5 2 7-3z" fill="#F85561"/>
              <path transform="translate(565,296)" d="m0 0h7l2 2v10l-4 6-3 2h-9l-2-3 1-7 6-8z" fill="#941730"/>
              <path transform="translate(755,389)" d="m0 0 1 4-5 13-6 9-12 6-7-7-7-1-3 28-3 12h-1l3-27 1-20 5-1 2-6 1 2h2l3 12 3 4 9-3 5-5 4-6 2-7z" fill="#696C73"/>
              <path transform="translate(613,389)" d="m0 0m9-2 6 1 4 2v6l-16 7h-7v-2l-9-2-1-4h2l1-5h11l4 1-1 7 7-2h5v-5l-9-1z" fill="#65676D"/>
              <path transform="translate(694,417)" d="m0 0h22v9l-1 1h-23l-2-1v-7z" fill="#941730"/>
              <path transform="translate(474,416)" d="m0 0 9 6 2 4h-3l2 4h3l4 2v9h-3v-2l-5-2v-4h-4v-2h-3v3h-3l-5-6v-7h5z" fill="#513F4A"/>
              <path transform="translate(650,290)" d="m0 0 6 1 2 2v13l-1 5-7 2-3 1-3-4v-8l4-11zm-1 8m1 7 1 4 1-4z" fill="#74757B"/>
              <path transform="translate(778,624)" d="m0 0h12l4 4v7l-3 3-10 1-5-3-2-7 2-4z" fill="#EEEEEF"/>
              <path transform="translate(635,700)" d="m0 0h13l3 5v6l-4 3h-11l-5-4v-6z" fill="#EDEEEE"/>
              <path transform="translate(488,518)" d="m0 0h3l-2 9-2 4-29-2 3-1 1-4 6-2 8 1v-4z" fill="#EF3B4B"/>
              <path transform="translate(541,272)" d="m0 0 4 1 5 6-8-4-1 15 1 10 3 1 1 2v6h3l1-8 2-1-1 13v9l-2 5-3-1-1-7-4-1-1-16-1-6v-18zm6 41-1 4 1 2h2v-5z" fill="#7D8086"/>
              <path transform="translate(513,375)" d="m0 0h1l2 6 5 2 4-4h2l1-4h4l1 7-2 5-3 1v7l-4 4v-9l-7 1-1 2v-4l-4-1v-4h3l-4-4-4 1v-2l3-2h3z" fill="#676C72"/>
              <path transform="translate(681,517)" d="m0 0v3l-7 9h-14l-14-1 2-2 10-3 2-4z" fill="#E83D4D"/>
              <path transform="translate(311,454)" d="m0 0 2 1 4 11-1 3-2-2-1 7-5 1-2-5h-4l-1 10-2 1-3-2-6 4-4 1-5-5-5-7v-2h2l6 9h5l6-7 1-2 5-2 3-3 6 2 1-6z" fill="#80858A"/>
              <path transform="translate(573,245)" d="m0 0 5 1v10l-3 11-6 8-2 1h-11l-2-2v-13l2-2v15h7l6-6h2l1-4v-10l-5-2v-2l-7 3 1-3 7-4z" fill="#6D6F75"/>
              <path transform="translate(207,596)" d="m0 0h7l5 4v7l-4 4h-9l-5-6 2-6z" fill="#EEEEEF"/>
              <path transform="translate(813,596)" d="m0 0h6l6 5v5l-6 5h-7l-5-4v-7l3-3z" fill="#EAEBEB"/>
              <path transform="translate(389,357)" d="m0 0h2l4 6 7 6 3 6 5 5 2-1 1-12 2 1 1 9 3 6 4 4v2h2l1 5-7-3-3-2v-2h-3v-2l-5-2-7-7-9-12-3-5z" fill="#F05561"/>
              <path transform="translate(452,266)" d="m0 0 7 2 1 4h2l1 4h-2l-1 3h-2l1 7-5 1-3-3-4-9v-7z" fill="#635F66"/>
              <path transform="translate(716,387)" d="m0 0h1l1 6h4v2h2v2h4l1 7 2 5 1 6 5-1 6-3 3-6 3-5v-6l3-3 3-2-1 5-2 3-2 8-7 9-9 4-4-2-2-3-2-10v-2h-3l-2 4-5 1z" fill="#636268"/>
              <path transform="translate(803,335)" d="m0 0 2 3v9 1l4-1 2 1v3l-5 2v5l3 2v2h-2v2l-5 2-2 5-2 8-4-2-3-3-10-1 4-3h10l5-5 2-4v-7l-2-7v-6l2-2z" fill="#636268"/>
              <path transform="translate(577,321)" d="m0 0 1 4-1 10h2v2l4-1 2-5 2 1-6 9-6 8h-2v-4l-5-1h-3l-2-1 2-3h2l2-4z" fill="#2C2530"/>
              <path transform="translate(565,393)" d="m0 0 2 1 9-1v7h-2v3l2 1-9 5-3 1 1-5 1-1h-5l-1-3-7 2 5-5z" fill="#797C81"/>
              <path transform="translate(540,302)" d="m0 0h1l1 16 3 6 1 5-2 5v7l1 11 3-1 3 3-1 2-8-1-1 2-3 1-1 2 1-9h2v-2h3v-6h-2l-1-2z" fill="#626268"/>
              <path transform="translate(604,489)" d="m0 0h91v1l-31 1-8 1-4 3-3 2-8-1v-2h-2l1-2 2 1 1-2h-14l-25-1z" fill="#D0233D"/>
              <path transform="translate(349,673)" d="m0 0h16l8 2v6l-5 2h-10l-4-1-1-5z" fill="#B6B8BB"/>
              <path transform="translate(597,262)" d="m0 0h2v4h2v14l-2 3v-2h-2v9h-2l-2-10v-5l-1 9h-1v-21h3v5z" fill="#78797F"/>
              <path transform="translate(450,341)" d="m0 0 6 5 6 3-1 5-2 6-5-2-6-4-5-6v-3l7-2z" fill="#EA3C4C"/>
              <path transform="translate(632,380)" d="m0 0m-3 1 5 1 5 3v2l5-2-2 4-5 5-5 1-1-5-5-2-7 1v2h-6l3-3 9-5z" fill="#64646A"/>
              <path transform="translate(503,344)" d="m0 0h1l1 8v65l-1 7-3-3-8-17-2-3 1-3 6 10 4 1 1-7z" fill="#F7525F"/>
              <path transform="translate(505,271)" d="m0 0 1 2-1 48h-3l-10-9-9-8-1-3 4 2 7 6h7l2 2 1-7 1-32z" fill="#F85460"/>
              <path transform="translate(387,278)" d="m0 0 9 1 6 4-2 1-10-5 1 5h-2l2 10 2 1 2 5 5 4 6 2 4-1 2-4 2 1-1 5-4 3h-5v-2l-7-2-5-5v-3h-2l-4-9-1-9z" fill="#60525C"/>
              <path transform="translate(505,374)" d="m0 0 2 1v2l4-2-2 4h-2v35l1 3-1 2-1 13-4 2-2-4-1-14 2 2 2 5 1-6z" fill="#64646A"/>
              <path transform="translate(508,732)" d="m0 0h19l17 1 6 2v1l-10 2h-4l1 3-1 3-5 1h-9v-1h6l1-6-2-2-4-2-15-1z" fill="#B8BABC"/>
              <path transform="translate(763,377)" d="m0 0h7l3 3-1 9-3 2-7-1-3-4v-6z" fill="#F4F5F5"/>
              <path transform="translate(416,671)" d="m0 0 6 1 4 3-1 7-2 2h-8l-5-5 1-4z" fill="#EEEEEF"/>
              <path transform="translate(593,353)" d="m0 0 1 3 10 2-3 7-4 8-4 4 3-9-6 1-7 5 1-4 7-9z" fill="#C7213B"/>
              <path transform="translate(656,645)" d="m0 0 7 1 3 3v6l-3 3-5 1-5-3-1-6 2-4z" fill="#EBEBEC"/>
              <path transform="translate(630,362)" d="m0 0 1 2 7 1 1 1 8 1-2 1-2 4-7 7-11 5-3-1 12-6 3-4-3-3-7-1-9 9-2-1 13-13z" fill="#951730"/>
              <path transform="translate(540,265)" d="m0 0 5 2 6 10 2 4-7-6-2-2h-3l-1 5-1 14-4-5-1-7 2-9z" fill="#C6213B"/>
              <path transform="translate(519,405)" d="m0 0h1l1 40 5-10 1 3-4 9-4 1-3-2 1-17v-21z" fill="#68686E"/>
              <path transform="translate(809,624)" d="m0 0 7 1 2 3v6l-4 4h-5l-4-5v-6z" fill="#E4E4E5"/>
              <path transform="translate(310,452)" d="m0 0 3 1-3 9h-4l-4-1-1 3-6 1-1 6-6 7-5-1-4-6 1-6 2-1 1 9 4 2 5-5 3-9 2-3h2l2-5h2l1 6h5z" fill="#696E75"/>
              <path transform="translate(352,623)" d="m0 0h7l3 3v5l-4 5-7-1-3-4v-5z" fill="#EDEEEE"/>
              <path transform="translate(468,623)" d="m0 0 6 1 4 5-2 5-2 2h-7l-4-4 1-6z" fill="#F2F2F3"/>
              <path transform="translate(519,338)" d="m0 0h2v38h2l10-20 3-7h1l-1 8-7 14-7 8h-3z" fill="#F25561"/>
              <path transform="translate(795,313)" d="m0 0 8 8 4 5 5 8-1 2-3-3-2-1-1-5h-2v8l-1-2-4-2-3-9v-4l-2-1z" fill="#65686F"/>
              <path transform="translate(254,376)" d="m0 0h7l3 3v7l-3 3h-6l-4-4v-6z" fill="#FAFAFA"/>
              <path transform="translate(592,367)" d="m0 0h5l-2 6-3 6 3 2-8 1-3-1v-2l-5 1 2-4 9-8z" fill="#636268"/>
              <path transform="translate(330,701)" d="m0 0 6 1 3 4v5l-3 3h-7l-3-3v-6z" fill="#EFF0F0"/>
              <path transform="translate(590,305)" d="m0 0 4 2-3 15-4 3h-2l-1-8-1-5 3-6z" fill="#696E75"/>
              <path transform="translate(728,519)" d="m0 0 5 1 3 3v6l-2 3-5 1-5-4-1-6z" fill="#EBECEC"/>
              <path transform="translate(672,701)" d="m0 0h6l4 4v5l-4 4-7-1-2-3v-6z" fill="#ECEDED"/>
              <path transform="translate(371,373)" d="m0 0 14 6 5 6v2h-8l-8-4-2-2v-3h-2z" fill="#636268"/>
              <path transform="translate(758,381)" d="m0 0h1l2 6 1 2-5-1v8l-7 14-5 7-9 4-4 2-4-4v-2l-7 1-3-2 1-4 7 1 6 7 11-5h2l2-5 5-8 3-9 1-8h2z" fill="#77797F"/>
              <path transform="translate(302,461)" d="m0 0 7 1h3l-2 6-6-2-3 3h-2l-1 2-2-1-2 5-5 5h-5l-4-5-2-4 3 1 3 5 5-1 4-5 2-6 6-2z" fill="#78797F"/>
              <path transform="translate(290,519)" d="m0 0h6l4 5-1 5-5 3-5-2-2-3 1-6z" fill="#E9E9EA"/>
              <path transform="translate(691,702)" d="m0 0 7 1 1 2v7l-2 2h-7l-3-3v-7z" fill="#82878C"/>
              <path transform="translate(349,701)" d="m0 0 6 1 3 4-1 6-3 2h-5l-3-3v-7z" fill="#F5F5F6"/>
              <path transform="translate(481,389)" d="m0 0 4 1 3 4-1 4-2-1 1 6-4 4-1 3-2-2-3-9 5-6z" fill="#484850"/>
              <path transform="translate(381,624)" d="m0 0 7 1 2 2v6l-4 3h-5l-4-5 1-5z" fill="#EAEAEB"/>
              <path transform="translate(645,308)" d="m0 0 2 4v2l3-2h4l1-2v3l-3 3-2-1 1 7-3 4-5-2h-3l3-11z" fill="#676B72"/>
              <path transform="translate(510,379)" d="m0 0 5 3v2h-3l1 4 3 1 1 2 7-2 1 1v5h-4l-8 1-3-2-1-9h-2v-4h3z" fill="#78797F"/>
              <path transform="translate(518,316)" d="m0 0h1v63l3 1-3 1-4-4 2-25z" fill="#582F3D"/>
              <path transform="translate(289,447)" d="m0 0h3v2h12l2 10h-2l-1-6h-2l-1 4-3 3-2 1-2 4 1-9-2-4h-3z" fill="#626167"/>
              <path transform="translate(509,319)" d="m0 0 4 2 1 8-1 10h-8l-2-1-1 3-1-5 5-1 2-4h2l-1-5-2-2v-4z" fill="#64666D"/>
              <path transform="translate(580,317)" d="m0 0 2 2 3 10 3-1-1 4h-2l-2 4-4 1v-2h-2v-15l3-1z" fill="#44474F"/>
              <path transform="translate(471,425)" d="m0 0 8 4 1 1 2-4 2 4h3l4 2v9h-3v-2l-5-2v-4h-4v-2h-3v3l-4-4z" fill="#555961"/>
              <path transform="translate(583,304)" d="m0 0 1 3-7 16-5 8h-2v-2h2l1-8 1-1 1-9 1-3h2v-2z" fill="#F55460"/>
              <path transform="translate(622,387)" d="m0 0 6 1 4 2v6l-9 4-7 1-3-2 1-8h3l-1 7 7-2h5v-5l-9-1z" fill="#787B80"/>
              <path transform="translate(538,292)" d="m0 0 2 4v47l-2 6h-1z" fill="#EB4B59"/>
              <path transform="translate(653,294)" d="m0 0 4 1-2 1-1 13-1 2-4-1v4h-2v-16l1-3 3 1 1 2zm-4 4m1 7 1 4 1-4z" fill="#80858A"/>
              <path transform="translate(566,354)" d="m0 0 3 1-7 7-6 5h-2v2l-3 2-3-1 2-4h2l-1-6 10-4h3z" fill="#2F2530"/>
              <path transform="translate(716,387)" d="m0 0h1l1 6h4v2h2v2h4l1 7-3-1v-2h-3l-2 4-5 1z" fill="#616167"/>
              <path transform="translate(744,315)" d="m0 0h6l3 3v6l-3 2h-5l-4-5 2-5z" fill="#FBFBFB"/>
              <path transform="translate(624,407)" d="m0 0 1 2-1 4 3-1 1 5-1 2 5 2 1 2 5 1 14 1 1-4 1 4-1 1h-19l-8-4-5-6-1-4z" fill="#76797F"/>
              <path transform="translate(602,334)" d="m0 0 3 1 2 6h-3v2h-3l-2 4h-3l-1 2-1-1v-7l3-5z" fill="#494851"/>
              <path transform="translate(516,303)" d="m0 0h1v13l-2 4-5-2-1-2-1 3h-1v-10l3-1v2h2v-5zm-3 9-1 2 3-1zm-3 1m3 2 1 3 2-3z" fill="#808489"/>
              <path transform="translate(296,281)" d="m0 0 6 1 2 2v5l-3 3h-5l-4-4 1-5z" fill="#F8F9F9"/>
              <path transform="translate(467,289)" d="m0 0 5 1 7 8 5 6 2 5 3 1-1 2-7-3-2-5-4-2 1-4-5-2v-2h-2v-3h-2z" fill="#665D64"/>
              <path transform="translate(371,365)" d="m0 0 9 4 4 7v3l-9-3-4-4-1-6z" fill="#E9394A"/>
              <path transform="translate(465,346)" d="m0 0h2l2 7v9l-4-1-1-2h-4l1-7z" fill="#4B4D55"/>
              <path transform="translate(594,306)" d="m0 0 2 3-1 6-6 14-5 1-3-11v-5l4 1v10l5-3z" fill="#585A62"/>
              <path transform="translate(491,405)" d="m0 0 5 3 3 6v12h-3l-4-12-2-2v-6zm1 4 2 2 1-2zm4 4m-1 2 1 2z" fill="#7A7D82"/>
              <path transform="translate(336,363)" d="m0 0 14 12 5 2h10l5-1v2h2l3 5 7 3h9v2h-10l-8-3-3-4v-2h-16l-8-4-10-10z" fill="#941730"/>
              <path transform="translate(474,429)" d="m0 0h2v2h3v2h4v4l3 1 1 6-2 2-2-2-2 1-3-6-3-5z" fill="#64636A"/>
              <path transform="translate(565,393)" d="m0 0 2 1 9-1v7h-2v3l2 1-4 1 1-7-2-1-1 3h-5v-3l-5 2h-3z" fill="#666970"/>
              <path transform="translate(803,327)" d="m0 0h2l2 5 3 1 5 10-1 2h-5l-3-5-3-10z" fill="#78797F"/>
              <path transform="translate(484,305)" d="m0 0 4 2 9 9v4l-4-1-4-3-2 1-2 3-4-2 3-6h4v-2l-4-4z" fill="#595A62"/>
              <path transform="translate(541,340)" d="m0 0 3 1 1 11 3-1 3 3-1 2-8-1-1 2-3 1-1 2 1-9h2v-2h3v-6h-2z" fill="#555860"/>
              <path transform="translate(316,418)" d="m0 0h5l3 2-1 5v3h-9l-1-5z" fill="#941730"/>
              <path transform="translate(555,259)" d="m0 0h1v15h7l6-6 3-1 1-2h2l-2 5-4 5-2 1h-11l-2-2v-13z" fill="#726971"/>
              <path transform="translate(528,375)" d="m0 0h4l1 7-2 5h-3v-4h-5v4h-3l-1-4 3-1 3-3h2z" fill="#565A62"/>
              <path transform="translate(275,316)" d="m0 0h5l3 4-2 5-6 1-3-3 1-6z" fill="#F5F6F6"/>
              <path transform="translate(417,340)" d="m0 0 3 1 11 14 7 8-2 1-8-5-8-14z" fill="#F85460"/>
              <path transform="translate(694,417)" d="m0 0h22v9l-3 1-3-1v-2l-2-1v-5h-14z" fill="#C8213B"/>
              <path transform="translate(725,280)" d="m0 0 4 1 2 2v5l-3 3-4-1-3-3 1-5z" fill="#F4F4F4"/>
              <path transform="translate(348,524)" d="m0 0h10l2 1 10 1 1 1 7 1v1h-27z" fill="#E43F4E"/>
              <path transform="translate(485,397)" d="m0 0h5v4h-2l1 8-3 2-1 5-4-4v-8l3 1 1-6z" fill="#5A5861"/>
              <path transform="translate(619,376)" d="m0 0 2 4v2h-3l-2 4-8 3h-8v-1l6-2 5-5z" fill="#E9404F"/>
              <path transform="translate(515,348)" d="m0 0h1v15l-2 1-5-1-1-3v-9l7 4z" fill="#63656B"/>
              <path transform="translate(535,450)" d="m0 0 1 4-3 11-1 14-1 20-2-2v-27l5-18z" fill="#75676F"/>
              <path transform="translate(688,355)" d="m0 0 1 3-3 5-9 8-9 1-10-2v-1l17-1 8-6z" fill="#A6636C"/>
              <path transform="translate(648,289)" d="m0 0h7l1 2h-8l-3 11-1 11-1 3h-2v-9l3-14z" fill="#F95561"/>
              <path transform="translate(384,279)" d="m0 0 2 1 1 9 3 9h2l2 6-9-4-1-7z" fill="#F7535F"/>
              <path transform="translate(188,393)" d="m0 0 6 1 2 1v12l-2-4-4-4-1-3-3 4-3 10-1-4 4-12z" fill="#787B81"/>
              <path transform="translate(593,347)" d="m0 0 4 2 4 1 3 1v5l-2 2h-5l-3-2z" fill="#65666C"/>
              <path transform="translate(362,673)" d="m0 0 9 1 2 1v6l-5 2-4-1z" fill="#80858A"/>
              <path transform="translate(338,498)" d="m0 0h7l6 3-1 2-6 1v1h-8l-1-6z" fill="#F03B4B"/>
              <path transform="translate(283,457)" d="m0 0 4 3-7 7-2 4-2-1-1 4h-5l1-10 4 2 8-5z" fill="#73767C"/>
              <path transform="translate(489,459)" d="m0 0 2 1 5 21v13l-1 12h-1l-2-31z" fill="#6B6C72"/>
              <path transform="translate(544,341)" d="m0 0 4 1 2 4 1-5h1l1 13h-3l-3-2h-2l-1-6z" fill="#65666D"/>
              <path transform="translate(632,382)" d="m0 0 6 2 1 3 5-2-2 4-5 5-3 1v-10h-3z" fill="#54525A"/>
              <path transform="translate(617,356)" d="m0 0v3l-11 11-10 8-1 2-4-1 5-5 7-5 2-4 5-3z" fill="#F6525F"/>
              <path transform="translate(487,414)" d="m0 0 1 2 1 6 2 5v4h3l-2 4-3-3-4-2-2 1-1-5h4v-2l-2-5 1-4z" fill="#616066"/>
              <path transform="translate(593,274)" d="m0 0 1 3 1 13h2v-9l4-1v7h-2l-2 5-4-1-2-2 1-14z" fill="#686D74"/>
              <path transform="translate(279,441)" d="m0 0 3 1h-2l3 7 1 4h2v2h2l1 7-5 3-2 3 1-5 3-1-6-12-2-8z" fill="#636268"/>
              <path transform="translate(477,405)" d="m0 0 3 3 4 7 4 11-1 3-5-7-5-5 3-3z" fill="#F6525F"/>
              <path transform="translate(757,388)" d="m0 0 2 1v7l-4 10-10 13-5 1 7-7 6-10 3-7z" fill="#81868B"/>
              <path transform="translate(504,345)" d="m0 0 3 1 1 26-3 2z" fill="#70414E"/>
              <path transform="translate(795,313)" d="m0 0 5 5 2 4h-2v7l1 4-4-3-2-8v-4l-2-1z" fill="#565A62"/>
              <path transform="translate(573,245)" d="m0 0 5 1v9l-2-1-1-6-2 1-3 2-7 1-3 1 1-3 7-4z" fill="#69666C"/>
              <path transform="translate(492,436)" d="m0 0 2 3 2 2 3 1 1-2 3 5-1 2h-10l-1 2 1-9z" fill="#636268"/>
              <path transform="translate(366,305)" d="m0 0h6v1l-7 2-1 1v15l1 11-2-3-2-6v-17z" fill="#E35662"/>
              <path transform="translate(387,278)" d="m0 0 9 1 6 4-2 1-10-5 1 5h-2v5l-3-1-1-8z" fill="#5E5860"/>
              <path transform="translate(510,264)" d="m0 0h5l3 5v2h-9l-3 1v-4h2z" fill="#E35964"/>
              <path transform="translate(546,333)" d="m0 0h4v4h2l-1 7-1 2-2-1-1-3-3-1v-6h2z" fill="#78797F"/>
              <path transform="translate(393,281)" d="m0 0 5 1 6 4-1 6-7-5-3-1z" fill="#7C7F85"/>
              <path transform="translate(654,363)" d="m0 0 2 4 2 2h-4v9h-4l-1-3 1-4v-3l2-4z" fill="#6A6A70"/>
              <path transform="translate(404,291)" d="m0 0 6 5 1 7-3 3-3 1-1-4 1-2h2l-3-7z" fill="#74767C"/>
              <path transform="translate(253,389)" d="m0 0 11 4 2 5h-2l-1 2-4-2v-2l-5-2z" fill="#565A62"/>
              <path transform="translate(417,414)" d="m0 0h6l-3 2-14 4-10 7-6 1 4-3 9-6 6-3z" fill="#941730"/>
              <path transform="translate(454,286)" d="m0 0h5v3h3l1 6h-2l-1 3-6-9z" fill="#65545D"/>
              <path transform="translate(676,348)" d="m0 0 11 1 3 2-1 4-1-2-4-1h-16l-1-2z" fill="#BA5F69"/>
              <path transform="translate(606,332)" d="m0 0 5 1 1 1v10l-3 3h-1v-11l-2-1z" fill="#4C4F56"/>
              <path transform="translate(541,272)" d="m0 0 4 1 5 6-8-4-2 21h-1v-18z" fill="#727479"/>
              <path transform="translate(551,305)" d="m0 0 2 1v18l-1 13h-1l-1-9v-20z" fill="#64656B"/>
              <path transform="translate(453,563)" d="m0 0 9 1-1 3-5 3-7-2 1-4z" fill="#C9374C"/>
              <path transform="translate(573,484)" d="m0 0h4v5l2 1h-27v-1h19z" fill="#D0233D"/>
              <path transform="translate(369,421)" d="m0 0 2 4 9 3h10l-3 1v2h-11l-6-3-2-4z" fill="#B61D37"/>
              <path transform="translate(482,321)" d="m0 0 5 2 8 8 7 9v3l-15-16z" fill="#601E30"/>
              <path transform="translate(390,289)" d="m0 0 4 1 4 7 1 5-5-2-1-5-3-1-1-4z" fill="#797B81"/>
              <path transform="translate(571,397)" d="m0 0 3 1-2 8-6 4h-2l1-4 3-1v-5z" fill="#74767C"/>
              <path transform="translate(658,268)" d="m0 0 6 5 11 14 4 5v2h-2l-8-11-11-13z" fill="#F95561"/>
              <path transform="translate(622,387)" d="m0 0 6 1 4 2v6h-4v-5l-9-1z" fill="#7C8085"/>
              <path transform="translate(510,329)" d="m0 0h1v10h-6l-2-1-1 3-1-5 5-1 2-4h2z" fill="#585B62"/>
              <path transform="translate(625,420)" d="m0 0 7 1 1 2 5 1 14 1 1-4 1 4-1 1h-19l-8-4z" fill="#6F7177"/>
              <path transform="translate(499,416)" d="m0 0 2 2 3 8 1 7-3 1-2-4z" fill="#53555C"/>
              <path transform="translate(649,330)" d="m0 0h2l-1 5-6 11-3 1v3h-2l2-5z" fill="#4E2130"/>
              <path transform="translate(596,266)" d="m0 0 5 1v13l-3-1-1-6-1-1z" fill="#7F8388"/>
              <path transform="translate(217,405)" d="m0 0h5l1 2-5 5h-4l-1-3z" fill="#696E75"/>
              <path transform="translate(366,379)" d="m0 0h4l4 6 7 2h12l-1 2h-12l-9-3-3-3v-3z" fill="#CE223C"/>
              <path transform="translate(655,296)" d="m0 0 2 4v11l-8 2v-3l4 1 1-9-2-2h3z" fill="#75767C"/>
              <path transform="translate(245,381)" d="m0 0h2v3l6 2-1 2h-2v2h-5l-1-8z" fill="#565A62"/>
              <path transform="translate(812,336)" d="m0 0 3 3 6 11v3l-3-1v-3l-3-1-1 2-2-5h2l-1-5z" fill="#71737A"/>
              <path transform="translate(508,528)" d="m0 0 4 1 1 5-5 3-2-2v-5z" fill="#81868B"/>
              <path transform="translate(386,288)" d="m0 0 3 1 2 5 2 1 2 5 3 3 2 4-3-1-5-5v-3h-2z" fill="#6C515B"/>
              <path transform="translate(598,295)" d="m0 0h1v10l-2 6-2-2-1-7h2l1-6z" fill="#583E49"/>
              <path transform="translate(477,301)" d="m0 0 4 1 1 3 4 2v2l3 1-1 2-7-3z" fill="#6A6E75"/>
              <path transform="translate(486,430)" d="m0 0 5 2v9h-3l-2-4z" fill="#43474F"/>
              <path transform="translate(508,314)" d="m0 0 2 1v3l6 1v11l-3-2-1-7-5-1z" fill="#77787E"/>
              <path transform="translate(589,289)" d="m0 0 2 4 1 3-2 7-1 2-3-1z" fill="#4B4F57"/>
              <path transform="translate(402,284)" d="m0 0 4 2 6 9 1 6-2 1-1-6-3-1-4-9z" fill="#626369"/>
              <path transform="translate(606,391)" d="m0 0h5l-2 1 3 3-1 5 2 1-7-1v-6h2v-2z" fill="#5E5F66"/>
              <path transform="translate(603,330)" d="m0 0 4 2-1 3 3 1-2 4-3-5-6 1 2-4z" fill="#5B5D64"/>
              <path transform="translate(655,312)" d="m0 0h1v6l-2 5-4-2v-6l4-2z" fill="#606066"/>
              <path transform="translate(620,384)" d="m0 0 2 1-6 4-3 1h-12v-1l7-1 5-2z" fill="#AC1B35"/>
              <path transform="translate(380,371)" d="m0 0 3 3 1 5-9-3-3-3h7z" fill="#A21C34"/>
              <path transform="translate(808,334)" d="m0 0 4 2 3 7-1 2-4-1-2-6z" fill="#7F8388"/>
              <path transform="translate(502,322)" d="m0 0 4 1-1 8h-5l1-5z" fill="#212730"/>
              <path transform="translate(594,306)" d="m0 0 2 3-1 6-4 10-2-2 2-5z" fill="#5E5E65"/>
              <path transform="translate(589,307)" d="m0 0 2 2h-2v2l3 1-2 1 1 1v6l-4 2v-11z" fill="#78797F"/>
              <path transform="translate(650,290)" d="m0 0 6 1 2 2v13h-1l-1-11-5-3v2h-2z" fill="#65656C"/>
              <path transform="translate(572,247)" d="m0 0 4 1-2 16h-1l-1-10-5-2 3-2 2-2z" fill="#808489"/>
              <path transform="translate(313,455)" d="m0 0h2l6 19-1 2-3-5-3-10z" fill="#696B71"/>
              <path transform="translate(511,339)" d="m0 0h2v7h2l1-2-1 8h-2l-2-4v-4l-2-1h2z" fill="#78797F"/>
              <path transform="translate(292,465)" d="m0 0h1l-1 7-5 4-4-2-1-5 2 4 4-1z" fill="#636268"/>
              <path transform="translate(310,433)" d="m0 0 2 2 2 13v7l-1-2-3-1 1-5z" fill="#626167"/>
              <path transform="translate(507,397)" d="m0 0h3v2l5 1-1 3-4 1-3-1z" fill="#78797F"/>
              <path transform="translate(592,364)" d="m0 0h6l1 3-3 4v-3l-6 1-4 2z" fill="#941730"/>
              <path transform="translate(713,427)" d="m0 0h2l-1 17-2 4 1-18-3-1z" fill="#F5505E"/>
              <path transform="translate(523,380)" d="m0 0 1 2 3-2h3v6l-2 1v-4h-5v4h-3l-1-4 3-1z" fill="#616067"/>
              <path transform="translate(600,329)" d="m0 0h7l1 2-7 1-6 9-2 2 1-6z" fill="#F75360"/>
              <path transform="translate(570,393)" d="m0 0h6v7h-2v3l2 1-4 1 1-7-3-3z" fill="#65676D"/>
              <path transform="translate(598,292)" d="m0 0 1 3-3 7h-2l-2-3-1-3 4-2z" fill="#565A62"/>
              <path transform="translate(594,260)" d="m0 0 6 1 1 5h-2v-4h-2l-2 7-2-1 1-5-3-1z" fill="#696E75"/>
              <path transform="translate(541,322)" d="m0 0h2l1 3v9l-3 1z" fill="#4D5159"/>
              <path transform="translate(628,404)" d="m0 0h13l5 4 2 5-7-6-13-2z" fill="#9B5E68"/>
              <path transform="translate(420,415)" d="m0 0 3 1-7 3-1 5-6-5 3-2z" fill="#D0233D"/>
              <path transform="translate(633,337)" d="m0 0 7 1 2 2-9 1-3 2 2-5z" fill="#55585F"/>
              <path transform="translate(490,399)" d="m0 0 4 5 1 4-4-2-2 2-1-7h2z" fill="#66636A"/>
              <path transform="translate(649,363)" d="m0 0 3 1-4 3h-9l-3-3h12z" fill="#CC223C"/>
              <path transform="translate(584,304)" d="m0 0h2l-1 6-1 5-3-1-1 5-2-1z" fill="#606066"/>
              <path transform="translate(408,300)" d="m0 0 3 1-1 4-5 2-1-4 1-2z" fill="#7A7D83"/>
              <path transform="translate(314,417)" d="m0 0h2l-2 6 2 2-1 2h-2l-2-6v-3z" fill="#D0233D"/>
              <path transform="translate(578,378)" d="m0 0h1v5h-2l-2 5-3 3-2-1 3-3 4-8z" fill="#901C33"/>
              <path transform="translate(651,367)" d="m0 0 2 2v9h-3l-1-3 1-4v-3z" fill="#7B7E83"/>
              <path transform="translate(638,350)" d="m0 0 1 3-7 9-1-2 3-5 2-4z" fill="#5A2030"/>
              <path transform="translate(540,341)" d="m0 0 1 2h2v6h-3l-1 2v-8z" fill="#42464E"/>
              <path transform="translate(387,278)" d="m0 0 9 1 6 4-2 1-10-5v2l-4-2z" fill="#626268"/>
              <path transform="translate(208,414)" d="m0 0h5l1 3-1 2h-5l-1-3z" fill="#565A62"/>
              <path transform="translate(758,377)" d="m0 0 1 4-1 4h-3l-1-5z" fill="#555961"/>
              <path transform="translate(467,289)" d="m0 0 5 1 3 3-1 4-3-1v-2h-2v-3h-2z" fill="#615D64"/>
              <path transform="translate(600,280)" d="m0 0h1v7h-2v2h-2v-8z" fill="#696E75"/>
              <path transform="translate(506,473)" d="m0 0h9v2l-7 2-2-1z" fill="#78797F"/>
              <path transform="translate(484,448)" d="m0 0 7 1-1 3h-2l-1 4-3-6z" fill="#645F66"/>
              <path transform="translate(516,438)" d="m0 0 1 3-1 5 6 1v2h-5l-3-3v-5z" fill="#797B80"/>
              <path transform="translate(369,421)" d="m0 0 2 4 9 3-4 2-6-2-2-4z" fill="#A61A34"/>
              <path transform="translate(582,398)" d="m0 0h6l1 2h-7v2h-6l1-2z" fill="#474B52"/>
              <path transform="translate(777,373)" d="m0 0 4 1-4 1-1 4-1 2-4-2 4-2v-3z" fill="#65666C"/>
              <path transform="translate(665,352)" d="m0 0 3 1-12 9v-3z" fill="#707177"/>
              <path transform="translate(799,321)" d="m0 0 3 4 1 10-2-2-2-4z" fill="#636268"/>
              <path transform="translate(514,533)" d="m0 0 2 2h-2z" fill="#81868B"/>
              <path transform="translate(632,415)" d="m0 0" fill="#81868B"/>
              </svg>

            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <x-nav-link href='/'>
                  Bienvenido
                </x-nav-link>
                <x-nav-link href='/cuentos'>
                  Cuentos
                </x-nav-link>
              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
              <button type="button" class="relative rounded-full bg-[#4E2130] p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">View notifications</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                </svg>
              </button>
              <div class="relative ml-3">
                <div>
                  <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <img class="size-8 rounded-full" src={{asset('assets/Castillo.svg')}} alt="">
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="-mr-2 flex md:hidden">
            <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>
      <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
          <x-nav-link href='/' extraClass='block'>
            Bienvenido
          </x-nav-link>
          <x-nav-link href='/cuentos' extraClass='block'>
            Cuentos
          </x-nav-link>
        </div>
        <div class="border-t border-gray-600 pb-3 pt-4">
          <div class="flex items-center px-5">
            <div class="shrink-0">
              <img class="size-10 rounded-full" src={{asset('assets/Castillo.svg')}} alt="">
            </div>
            <div class="ml-3">
              <div class="text-base font-medium text-gray-100">Magnus</div>
              <div class="text-sm font-medium text-gray-400">krlos_2301@hotmail.com</div>
            </div>
            <button type="button" class="relative ml-auto shrink-0 rounded-full bg-[#4E2130] p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </nav>
    <header class=" shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-[#FFFFFF]">{{$header}}</h1>
      </div>
    </header>
    <main class=" h-full">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 ">
        <div class="bg-[#FFFFFF] rounded-lg p-6 shadow-md">
          <p class="text-gray-700">{{$slot}}</p>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
