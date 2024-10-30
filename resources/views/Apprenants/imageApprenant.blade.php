@extends('Apprenants.layoutApprenant')

@section('conteneur')
    <form action="{{ route('apprenantImg.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="mon_image">
        <label for="apprenant_id">Apprenant</label>
        <select name="apprenant_id" >
            @foreach ($apprenants as $apprenants)
                <option value="{{$apprenants->id}}" >{{$apprenants->nom_complet}}</option>
            @endforeach

        </select>
        <button type="submit">Téléverser</button>
    </form>

    {{-- <h1>Image</h1>
    <img src="{{ asset($image->path) }}" alt="Image"> --}}
@endsection
