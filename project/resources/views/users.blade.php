@foreach ($users as $user)
    <div>
        <h2>{{ $user->name }}</h2>
        <p>{{ $user->email }}</p>
    </div>
@endforeach
