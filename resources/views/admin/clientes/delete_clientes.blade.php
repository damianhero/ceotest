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
                        <h4 class="card-title">Eliminar Cliente</h4>
                        <h6 class="card-subtitle">¿Seguro que desea eliminar esta curl_multi_getcontent?</h6>
                        <form class="form-horizontal m-t-20" id="loginform" method="post" action="{{url('/admin/delete_clientes/'.$clienteDetalles->id)}}">{{ csrf_field() }}
                            <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nombre" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $clienteDetalles->nombre }}" disabled required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="correo" class="col-sm-3 text-right control-label col-form-label">Correo</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="correo" name="correo" value="{{ $clienteDetalles->correo }}" disabled required>
                                        </div>
                                    </div>
                                </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-danger" type="submit">Eliminar</button>
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