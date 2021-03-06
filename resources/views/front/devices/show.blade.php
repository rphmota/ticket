@extends('front.master.home')
@section('folhas')
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Detalhes do Equipamento</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{'/home'}}">Home</a></li>
                            <li class="breadcrumb-item active">Equipamentos</li>
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
                                <h3 class="card-title">Detalhes do Equipamento</h3>
                            </div>
                            <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">Nome</label>
                                        <div class="col-sm-5">
                                            <h4>{{$device->name}}</h4>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">Decrição</label>
                                        <div class="col-sm-5">
                                            <h4>{{$device->description}}</h4>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="endereco" class="col-sm-2 col-form-label">Tombo</label>
                                        <div class="col-sm-5">
                                            <h4>{{$device->tombo}}</h4>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">Inserido por</label>
                                        <div class="col-sm-5">
                                            <h4>{{$usuarioInsert->name ?? 'Inserido por Admin'}}</h4>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="descricao" class="col-sm-2 col-form-label">Criado em</label>
                                        <div class="col-sm-5">
                                            <h4>{{$device->created_at->format('d M Y - H:i:s') }}</h4>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="descricao" class="col-sm-2 col-form-label">Ultima Atualização</label>
                                        <div class="col-sm-5">
                                            <h4>{{$device->updated_at->format('d M Y - H:i:s')}}</h4>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <a href="{{route('devices.index')}}">
                                        <button type="button" class="btn btn-info">
                                            <i class="fas fa-long-arrow-alt-left ml-1"></i>
                                        </button>
                                    </a>
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
