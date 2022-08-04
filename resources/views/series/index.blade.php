<x-layout title="Séries">
    <main class="container">
        <h1>Series</h1>
        <ul class="list-group">
            @foreach ($lista as $item)
            <li class="list-group-item">{{$item}}</li>
            @endforeach
            
          </ul>
    </main>
</x-layout>
