
<!DOCTYPE html>
<html lang="en">
<head>
  @include('Template.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  @include('Template.preloader')

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    @include('Template.sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">DATA PROCESSING</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
              <li class="breadcrumb-item active">Data Processing</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="card">
        
              <!-- /.card-header -->
              <div class="card-body" >
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  

                  

                  
                  
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Kata</th>
                    <th>tokenizing</th>
                    <th>filtering</th>
                    <th>Stemming</th>
                    <th>Bobot</th>
                    <th>Similarity</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            
            <table>
              <tr>
                    <th>Kata</th>
                    <th>TF Doc1</th>
                    <th>TF Doc1</th>
                    <th>IDF</th>
                    <th>TFIDF DOC1</th>
                    <th>TFIDF DOC2</th>
                  </tr>
                  </thead>
                  <tbody>

                  <!-- show termList, tf, idf-->
                  @foreach ($termList as $term)
                  <tr>
                    <td>{{$term}}</td>
                    <td>{{$tf[$term][0]}}</td>
                    <td>{{$tf[$term][1]}}</td>
                    <td>{{$idf[$term]}}</td>
                    <td>{{$tfidf[$term][0]}}</td>
                    <td>{{$tfidf[$term][1]}}</td>
                  </tr>
                  @endforeach
                  </table>  
@include('Template.script')
</body>
</html>
