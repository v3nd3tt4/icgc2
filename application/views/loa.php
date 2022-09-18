<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>LOA</title>
  </head>
  <body>
     <div class="container">
         <div class="row">
             <div class="col-md-2">
                 <img src="<?=base_url()?>assets/logoicgc.png" width="150px"/>
             </div>
             <div class="col-md-10">
                 <br/><br/>
                 <h3>International Conference Guidance Counseling (ICGC)</h3>
             </div>
         </div>
         <hr/>
         <div class="row">
            <div class="col-md-12">
                <center><b>Letter of Acceptance</b></center>
            </div>
         </div>
         <br/><br/>
         <div class="row">
             <div class="col-md-12">
                <p>Dear authors: <b><?=$row->row()->nama_pendaftar?></b></p>
                <p>
                We are pleased to inform you that your abtract, entitled:
                </p>
                <br/>
                <p>
                    <b><i><?=$row->row()->tittle?></i></b>
                </p>
                <br/>
                <p>
                has been reviewed to be presented as ICGC conference to be held on 11 - 13 April 2020 in Bandar Lampung, Indonesia
                </p>
                
                <p>
                Please submit your full paper and make the payment for registration fee before the deadline, visit our website for more information.
                </p>
                
                <p>
                    Thank You
                </p>
                
                <p>
                    Best Regards,
                </p>
                <br/><br/><br/>
                
                <p>
                    Assoc.Prof.Andi Thahir, S.Psi.,M.A.,Ed.D
                </p>
                
                
             </div>
         </div>
     </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>