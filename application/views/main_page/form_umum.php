<head>
	<title>Mardizu Form</title>
</head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="<?= base_url("dist/fontawesome/css/all.css") ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url("dist/animatecss/animate.css") ?>">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?= base_url();?>dist/niceselect/css/nice-select.css">

<style type="text/css">
	body{
		background-color: #efebe9;
		font-family: sans-serif;
	}
	.card{
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	.select2-selection__rendered {
    line-height: 57px !important;
	}
	.select2-container .select2-selection--single {
	    height: 58px !important;
	}
	.select2-selection__arrow {
	    height: 58px !important;
	}
	.image-upload>input {
	 	display: none;
	}
	#displayPict{
		max-width: 200px;
		max-height: 280px;
		object-fit: cover;
		border-radius: 20px;
		cursor: pointer;
		transition: transform .2s;
	}
	#displayPict:hover{
		transform: scale(1.1);
	}
</style>


<div class="container-fluid" style="height: 200px;background-image: linear-gradient(-100deg,#00d2ff,#3a7bd5);"></div>

<div class="container col-md-7">
	<form method="POST" action="<?= site_url('p/act_umum') ?>" enctype="multipart/form-data">
	<div class="row" style="margin-top: -100px;">
			<div class="card w-100" style="border-radius: 0px;background-color: #212529;">
				<div class="card-body text-center">
					<div class="text-left text-light"><h2 style="font-family: Montserrat;"><b style="background: -webkit-linear-gradient(#00d2ff,#3a7bd5);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Form</b> Outsorcing Umum</h2></div>
				</div>
			</div>
			<div class="jumbotron" style="background: #efebe9;border-top-right-radius: 0;border-top-left-radius: 0;">
			  <h1 class="display-4">Persyaratan Wajib!</h1>
			  <p class="lead">Pendaftar harus melampirkan sertifikat vaksinasi COVID-19 minimal dosis 1 (pertama).</p>
			  <hr class="my-4">
			  <p>Jika anda belum melakukan vaksinasi, pendaftaran vaksinasi dapat dilakukan melalui https://vaksin.loket.com/.</p>
			  <a class="btn btn-primary btn-lg" href="https://vaksin.loket.com/" role="button">Daftar Vaksin</a>
			</div>
	</div>
	<div class="row">
		<div id="field_docMultiple">
		<div class="row mb-3">
			<div class="card w-100">
				<div class="card-body">
					<div class="card-title"> Sertifikat Vaksin</div><hr>
					<div class="mb-3">
  						  <input class="form-control" type="file" onchange='ValidateVaksin(this)' name="sk_vaksin" required>
  						  <p class="text-center text-secondary" style="font-size: 15px;margin-top: 20px;"></p>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="card w-100" style="border-top-left-radius: 0px;border-top-right-radius: 0px;">
			<div class="card-body">
				<div class="card-title"> Umum </div><hr>
				<div class="input-group mb-3">
					<div class="form-floating w-100">
					  <input type="text" class="form-control" id="name" placeholder="Name" name="nama" required>
					  <label class="text-secondary" for="name">Nama</label>
					</div>
				</div>				
				
				<div class="input-group mb-3">
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" value="Laki-Laki" name="jenis_kelamin" id="radio_male">
					  <label class="form-check-label" for="radio_male">
					   Laki - Laki
					  </label>
					</div>
				  	<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" value="Perempuan" name="jenis_kelamin" id="radio_female" required>
					  <label class="form-check-label" for="radio_female">
					    Perempuan
					  </label>
					</div>
				</div>

				<div class="input-group mb-3">
					<div class="form-floating w-100">
					  <input type="text" class="form-control input-sm" id="birth_place" placeholder="Tempat Lahir" name="tempat_lahir" required>
					  <label class="text-secondary" for="birth_place">Tempat Lahir</label>
					</div>
				</div>

				<div class="input-group mb-3">
					<div class="form-floating w-100">
					  <input type="date" class="form-control input-sm" onchange="validateAge(this)" id="birth_date" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
					  <label class="text-secondary" for="birth_date">Tanggal Lahir</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row mt-3">
		<div class="card w-100">
			<div class="card-body">
				<div class="card-title"> Kontak </div><hr>
				<div class="input-group mb-3">
					<div class="form-floating w-100">
					  <input type="number" class="form-control input-sm" id="contact" placeholder="Phone Number" name="telp" required>
					  <label class="text-secondary" for="contact">No.Telp</label>
					</div>
				</div>

				<div class="input-group mb-3">
					<div class="form-floating w-100">
					  <input type="email" class="form-control input-sm" id="email" placeholder="Email" name="email" required>
					  <label class="text-secondary" for="email">Email</label>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row mt-3">
		<!-- ADS BANNER -->
		<div id="ads_field" class="container">
		    <img src="https://cloud.mardizu.co.id/event_image/loading.gif" style="max-width:100%">
		</div>

		<script type="text/javascript">
			$(document).ready(function(){
			loadAds();
			function loadAds(){
				$.ajax({
					url: 'https://www.mardizu.co.id/dev/banner_ads',
					type: 'get',
					datatype: 'json',
					success: function(response){
						var resT = $.parseJSON(response);
						$('#ads_field').empty();
						$('#ads_field').append("<img src='data:image/jpeg;base64,"+resT.ads64+"' style='max-width:100%''>");
					},error: function(XMLHttpRequest, textStatus, errorThrown){
						console.log('error'+textStatus);
					}
				});
			}
			});
		</script>
	</div>

	<div class="row mt-3">
		<div class="card w-100">
			<div class="card-body">
				<div class="card-title"> Foto Diri </div><hr>
				<center>
					<div class="image-upload">
					  <label for="picInput">
					    <img id="displayPict" src="<?= base_url('assets/images/upload pict.png') ?>" required/>
					  </label>

					  <input id="picInput" onchange="readURL(this)" type="file" name="foto_diri" required />
					</div>
					<p class="text-secondary" style="font-size: 15px;margin-top: 20px;">Klik Untuk Mengubah</p>
				</center>
			</div>
		</div>
	</div>

	<div class="row mt-3">
		<div class="card w-100">
			<div class="card-body">
				<div class="card-title"> Alamat Sekarang </div><hr>
				<div class="mb-3">
					<div class="form-floating">
					  <select class="form-select" id="provSelect" aria-label="Provinsi" name="provinsi" required>
					    <option selected>Provinsi</option>
					    <option value="1">One</option>
					    <option value="2">Two</option>
					    <option value="3">Three</option>
					  </select>
					</div>
				</div>

				<div class="mb-3" id="kab">
					<div class="form-floating">
					  <select class="form-select" id="kabSelect" aria-label="Kabupaten" name="kabupaten" disabled="" required>
					    <option selected>Kabupaten</option>
					    <option value="1">One</option>
					    <option value="2">Two</option>
					    <option value="3">Three</option>
					  </select>
					</div>
				</div>

				<div class="mb-3" id="kec">
					<div class="form-floating">
					  <select class="form-select" id="kecSelect" aria-label="kecamatan" name="kecamatan" disabled="" required>
					    <option selected>Kecamatan</option>
					    <option value="1">One</option>
					    <option value="2">Two</option>
					    <option value="3">Three</option>
					  </select>
					</div>
				</div>

				<div class="mb-3" id="des">
					<div class="form-floating">
					  <select class="form-select" id="desSelect" aria-label="desa" name="desa_kelurahan" disabled="" required>
					    <option selected>Desa\Kelurahan</option>
					    <option value="1">One</option>
					    <option value="2">Two</option>
					    <option value="3">Three</option>
					  </select>
					</div>
				</div>

				<div class="row g-2 mb-3">
					<div class="col-md">
						<div class="form-floating">
						  <input type="number" class="form-control input-sm" id="rt" placeholder="rt" name="rt" required>
						  <label class="text-secondary" for="rt">RT</label>
						</div>
					</div>
					<div class="col-md">
						<div class="form-floating">
						  <input type="number" class="form-control input-sm" id="rw" placeholder="rw" name="rw" required>
						  <label class="text-secondary" for="rw">RW</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row mt-3">
		<div class="card w-100">
			<div class="card-body">
				<div class="card-title">Tahun Pengalaman</div><hr>
				<div class="input-group mb-3 row">
					<div class="col-xs-12 col-md-auto form-check form-check-inline">
					  <input class="form-check-input" type="radio" value="-" name="tahun_pengalaman" id="radio_th0" required>
					  <label class="form-check-label" for="radio_th0">
					   Belum Berpengalaman
					  </label>
					</div>
					<div class="col-xs-12 col-md-auto form-check form-check-inline">
					  <input class="form-check-input" type="radio" value="< 1 Tahun" name="tahun_pengalaman" id="radio_th1">
					  <label class="form-check-label" for="radio_th1">
					   <i class="text-secondary fas fa-chevron-left"></i> 1 Tahun
					  </label>
					</div>
				  	<div class="col-xs-12 col-md-auto form-check form-check-inline">
					  <input class="form-check-input" type="radio" value="> 1 Tahun" name="tahun_pengalaman" id="radio_th2" required>
					  <label class="form-check-label" for="radio_th2">
					   <i class="text-secondary fas fa-chevron-right"></i> 1 Tahun
					  </label>
					</div>
					<div class="col-xs-12 col-md-auto form-check form-check-inline">
					  <input class="form-check-input" type="radio" value="> 3 Tahun" name="tahun_pengalaman" id="radio_th3" required>
					  <label class="form-check-label" for="radio_th3">
					   <i class="text-secondary fas fa-chevron-right"></i> 3 Tahun
					  </label>
					</div>
					<div class="col-xs-12 col-md-auto form-check form-check-inline">
					  <input class="form-check-input" type="radio" value="> 5 Tahun" name="tahun_pengalaman" id="radio_th4" required>
					  <label class="form-check-label" for="radio_th4">
					   <i class="text-secondary fas fa-chevron-right"></i> 5 Tahun
					  </label>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row mt-3">
		<div class="card w-100">
			<div class="card-body">
				<div class="d-grid gap-2">
					<input type="submit" class="btn btn-primary" value="Submit">
				</div>
			</div>
		</div>
	</div>	
	<form>

	<div class="row mt-3 text-center text-secondary">
		<p style="font-size:10px;">Formulir ini dibuat oleh PT Mardizu Sejahtera</p>
		<h4 style="font-family: Montserrat;"><b>Mardizu</b> Sejathera</h4>
	</div>
	<div class="clearfix mb-5"></div>
