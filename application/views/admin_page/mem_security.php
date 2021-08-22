<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Member Security</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
<!-- Content Row -->
<div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Bulan Ini</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $monthly_data ?> Pendaftar</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Minggu Ini</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $weekly_data ?> Pendaftar</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-week fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Harian
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">+<?= $daily_data ?></div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: <?= $monthly_data*10; ?>%" aria-valuenow="<?= $monthly_data*10; ?>" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-day fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Data</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_data ?> Data</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-asterisk fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- CONTENT START -->
<div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-11">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Member</h6>
                    <input type="text" class="form-control" id="search_text" value="" placeholder="Cari..." style="width:80%">
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body" style="min-height: 60vh;" id="data_table">
                    <div class="row p-1">
                        <div class="col-1">No</div>
                        <div class="col">Nama</div>
                        <div class="col">Pengalaman</div>
                        <div class="col">Kontak</div>
                        <div class="col text-right">Aksi</div>
                    </div>
                    <hr>
                    <div id="datatable">

                    </div>
                    <div id="pagination"></div>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript">
function openDoc(n){
    var kta 	= n.getAttribute('data-kta');
    var gp 	    = n.getAttribute('data-gp');

    swal.fire({
        title: 'Dokumen Member',
        icon: 'question',
        html: "Pilih salah satu yang ingin diperiksa" +
            "<br><br>" +
            '<button type="button" role="button" tabindex="0" onclick="openFile(`'+kta+'`)" class="btn btn-primary">' + 'KTA' + '</button> ' +
            '<button type="button" role="button" tabindex="0" onclick="openFile(`'+gp+'`)" class="btn btn-warning">' + 'GADA PRATAMA' + '</button>',
        showCancelButton: false,
        showConfirmButton: false
    });   
}

function openFile(n){
	if(n != '-'){
    Swal.fire({
        html: "<embed src='<?= base_url()?>/assets/uploads/"+n+"' frameborder='0' width='100%' height='500px'>",
        showCancelButton: true,
        cancelButtonText: 'Close',
        showConfirmButton: false
    });
	}else{
		Swal.fire(
		  'Tidak Ditemukan',
		  'Terdaftar tidak mengupload Dokumen ini',
		  'warning'
		)
	}
}

function showSvaksin(e,v,m){
    var data = e.id;
    if(data != 1){
        e.id = 1;
        document.getElementById(v).classList.remove('d-none');
        document.getElementById(m).classList.add('d-none');
    }else{
        e.id = 0;
        document.getElementById(v).classList.add('d-none');
        document.getElementById(m).classList.remove('d-none');
    }
}

$(document).ready(function(){
    $('#pagination').on('click','a',function(e){
       e.preventDefault(); 
       var pagno = $(this).attr('data-ci-pagination-page');
       loadTable(pagno);
    });
    
    loadTable(0);
    $('#search_text').keyup(function(){
      loadTable(0);
    });

    function loadTable(pagno){
       var search_text = $('#search_text').val();
       $.ajax({
         url: '<?=base_url()?>AdminArea/jsonSCY/'+pagno,
         type: 'get',
         data: {search_text:search_text},
         dataType: 'json',
         success: function(response){
            if($.trim(response.result) == ''){
                noResult();
            }else{
                $('#pagination').html(response.pagination);
                setData(response.result,response.row);
            }
         },error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log('fail',textStatus,errorThrown);
       }   
       });
    }

    function noResult(){
      $('#datatable').empty();
            var tr = "<div class='row p-1 mb-2'>"
                tr += "<div class='col text-center'> Tidak Ditemukan </div>"
                tr += "</div>"
      $('#datatable').append(tr);
    }

    // Create table list
    function setData(result,sno){
       sno = Number(sno);
       $('#datatable').empty();
       for(index in result){
       
          var kta  				    = result[index].kta;
          var gada_pratama          = result[index].gada_pratama;
          var nama                  = result[index].nama;
          var email                 = result[index].email;
          var no_telp               = result[index].no_telp;
          var tahun_pengalaman      = result[index].tahun_pengalaman;
          var division_name         = result[index].division_name;
          var id_member             = result[index].id_member;

          if(tahun_pengalaman.charAt(0) == '-'){
            var chevron = "<span class='badge badge-danger'> Belum Ada </span>";
          }else if (tahun_pengalaman.charAt(0) == "<") {
            var chevron = "<i class='fas fa-chevron-circle-left'></i>";
          }else{
            var chevron = "<i class='fas fa-chevron-circle-right'></i>";
          }


            var tpx = tahun_pengalaman.replace(/[^a-zA-Z0-9 ]/g, "");

          sno++;

              
              
            var tr = "<div class='row p-1 mb-2'>"
                tr += "<div class='col-1'>"+sno+".</div>"
                tr += "<div class='col'>"+nama+"</div>"
                tr += "<div class='col'>"+chevron+" "+tpx+"</div>"
                tr += "<div class='col'>"+no_telp+"</div>"
                tr += "<div class='col text-right'><button class='btn btn-primary btn-sm p-0 pl-1 pr-1' data-toggle='modal' data-target='#detail"+id_member+"'>Detail</button> <button class='btn btn-danger btn-sm p-0 pl-1 pr-1' data-kta = '"+kta+"' data-gp = '"+gada_pratama+"' onclick='openDoc(this)'>Lampiran</button></div>"
                tr += "</div>"

            $('#datatable').append(tr);
        }
    }

});
</script>

