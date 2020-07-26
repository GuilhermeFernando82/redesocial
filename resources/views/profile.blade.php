@extends ('layouts.lyaoutside')

@section('content')
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Editar Perfil</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Editar Perfil</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
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
                <!-- Row -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                    @if (session('alert3'))
                                    <div class="alert alert-success">
                                        {{ session('alert3') }} 
                                    </div>
                                    @endif
                                    @foreach ($users as $i)
                                <form method="POST" action="">
                                            {{ csrf_field() }} {!! method_field('PUT') !!} 
                                            <input type="radio" name="picture" id="1" value="http://cybercodeforum.herokuapp.com/img/perfil1.jpg">
                                            <img src="http://cybercodeforum.herokuapp.com/img/perfil1.jpg" alt="users" class="rounded-circle" width="40" />
                                            <input type="radio" name="picture" id="1" value="http://cybercodeforum.herokuapp.com/img/perfil2.jpg">
                                            <img src="http://cybercodeforum.herokuapp.com/img/perfil2.jpg" alt="users" class="rounded-circle" width="40" />
                                            <input type="radio" name="picture" id="1" value="http://cybercodeforum.herokuapp.com/img/perfil3.jpg">
                                            <img src="http://cybercodeforum.herokuapp.com/img/perfil3.jpg" alt="users" class="rounded-circle" width="40" />
                                            <input type="submit" value="Mudar">
                                </form>
                                <form method="POST" action="{{ route('profile.update', auth()->user()->id) }} " enctype="multipart/form-data" class="form-horizontal form-material">
                                    {{ csrf_field() }}  {!! method_field('PUT') !!}
                                   
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-12">Name</label>
                                            <div class="col-md-12">
                                                <input type="text" name="name" value="{{$i->name}}" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Email</label>
                                            <div class="col-md-12">
                                                <input type="text" name="email" value="{{$i->email}}"  class="form-control form-control-line">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-12">Senha</label>
                                            <div class="col-md-12">
                                                <input type="password" name="password" placeholder="Senha" class="form-control form-control-line">
                                            </div>
                                        </div>
                                    </div>                                         
                                    @endforeach
                                    <div class="row d-flex justify-content-center">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success">Atualizar Dados</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
@endsection