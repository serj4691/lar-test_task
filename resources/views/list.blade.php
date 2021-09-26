<div class="content">
    <div class="container">
        @foreach ($users as $user)
            <div><a href="list_tasks/{{ $user->id }}"> {{ $user->title }} {{ $user->phone }} {{ $user->status ? 'работает' : 'свободен' }}</a></div>
        @endforeach
    </div>
</div>

