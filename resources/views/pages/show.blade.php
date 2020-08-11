<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laracarte</title>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
    crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" 
    crossorigin="anonymous">

    {{--  @media print{
        .nepas{
            display: none;
        }
    }  --}}

    
</head>
<body>

      <div class="container">

          <h1 class="text-center">Visualisation Des Informations Sur Un Enfant</h1>

            <div class="row">

                <div class="form-group col-md-6">
                  <h2>Nom: </h2>
                  {{ $enfant->nom }}
                </div>

                <div class="form-group col-md-6">
                    <h2>PreNom: </h2>
                    {{ $enfant->prenom }}
                </div>
              

              <div class="row">
                  <div class="form-group col-md-6">
                    <h2>Date Naissance: </h2>
                    {{ $enfant->datenaiss }}
                  </div>
                  
                  <div class="form-group col-md-6">
                    <h2>Lieu de Naissance: </h2>
                    {{ $enfant->lieunaiss }}
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-6">
                    <h2>Sexe: </h2>
                    {{ $enfant->sexe }}
                  </div>
                  
                  <div class="form-group col-md-6">
                    <h2>Lieu de Naissance: </h2>
                    {{ $enfant->lieuculte }}
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-6">
                    <h2>Nom Pere: </h2>
                    {{ $enfant->nompere }}
                  </div>
                  
                  <div class="form-group col-md-6">
                    <h2>Nom Mere: </h2>
                    {{ $enfant->nommere }}
                  </div>
                </div>
                
                <div class="row">
                  <div class="form-group col-md-6">
                    <h2>Classe: </h2>
                    {{ $enfant->classe }}
                  </div>
                  
                  <div class="form-group col-md-6">
                    <h2>Niveau: </h2>
                  {{ $enfant->niveau }}
                  </div>
                </div><br><br>

               <center>
                  <a href="{{ route('about_path') }}">
                    <button class="btn btn-primary btn-lg btn-block" 
                    style="height: 50px; width: 250px;" type="submit"> Retour</button>
                  </a>
                </center>

        </div>
</body>
</html>