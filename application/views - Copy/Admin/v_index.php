<?php $pelamar=$this->db->get('tbl_pelamar')->result_array(); ?>
<?php $pelamar2=$this->db->get('tbl_pelamar')->result_array(); ?>
<?php 
  foreach ($pelamar as $pelamar){
    if($pelamar['f_hasil_test']<60){
        $tl[]=$pelamar['f_hasil_test'];
      }
    }
    $tdk_lulus=count($tl);
    $lulus=count($pelamar2)-$tdk_lulus;
?>


<!--/.Carousel Wrapper-->
<div class="container mt-4">
  <div class="row">

    <div class="col-4">
      <div class="container">
        <div class="card" style="height: 380px;">
          <div class="card-header">
            <h5 class="font-weight-bold">TOTAL PELAMAR</h5>
          </div>
          <div class="card-body">
            <div class="text-white d-flex align-items-center justify-content-center rgba-black-strong p-2" style="height: 280px;">
                <div>
                  <strong style="font-size: 100px;"><?= count($pelamar); ?></strong>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="container">
        <div class="card" style="height: 380px;">
          <div class="card-header">
            <h5 class="font-weight-bold">DAFTAR YANG GAGAL</h5>
          </div>
          <div class="card-body">
            <div class="text-white d-flex align-items-center justify-content-center rgba-black-strong p-2" style="height: 280px;">
                <div>
                  <strong style="font-size: 100px;"><?= $tdk_lulus; ?></strong>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="container">
        <div class="card" style="height: 380px;">
          <div class="card-header">
            <h5 class="font-weight-bold">DAFTAR YANG LULUS</h5>
          </div>
          <div class="card-body">
            <div class="text-white d-flex align-items-center justify-content-center rgba-black-strong p-2" style="height: 280px;">
                <div>
                  <strong style="font-size: 100px;"><?= $lulus; ?></strong>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>