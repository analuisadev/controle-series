<x-layout title="Séries">
    <a href="/series/create">Adicionar</a>
    <ul>
        @foreach($series as $serie) 
            <li>{{$serie->nome}}</li>
        @endforeach
    </ul>
</x-layout>