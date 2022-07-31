<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halo kawan-kawanku!</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Load -->
  <link rel="stylesheet" href="../../plugins/load/style.css">
</head>
<body class="hold-transition layout-top-nav">
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery/jquery-3.5.1.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Sweet Alert -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<?php
  if(@$_SESSION['sukses']){ ?>
    <script>
      Swal.fire({
        title: '<?php echo $_SESSION['sukses']; ?>',
        text: "Afa cantikkan we?gausa boong kelen!",
        icon: 'info',
        showCancelButton: true ,
        confirmButtonColor: '#A93226 ',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Iya loh, cantik kali memang kau fa!',
        cancelButtonText: 'Iya fa'
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
            icon:'info',
            title: 'udah kelar magang kelen?',
            showCancelButton: false ,
            confirmButtonColor: '#A93226 ',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Iya nihhhhh'
            }).then((result2)=> {
                if(result2.isConfirmed){
                    Swal.fire({
                    icon:'error',
                    title: 'ko cepat kali kelen selesainya!',
                    input: 'text',
                    confirmButtonColor: '#A93226 '
                    }).then((result3)=> {
                        if(result3.isConfirmed){
                            Swal.fire({
                            icon:'info',
                            title: 'yauda liat ini aja mau ga?',
                            confirmButtonColor: '#A93226 ',
                            confirmButtonText: 'apaa tu'
                            }).then((result4)=>{
                                if(result4.isConfirmed){
                                    Swal.fire({
                                    title: 'Mari merindu!',
                                    text: 'Naik kereta bareng pertama kali ga si ini!',
                                    imageUrl: 'dist/img/kereta.jpeg',
                                    imageWidth: 400,
                                    imageHeight: 200,
                                    imageAlt: '',
                                    confirmButtonColor: '#A93226 ',
                                    confirmButtonText: 'iyaaaa'
                                    }).then((result5)=>{
                                        if(result5.isConfirmed){
                                            Swal.fire({
                                            title: 'Mari merindu!',
                                            text: 'Main bareng lagi yuk kapan-kapann',
                                            imageUrl: 'dist/img/badmin.jpeg',
                                            imageWidth: 400,
                                            imageHeight: 200,
                                            imageAlt: '',
                                            confirmButtonColor: '#A93226 ',
                                            confirmButtonText: 'iyaaaa'
                                            }).then((result6)=>{
                                                if(result6.isConfirmed){
                                                    Swal.fire({
                                                    title: 'Jangan asik sama HP!',
                                                    text: 'kek orang sibuk kali kelen we hahaha',
                                                    imageUrl: 'dist/img/sibuk.jpeg',
                                                    imageWidth: 400,
                                                    imageHeight: 200,
                                                    imageAlt: '',
                                                    confirmButtonColor: '#A93226 ',
                                                    confirmButtonText: 'iyaaaa'
                                                    }).then((result6)=>{
                                                        if(result6.isConfirmed){
                                                            Swal.fire({
                                                            title: 'Mari merindu!',
                                                            text: 'Terima kasih ya we, udah buat aku pemalas naik tangga wkwkkw',
                                                            imageUrl: 'dist/img/lift.jpeg',
                                                            imageWidth: 400,
                                                            imageHeight: 200,
                                                            imageAlt: '',
                                                            confirmButtonColor: '#A93226 ',
                                                            confirmButtonText: 'haha'
                                                            }).then((result7)=>{
                                                                if(result6.isConfirmed){
                                                                    Swal.fire({
                                                                    title: 'Hati-hati dijalan ya we. Sukses seminar dan sidangnya nanti!',
                                                                    text: 'Jangan sombong samaku, kalau kangen chat aja walau agak lama aku balasnya tapi pasti kubalas kok. Aku senang kali kenal kelen walau gaada 2 bulan bersama. Kalau aku main ke medan, atau kelen ke jakarta lagi. KABARIN!! ',
                                                                    confirmButtonColor: '#A93226 ',
                                                                    confirmButtonText: 'BYE MISS U'
                                                                    }).then((result7)=>{
                                                                        if(result6.isConfirmed){
                                                                            window.location.href = 'index.php';
                                                                        }
                                                                    })
                                                                }
                                                            })
                                                        }
                                                    })
                                                }
                                            })
                                        }
                                    })
                                }
                            })
                        }
                    })
                }
            })
        }else{
            Swal.fire({
            icon:'error',
            title: 'Ga ikhlas!',
            showCancelButton: false ,
            confirmButtonColor: '#A93226 ',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ULANG!!!!!!!'
            }).then((result8)=> {
                if(result8.isConfirmed){
                    window.location.href = 'index.php';
                }
            })
        }
      })
    </script>
    <!-- menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
  <?php 
  unset($_SESSION['sukses']); 
  }
?>
</body>
</html>