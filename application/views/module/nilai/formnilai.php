<div class="row">
    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_title">
          <h2><?= $page ?></h2>
            <ul class="nav navbar-right panel_toolbox">
             <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
             <li><a class="close-link"><i class="fa fa-close"></i></a></li>
             </ul>
             <div class="clearfix"></div>
             </div>
            <div class="x_content">
            <!-- content starts here -->
<form class="" method="post" enctype="multipart/form-data" action="">
<?php print_r($query);?>
<div id="error" data-error="<?=validation_errors();?>"></div>
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('sukses');?>"></div>
<input type="hidden" name="id_nilai" value="<?= $query->id_nilai; ?>">
	<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_ppdb">Nama Calon Peserta Didik Baru <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
        <select id="" name="ppdb_id" class="ex-select2 form-control">
        <option>pilih</option>
       <?php foreach ($ppdb as $key): ?>
       <option value="<?= $key->id_ppdb; ?>" <?= $key->id_ppdb == $query->ppdb_id ? 'selected' : null ;?>><?= $key->nama_ppdb;?></option>
       <?php endforeach; ?>
        </select>
    </div>
  </div>
		<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="jum_nilai">Nilai Peserta <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 ">
      <input type="text" id="jum_nilai" name="jum_nilai" value="<?= $query->jum_nilai; ?>" class="form-control" >
    </div>
  </div>
	  <div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Status Seleksi <span class="required">*</span></label>
    <?php $seleksi = $this->input->post('status_ppdb') ? $this->input->post('status_ppdb') : $query->status_ppdb; ?>
    <div class="col-md-6 col-sm-6 ">
      <div id="seleksi" class="btn-group" data-toggle="buttons">
        <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
          <input type="radio" name="status_ppdb" value="lulus"<?= $seleksi == 'lulus' ? 'checked' : null; ?> class="join-btn"> &nbsp; Lulus &nbsp;
        </label>
        <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
          <input type="radio" name="status_ppdb" value="tidak lulus"<?= $seleksi == 'tidak lulus' ? 'checked' : null; ?> class="join-btn">Tidak Lulus 
        </label>
      </div>
    </div>
  </div>
  <div class="ln_solid"></div>
  <div class="item form-group">
    <div class="col-md-6 col-sm-6 offset-md-3">
      <button class="btn btn-primary" type="button">Cancel</button>
      <button class="btn btn-primary" type="reset">Reset</button>
      <button type="submit" name="<?= $submit; ?>" class="btn btn-success">Submit</button>
    </div>
  </div>
 </form>
      </div>
      </div>
    </div>
 </div>
<