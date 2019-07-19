<!DOCTYPE html>
<html>
<head>
	<?php include 'head.php' ?>
</head>
<body>
	<?php include 'header.php' ?>
	<section class="container mt-5">
            <div class="row">
                <div class="col-lg-3 sidbarprofil">
                    <div>
                        <img src="https://i.ytimg.com/vi/dIXGrNXQ9V4/maxresdefault.jpg" alt="photo de profil">
                    </div>
                    <div class="text-center mt-5">
                        <p class="text-8">Paul OBIANG</p>
                        <p class="text-8">Numéro CNSS : <span class="color-span1">02590101</span></p>
                    </div>
                    <hr>
                    <div class="text-center text-8 m-3">
                        <a href="#"><i class="fas fa-power-off mr-3 imaurio"></i><span>Se deconnecter</span></a>
                    </div>

                    
                </div>
                <div class="col-lg-9 ">
                    <div class="informations">
                        <div class="informations1">
                        Vos informations
                        </div>
                        <div class="row p-4">
                            <div class="col-lg-6"><i class="far fa-calendar mr-3 imaurio"></i><span>Fonction actuelle </span><br><span class="color-span">Enseignant</span></div>
                            <div class="col-lg-6"><i class="fas fa-envelope mr-3 imaurio"></i><span>Adresse mail</span> <br><span class="color-span">paulobiang@gmail.com</span>  </div>
                        </div>
                        <div class="row p-4">
                            <div class="col-lg-6"><i class="fas fa-map-marker-alt mr-3 imaurio"></i><span>Lieu de residence</span> <br><span class="color-span">Gabon-Libreville</span></div>
                            <div class="col-lg-6"><i class="fa fa-info-circle mr-3 imaurio"></i><span>Numero de phone</span> <br><span class="color-span">04 78 74 76</span>  </div>
                        </div>
                        <div></div>
                    </div>
                    <div class="informations mt-5">
                        <div class="informations1">
                        Notifications(1)
                        </div>
                        <div>
                            <div id="accordion">
                              <div>
                                <div class="card" id="headingOne">
                                  <h5 class="p-2">
                                    <i class="fas fa-angle-right"></i>
                                    <button class="btn btn-link notif" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                      Notification 1 (nouveau)
                                    </button>
                                    <span class="color-span ml-2">il y'a 15 minutes</span>
                                  </h5>
                                  
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                  <div class="ml-2 p-4">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                                  </div>
                                </div>
                              </div>
                              <div>
                                <div class="card" id="headingTwo">
                                  <h5 class="p-2">
                                    <i class="fas fa-angle-right"></i>
                                    <button class="btn btn-link collapsed notif" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Notification 2
                                    </button>
                                    <span class="color-span ml-2">hier 22h50</span>
                                  </h5>
                                  
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                  <div class="ml-2 p-4">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                                  </div>
                                </div>
                              </div>
                              <div>
                                <div class="card" id="headingThree">
                                  <h5 class="p-2">
                                    <i class="fas fa-angle-right"></i>
                                    <button class="btn btn-link collapsed notif" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      Notification 3
                                    </button>
                                    <span class="color-span ml-2">lundi 20 juin -20h30</span>
                                  </h5>
                                  
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                  <div class="ml-2 p-4">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <a href="#"><div class="informations1 mt-5 mb-5">
                        Plus d'informations +
                    </div></a>
                </div>
            </div>
        </section>




	<?php include 'footer.php' ?>
	<?php include 'script.php' ?>
</body>
</html>