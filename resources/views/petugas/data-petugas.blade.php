@extends('layouts.app')
@section('title', 'Data Petugas')
@section('content')
@include('komponen.petugas.navbar')
@include('komponen.petugas.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Petugas
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Data Master</a></li>
      <li class="active">Data Petugas</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        @include('komponen.alert')
        <div class="box">
          <!-- /.box-header -->

          <div class="box-body">

            <table id="example1" class="table table-bordered table-striped text-center">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Lengkap</th>
                  <th>Nomber Telepon</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                @foreach($result as $row)
                <tr>
                  <td>{{ $no }}</td>
                  <td>{{ $row->display_name }}</td>
                  <td>{{ $row->tlp }}</td>
                  <td>
                    <a href="https://api.whatsapp.com/send?phone={{ $row->tlp }}" class="btn btn-success btn-sm"><i class="fa fa-whatsapp"></i></a>
                  </td>
                </tr>
                <?php $no++ ?>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>

    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection()