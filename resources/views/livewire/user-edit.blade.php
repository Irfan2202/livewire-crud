<div>
    <form wire:submit.prevent="update">
        @csrf

        <div>
            <label>Name:</label>
            <input type="text" wire:model="name">
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label>Email:</label>
            <input type="email" wire:model="email">
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Update</button>

        @if (session()->has('message'))
            <div>{{ session('message') }}</div>
        @endif
    </form>
</div>
