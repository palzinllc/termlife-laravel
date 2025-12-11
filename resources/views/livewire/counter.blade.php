<div class="bg-white p-6 rounded-lg shadow-md">
    <h3 class="text-lg font-semibold mb-4">Livewire Counter Demo</h3>
    <div class="flex items-center justify-center space-x-4">
        <button wire:click="decrement" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition">
            -
        </button>
        <span class="text-3xl font-bold">{{ $count }}</span>
        <button wire:click="increment" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition">
            +
        </button>
    </div>
    <p class="text-sm text-gray-600 mt-4 text-center">This counter updates in real-time using Livewire!</p>
</div>
