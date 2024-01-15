@section('title', 'Membros')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Membros') }}
    </h2>
</x-slot>

<div>
    <ul>
        @foreach ($membros as $membro)
            <li>{{ $membro->nome }}</li>
        @endforeach
    </ul>
</div>
