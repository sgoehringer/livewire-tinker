<div>
    <div style="text-align: center">
        <button class="btn btn-success" wire:click="increment">+</button>
        <h1>{{ $count }}</h1>
        <div class="small pb-2">{{ $time }}</div>
        <button class="btn btn-danger" wire:click="decrement">-</button>
    </div>
</div>
