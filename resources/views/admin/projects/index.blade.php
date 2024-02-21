@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Projects</h1>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Programma</th>
                            <th scope="col">Data</th>
                            <th scope="col">Emulazione</th>
                            <th scope="col">Descrizione</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th>{{ $project->id }}</th>
                                <td>{{ $project->nome }}</td>
                                <td>{{ $project->slug }}</td>
                                <td>{{ $project->programma }}</td>
                                <td>{{ $project->data }}</td>
                                <td>{{ $project->emulazione }}</td>
                                <td>{{ $project->descrizione }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection