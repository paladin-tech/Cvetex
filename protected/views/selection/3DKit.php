<form name="frmKit" id="frmKit">
	<input type="hidden" id="kitColor1" value="1">
	<input type="hidden" id="kitColor2" value="0">
	<input type="hidden" id="kitColor3" value="0">
	<input type="hidden" id="kitColor4" value="0">
	<input type="hidden" id="kitColor5" value="0">
	<input type="hidden" id="currentColor" value="1">
	<input type="hidden" id="side" value="front">
<div class="MainContentContainer1">
	<div class="infoContainer" style="padding-top: 6px;">
		<div class="mainTitle" style="padding-bottom: 3px;">C O L O R</div>
		<div class="infoTxtContainer">
			<div class="infoNavActive switchColor" switchColor="1">CLR1</div>
			<div class="infoNav switchColor" switchColor="2">CLR2</div>
			<div class="infoNav switchColor" switchColor="3">CLR3</div>
			<div class="infoNav switchColor" switchColor="4">CLR4</div>
			<div class="infoNav switchColor" switchColor="5">CLR5</div>
			<div class="infoNav">FONT</div>
			<div class="colorBox" colorValue="0" id="White">c</div>
			<div class="colorBox" colorValue="1" style="background: #231f20;">c</div>
			<div class="colorBox" colorValue="2" style="background: #d2ac67;">c</div>
			<div class="colorBox" colorValue="3" style="background: #413091;">c</div>
			<div class="colorBox" colorValue="4" style="background: #20409a;">c</div>
			<div class="colorBox" colorValue="5" style="background: #fdb813;">c</div>
			<div class="colorBox" colorValue="6" style="background: #ffcb08;">c</div>
			<div class="colorBox" colorValue="7" style="background: #ffde00;">c</div>
			<div class="colorBox" colorValue="8" style="background: #fff200;">c</div>
			<div class="colorBox" colorValue="9" style="background: #e51a2e;">c</div>
			<div class="colorBox" colorValue="10" style="background: #ed1c24;">c</div>
			<div class="colorBox" colorValue="11" style="background: #940221;">c</div>
			<div class="colorBox" colorValue="12" style="background: #f26846;">c</div>
			<div class="colorBox" colorValue="13" style="background: #00205b;">c</div>
			<div class="colorBox" colorValue="14" style="background: #022a68;">c</div>
			<div class="colorBox" colorValue="15" style="background: #00529c;">c</div>
			<div class="colorBox" colorValue="16" style="background: #0061aa;">c</div>
			<div class="colorBox" colorValue="17" style="background: #004892;">c</div>
			<div class="colorBox" colorValue="18" style="background: #56afe1;">c</div>
			<div class="colorBox" colorValue="19" style="background: #75bce7;">c</div>
			<div class="colorBox" colorValue="20" style="background: #fad5e5;">c</div>
			<div class="colorBox" colorValue="21" style="background: #00623c;">c</div>
			<div class="colorBox" colorValue="22" style="background: #007147;">c</div>
			<div class="colorBox" colorValue="23" style="background: #00844b;">c</div>
			<div class="colorBox" colorValue="24" style="background: #00ad63;">c</div>
			<div class="colorBox" colorValue="25" style="background: #8dc748;">c</div>
			<div class="colorBox" colorValue="26" style="background: #818285;">c</div>
			<div class="colorBox" colorValue="27" style="background: #a7a9ac;">c</div>
			<div class="colorBox" colorValue="28" style="background: #c7c8ca;">c</div>
			<div class="colorBox" colorValue="29" style="background: #c7c8ca; visibility: hidden;">c</div>
			<div class="roundSelectField" id="activeRound">O</div>
			<div class="infoNav2">SINGLE-FACE</div>
			<div class="roundSelectField">O</div>
			<div class="infoNav2" style="padding-right: 0px;">DOUBLE-FACE</div>
			<div class="infoNav" id="switchFront">FRONT</div>
			<div class="infoNav" id="switchBack" style="margin-left: 26px">BACK</div>
			<div class="infoNav" style="margin-left: 26px">SIZE CHART</div>
		</div>
	</div>
	<div class="MainContent2">
		<div class="sportThumbnailsContainer2">
			<div class="mainTitle2">CLICK ON IMAGE TO VIEW LARGE</div>
			<div class="sportThumbnailsTile">
				<div class="sportColorImage">
					<div id="LB-Front">
						<a href="imagesKit/target-<?= $selection->articleId?>-1-0-0-0-0-front-big.jpg" id="3DKitImageLightboxFront" rel="lightbox" title="3D Kit"><img id="3DKitImageFront" src="imagesKit/target-<?= $selection->articleId?>-1-0-0-0-0-front.jpg"></a>
					</div>
					<div id="LB-Back" style="display: none">
						<a href="imagesKit/target-<?= $selection->articleId?>-1-0-0-0-0-rear-big.jpg" id="3DKitImageLightboxBack" rel="lightbox" title="3D Kit"><img id="3DKitImageBack" src="imagesKit/target-<?= $selection->articleId?>-1-0-0-0-0-rear.jpg"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="infoContainer" style="padding-top: 6px;">
		<div class="mainTitle" style="padding-bottom: 3px;">D E S C R I P T I O N</div>
		<div class="infoTxtContainer">
			<div class="infoTxt" style="height: 285px;">
				<?= $selection->type ?><br><br>
				Collar: <?= $selection->collarType ?><br><br>
				Material technical characteristics: <?= $selection->techCharacteristics ?>
			</div>
			<div class="infoNav">PREVIOUS STEP</div>
			<div class="infoNav" style="margin-left: 44px" onclick="location.href = '<?= $this->createUrl('order/create', array('articleId' => $selection->articleId)) ?>&colors='+$('#kitColor1').val()+':'+$('#kitColor2').val()+':'+$('#kitColor3').val()+':'+$('#kitColor4').val()+':'+$('#kitColor5').val()">NEXT STEP</div>
			<div class="infoNav" style="margin-left: 60px">HOW TO ORDER</div>
		</div>
	</div>
	<div style="clear:both"></div>
