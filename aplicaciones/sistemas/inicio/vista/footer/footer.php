    </body>
<?php
if (strpos($_SERVER['REQUEST_URI'], '/administracion') === false) {
?>    
    <footer class="d-flex flex-wrap justify-content-between align-items-center bg_negro_web text_color_balnco py-2 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
            </a>
        <span class="mb-3 mb-md-0 ">&copy; 2024 Piolardo, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
        </ul>
  </footer>
<?php
}else {
?> 

            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">PIOLARDO</a>, Todos lo derechos reservados. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Diseñado por<a href="">James </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php
}
?> 
</html>