
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
                    <th>Kata</th>
                    <th>TF D1</th>
                    <th>TF D2</th>
                    <th>IDF</th>
                    <th>TF-IDF D1</th>
                    <th>TF-IDF D1</th>
    
                  </tr>
                  
                  </thead>
                  <tbody>
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
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Kata</th>
                    <th>TF D1</th>
                    <th>TF D2</th>
                    <th>IDF</th>
                    <th>TF-IDF D1</th>
                    <th>TF-IDF D1</th>
    
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->

            </div>
    </section>


    <section class="content">

    <!-- name section -->
    <H1 class="">Hasil Preprocessing</H1>

    <div class="row">
              <!-- split row into 2 row -->
              <div class="col-md-3">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">tokenization document 1</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>D1 tokenization</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($document1Tokenize as $term)
                      <tr>
                        <td>{{$term}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Kata</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

              </div>

              <div class="col-md-3">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Filtering document 1</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>D1 Filtered</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($document1Filter as $term)
                      <tr>
                        <td>{{$term}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Kata</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

              </div>

              <div class="col-md-3">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Stemming document 1</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>D1 stemmed</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($document1Stem as $term)
                      <tr>
                        <td>{{$term}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Kata</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

              </div>

              <div class="col-md-3">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">weighting document 1</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>D1 weighting</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($termList as $term)
                      <tr>
                        <td>{{$tfidf[$term][0]}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Kata</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!-- /.row -->  



          <div class="row">

          <div class="col-md-3">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">tokenization document 2</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>D2 tokenization</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($document2Tokenize as $term)
                      <tr>
                        <td>{{$term}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Kata</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

              </div>

              <div class="col-md-3">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Filtering document 2</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>D2 Filtered</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($document2Filter as $term)
                      <tr>
                        <td>{{$term}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Kata</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

              </div>

              <div class="col-md-3">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Stemming document 2</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>D2 stemmed</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($document2Stem as $term)
                      <tr>
                        <td>{{$term}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Kata</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

              </div>

              <div class="col-md-3">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">weighting document 1</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>D2 weighting</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($termList as $term)
                      <tr>
                        <td>{{$tfidf[$term][1]}}</td>
                      </tr>
                      @endforeach
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Kata</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>


          </div>





    </section>
          
              
@include('Template.script')
</body>
</html>
