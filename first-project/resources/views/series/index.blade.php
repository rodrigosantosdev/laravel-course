  <x-layout title="Series">
    <div class="container mx-auto flex items-start justify-between">
      <ul class="flex flex-col gap-2">
        {{-- metodo do laravel foreach --}}
        @foreach ($series as $serie)
        
        {{-- sintase de array --}}
        {{-- <li>{{$serie[.nome]}}</li> --}}

        {{-- sintase de object --}}
        <li>{{$serie->nome}}</li>

        {{-- fechamento do foreach --}}
        @endforeach
      </ul>
      <a href="/series/criar" class="bg-emerald-400 text-emerald-950 rounded-sm p-2 w-max">Adicionar</a>
    </div>
  </x-layout>
