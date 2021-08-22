$(document).ready(function(){
        <?php if ($this->session->flashdata('alert')=='406') { ?>
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'No direct access allowed!',
          })
        <?php } ?>
        <?php if ($this->session->flashdata('status')=='sent' || $this->session->flashdata('alert')=='200') { ?>
           Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: 'Data berhasil dikirim!',
          })
        <?php } ?>
        <?php if ($this->session->flashdata('status')=='notsent') { ?>
          Swal.fire({
            icon: 'error',
            title: 'Oh tidak !',
            text: 'Data gagal dikirim!',
          })
        <?php } ?>
        $('#tokenBtn').click(function(){
          Swal.fire({
            title: 'Masukan Token',
            input: 'text',
            inputAttributes: {
              autocapitalize: 'off'
            },
            showCancelButton: true,
            confirmButtonText: 'Submit',
            showLoaderOnConfirm: true,
            preConfirm: (login) => {
              return fetch(`//lpk.mardizu.co.id/p/valid_token/${login}`)
                .then(response => {
                  if (!response.ok) {
                    throw new Error(response.form_code)
                  }
                  return response.json()
                })
                .catch(error => {
                  Swal.showValidationMessage(
                    `Token tidak valid`
                  )
                })
            },
            allowOutsideClick: () => !Swal.isLoading()
          }).then((result) => {
            if (result.value) {
              Swal.fire({
                title: 'Token Valid',
                text: 'Klik Ok Untuk Melanjutkan',
                icon: 'success',
              }).then(function(){
                window.location.href = `<?php echo site_url('p/redirect_online/')?>${result.value.id_code}`
              });
            }
          })
        });

        $('#tokenBtn2').click(function(){
          window.location.href = '<?php echo site_url('p/pre_test') ?>';
        });

        function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
              $('#vFoto').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]); // convert to base64 string
          }
        }

        $(".foto").change(function() {
          var file = this.files[0].size/1024/1024;
          if(file < 2.048){
            $(".alertfile").html("<span class='alert alert-success' style='padding:5px;width:100%'> Berhasil Upload </span>");
            document.getElementById('fotoDiri').style.background = '#ffcd47';
            readURL(this);
          }else{
            $('#vFoto').attr('src', 'https://fkh.unud.ac.id/app/webroot/img/bg/user.jpg');
            $("#alert_file").css({"display":"block","margin-top":"8px","opacity":"0.8"});
            document.getElementById('fotoDiri').style.background = '#3498db';
            $(this).val("");
          }
        });

      });