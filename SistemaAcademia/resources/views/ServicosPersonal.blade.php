@extends('master.base')

@section('pagina')
Serviço
@endsection

@section('conteudo')
<h1>Serviços que você está prestando</h1>

@forelse($personal->Servicos()->get() as $Servico)
<table class="table table-bordered table-hover mt-5">
  <caption>Clique no cliente para visualizar dados de contato</caption>
  <tr>
    <thead class="thead-dark" id="numeroservico">
    <th colspan="4">Serviço {{$Servico->id}}</th>
    </thead>
  </tr>
  <tr>
    <th>Cliente</th><th>Personal Trainer</th><th>Atívidade fisica</th><th>Data de criação</th>
  </tr>
  <tr>
    <td><a href="" data-toggle="modal" data-target="#servico{{$Servico->id}}">{{$Servico->Cliente()->first()->name}}</a></td><td><{{$personal->name}}</td><td>{{$Servico->AtividadeFisica()->first()->AtividadeFisica}}</td><td>{{$Servico->created_at}}</td>
  </tr>
  <tr>
    <td colspan="4" id="numeroservico" ><a href="" class="btn btn-warning">Cancelar serviço</a></td>
  </tr>
</table>




<!-- Dados do Personal Trainer -->
<div class="modal fade" id="servico{{$Servico->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Dados de contato do cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table">
          <th>
            Telefone
          </th>
          <th>Email</th>
          <tr>
            <td>{{$Servico->Cliente()->first()->telefone}}</td><td>{{$Servico->Cliente()->first()->email}}</td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<hr></hr>

@empty
<h1>Você ainda não possui um serviço! Para ter um serviço é necessário fazer um <a href="{{route('FormCriarPedido')}}">pedido<a></h1>
@endforelse
@endsection