</div>
</form>
<script>
$(document).ready(function() {
	$('.switchColor').click(function() {
		$('.switchColor').removeClass('infoNavActive').addClass('infoNav');
		$(this).removeClass('infoNav').addClass('infoNavActive');
		$('#currentColor').val($(this).attr('switchColor'));
	});
	$('.colorBox').click(function() {
		var currentColor = '#kitColor'+($('#currentColor').val());
		$(currentColor).val($(this).attr('colorValue'));
		$.ajax({
			url: '<?= $this->createUrl('selection/3DKitAjax') ?>',
			dataType: 'json',
			type: 'POST',
			data: {
				articleId: '<?= $selection->articleId ?>',
				sportId: '<?= $selection->sportId ?>',
				color1: $('#kitColor1').val(),
				color2: $('#kitColor2').val(),
				color3: $('#kitColor3').val(),
				color4: $('#kitColor4').val(),
				color5: $('#kitColor5').val()
			},
			success: function(data) {
				$('#3DKitImageFront').attr('src', 'imagesKit/target-<?= $selection->articleId?>-'+$('#kitColor1').val()+'-'+$('#kitColor2').val()+'-'+$('#kitColor3').val()+'-'+$('#kitColor4').val()+'-'+$('#kitColor5').val()+'-front.jpg');
				$('#3DKitImageBack').attr('src', 'imagesKit/target-<?= $selection->articleId?>-'+$('#kitColor1').val()+'-'+$('#kitColor2').val()+'-'+$('#kitColor3').val()+'-'+$('#kitColor4').val()+'-'+$('#kitColor5').val()+'-rear.jpg');
				$('#3DKitImageLightboxFront').attr('href', 'imagesKit/target-<?= $selection->articleId?>-'+$('#kitColor1').val()+'-'+$('#kitColor2').val()+'-'+$('#kitColor3').val()+'-'+$('#kitColor4').val()+'-'+$('#kitColor5').val()+'-front-big.jpg');
			}
		});
	});
	$('#switchFront').click(function() {
		$('#LB-Front').show();
		$('#LB-Back').hide();
	});
	$('#switchBack').click(function() {
		$('#3DKitImageBack').attr('src', 'imagesKit/target-<?= $selection->articleId?>-'+$('#kitColor1').val()+'-'+$('#kitColor2').val()+'-'+$('#kitColor3').val()+'-'+$('#kitColor4').val()+'-'+$('#kitColor5').val()+'-rear.jpg');
		$('#3DKitImageLightboxBack').attr('href', 'imagesKit/target-<?= $selection->articleId?>-'+$('#kitColor1').val()+'-'+$('#kitColor2').val()+'-'+$('#kitColor3').val()+'-'+$('#kitColor4').val()+'-'+$('#kitColor5').val()+'-rear-big.jpg');
		$('#LB-Front').hide();
		$('#LB-Back').show();
	});
});
</script>