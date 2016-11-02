<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Code Agenda</title>

    <!-- Bootstrap -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 page-header">
                <h1>Danilo Righetto<br /></h1>
                <small><i class="glyphicon glyphicon-phone-alt"></i>&nbsp;&nbsp;Agenda telefonica</small>
                <span clas="pull-right">
                    <form class="form-inline" action="#" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Pesquisar contato...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
            </div>
            </form>
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            @foreach(range('A','Z') as $letra)
            <a href="{{ route('agenda.letra',['letra'=>$letra]) }}" class="btn btn-primary btn-xs">{{$letra}}</a> @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 btn-row">
            <a href="#" class="btn btn-primary">Novo Contato</a>
        </div>
    </div>
    <div class="row">
        <!-- Conteudo do nosso sistema -->
        @yield('content')
    </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>