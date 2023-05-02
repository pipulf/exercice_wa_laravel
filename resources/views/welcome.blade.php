@include('header')


<div class="d-flex flex-column">
    <form method="POST" action="api/personnes ">
        <div class="mb-3" role="alert">
            <label for="firstname" class="form-label">Prénom</label>
            <input class="form-control" type="text" required id="firstname" name="firstname"></label>
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Nom de famille</label>
            <input class="form-control" type="text" required id="lastname" name="lastname"></label>
        </div>
        <div class="mb-3">
            <label for="birthdate" class="form-label">Date de naissance</label>
            <input class="form-control" type="date" required id="birthdate" name="birthdate" min="{{$minDate}}" max="{{$maxDate}}"></label>
        </div>
        <div class="d-flex justify-content-center">
            <button  class="btn btn-primary" type="submit">Enregistrer</button>
        </div>
    </form>
    
    <div class="d-flex justify-content-center mt-3">
        <a class="btn btn-success" href="{{route('personnes.index')}}">
            Visualiser
        </a>
    </div>
    
</div>

@include('footer')