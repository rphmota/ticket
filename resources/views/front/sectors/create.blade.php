@extends('front.master.home')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Cadastro de Setores</h1>
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
                                <h3 class="card-title">Formulario de cadastro de Setores</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" action="{{route('sectors.store')}}" method="post">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">Nome</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Qual o nome do setor?">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="endereco" class="col-sm-2 col-form-label">Endereço</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Diga aonde está localizado">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telefone" class="col-sm-2 col-form-label">Telefone</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Qual o telefone de contato?">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="responsavel" class="col-sm-2 col-form-label">Responsavel</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="responsavel" name="responsavel" placeholder="Quem é o chefe?">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="descricao" class="col-sm-2 col-form-label">Descrição</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descreva em poucas palavras o que seu setor faz">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ativo" class="col-sm-2 col-form-label">Situação</label>
                                        <div class="col-sm-10 my-2">
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio1" name="ativo" value="1">
                                                <label for="customRadio1" class="custom-control-label">Ativo</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio2" name="ativo" value="0">
                                                <label for="customRadio2" class="custom-control-label">Inativo</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <label>O valor padrao e ativo mas se quiser criar o setor e ativalo depois tambem pode</label>
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
