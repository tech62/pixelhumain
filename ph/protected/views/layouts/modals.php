<?php 
if($this->secure)
	if($this->hasSocial)
		$this->renderPartial('application.views.layouts.modals.loginPwdFormNoSocial');
	else
    	$this->renderPartial('application.views.layouts.modals.loginPwdForm');
else
    $this->renderPartial('application.views.layouts.modals.loginForm');
?>
<?php $this->renderPartial('application.views.layouts.modals.participer',array( "account" => $account));?>
<?php //$this->renderPartial('application.views.layouts.modals.association',array( "account" => $account) );?>
<?php $this->renderPartial('application.views.layouts.modals.entreprise');?>
<?php $this->renderPartial('application.views.layouts.modals.invitation');?>
<?php $this->renderPartial('application.views.layouts.modals.boiteIdee');?>
<?php $this->renderPartial('application.views.layouts.modals.flashInfo');?>



<script type="text/javascript">
initT['modalsInit'] = function(){
    
    
};
function showEvent(id){
	$("#"+id).click(function(){
    	if($("#"+id).prop("checked"))
    		$("#"+id+"What").removeClass("hidden");
    	else
    		$("#"+id+"What").addClass("hidden");
    });
}
</script>