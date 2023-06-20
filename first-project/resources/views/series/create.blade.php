<x-layout title="criar">
  <form action="/series/cadastrar" method="post" class="container mx-auto">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" class="border-2 p-2 rounded-sm">
    <button type="submit" class="bg-blue-500 text-white p-2 rounded-sm">Cadastrar</button>
  </form>
</x-layout>