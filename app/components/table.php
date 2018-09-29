<table class="table table-bordered table-hover" id="visual-table">
    
</table> 

<script>
    window.onload = function(){
        Xr.action('user/all').get().then(function(data){
            $v.component('#visual-table').setJSON(data).table();
        });
    };

</script>