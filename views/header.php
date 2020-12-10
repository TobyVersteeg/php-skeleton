<header>
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="user-info">
               <?= isset($_SESSION) && isset($_SESSION['user']) ? $_SESSION['user']['full_name'] : "" ?>
            </div>
         </div>
      </div>
   </div>
</header>