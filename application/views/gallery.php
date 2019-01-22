<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?=base_url()?>/assets/images/sum.jpg" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primus Nathan</div>
                    <div class="email">primus_nathan_26rpl@student.smktelkom-mlg.sch.id</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="<?=base_url()?>">
                            <i class="material-icons">home</i>
                            <span>HOME</span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?=base_url('index.php/user/data_diri')?>">
                            <i class="material-icons">person</i>
                            <span>Data Diri</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?=base_url('index.php/user/gallery')?>">
                        <i class="material-icons">photo_library</i>
                            <span>Gallery</span>
                        </a>
                    </li>  
                    <li>
                        <a href="<?=base_url('index.php/user/contact')?>">
                        <i class="material-icons">local_phone</i>
                            <span>Contact</span>
                        </a>
                    </li> 
                    <li>
                        <a href="<?=base_url('index.php/user/event')?>">
                        <i class="material-icons">date_range</i>
                            <span>Event</span>
                        </a>
                    </li> 
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 - 2019 <a href="javascript:void(0);">Primus Nathan</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img  src="<?=base_url('assets/images/satu.jpg')?>" alt="Chania">
      <div class="carousel-caption" style="color:black;">
        <h3>Sepeda Balap</h3>
        <p>Rasakan kecepatan tinggi</p>
      </div>
    </div>

    <div class="item">
      <img  src="<?=base_url('assets/images/dua.jpg')?>" alt="Chicago">
      <div class="carousel-caption" style="color:black;">
        <h3>Sepeda Gunung</h3>
        <p>Lorem ipsum</p>
      </div>
    </div>

    <div class="item">
      <img  src="<?=base_url('assets/images/tiga.jpg')?>" alt="New York">
      <div class="carousel-caption" style="color:black;">
        <h3>Sepeda BMX</h3>
        <p>Lorem ipsum</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>