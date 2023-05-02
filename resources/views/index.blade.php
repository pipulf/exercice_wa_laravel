@include('header')


<div class="d-flex flex-column">
    <table class="table">
        <thead>
            <th>Nom de famille</th>
            <th>Prénom</th>
            <th>Age</th>
            <th>Date de Naissance</th>
        </thead>
        <tbody>
            @foreach ($personnes as $personne)
            <tr>
                <th class="text-center">{{ $personne->lastname }}</th>
                <th class="text-center">{{ $personne->firstname }}</th>
                <th class="text-center">{{ $personne->age }}</th>
                <th class="text-center">{{ date('d-m-Y', strtotime($personne->birthdate)) }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>

    
    <div class="d-flex justify-content-center mt-3">
        <a class="btn btn-warning" href="/">
            Retour au formulaire
        </a>
    </div>
    
</div>

@include('footer')