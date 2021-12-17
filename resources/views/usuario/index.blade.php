@extends('layouts.frontEnd')

@section('css')
<link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@endsection 

@section('Conteudo')
 
    <a href="lista/create" class="btn btn-primary mb-3">Adicionar</a> 

    <table id="usuarios" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">username</th>
                <th scope="col">password</th>
                <th scope="col">name</th>
                <th scope="col">action</th>
                
            </tr>
        </thead>
        <tbody>

            
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->id}}</td>    
                <td>{{$usuario->username}}</td>    
                <td>{{$usuario->password}}</td>    
                <td>{{$usuario->name}}</td>

                <td>
                    <form action="{{ route ('lista.destroy', $usuario->id)}}" method='POST'> 
                    @csrf
                    @method('DELETE')  
                        <a href="/usuarios/lista/{{$usuario->id}}/edit" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>    
                 </td>
                </tr>
            @endforeach    
        </tbody>
    </table>

    @section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
        $('#usuarios').DataTable({
            "lengthMenu": [[5,10,50, -1], [5, 10, 50, "All"]]
        });
    } );
    </script>

    @endsection

@endsection



