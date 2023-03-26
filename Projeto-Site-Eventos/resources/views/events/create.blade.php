@extends('Layout.main')
@section('title', 'Criar Evento')
@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie seu Evento: </h1>

        <form action="/events" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-3">
                <label for="img">Imagem do Evento: </label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
            <div class="form-group mt-3">
                <label for="title">Evento: </label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento...">
            </div>
            <div class="form-group mt-3">
                <label for="date">Data: </label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="title">Cidade: </label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento...">

            </div>
            <div class="form-group">
                <label for="title">O Evento é privado? </label>
                <select name="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>

                </select>
            </div>
            <div class="form-group">
                <label for="titile">Descrição: </label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento..."></textarea>
            </div>
            <div class="form-group">
                <label for="titile">Adicione itens de infraesturura: </label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="check" value="Palcos"> Palcos
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="check" value="Refrigerante grátis"> Refrigerante grátis
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="check" value="Open Food"> Open Food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="check" value="Brindes"> Brindes
                </div>
            </div>
            <input type="submit" value="Criar Evento" class="btn btn-primary mt-3">
        </form>

    </div>




@endsection
