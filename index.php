<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>cia2qr</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color: #0085ff;">
            <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);">Cia2QR</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.php" style="color: rgb(255,255,255);">Fichiers</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="upload.html" style="color: rgb(255,255,255);">Upload</a></li>
                    </ul>
            </div>
    </div>
    </nav>
    </div>
    <div class="col-md-12 search-table-col">
        <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing here.."></div><span class="counter pull-right"></span>
        <div class="table-responsive table-bordered table table-hover table-bordered results">
            <table class="table table-bordered table-hover">
                <thead class="bill-header cs">
                    <tr>
                        <th id="trs-hd" class="col-lg-1" style="width:80%">Nom du fichier</th>
                        <th id="trs-hd" class="col-lg-2" style="width:10%">Taille</th>
                        <th id="trs-hd" class="col-lg-2" style="width:10%">Action</th>
                    </tr>
                </thead>
                <tbody>
					<?php include("filesearch.php")?>
                    <!-- <tr>
                        <td>Mettre le php ici</td>
                        <td>India</td>
                        <td><button class="btn btn-success" style="margin-left: 5px;" type="submit"><i class="fa fa-qrcode" style="font-size: 15px;"></i></button></td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>A propos</h3>
                        <ul>
                            <li>Cia2QR est une application libre permettant d'uploader des fichiers et de générer des QR codes pour les télécharger.&nbsp;</li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Liens</h3>
                        <ul>
                            <li><a href="https://www.anemoneprune.tk">Portfolio AnemonePrune</a></li>
                            <li><a href="https://github.com/AnemonePrune/cia2qr">Github</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-center copyright">AnemonePrune © 2019</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>