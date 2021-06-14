@extends('layout.master')

@section('header')
    Daftar Petani
@endsection

@section('content')
<section class="content">
<div class="container-fluid">
                  <section class="content">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-12">
                              <div class="card">
                                 <div class="card-header">
                                    <h3 class="card-title">Riwayat Lahan</h3>
                                 </div>
                                 <!-- /.card-header -->
                                 <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                       <thead>
                                          <tr>
                                             <th>Tanggal</th>
                                             <th>kelembapan</th>
                                             <th>PH</th>
                                             <th>Keterangan</th>
                                             <th></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>1/1/2020</td>
                                             <td>80%</td>
                                             <td>4</td>
                                             <td>kondisi lahan baik</td>
                                             <td><a href="#" class="text-dark"><i class="far fa-edit"></i></a>
                                                 <a href="#"  class="text-dark"><i class="fas fa-trash-alt"></i></a></td>
                                          </tr>
                                          <tr>
                                             <td>1/1/2020</td>
                                             <td>80%</td>
                                             <td>4</td>
                                             <td>kondisi lahan baik</td>
                                             <td><a href="#" class="text-dark"><i class="far fa-edit"></i></a>
                                                 <a href="#"  class="text-dark"><i class="fas fa-trash-alt"></i></a></td>
                                          </tr>
                                          <tr>
                                             <td>1/1/2020</td>
                                             <td>80%</td>
                                             <td>4</td>
                                             <td>kondisi lahan baik</td>
                                             <td><a href="#" class="text-dark"><i class="far fa-edit"></i></a>
                                                 <a href="#"  class="text-dark"><i class="fas fa-trash-alt"></i></a></td>
                                          </tr>
                                          <tr>
                                             <td>1/1/2020</td>
                                             <td>80%</td>
                                             <td>4</td>
                                             <td>kondisi lahan baik</td>
                                             <td><a href="#" class="text-dark"><i class="far fa-edit"></i></a>
                                                 <a href="#"  class="text-dark"><i class="fas fa-trash-alt"></i></a></td>
                                          </tr>
                                          <tr>
                                             <td>1/1/2020</td>
                                             <td>80%</td>
                                             <td>4</td>
                                             <td>kondisi lahan baik</td>
                                             <td><a href="#" class="text-dark"><i class="far fa-edit"></i></a>
                                                 <a href="#"  class="text-dark"><i class="fas fa-trash-alt"></i></a></td>
                                          </tr>
                                       </tbody>
                                       <tfoot>
                                          <tr>
                                          <th>Tanggal</th>
                                             <th>kelembapan</th>
                                             <th>PH</th>
                                             <th>Keterangan</th>
                                             <th></th>
                                          </tr>
                                       </tfoot>
                                    </table>
                                 </div>
                                 <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                           </div>
                           <!-- /.col -->
                        </div>
                        <!-- /.row -->
                     </div>
                     <!-- /.container-fluid -->
                     </section>
                  </section>
                  <!-- /.content -->
                   <!-- jQuery -->
         
      <script src="{{asset('public/asset/plugins/jquery/jquery.min.js')}}"></script>
      <!-- Bootstrap 4 -->
      <script src="{{asset('public/asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- DataTables  & Plugins -->
      <script src="{{asset('public/asset/plugins/datatables/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/jszip/jszip.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/pdfmake/pdfmake.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/pdfmake/vfs_fonts.js')}}"></script>
      <script src="{{asset('public/asset/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
      <script src="{{asset('public/asset/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

      <!-- js dari data table -->
      <script>
         $('#example2').DataTable({
           "paging": true,
           "lengthChange": false,
           "searching": true,
           "ordering": true,
           "info": true,
           "autoWidth": false,
           "responsive": true,
         });
      </script>

@endsection