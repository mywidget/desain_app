<link rel="stylesheet" href="<?=base_url();?>assets/js/copy/primer.css">
<script src="<?=base_url();?>assets/js/copy/dist/clipboard.min.js"></script>
<script src="<?=base_url();?>assets/js/copy/clipboard.js"></script>
<script src="<?=base_url();?>assets/js/copy/main.js"></script>
<script src="<?=base_url();?>assets/vendor/jquery-loading-overlay/loadingoverlay.min.js" type="text/javascript"></script>
<div class="limiter">
	<div class="container-login100" style="background-image: url('<?=base_url();?>assets/images/img-01.jpg');">
		<div class="wrap-login200 p-t-10 p-b-30 bg-w">
			<div class="text-center">User | <?=$this->session->g_nama;?></div>
			<div class="timer-bottom" style="height:auto;">
				<div class="basic-grey2" >
					<input id="id_user"  type="hidden" value="<?=$this->session->g_id;?>">	
					<div class="alertx input-group">
						<input type="text" id="no_invoiceDF" class="form-control" Placeholder="Masukan Nomor Invoice" autofocus="">
						<span class="input-group-btn">
							<button class="btnDF btn btn-warning btn-flat" onclick="cariinvoiceDX();" id="search" type="button"><i class="fa fa-search"></i></button>
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
					<div class="row mb-3 align-items-center">
						<div class="col-md-5">
							<button class="btn btn-primary btn-sm" id="refresh">Refresh</button>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" placeholder="Search in table..." id="searchField">
						</div>
						<div class="col-md-2 text-right">
							<span class="pr-3">Rows Per Page:</span>
						</div>
						<div class="col-md-2">
							<div class="d-flex justify-content-end">
								<select class="custom-select" name="rowsPerPage" id="changeRows">
									<option value="10" selected>10</option>
									<option value="15">15</option>
									<option value="20">20</option>
									<option value="25">25</option>
									<option value="50">50</option>
									<option value="100">100</option>
									<option value="200">200</option>
									<option value="500">500</option>
								</select>
							</div>
						</div>
					</div>
					<div id="table-sortable"></div>
				</div>
			</div>
			<div class="modal-footer-full-width  modal-footer">
				<button type="button" class="btn btn-danger btn-md btn-rounded" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<div id="sy-whatshelp">
	<div class="sywh-services">
		<a href="<?=base_url('index.php');?>/login/logout" class="turnoff" data-tooltip="Logout" data-placement="left">
			<i class="fa fa-power-off"></i>
		</a>
		<a href="#myModal" data-toggle="modal" data-id="<?=$this->session->g_id;?>" data-target="#myModal" class="whatsapp" data-tooltip="Desain" data-placement="left">
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
	
	.bg-w{background:#999!important;padding:10px;opacity:0.8}
	.table td, .table th {
	padding: 10px !important;
	}
	.input-group .form-control, .input-group-addon, .input-group-btn {	
	align-items: stretch;
	}
</style>
<?php
	$base = base_url('index.php/');
?>
<script>
	var base_url = "<?=$base;?>";
	$("#btntgl").click(function(){
		cariSave();
	});
	$("#buttonb").click(function(){
		cariSave();
	});
	
	
	
	var columns = {
		'id_invoice': 'ID Invoice',
		'tgl_invoice': 'Tgl. Order',
		'keterangan': 'Keterangan',
		'fo': 'Fo',
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
		// cariSave();
		$.LoadingOverlay("show");
		
		var table = $('#table-sortable').tableSortable({
			data: [],
			columns: columns,
			searchField: '#searchField',
			responsive: {
				1100: {
					columns: {
						formCode: 'Form Code',
						formName: 'Form Name',
					},
				},
			},
			rowsPerPage: 10,
			pagination: true,
			tableWillMount: function() {
				
				// console.log('table will mount')
			},
			tableDidMount: function() {
				// console.log('table did mount')
				$.LoadingOverlay("hide");
			},
			
			
			onPaginationChange: function(nextPage, setPage) {
				var id = $("#id_user").val();
				$.ajax({
					type: 'POST',
					url: base_url+'desain/page/',
					data:{next:nextPage,id:id},
					beforeSend: function () {
						$.LoadingOverlay("show");
					},
					success: function (data) {
						$.LoadingOverlay("hide");
						var mydata = JSON.parse(data)
						setPage(nextPage, mydata);
					}
				});
			}
		});
		
		$('#changeRows').on('change', function() {
			table.updateRowsPerPage(parseInt($(this).val(), 10));
		})
		
		
		
		$('#refresh').click(function() {
			table.refresh();
		})
		
		var id = $("#id_user").val();
		$.ajax({
			type: 'POST',
			url: base_url+'desain/',
			data:{id:id},
			success: function (data) {
				var mydata = JSON.parse(data)
				table.setData(mydata, null, true);
				table.setData(mydata, columns);
			}
		});
		
		
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
	
	$("#no_invoiceDF").keyup(function(event){
		if(event.keyCode == 13){
			cariinvoiceDX();
			detail();
			$.LoadingOverlay("show");
		}
	});
	$('#no_invoiceDF').keyup(function(){
		$('.btnDF').prop('disabled', this.value == "" ? true : false);  
		$('.hapusR').remove();	
		$('.hide').css('display','none');
	});
	var link_data = "data";
	function cariinvoiceDX() {
		var invoice = document.getElementById("no_invoiceDF").value;
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				var myArr = JSON.parse(xmlhttp.responseText);
				// console.log()
				if (myArr.status == false) {
					$('.alertx').notify('Nomor Invoice tidak ditemukan!',{ position:"top" });
					}else{
					
					$('.hide').css('display','block');
					$('.btnup').prop('disabled', this.value == "" ? true : false);  
					$('#fileD,#folderD,#folderkon').prop('disabled', this.value == "" ? true : false);  
					folder = myArr.nama + " - " + myArr.telp ;
					huruf = myArr.nama.substring(0,1);
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
					var ket = myArr.keterangan;
					document.getElementById("fileD").value = myArr.id_invoice + ' ' + ket;
					detail();
				}
			}
		}
		var str = 'invoice='+invoice;
		var url = base_url + 'desain/cari/';
		xmlhttp.open('POST', url, true);
		xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xmlhttp.send(str);
		
	}
	function detail() {
		
		$('.hapusR').remove();
		var invoice = document.getElementById("no_invoiceDF").value;	
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				var myArr2 = JSON.parse(xmlhttp.responseText);
				// console.log(myArr2);
				if (myArr2[0]['produk'].length >0) {
					for	(i = 0; i < myArr2.length; i++) {
						
						var namecetak = invoice+'_'+myArr2[i]['ukuran'] + 
						'_' +myArr2[i]['jumlah']+myArr2[i]['satuan']+
						'-'+myArr2[i]['bahan']+
						'-'+myArr2[i]['jenis']+
						'-'+myArr2[i]['produk']+
						'-'+myArr2[i]['keterangan']+
						'-'+myArr2[i]['detail']+
						'-fo_'+myArr2[i]['fo']+
						'-ds_'+myArr2[i]['desain']+
						'_'+myArr2[i]['ambil'];
						
						data ="<div class='hapusR'><div class='input-group input-group-sm'><textarea class='form-control input-lg' style='height:50px' id='fileD"+i+"' readonly>"+namecetak+"</textarea><span class='input-group-btn'><button type='button' class='cbtn btn-info btn-flat' data-clipboard-target='#fileD"+i+"'>Copy</button></span></div></div>";
						$('#detailF').append(data);
						
					}
					$.LoadingOverlay("hide");
				}
				}else{
				$('.hapusR').remove();
			}
		}
		var str = 'invoice='+invoice;
		var url = base_url + 'desain/detail/';
		xmlhttp.open('POST', url, true);
		xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xmlhttp.send(str);
		
	}
	function cekfolderM(){
		var folder  = document.getElementById("folder2D").value;
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				var myArr = JSON.parse(xmlhttp.responseText);
				// console.log(myArr);
				$('.alertxm').notify(myArr[0],{ position:"top",autoHide: true, });
				
			}
		}
		var str = 'folder='+folder;
		var url = base_url + 'desain/cek_folder/';
		xmlhttp.open('POST', url, true);
		xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xmlhttp.send(str);
	}
	
	function bukafolder(){
		var folder = document.getElementById("folderD").value;
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				var myArr = JSON.parse(xmlhttp.responseText);
				// notifxyz(myArr[0],'success');
				$('.alertxf').notify(myArr[0],{ position:"top",autoHide: true, });
			}
		}
		var str = 'folder='+folder;
		var url = base_url + 'desain/open_folder/';
		xmlhttp.open('POST', url, true);
		xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xmlhttp.send(str);
	}
	
	function updatedesainzx() {
		var invoice = document.getElementById("no_invoiceDF").value;
		// alert(str);
		var desainer = document.getElementById("id_user").value;
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				cariinvoiceDX();
				detail();
				var myArr = JSON.parse(xmlhttp.responseText);
				// console.log(myArr)
				var des = document.getElementById("iddesain").value = myArr.id_desainer;
				document.getElementById("idinvoicedf").value = myArr.invoice; 
				document.getElementById("iddesain").value = myArr.id_desainer; 
				document.getElementById("nmdesain1").innerHTML = myArr.desain_put; 
				document.getElementById("nmdesain2").innerHTML = myArr.desain_update; 
				if(des==null){
					
					$('#popupdateDF').modal('show');
					}else{
					$('#popdesainDF').modal('show');
				}
			}
		}
		var str = 'invoice='+invoice+'&user='+desainer;
		var url = base_url + 'desain/update_desain/';
		xmlhttp.open('POST', url, true);
		xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xmlhttp.send(str);
		
	}
</script>		