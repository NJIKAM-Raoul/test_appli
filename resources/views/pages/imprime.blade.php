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

<div class="ccontainer">
    <p>
        <h3 class="font-weight-bold" 
        style="text-align: center;color: black;text-transform: uppercase"> Culte d Enfants De EEC </h3>
    </p>

    <div class="modal-body col-md-6" style="right: -25%">
        <table class="">
            <div class="col-md-12">
                <div class="form-group">
                    <label style="margin-bottom: -7px">Nom de l enfant <code
                            class="right">: {{ $reponse[0]->nom }}</code></label>
                    <br>
                    <label class="">Surname of the child </label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label style="margin-bottom: -7px">Prenom de l enfant <code
                            class="right">: {{ $reponse[0]->prenom }}</code></label>
                    <br>
                    <label class="">Givenname of the child </label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label style="margin-bottom: -7px"> Date de Naissance <code>
                            class="right">: {{ $reponse[0]->datenaiss }}</code></label>
                    <br>
                    <label class=""> le-Born at </label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label style="margin-bottom: -7px"> Lieu Naissance <code
                            class="right">: {{ $reponse[0]->lieunaiss }}</code></label>
                    <br>
                    <label class="">Givenname of the child </label>
                </div>
            </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label style="margin-bottom: -7px"> Sexe <code>
                                    class="right">: {{ $reponse[0]->sexe }}</code></label>
                            <br>
                            <label class=""> Sexe </label>
                        </div>
                    </div>
        
                    <div class="col-md-12">
                        <div class="form-group">
                            <label style="margin-bottom: -7px"> Lieu de Culte <code
                                    class="right">: {{ $reponse[0]->lieuculte }}</code></label>
                            <br>
                            <label class=""> </label>
                        </div>
                    </div>
                                
                    <div class="col-md-12">
                        <div class="form-group">
                            <label style="margin-bottom: -7px"> Nom Pere <code>
                                    class="right">: {{ $reponse[0]->nompere }}</code></label>
                            <br>
                            <label class=""> Name Father </label>
                        </div>
                    </div>
        
                    <div class="col-md-12">
                        <div class="form-group">
                            <label style="margin-bottom: -7px"> Nom Mere<code
                                    class="right">: {{ $reponse[0]->nommere }}</code></label>
                            <br>
                            <label class=""> Name Mother </label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label style="margin-bottom: -7px"> Classe Frequente <code>
                                    class="right">: {{ $reponse[0]->classe }}</code></label>
                            <br>
                            <label class=""> Classroon </label>
                        </div>
                    </div>
        
                    <div class="col-md-12">
                        <div class="form-group">
                            <label style="margin-bottom: -7px"> Niveau<code
                                    class="right">: {{ $reponse[0]->niveau }}</code></label>
                            <br>
                            <label class=""> level </label>
                        </div>
                    </div>
                </table>   
        
       
         </div>
            <div class="col-md-12 nepas">
            <div class="form-group" style="text-align: left;display: inline-block" >
                <input type="button" class="btn btn-success" value="imprimer" onclick="window.print()">

            </div>
            </div>
</body>
</html>