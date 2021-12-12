<div x-data="{show: @entangle($attributes->wire('model'))}"
    x-show="show" 
    @keydown.escape.window="show= false"
    style="display: none">
    <div class="fixed inset-0 bg-gray-900 opacity-90" @click="show= false">
    </div>
    <div class="bg-white shadow-md max-w-max h-48 m-auto rounded-md fixed inset-0" x-show.transition="show">
        <div class="flex flex-col h-full justify-between">
            <header class="flex justify-between items-center p-4 bg-red-500 rounded-t-md">
                <h3 class="font-mono text-lg text-white">
                    {{ $title }}
                </h3>
                <div class="cursor-pointer z-50 justify-end">
                    {{ $close }}
                </div>
            </header>
            <main class="px-6 mt-6">
                {{ $body }}
            </main>
            <footer class="flex justify-end px-6 py-3 mt-6 bg-gray-200 rounded-b-md">
                {{ $footer }}
            </footer>
        </div>
    </div>
</div>
