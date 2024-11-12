<x-layout title="Nova Série">
    <form action="/series/salvar" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        <button type="submit">Adicionar</button>
    </form>

</x-layout>