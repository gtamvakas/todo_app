@if(session('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bg-green-600 text-white py-5 px-4 rounded-xl text-lg top-3 right-2"
    >
        {{ session('success') }}
    </div>

@endif
