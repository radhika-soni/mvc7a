<!-- <h3>view/product/index opened<h3> -->
<div class = "container border mb-4 mt-4">
    <<div class="row">
        <?php
        foreach($data as $info){?>
        
        <div class="col-4">
            Username : <?=$info['username'];?>
        </div>
        <?php}?>
    </div>
</div>