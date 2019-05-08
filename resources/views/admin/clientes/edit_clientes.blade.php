@extends('layouts.adminlayout.admin_design')
@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Editar Cliente</h4>
                        <h6 class="card-subtitle"></h6>
                        <form enctype="multipart/form-data"  class="form-horizontal m-t-20" id="loginform" method="post" action="{{url('/admin/edit_clientes/'.$clienteDetalles->id)}}">{{ csrf_field() }}
                            <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nombre" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $clienteDetalles->nombre }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="correo" class="col-sm-3 text-right control-label col-form-label">Correo</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="correo" name="correo" value="{{ $clienteDetalles->correo }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sexo" class="col-sm-3 text-right control-label col-form-label">Sexo</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="sexo" name="sexo" value="{{ $clienteDetalles->sexo }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="ocupacion" class="col-sm-3 text-right control-label col-form-label">Ocupación</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="ocupacion" name="ocupacion" value="{{ $clienteDetalles->ocupacion }}" required>
                                        </div>
                                    </div>
                                </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-warning" type="submit">Editar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
        </div> 

@endsection