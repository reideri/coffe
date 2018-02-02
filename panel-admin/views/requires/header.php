<header id="header">
    <!--logo start-->
    <div class="brand">
        <a href="index.html" class="logo"><span>Coffefit</span></a>
    </div>
    <!--logo end-->
    <div class="toggle-navigation toggle-left">
        <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="Toggle Navigation">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div class="user-nav">
        <ul>
          <li class="profile-photo">
            <img src="assets/img/avatar.png" alt="" class="img-circle">
          </li>
          <li class="dropdown settings">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <?php echo $user_coffefit['administrador']; ?> <i class="fa fa-angle-down"></i>
            </a>
                <ul class="dropdown-menu animated fadeInDown">
                    <li>
                        <a href="#"><i class="fa fa-user"></i> Perfil</a>
                    </li>
                    <li>
                        <a href="log-out.php"><i class="fa fa-power-off"></i> Salir</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</header>
