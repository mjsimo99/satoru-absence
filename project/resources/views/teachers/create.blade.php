<form action="{{ route('teacherabsencefilter.store') }}" method="POST">
    @csrf
    <input type="hidden" name="seance_id" value="{{ $seance->id }}">
    <div class="mb-4">
        <label for="cne" class="block text-gray-700 font-bold mb-2">CNE:</label>
        <input type="text" name="cne" id="cne" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter CNE" required>
    </div>
    <div class="mb-4">
        <label for="comm_abs" class="block text-gray-700 font-bold mb-2">Comment:</label>
        <textarea name="comm_abs" id="comm_abs" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter comment"></textarea>
    </div>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Affect Absence</button>
</form>