<?php 
    foreach ($data_all as $fetch) {
        $id_member              = $fetch['id_member'];
        $nama                   = $fetch['nama'];
        $tempat_lahir           = $fetch['tempat_lahir'];
        $tanggal_lahir_r        = date('d M Y', strtotime($fetch['tanggal_lahir']));
        $tanggal_lahir          = date('m/d/Y', strtotime($fetch['tanggal_lahir']));
        $jenis_kelamin          = $fetch['jenis_kelamin'];
        $provinsi               = $fetch['provinsi'];
        $kabupaten              = $fetch['kabupaten'];
        $kecamatan              = $fetch['kecamatan'];
        $desa_kelurahan         = $fetch['desa_kelurahan'];
        $rt                     = $fetch['rt'];
        $rw                     = $fetch['rw'];
        $no_telp                = $fetch['no_telp'];
        $email                  = $fetch['email'];
        $foto64                 = $fetch['foto64'];
        $tahun_pengalaman       = $fetch['tahun_pengalaman'];
        $vaksin64               = $fetch['vaksin64'];
        $created_at             = $fetch['created_at'];
        
        $tanggal_lahir = explode("/", $tanggal_lahir);
        $age = (date("md", date("U", mktime(0, 0, 0, $tanggal_lahir[0], $tanggal_lahir[1], $tanggal_lahir[2]))) > date("md")
          ? ((date("Y") - $tanggal_lahir[2]) - 1)
          : (date("Y") - $tanggal_lahir[2]));
 ?>
 <!-- Modal -->
<div class="modal fade" id="detail<?= $id_member ?>" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="mdetail" class="container p-3 pl-4" style="border:1px solid #ccc; border-radius: 10px;">
            <div class="row">
                <div class="col-md-4 p-0">
                    <img src="data:image/jpeg;base64, <?= $foto64 ?>" style="width: 100%;border-radius: 10px;max-height: 363px;">
                </div>
                <div class="col-md-8">
                    <div style="border:1px solid #ccc;border-radius: 10px;padding: 4.7px;max-height: 363px;padding-left: 20px;">
                    <h2><?=$nama?></h2>
                    Seorang <u><b><?=$jenis_kelamin?></b></u> yang berusia <u><b><?=$age?> Tahun</b></u>, Kelahiran <u><b><?=$tempat_lahir.', '.$tanggal_lahir_r?></b></u><br><br> Pengalaman : <u><b><?=$tahun_pengalaman?></b></u><br><br>Alamat:<br><b><?=$desa_kelurahan.', RT'.$rt.' / RW'.$rw.', Kec.'.$kecamatan.', '.$kabupaten.'-'.$provinsi?></b><br><br>Kontak: <br> <b class="badge badge-pill badge-primary"><?=$no_telp?></b> <b class="badge badge-pill badge-danger"><?=$email?></b><br><br>Terdaftar : <?= $created_at ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="svaksin" class="d-none container p-3 pl-4 pr-4" style="border:1px solid #ccc; border-radius: 10px;">
            <div class="row">
                <div class="col-md-12 p-0">
                    <img src="data:image/jpeg;base64, <?= $vaksin64 ?>" style="width: 100%;border-radius: 10px;max-height: 363px;">
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="0" onclick="showSvaksin(this,'svaksin','mdetail')" class="btn btn-info">Sertifikat Vaksin</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>