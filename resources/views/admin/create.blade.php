@include('navbarAdmin')



<form method="POST" action="{{ route('admin.create') }}">
    @csrf
    <input type="hidden" name="user_id" value="{{ $user->id }}">
    <div>
        <label for="nom_admin">Nom:</label>
        <input type="text" name="nom_admin" id="nom_admin" value="{{ old('nom_admin') }}">
        @error('nom_admin')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="prenom_admin">Prénom:</label>
        <input type="text" name="prenom_admin" id="prenom_admin" value="{{ old('prenom_admin') }}">
        @error('prenom_admin')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="email_admin">Email:</label>
        <input type="email" name="email_admin" id="email_admin" value="{{ old('email_admin') }}">
        @error('email_admin')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">Créer Admin</button>
    </div>
</form>

