<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <!-- cdn bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <!-- https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

        <section>
            <div class="container p-5">
                <!-- For demo purpose -->
                <div class="row mb-5 text-center text-white">
                <div class="col-lg-10 mx-auto">
                    <h1 class="display-4">File upload button </h1>
                    <p class="lead"></p>
                </div>
                </div>
                <!-- End -->


                <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="p-5 bg-white shadow rounded-lg"><img src="https://bootstrapious.com/i/snippets/sn-file-upload/img.png" alt="" width="200" class="d-block mx-auto mb-4 rounded-pill">
                    <h4 class="text-center mb-4">Upload your file</h4>

                    <form action="/upload" method="POST" enctype="multipart/form-data">
                    @csrf        
                            <div class="custom-file overflow-hidden rounded-pill mb-5">
                                <input id="customFile" type="file" name="file1" class="custom-file-input rounded-pill">
                                <label for="customFile" class="custom-file-label rounded-pill">Masukan File 1</label>
                            </div>

                            <div class="custom-file overflow-hidden rounded-pill mb-5">
                                <input id="customFile" type="file" name="file2" class="custom-file-input rounded-pill">
                                <label for="customFile" class="custom-file-label rounded-pill">Masukan file 2</label>
                            </div>
                            <!-- End -->

                            <!-- Custom bootstrap upload file-->
                            
                            <button type="submit" class="file-upload btn btn-primary btn-block rounded-pill shadow">UPLOAD</button>    
                            
                            <!-- End -->
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </section>
    
</body>
</html>