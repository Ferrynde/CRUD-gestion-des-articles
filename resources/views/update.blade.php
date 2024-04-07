<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
        <title>Gestion article</title>
      </head>
<body>
    <div class="container">
        <div class="col-md-12">
            <div class="text-center"><h1>Gestion des articles</h1></div><br><br><br>
        </div>
        @if(session('message'))
        <div class="alert alert-success">{{(session('message'))}}</div>
        @endif
        <div class="row">
            <div class="col-md-8">
                <form action="/update/traitement" method="POST" >
                    @csrf
                    <input type="text" style="display: none" name="id" value="{{$article->id}}">
                    <div class="col-md-6">
                        <label for="nom" class="form-label"></label><strong>Nom de l'article</strong>
                        <input type="text" id="nom" class="form-control" name="libelle" value="{{$article->libelle}}">
                    </div>
                    <div class="col-md-6">
                        <label for="prix" class="form-label"></label><strong>Prix</strong>
                        <input type="number" id="prx" class="form-control" name="prix" value="{{$article->prix}}"><br>
     
                        <input type="submit" class="btn btn-primary" value="Modifier">
                    </div>
                </form><br><br><br>
</body>
</html>