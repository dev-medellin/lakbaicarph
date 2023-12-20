<div>
    <h1>{{ $count }}</h1>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <button wire:click="increment">+</button>

    <button wire:click="decrement">-</button>
</div>
