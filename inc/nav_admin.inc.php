        <nav class="navbar navbar-expand-lg navbar-dark bg-info" style="min-height: 80px;">
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
                        <a class="nav-link btn btn-info text-light" href="index.php?p=10">
                            Mes Rendez-vous 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-info text-light" href="index.php?p=16">
                            Mes Consultations
                        </a>
                    </li>
                    
                    
                </ul>
                <div class="row my-auto">

                    
                    <div class="dropdown">
                                <button aria-expanded="false" title="Parametres du Compte" style="width: 140px;" aria-haspopup="true" class="btn btn-info dropdown-toggle m-1" data-toggle="dropdown" id="dropdownMenuButton" type="button">
                                   Mon Compte <i class="fas fa-user-circle"></i>
                                </button>
                                <div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
                            <a class="dropdown-item" href="index.php?p=12&matricule=<?php echo $_SESSION['matricule']; ?>" >
                                Modifier <i class="fas fa-edit"></i>
                            </a>
                            <a class="dropdown-item" title="Se Déconnecter et Retourner Vers L'Acceuil." href="index.php?p=11">
                                Decconexion <i class="fas fa-sign-out-alt"></i>
                            </a>
                            </div>
                            </div>
                   

                </div>
            </div>
        </nav>