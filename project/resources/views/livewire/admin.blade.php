<div>
    <form wire:submit.prevent="destroy('{{ $admin->id_user }}')">
        @csrf
        @method('DELETE')
        <button type="submit" class="w-[80px] h-[30px] bg-red-500 text-white rounded-lg">delete</button>
    </form>
    
</div>
