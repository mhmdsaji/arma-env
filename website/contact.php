<!DOCTYPE html>
<html lang="en">

<head>
    <?php $pageName = "Contact us | ARMA Environnement" ?>
    <?php include 'layout/head.php';?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

    <!--map sec-->
    <div class="main">
        <div class="row no-gutters">
            <!-- Side nav -->
            <?php include 'layout/sideNav.php';?>
            <!-- End side nav -->
            <div id="page-wrapper">
                <div class="overlay">
                    <div class="overlay-inner">
                        <img src="assets/img/overlays/1.jpg" alt="background">
                        <img src="assets/img/overlays/2.jpg" alt="background">
                        <img src="assets/img/overlays/3.jpg" alt="background">
                        <img src="assets/img/overlays/4.jpg" alt="background">
                        <img src="assets/img/overlays/7.jpg" alt="background">
                        <img src="assets/img/overlays/10.jpg" alt="background">
                    </div>
                    <div class="overlay-inner bg-secondary"></div>
                </div>
                <div class="content-area">
                    <div class="logo">
                        <a href="index.html"><img src="../assets/img/logo-light.png" alt="ARMA Environnement"></a>
                    </div>
                    <div class="page row no-gutters">
                        <div class="col-md-10 offset-md-1">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">ARMA Environnement</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contactez nous</li>
                                </ol>
                            </nav>
                            <h1 class="page-title">Contactez nous</h1>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="text-bloc content-wrapper">
                                        <h2>Lorem ipsum</h2>
                                        <p>Lorem ipsum dolor sit amet et dolore magna.</p>
                                        <form>
                                        <div class="form-group">
                                                <label for="name">Nom</label>
                                                <input type="text" class="form-control" id="name" placeholder="Nom">
                                            </div>
                                            <div class="form-group">
                                                <label for="surname">Prénom</label>
                                                <input type="text" class="form-control" id="surname" placeholder="Prénom">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Téléphone</label>
                                                <input type="tel" class="form-control" id="phone" placeholder="Téléphone">
                                            </div>
                                            <div class="form-group">
                                                <label for="cv">Téléphone</label>
                                                <input type="file" class="form-control-file" id="cv" placeholder="CV">
                                            </div>
                                            <div class="form-group">
                                                <label for="message">Message:</label>
                                                <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn blue-btn">Envoyer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="text-bloc content-wrapper">
                                        <p class="rites">
                                            <b>Tel.</b> +212 (0) 5 37 63 55 56 <br>
                                            <b>Mail.</b> <a href="mailto:contact@arma.ma">contact@arma.ma</a> <br>
                                            <b>Address.</b> Avenue Mehdi Ben Barka <br>Lot Soumia, Lot N°5 Souissi, Rabat, Maroc
                                        </p>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'layout/footer.php';?>
</body>

</html>