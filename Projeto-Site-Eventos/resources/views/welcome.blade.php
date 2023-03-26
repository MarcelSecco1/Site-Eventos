@extends('Layout.main')
@section('title', 'Marcel Eventos')
@section('content')


    <div id="search-container" class="col-md-12">
        <h1 class="texto-search">Busque um Evento: </h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if ($search)
            <h2>Eventos Buscados por: {{ $search }} </h2>
        @else
            <h2>Próximos Eventos:</h2>
        @endif
        <p class="subtitile">Vejas os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/imgs/events/{{ $event->image }}" alt="{{ $event->title }}">
                    <div class="card-body">
                        <!-- meio de converter dadas usando o php -->
                        <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participantes"> X Participantes </p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber Mais</a>
                    </div>
                </div>
            @endforeach
            @if (count($events) == 0 && $search)
                <p> Não foi possível encontrar nenhum evento com {{ $search }}...</p>
                <a href="/">Ver todos os eventos</a>
                @elseif(count($events) == 0)
                <p> Não há eventos disponíveis...</p>
            @endif
        </div>
    </div>


@endsection