</div>
<script type="text/javascript">
	function validateAge(input){
		var d = new Date(input.value);
		var n = new Date();
		var year = d.getFullYear();
		var month = d.getMonth();
		var nowYear = n.getFullYear();
		var nowMonth = n.getMonth();
		
		if(nowMonth > month){
			var qualify_year = nowYear - year;
		}else{
			var qualify_year = (nowYear - year)-1;
		}

		if(qualify_year < 22){
			Swal.fire(
				'Belum Cukup Usia',
				'Usia anda '+qualify_year+' Tahun, Kami Menyarankan untuk mendaftar ke Pemagangan',
				'error'
			)
			input.value = "";
		}else{
			
		}
		
	}
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#displayPict').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }else{
        	$('#displayPict').attr('src', '<?= base_url('assets/images/upload pict.png') ?>');
        }
    }
    var _validFileExtensionsV = [".jpg",".png",".jpeg"];    
	function ValidateVaksin(oInput) {
		var file_size = oInput.files[0].size;
	    if(file_size  > 2000000){
	    	Swal.fire(
					  'File Terlalu Besar',
					  'Ukuran File Maksimal 2Mb',
					  'error'
			)
			oInput.value = "";
	    }else{
		    if (oInput.type == "file") {
		        var sFileName = oInput.value;
		         if (sFileName.length > 0) {
		            var blnValid = false;
		            for (var j = 0; j < _validFileExtensionsV.length; j++) {
		                var sCurExtension = _validFileExtensionsV[j];
		                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
		                    blnValid = true;
		                    break;
		                }
		            }
		             
		            if (!blnValid) {
		                Swal.fire(
						  'Format File Salah',
						  'Format yang diizinkan: '+_validFileExtensionsV.join(", "),
						  'error'
						)
		                oInput.value = "";
		                return false;
		            }
		        }
		    }
		    return true;
		}
	}
    
    function remove(el) {
	  var element = el;
	  element.remove();
	}

	$(document).ready(function(){
		<?php if($this->session->flashdata('act_status') == '200'){ ?>
			let timerInterval
			Swal.fire({
			  title: 'Data Telah Terkirim!',
			  html: '<span style="font-weight:700;">Terimakasih telah mendaftar<br> Panggilan akan dikirim melalui Email atau via Telephone</span><br><br>menutup dalam <b></b> milidetik.',
			  timer: 5000,
			  timerProgressBar: true,
			  didOpen: () => {
			    Swal.showLoading()
			    timerInterval = setInterval(() => {
			      const content = Swal.getHtmlContainer()
			      if (content) {
			        const b = content.querySelector('b')
			        if (b) {
			          b.textContent = Swal.getTimerLeft()
			        }
			      }
			    }, 100)
			  },
			  willClose: () => {
			    clearInterval(timerInterval)
			  }
			}).then((result) => {
			  /* Read more about handling dismissals below */
			  if (result.dismiss === Swal.DismissReason.timer) {
			    console.log('I was closed by the timer, Redirect to somewhere')
			  }
			})
		<?php } ?>
		$("#provSelect").each(function(){
		    $(this).select2({
				placeholder: 'Pilih',
			});
		});
		$("#kabSelect").each(function(){
		    $(this).select2({
				placeholder: 'Pilih',
			});
		});
		$("#kecSelect").each(function(){
		    $(this).select2({
				placeholder: 'Pilih',
			});
		});
		$("#desSelect").each(function(){
		    $(this).select2({
				placeholder: 'Pilih',
			});
		});

		var total_doc = 1;
		$('#btn_addDoc').on('click', function(){
			total_doc = total_doc + 1;
			$('#field_docMultiple').append("<div class='row mt-3' id='docField"+total_doc+"'><div class='card w-100'><div class='card-body'><i class='fa fa-times text-secondary' style='float:right;cursor: pointer;' onclick='remove(docField"+total_doc+")'></i><div class='card-title'> Dokumen </div><hr><div class='input-group mb-3'><div class='form-floating w-100'><input type='text' class='form-control input-sm' list='doc_label' id='doc_label' placeholder='Kejuruan' name='doc_label[]'><label class='text-secondary' for='place_name'>Nama Dokumen</label></div><datalist id='doc_label'><option>KTP</option><option>SIM</option><option>Sertifikat Pencapaian</option></datalist></div><div class='mb-3'><input class='form-control' type='file' id='doc_file"+total_doc+"' onchange='ValidateSingleInput(this)' name='doc_file[]'></div></div></div></div>");
		});

	loadDataProv();

	function loadDataProv(){
	    $.ajax({
	         url: 'https://dev.farizdotid.com/api/daerahindonesia/provinsi',
	         type: 'get',
	         dataType: 'json',
	         success: function(response){
	          setDataSelectProv(response.provinsi);
	         },error: function(XMLHttpRequest, textStatus, errorThrown) {
	          console.log('error API Prov')
	       }   
	       });
	}

	function setDataSelectProv(result){
	   $('#provSelect').empty();
	   
	   var tr = "<option value='' selected>Provinsi</option>"
	   $('#provSelect').append(tr);
       for(index in result){
	       var id              = result[index].id;
	       var nama            = result[index].nama;
	       
	       td = "<option value='"+nama+"' data-id='"+id+"'>"+nama+"</option>"

	       $('#provSelect').append(td);
       }
	}

	$('#provSelect').on('change',function(){
		var selected = $(this).find('option:selected');
		var extra = selected.data('id');
		if(extra){
			$('#kabSelect').prop("disabled", false);
			loadDataKab(extra);
		}else{
			$('#kabSelect').prop("disabled", true);
			console.log('delete');
		}
	});

	function loadDataKab(id_prov){
	    $.ajax({
	         url: 'https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi='+id_prov,
	         type: 'get',
	         dataType: 'json',
	         success: function(response){
	          setDataSelectKab(response.kota_kabupaten);
	         },error: function(XMLHttpRequest, textStatus, errorThrown) {
	          console.log('error API Kab')
	       }   
	       });
	}
	function setDataSelectKab(result){
	   $('#kabSelect').empty();
	   
	   var tr = "<option value='' selected>Kabupaten</option>"
	   $('#kabSelect').append(tr);
       for(index in result){
	       var id            = result[index].id;
	       var nama          = result[index].nama;
	       
	       td = "<option value='"+nama+"' data-id='"+id+"'>"+nama+"</option>"

	       $('#kabSelect').append(td);
       }
	}

	$('#kabSelect').on('change',function(){
		var selected = $(this).find('option:selected');
		var extra = selected.data('id');
		if(extra){
			$('#kecSelect').prop("disabled", false);
			loadDataKec(extra);
		}else{
			$('#kecSelect').prop("disabled", true);
			console.log('delete');
		}
	});

	function loadDataKec(id_kab){
	    $.ajax({
	         url: 'https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota='+id_kab,
	         type: 'get',
	         dataType: 'json',
	         success: function(response){
	          setDataSelectKec(response.kecamatan);
	         },error: function(XMLHttpRequest, textStatus, errorThrown) {
	          console.log('error API Kec')
	       }   
	       });
	}
	function setDataSelectKec(result){
	   $('#kecSelect').empty();
	   
	   var tr = "<option value='' selected>Kecamatan</option>"
	   $('#kecSelect').append(tr);
       for(index in result){
	       var id            = result[index].id;
	       var nama          = result[index].nama;
	       
	       td = "<option value='"+nama+"' data-id='"+id+"'>"+nama+"</option>"

	       $('#kecSelect').append(td);
       }
	}

	$('#kecSelect').on('change',function(){
		var selected = $(this).find('option:selected');
		var extra = selected.data('id');
		if(extra){
			$('#desSelect').prop("disabled", false);
			loadDataDes(extra);
		}else{
			$('#desSelect').prop("disabled", true);
			console.log('delete');
		}
	});

	function loadDataDes(id_kec){
	    $.ajax({
	         url: 'http://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan='+id_kec,
	         type: 'get',
	         dataType: 'json',
	         success: function(response){
	          setDataSelectDes(response.kelurahan);
	         },error: function(XMLHttpRequest, textStatus, errorThrown) {
	          console.log('error API Des')
	       }   
	       });
	}
	function setDataSelectDes(result){
	   $('#desSelect').empty();
	   
	   var tr = "<option value='' selected>Desa/Kelurahan</option>"
	   $('#desSelect').append(tr);
       for(index in result){
	       var id            = result[index].id;
	       var nama          = result[index].nama;
	       
	       td = "<option value='"+nama+"' data-id='"+id+"'>"+nama+"</option>"

	       $('#desSelect').append(td);
       }
	}
	
	});
</script>