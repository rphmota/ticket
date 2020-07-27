@extends('front.master.home')
@section('folhas')
    <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Cadastro de Usuarios</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{'/home'}}">Home</a></li>
                            <li class="breadcrumb-item active">Setores</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- Horizontal Form -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Formulario de cadastro de Usuarios</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="{{route('users.store')}}" method="post">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">Nome</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Qual o nome do usuario?">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cpf" class="col-sm-2 col-form-label">CPF</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Diga o cpf do usuario">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                                        <div class="col-sm-5">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Qual o email?">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-5">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Usuario digita uma senha">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="sector_id" class="col-sm-2 col-form-label">Setor</label>
                                        <div class="col-sm-5">
                                            <select class="form-control select2bs4" name="sector_id">
                                                <option selected="selected" value="0">Selecione um Setor para o usuario</option>
                                                @foreach ($sectors as $sector)
                                                    <option value="{{$sector->id}}">Nome: {{ucfirst($sector->name)}} - Responsavel: {{ucfirst($sector->responsavel)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nivel_acesso" class="col-sm-2 col-form-label">Situação</label>
                                        <div class="col-sm-10 my-2">
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio1" name="nivel_acesso" value="2">
                                                <label for="customRadio1" class="custom-control-label">Administrador</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio2" name="nivel_acesso" value="1">
                                                <label for="customRadio2" class="custom-control-label">Profissional T.I</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio3" name="nivel_acesso" value="0" checked>
                                                <label for="customRadio3" class="custom-control-label">Usuario</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Cadastrar</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('scripts')
    <!-- Select2 -->
    <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4',
                placeholder: "Select a state",
            })
        })
    </script>
@endsection

