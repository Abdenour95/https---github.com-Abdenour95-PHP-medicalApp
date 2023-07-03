<?php 

    session_start();

    if($_SESSION['login_user']){
        
        if ($_SESSION['login_user']=="medecin"){
            header("location: index.php?p=8");
        }
        else{
            header("location: index.php?p=10");
        }
    }

?>





        <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow-sm" style="min-height: 80px;">
            <a class="navbar-brand" href="#">
                <h2 style="font-family: logo;" class="my-auto"><span style="color: #333;">Dr. </span>F.Terbouk</h2>
            </a>
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-info text-light m-1" href="index.php">
                            Acceuil <i class="fas fa-home"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-info text-light m-1" href="index.php?p=19">
                            Présentation 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-info text-light m-1" href="index.php?p=20">
                            Contact 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-info text-light m-1" href="index.php?p=9">
                            Inscription 
                        </a>
                    </li>
                </ul>
                <li class="row my-auto">
                    <a title="Se Connecter" style="width: 140px;"  class="nav-link btn btn-info m-1" href="index.php?p=5" >
                                   Se Connecter <i class="fas fa-user-circle"></i>
                    </a>
                </li>
            </div>
        </nav>