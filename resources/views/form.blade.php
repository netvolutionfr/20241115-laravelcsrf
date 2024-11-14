@extends('template')

@section('contenu')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ url('form') }}" method="POST">
        @csrf
        <label for="name">Entrez votre nom : </label>
        <input type="text" name="name" id="name">

        <label for="email">Entrez votre email : </label>
        <input type="email" name="email" id="email">

        <label for="password">Entrez votre mot de passe : </label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Envoyer !">
    </form>
@endsection
