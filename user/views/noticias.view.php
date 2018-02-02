<?php
   include 'views/requires/headerDash.php';
?>

    <!-- Main content -->
    <section class="content">
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.11';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
      <!-- Info boxes -->

      <!-- Main row -->
<!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS -->

<div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-info"></i> Información!</h4>
                <p>Intenta no publicar mucho contenido de coffefit en grupos, facebook puede tomarte como un spammer y bloquear la acción de publicar. </p>
              </div>
<!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS -->
<!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS -->
<!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS -->
<!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS -->
<!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS -->
<?php if (empty($posts)): ?>
  <p>No hay post</p>
<?php else: ?>
  <?php foreach ($posts as $post): ?>
    <div class="caja">
      <div class="thumbnail">
        <img src="<?php echo RUTA.'img/post/'.$post['thumb']; ?>" alt="<?php echo $post['titulo']; ?>">
        <div class="caption">
          <a><?php echo $post['titulo']; ?></a>
          <hr>
          <p><?php echo $post['extracto'] ?></p>
          <hr>
          <div class="fb-share-button" data-href="<?php echo RUTA.'redirect.php?id='.$post['id'].'&'.'usuario='.$datos['usuario'].'&'.'provider='.$proveedor['id']; ?>" data-layout="button" data-size="large" data-mobile-iframe="true">
            <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Compartir</a>
          </div>
          <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="<?php echo $post['titulo']; ?>" data-url="<?php echo RUTA.'redirect.php?id='.$post['id'].'&'.'usuario='.$datos['usuario'].'&'.'provider='.$proveedor['id']; ?>" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
           <!-- <div class="fb-share-button" data-href="" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Compartir</a></div> -->
        </div>
      </div>
    </div>
  <?php endforeach; ?>
<?php endif; ?>





<!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS -->
<!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS -->
<!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS -->
<!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS -->
<!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS --><!-- NOTAS -->
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->
<?php
   include 'views/requires/footer.php';
?>
</body>
</html>
