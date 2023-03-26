@extends('Layout.main')
@section('title', $events->title)

@section('content')

    <div class="col-md-10 offset-md-1 mt-3">

        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/imgs/events/{{ $events->image }}" alt="{{ $events->title }} class="img-fluid" height="500px"
                    width="500px">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $events->title }}</h1>
                <p class="event-city">
                    <ion-icon name="location-outline"></ion-icon>
                    {{ $events->city }}
                </p>
                <p class="event-participantes">
                    <ion-icon name="people-outline"></ion-icon>
                    X Participantes
                </p>
                <p class="event-ower">
                    <ion-icon name="star-outline"></ion-icon>
                    Dono do Evento
                </p>
                <a href="" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
                <h3>O Evento conta com:</h3>
                <ul id="items-list">
                    <!-- Exibindo um array com o Laravel-->
                    @foreach ($events->items as $item)
                        <li>
                            <ion-icon name="play-outline"></ion-icon>
                            <span>
                                {{ $item }}
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre o Evento:</h3>
                <p class="event-description">
                    {{ $events->description }}
                </p>
            </div>


        </div>
    </div>

@endsection
