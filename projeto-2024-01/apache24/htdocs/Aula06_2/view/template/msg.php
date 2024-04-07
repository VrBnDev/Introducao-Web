<?php if ($msg !== null) { ?>
    <!-- Alert area start-->
        <div class="container">
			<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				     <div class="alert alert-<?=$msg['tipo']?> alert-dismissible" role="alert">
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					   <span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> 
					   <?=$msg['texto']?>
                    </div>
                </div>
            </div>
		</div>
    <!-- Alert area End-->
<?php } ?>