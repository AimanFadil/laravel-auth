@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Crea un nuovo progetto</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.projects.store') }}" method="post">
                    @csrf
                    <div class="form-group py-2">
                        <label for="nome" class="control-label">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="nome" class="form-control">
                    </div>
                    <div class="form-group py-2">
                        <label for="programma" class="control-label">Programma</label>
                        <input type="text" name="programma" id="programma" placeholder="programma" class="form-control">
                    </div>
                    <div class="form-group py-2">
                        <label for="data" class="control-label">Data</label>
                        <input type="text" name="data" id="data" placeholder="data" class="form-control">
                    </div>
                    <div class="form-group py-2">
                        <label for="emulazione" class="control-label">Emulazione</label>
                        <input type="text" name="emulazione" id="emulazione" placeholder="emulazione"
                            class="form-control">
                    </div>
                    <div class="form-group py-2">
                        <label for="descrizione" class="control-label">Descrizione</label>
                        <input type="text" name="descrizione" id="descrizione" placeholder="descrizione"
                            class="form-control">
                    </div>
                    <div class="form-group py-2">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
