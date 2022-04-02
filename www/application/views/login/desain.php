<?php
	if (empty($_SESSION['info']['isloggedin']))
	{
echo $_SESSION['info']['isloggedin'];
		$drtgl = date('Y-m-d');
		$smptgl = date('Y-m-d');
	?>
	<link rel="stylesheet" href="<?= $base; ?>/js/copy/primer.css">
	<script src="<?= $base; ?>/js/copy/dist/clipboard.min.js"></script>
    <script src="<?= $base; ?>/js/copy/clipboard.js"></script>
    <script src="<?= $base; ?>/js/copy/main.js"></script>
	<div class="limiter">
		
		<div class="container-login100" style="background-image: url('<?= $base; ?>/images/img-01.jpg');">
			<div class="wrap-login200 p-t-10 p-b-30 bg-w">
				<div class="timer-bottom" style="height:auto;">
					<div class="basic-grey2" >
						<input id="id_user"  type="hidden" value="<?=$_SESSION['info']['uid'];?>">	
						<div class="alertx input-group">
							<input type="text" id="no_invoiceDF" class="form-control" Placeholder="Masukan Nomor Invoice" autofocus="">
							<span class="input-group-btn">
								<button class="btnDF btn btn-warning btn-flat" onclick="cariinvoiceDX();detail();" id="search" type="button"><i class="fa fa-search"></i></button>
								<button class="btnDF btn btn-danger btn-flat hide" onclick="updatedesainzx();" type="button">Update Desain</button>
							</span>
						</div><!-- /input-group -->
						<div class="hide">					
							<label>Nama Folder</label>
							<div class="input-group input-group-sm alertxm">
								<input type="text" id="folderD" class="form-control" readonly>
								<input id="folder2D" value="" type="hidden">
								<span class="input-group-btn">
									<button class="btnDF cbtn btn btn-info btn-flat" data-clipboard-target="#folderD" type="button">Copy Link</button>
									<button class="btnDF btn btn-danger btn-flat" id='cekfolderM' onclick="cekfolderM();" type="button">Cek Folder</button>
								</span>
							</div><!-- /input-group -->		
							
							<div class="input-group input-group-sm alertxf m-t-5">
								<input id="folderkon" value="" type="text" class="form-control" readonly>
								<span class="input-group-btn">
									<button class="btnDF cbtn btn btn-info btn-flat" data-clipboard-target="#folderkon" type="button">Copy Folder</button>
									<button class="btnDF btn btn-warning btn-flat"  id='bukafolder' onclick="bukafolder();" type="button">Open Folder</button>
								</span>
							</div>
							<label>Nama File</label>
							<div class="input-group input-group-sm">
								<input type="text" id="fileD" class="form-control" readonly>
								<span class="input-group-btn">
									<button class="btnDF cbtn btn btn-danger btn-flat" data-clipboard-target="#fileD" type="button">Copy</button>
								</span>
							</div>
							
							<!-- /input-group -->	
							<label>Nama File Untuk di Cetak</label>
							<div id="detailF"></div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="popdesainDF" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="login-box">
						<div class="login-box-body">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<p class="login-box-msg">Perubahan desain Hubungi Admin</p>
							<div id="update"></div>
							<div id="sukses"></div>
							<div id="error"></div>
							<div class="form-group has-feedback">
								<div class="input-group" >
									<div class="input-group-btn">
										<button type="button" class="btn btn-danger">No. Invoice</button>
									</div><!-- /btn-group -->
									<input type="text" class="form-control" name="idinvoiced" id="idinvoicedf" disabled>
									<span class="glyphicon glyphicon-list-alt form-control-feedback"></span>
								</div><!-- /input-group -->
							</div>
							<div class="form-group has-feedback">
								<div class="input-group" >
									<div class="input-group-btn">
										<button type="button" class="btn btn-danger">Nm. Desain</button>
									</div><!-- /btn-group -->
									<input type="hidden" class="form-control" name="iddesain" id="iddesain">
									<span class="form-control">
										<span id="nmdesain2"></span> 
										<i class="fa fa-arrow-right xs"></i>
										<span id="nmdesain1"></span>
									</span>
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
								</div><!-- /input-group -->
							</div>
						</div><!-- /.login-box-body -->
					</div><!-- /.login-box -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-flat" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>
	<!--a href="logout.php" class="float"><i class="fa fa-power-off fa-2x my-float"></i>
	</a-->
	<div class="modal" id="myModals" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Modal body text goes here.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Save changes</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade right" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
		<div class="modal-dialog-full-width modal-dialog momodel modal-fluid" role="document">
			<div class="modal-content-full-width modal-content ">
				<div class=" modal-header-full-width   modal-header text-center">
					<h5 class="modal-title w-100" id="exampleModalPreviewLabel">List data desain</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span style="font-size: 1.3em;" aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="box-body table-responsive">
						<div class="col-md-12">
							<div class="input-group input-group-sm">
								<select id="sortBy" onchange="cariSave()" class="form-control custom-select">
									<option value="10">10</option>
									<option value="20">20</option>
									<option value="50">50</option>
									<option value="100">100</option>
									<option value="500">500</option>
								</select>
								<span class="input-group-addon">User</span>
								<select id="semua" onchange="cariSave()" class="form-control custom-select">
									<option value="0">-</option>
								</select>
								<span class="input-group-addon">Dari</span>
								<input class="form-control" type="date" id="drtgl" name="dari" value="<?=$drtgl;?>">
								<span class="input-group-addon">Sampai</span>
								<input class="form-control" type="date" id ="smptgl" name="sampai" value="<?=$smptgl;?>">
								<span class="input-group-btn">
									<button type="submit" class="btn btn-info btn-flat" id='btntgl' >Tampilkan</button>
								</span>
								<input type="text" id="keywords" class="form-control" placeholder="Cari : No. Invoice | NO. Telp | Nama Konsumen Tekan Enter"/>
								<div class="input-group-btn ">
									<button type="submit" class="btn btn-success" id='buttonb' >Cari</button>
								</div>
							</div>
						</div><!-- ./col -->
						<div class="col-md-12" style="margin-top:10px">
							<div id="posts_content">
								<div class="posts_list"></div>
								
								<div style="float:right">
									
								</div>
								
							</div>
						</div>
					</div><!-- /.box-body -->
				</div>
				<div class="modal-footer-full-width  modal-footer">
					<button type="button" class="btn btn-danger btn-md btn-rounded" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<div id="sy-whatshelp">
		<div class="sywh-services">
			<a href="logout.php" class="turnoff" data-tooltip="Logout" data-placement="left">
				<i class="fa fa-power-off"></i>
			</a>
			<a href="#myModal" data-toggle="modal" data-id="<?=$_SESSION['info']['uid'];?>" data-target="#myModal" class="whatsapp" data-tooltip="Desain" data-placement="left">
				<i class="fa fa-tasks"></i>
			</a>
			<a href="" class="call" data-tooltip="Tutorial" data-placement="left">
				<i class="fa fa-info"></i>
			</a>
		</div>
		<a class="sywh-open-services">
			<i class="fa fa-list"></i>
			<i class="fa fa-times"></i>
		</a>
	</div>
	<div class="loading" style="display: none;">
		<div class="spinner"></div>
	</div>
	<style>
		.modal {
		display: none;
		height: 100%;
		left: 0;
		position: fixed;
		top: 0;
		width: 100%;
		}
		.modal-dialog-full-width {
        width: 100% !important;
        height: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        max-width:none !important;
		position: fixed;
		
		}
		.modal-body {
		overflow-y: auto;
		}
		.modal-content-full-width  {
		
        border-radius: 0 !important;
        background-color: #fff !important;
		height: calc(100vh - 0px);
		overflow-y: auto;
		}
		
		.modal-header-full-width  {
        border-bottom: 1px solid #9ea2a2 !important;
		}
		
		.modal-footer-full-width  {
        border-top: 1px solid #9ea2a2 !important;
		}
		.loading {
		background: rgba(0, 0, 0, 0.3);
		bottom: 0;
		left: 0;
		position: fixed;
		right: 0;
		top: 0;
		z-index: 9998;
		}
		
		.spinner {
		background: #000
		url(https://code.jquery.com/mobile/1.1.0/images/ajax-loader.gif) 0 0
		no-repeat;
		border: 0;
		-webkit-border-radius: 36px;
		-moz-border-radius: 36px;
		border-radius: 36px;
		box-shadow: 0 1px 1px -1px #fff;
		display: block;
		height: 46px;
		left: 50%;
		margin: -23px 0 0 -23px;
		opacity: 0.18;
		overflow: hidden;
		padding: 1px;
		position: fixed;
		text-align: center;
		top: 50%;
		width: 46px;
		z-index: 9999;
		}
		.bg-w{background:#999!important;padding:10px;opacity:0.8}
		
	</style>
	<script>
		$("#btntgl").click(function(){
		cariSave();
		});
		$("#buttonb").click(function(){
		cariSave();
		});
		function cariSave(page_num) {
		page_num = page_num?page_num:0;
		var keywords = $('#keywords').val();
		var sortBy  = $('#sortBy').val();
		var dari = $('#drtgl').val();
		var sampai = $('#smptgl').val();
		var id = $("#id_user").val();
		$.ajax({
        type: 'POST',
        url: base_url+'desain/',
        data:'page='+page_num+'&sortBy='+sortBy+'&keywords='+keywords+'&dari='+dari+'&sampai='+sampai+'&id='+id,
        beforeSend: function () {
		$('#button').html('<i class="fa fa-circle-o-notch fa-spin"></i>');
		$('.alert').hide();
		$(".loading").toggle();
        },
        success: function (html) {
		$(".loading").hide();
		$('#buttonsave').html('<i class="fa fa-circle-o-notch fa-spin"></i>');
		$('.posts_list').html(html);
		$('.loading-overlay').fadeOut("slow");
		$('#buttonsave').html('Cari');
        }
		});
		
		}
		$('#myModal').on('show.bs.modal', function(e) {
		$('.sywh-services').removeClass('active');
		$('a.sywh-open-services i.fa-times').hide();
		$('a.sywh-open-services i.fa-list').show();
		$('a.sywh-open-services').removeClass('data-tooltip-hide');
		$('.sywh-services a:nth-child(1)').delay(0).fadeOut();
		$('.sywh-services a:nth-child(2)').delay(100).fadeOut();
		$('.sywh-services a:nth-child(3)').delay(200).fadeOut();
		$('.sywh-services a:nth-child(4)').delay(300).fadeOut();
		$('.sywh-services a:nth-child(5)').delay(400).fadeOut();
		$("#sy-whatshelp").fadeOut("slow");
		// var id_user = $("#id_user").val();
		cariSave();
		// $.ajax({
		// type: 'POST',
		// url: base_url+'desain/api', //Here you will fetch records 
		// data: {id: id,id_user:id_user}, //Pass $id
		// cache: false,
		// beforeSend: function() {
		// $(".se-pre-con").fadeIn("slow");
		// },
		// success: function(data) {
		// $(".se-pre-con").fadeOut("slow");
		// $('.fetched-data').html(data);
		// }
		// });
		});
		$('#myModal').on('hidden.bs.modal', function () {
		$("#sy-whatshelp").fadeIn("slow");
		})
		jQuery(function ($) {
		$('a.sywh-open-services').click(function () {
		if ($('.sywh-services').hasClass('active')) {
		$('.sywh-services').removeClass('active');
		$('a.sywh-open-services i.fa-times').hide();
		$('a.sywh-open-services i.fa-list').show();
		$('a.sywh-open-services').removeClass('data-tooltip-hide');
		$('.sywh-services a:nth-child(1)').delay(0).fadeOut();
		$('.sywh-services a:nth-child(2)').delay(100).fadeOut();
		$('.sywh-services a:nth-child(3)').delay(200).fadeOut();
		$('.sywh-services a:nth-child(4)').delay(300).fadeOut();
		$('.sywh-services a:nth-child(5)').delay(400).fadeOut();
		} else {
		$('.sywh-services').addClass('active');
		$('a.sywh-open-services i.fa-list').hide();
		$('a.sywh-open-services i.fa-times').show();
		$('a.sywh-open-services').addClass('data-tooltip-hide');
		$('.sywh-services a:nth-child(5)').delay(0).fadeIn();
		$('.sywh-services a:nth-child(4)').delay(100).fadeIn();
		$('.sywh-services a:nth-child(3)').delay(200).fadeIn();
		$('.sywh-services a:nth-child(2)').delay(300).fadeIn();
		$('.sywh-services a:nth-child(1)').delay(400).fadeIn();
		}
		});
		});
		var base = '<?= $base; ?>';
		$("#no_invoiceDF").keyup(function(event){
		if(event.keyCode == 13){
		cariinvoiceDX();
		detail();
		}
		});
		$('#no_invoiceDF').keyup(function(){
        $('.btnDF').prop('disabled', this.value == "" ? true : false);  
		$('.hapusR').remove();	
		$('.hide').css('display','none');
		});
		var link_data = "data";
		function cariinvoiceDX() {
		var str = document.getElementById("no_invoiceDF").value;
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		var myArr = JSON.parse(xmlhttp.responseText);
		if (myArr[1].toString() == '') {
		$('.alertx').notify('Nomor Invoice tidak ditemukan!',{ position:"top" });
		document.getElementById("folderD").value = '';
		document.getElementById("fileD").value = '';
		}else{
		$('.hide').css('display','block');
		$('.btnup').prop('disabled', this.value == "" ? true : false);  
		$('#fileD,#folderD,#folderkon').prop('disabled', this.value == "" ? true : false);  
		folder = myArr[1].toString() + " - " + myArr[2].toString() ;
		huruf = myArr[1].substring(0,1);
		if(huruf.toLowerCase()<='f'){
		var subfolder='A-F';
		}else if(huruf.toLowerCase()<='m'){
		var subfolder='G-M';
		}else if(huruf.toLowerCase()<='s'){
		var subfolder='N-S';
		}else{
		var subfolder='T-Z';
		}
		document.getElementById("folder2D").value = '//'+link_data+'/'+subfolder+'/'+huruf+'/'+folder;
		document.getElementById("folderD").value = '\\\\'+link_data+'\\'+subfolder+'\\'+huruf+'\\'+folder;
		document.getElementById("folderkon").value = folder;
		var ket = myArr[3].toString();
		document.getElementById("fileD").value = myArr[0].toString() + ' ' + ket;
		
		}
		}
		}
		xmlhttp.open("GET",baseurl+"timer/cariinvoice2.php?type=cari&no_invoice="+str,true);
		xmlhttp.send();	
		}
		function detail() {
		$('.hapusR').remove();
		var str = document.getElementById("no_invoiceDF").value;	
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		var myArr2 = JSON.parse(xmlhttp.responseText);
		if (myArr2[0]['produk'].length >0) {
		for	(i = 0; i < myArr2.length; i++) {
		data ="<div class='hapusR'><div class='input-group input-group-sm'><textarea class='form-control input-lg' style='height:50px' id='fileD"+i+"'>"+str+'_'+myArr2[i]['ambil']+'-'+myArr2[i]['ukuran']+'-'+myArr2[i]['jumlah']+myArr2[i]['satuan']+'-'+myArr2[i]['bahan']+'-'+myArr2[i]['produk']+'-'+myArr2[i]['keterangan']+'-'+myArr2[i]['detail']+'-fo_'+myArr2[i]['fo']+'-ds_'+myArr2[i]['desain']+"</textarea><span class='input-group-btn'><button type='button' class='cbtn btn-info btn-flat' data-clipboard-target='#fileD"+i+"'>Copy</button></span></div></div>";
		$('#detailF').append(data);
		}
		}
		}else{
		$('.hapusR').remove();
		}
		}
		xmlhttp.open("GET",baseurl+"timer/cariinvoice2.php?type=detail&no_invoice="+str,true);
		xmlhttp.send();				  
		}
		function cekfolderM(){
		var str = document.getElementById("folder2D").value;
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		var myArr = JSON.parse(xmlhttp.responseText);
		// console.log(myArr);
		$('.alertxm').notify(myArr[0],{ position:"top",autoHide: true, });
		
		}
		}
		xmlhttp.open("GET",base+"/carifolder.php?folder="+str,true);
		xmlhttp.send();	
		}
		function bukafolder(){
		var str = document.getElementById("folderD").value;
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		var myArr = JSON.parse(xmlhttp.responseText);
		// notifxyz(myArr[0],'success');
		$('.alertxf').notify(myArr[0],{ position:"top",autoHide: true, });
		}
		}
		xmlhttp.open("GET",base+"/openfolder.php?folder="+str,true);
		xmlhttp.send();	
		}
		function updatedesainzx() {
		var str = document.getElementById("no_invoiceDF").value;
		// alert(str);
		var desainer = document.getElementById("id_user").value;
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		var myArr = JSON.parse(xmlhttp.responseText);
		var des = document.getElementById("iddesain").value = myArr[1];
		document.getElementById("idinvoicedf").value = myArr[0]; 
		document.getElementById("iddesain").value = myArr[1]; 
		document.getElementById("nmdesain1").innerHTML = myArr[2]; 
		document.getElementById("nmdesain2").innerHTML = myArr[3]; 
		if(des==null){
		detail();
		$('#popupdateDF').modal('show');
		}else{
		$('#popdesainDF').modal('show');
		}
		}
		}
		xmlhttp.open("GET",baseurl+"timer/cariinvoice2.php?type=update&no_invoice="+str+"&desainer="+desainer,true);
		xmlhttp.send();	
		}
	</script>
	<?php }else{
		// echo 2;
		echo '<meta http-equiv="refresh" content="0;url=index.php">';
	}	