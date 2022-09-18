<div class="col-md-9">
	<br/>
	<div class="panel panel-default">
		<div class="panel-heading">
			<i class="fa fa-book" aria-hidden="true"></i> Paper Submission
		</div>
		<div class="panel-body">
			<table class="table table-striped table-bordered">
				<tr>
					<td>Name</td>
					<td>: <?=$data->row()->nama_pendaftar?></td>
				</tr>
				<tr>
					<td>Nationality</td>
					<td>: <?=$data->row()->nama_negara?></td>
				</tr>
				<tr>
					<td>Phone Number</td>
					<td>: <?=$data->row()->no_hp?></td>
				</tr>
				<tr>
					<td>E-Mail</td>
					<td>: <?=$data->row()->email?></td>
				</tr>
				<tr>
					<td>Excursion </td>
					<td>: <?=$data->row()->join_excursion?></td>
				</tr>
				<tr>
					<td>Payment Fees </td>
					<td>: 
						<?php if($data->row()->bukti_bayar == '' || $data->row()->bukti_bayar === Null){ echo 'Not Uploaded';}else{?>
						<a href="<?=base_url()?>assets/file_upload/foto/<?=$data->row()->bukti_bayar?>" target="_blank">View</a>
						<?php }?>
					</td>
				</tr>
				<?php //if($data->row()->bukti_bayar != '' || $data->row()->bukti_bayar !== Null){?>
				<tr>
					<td>Payment Status </td>
					<td>: 
						<?php if($data->row()->verifikasi_bukti_bayar == '' || $data->row()->verifikasi_bukti_bayar === Null){ echo 'Belum diverifikasi ';}else{
						    echo $data->row()->verifikasi_bukti_bayar;
						}?>
						<button type="button" class="btn btn-success btn-verif-payment" id="<?=$data->row()->id_pendaftar?>">Verifikasi</button>
					</td>
				</tr>
				<?php //}?>
			</table>
			<table class="table table-striped">
				<thead> 
					<tr>
						<th>#</th>
						<th>File Type</th>
						<th>File</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1.</td>
						<td>Full Paper</td>
						<?php if($data->row()->full_paper != '' ){?>
						<td>
							<a href="<?=base_url()?>assets/file_upload/foto/<?=$data->row()->full_paper?>" target="_blank">
								<i class="fa fa-file-pdf-o" aria-hidden="true" ></i>
							</a>
						</td>
						<?php }else{ ?>
						<td>
							Not Attached
						</td>
						<?php }?>
					</tr>
					<tr>
						<td>2.</td>
						<td>Abstract</td>
						<?php if($data->row()->abstract != '' ){?>
						<td>
							<a href="<?=base_url()?>assets/file_upload/foto/<?=$data->row()->abstract?>" target="_blank">
								<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
							</a>
						</td>
						<?php }else{ ?>
						<td>
							Not Attached
						</td>
						<?php }?>
					</tr>
				</tbody>
			</table><hr/>

			<?php if($data->row()->file_revisi !== NULL || $data->row()->file_after_revisi !== NULL ){ ?>
			<h4>Revition</h4><hr/>
			<table class="table table-striped">
				<tr>
					<th>No</th>
					<th>Note</th>
					<th>File</th>
				</tr>
				<tr>
					<td>1.</td>
					<td>Revisions Papers</td>
					<td>
						<?php if($data->row()->file_revisi !== NULL){?>
						<a href="<?=base_url()?>assets/file_upload/foto/<?=$data->row()->file_revisi?>" target="_blank">
							<i class="fa fa-file-pdf-o" aria-hidden="true" ></i>
						</a>
						<?php } else { echo 'belum ada';}?>
					</td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Revised Paper</td>
					<td>
						<?php if($data->row()->file_after_revisi !== NULL){?>
						<a href="<?=base_url()?>assets/file_upload/foto/<?=$data->row()->file_after_revisi?>" target="_blank">
							<i class="fa fa-file-pdf-o" aria-hidden="true" ></i>
						</a>
						<?php } else { echo 'belum ada';}?>
					</td>
				</tr>
			</table>
			<?php }?>

			<form enctype="multipart/form-data" method="POST" action="<?=base_url()?>user/simpan_paper_submission">
				<div class="form-group">
					<label>Title</label>
					<input type="text" name="title" id="title" class="form-control" required value="<?=$data->row()->tittle?>" />
				</div>
				<div class="form-group">
					<label>Keyword</label>
					<input type="text" name="keyword" id="keyword" class="form-control" required value="<?=$data->row()->keyword_abstract?>" />
				</div>
				<div class="form-group">
					<label>Group Session</label>
					<select name="category" id="category" class="form-control" required >
						<option value="">--Select--</option>
						<?php foreach($topics as $row){?>
						<option value="<?=$row->id_topics?>" <?php if($data->row()->id_topics == $row->id_topics){ echo 'selected'; }?> ><?=$row->title?></option>
						<?php }?>
					</select>
				</div>
				<div class="form-group">
					<label>Abstract Text</label>
					<textarea class="form-control" name="abstract_text1" id="abstract_text1" required><?=$data->row()->abstract_text?></textarea>
				</div>
			</form>

			<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
</div>

<!-- Modal -->
<div id="modal_verifikasi_payment" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Verifikasi Pembayaran</h4>
      </div>
      <div class="modal-body">
      	<form id="form_upload_verifikasi_payment">
	        <div class="form-group">
	        	<label>Status Pembayaran:</label>
	        	<input type="hidden" id="id_pendaftar" name="id_pendaftar"/>
	        	<select class="form-control" name="status_nya" id="status_nya" required>
	        		<option value="">--Select--</option>
	        		<option value="Valid">Valid</option>
	        		<option value="Not Valid">Not Valid</option>
	        	</select>
	        </div>
			
	        <button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Save</button>
	    </form>
	    <div class="notif_upload_verifikasi"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>  

