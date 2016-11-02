<p><a href="#" class="label label-primary">Novo Telefone</a></p>
<table class="table table-hover">
    @foreach($telefones as $telefone)
    <tr>
        <td>{{$telefone->descricao}}</td>
        <td>{{$telefone->numero}}</td>
        <!-- <td>{{$telefone->codepais}} ({{$telefone->ddd}}) {{$telefone->prefixo}}-{{$telefone->sufixo}}</td> -->
        <td>
            <a href="{{route('telefone.destroy', ['id'=>$telefone->id])}}" class="text-danger" data-toggle="tooltip" data-placement="top" title="Apagar"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
        </td>
    </tr>
    @endforeach
</table>