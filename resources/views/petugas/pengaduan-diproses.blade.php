@extends('layouts.app')
@section('title', 'Pengaduan Diproses')
@section('content')
@include('komponen.petugas.navbar')
@include('komponen.petugas.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Pengaduan Diproses
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-newspaper-o"></i> Pengaduan</a></li>
      <li class="active">Pengaduan Diproses</li>
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
                  <th>NIK</th>
                  <th>Judul Laporan</th>
                  <th>Tanggal</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                @foreach($result as $row)
                <tr>
                  <td>{{ $no }}</td>
                  <td>{{ $row->nik }}</td>
                  <td>{{ $row->judul_laporan }}</td>
                  <td>{{ $row->created_at }}</td>
                  <td>
                    <a href="{{ url('/petugas/pengaduan/tanggapi').'/'.$row->id }}" class="btn btn-success btn-sm"><i class="fa fa-paper-plane"></i></a>
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