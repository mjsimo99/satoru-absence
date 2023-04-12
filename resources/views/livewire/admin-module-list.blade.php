<div>
    {{-- @livewire('admin-module-list') --}}
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Livewire.on('moduleDeleted', () => {
                Livewire.emit('refreshComponent');
            });
        });
    </script>
@endpush
