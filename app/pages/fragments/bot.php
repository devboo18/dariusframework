
<script type="text/javascript" src="<?= APPJS . 'jquery.min.js'?>"></script>
<script type="text/javascript" src="<?= APPJS . 'bootstrap.min.js'?>"></script>
<script type="text/javascript" src="<?= APPJS . 'alertify.min.js'?>"></script>
<script type="text/javascript" src="<?= APPJS . 'tagsinput.min.js'?>"></script>
<script type="text/javascript" src="<?= APPJS . 'tablefilter.js'?>"></script>
<script type="text/javascript" src="<?= APPJS . 'requests.js'?>"></script>
<script type="text/javascript" src="<?= APPJS . 'visual.js'?>"></script>
<!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> -->
<script type="text/javascript">
  
  $(document).ready(function(){

    function hideAndSeek(){

      var checked =  $(this).is(':checked');
      var idC = $(this).data('id');

      if(checked)
        $('#'+idC).removeClass('d-none');
      else
        $('#'+idC).addClass('d-none');

    }
    
    $('.cb-hide-and-seek').on('click',hideAndSeek);

  });


</script>
</body>
</html>