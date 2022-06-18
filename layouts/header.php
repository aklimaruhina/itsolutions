<header>
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/logo-it.png" alt="Logo image">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <?php $category = array("PHP", "laravel9", "Angular 13", "Vue", "React", "Codeigniter");

                ?>
              <ul class="navbar-nav ">
                <?php
                $total_cat = count($category);
                foreach ($category as $key => $value) { 
                  
                  if(!next($category)) {
                    $border = 'style="border-right:0"';
                  }else{
                    $border='';
                  }


                  ?>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#" <?php echo $border?>><?php echo $value; ?></a>
                  </li>
               <?php } ?>
                <!-- <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">PHP</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">laravel9</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Angular 13</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Vue</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">React</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="border-right:0" href="#">Codeigniter</a>
                </li> -->
                <li class="nav-item btn-menu">
                  <a class="nav-link">Laravel Tutorial</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>

    </header>