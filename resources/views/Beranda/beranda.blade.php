
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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">SIPD (Sistem Informasi Processing Data)</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        SIPD merupakan sistem informasi yang membantu pengguna untuk proses yang mengubah data mentah ke dalam bentuk yang lebih mudah dipahami. Proses ini penting dilakukan karena data mentah sering kali tidak memiliki format yang teratur. Selain itu, data mining juga tidak dapat memproses data mentah, sehingga proses ini sangat penting dilakukan untuk mempermudah proses berikutnya, yakni analisis data.  Proses yang dilakukan mulai dari upload sebuah dokumen --> Tokenizing --> filtering --> stemming --> pemberian bobot --> simmilarity
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          V.1.0
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
          <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                  src="{{asset('/AdminLTE/dist/img/soma.JPEG')}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">I Putu Soma Darmayasa</h3>

                <p class="text-muted text-center">Sistem Analis & UI Designer</p>

                <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>NIM</b> <a class="float-right">1915101017</a>
                  </li>
                  <li class="list-group-item">
                  <b>Panjang</b> <a class="float-right">13 cm</a>
                  </li>
                  <li class="list-group-item">
                  <b>Pesan :</b> <a class="float-right">Carilah Pasangan Sesuai dengan Fetish Anda! karena itu letak kenikmatan anda.</a>
                  </li>
                </ul>
                </ul>

                <a href="https://www.instagram.com/somadarmayasa_/" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                  src="{{asset('/AdminLTE/dist/img/sindu.jpeg')}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Pande Made Sindu Ardinata</h3>

                <p class="text-muted text-center">Back End Programing</p>

                <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>NIM</b> <a class="float-right">1915101024</a>
                  </li>
                  <li class="list-group-item">
                  <b>Panjang</b> <a class="float-right">9 cm</a>
                  </li>
                  <li class="list-group-item">
                  <b>Pesan :</b> <a class="float-right">Katanya cewek lebih suka cowok humoris. Nyatanya mereka suka Jefri Nichol dibanding Cak Lontong.</a>
                  </li>
                </ul>

                <a href="https://www.instagram.com/sindu_ardinata/" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('/AdminLTE/dist/img/rai.jpg')}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Ida Bagus Rai Kusuma Negara</h3>

                <p class="text-muted text-center">Front End Programing</p>

                <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>NIM</b> <a class="float-right">1915101024</a>
                  </li>
                  <li class="list-group-item">
                  <b>Panjang</b> <a class="float-right">15 cm</a>
                  </li>
                  <li class="list-group-item">
                  <b>Pesan :</b> <a class="float-right">Masa Muda Foya-Foya, Tua Kaya Raya, Mati Masuk Surga</a>
                  </li>
                </ul>

                <a href="https://www.instagram.com/gusaderai/" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                  src="{{asset('/AdminLTE/dist/img/andika.jpg')}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Putu Andika Eka Putra</h3>

                <p class="text-muted text-center">Back End Programing</p>

                <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>NIM</b> <a class="float-right">1915101029</a>
                  </li>
                  <li class="list-group-item">
                  <b>Panjang</b> <a class="float-right">5 cm</a>
                  </li>
                  <li class="list-group-item">
                  <b>Pesan :</b> <a class="float-right">Jika tampang mu jelek tapi memiliki hati  baik, tulus, dan bekerja keras, kamu tetap saja jelek</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    @include('Template.footer')
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('Template.script')
</body>
</html>
