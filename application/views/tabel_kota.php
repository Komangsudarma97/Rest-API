<!-- Default styling -->
<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Data Kota</h5>
						<div class="heading-elements">
	                	</div>
					</div>

                    <a href="<?=site_url('admin/register4')?>">
                    <div class="text-left">
							<button type="submit" class="btn btn-danger">Tambah Kota </button>
					</div></a>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr class="bg-blue">
                                    <th>Nama Kota</th>
                                    <th>Ongkos Kirim</th>
                                    <th></th>
								</tr>
							</thead>
							<?php foreach($daftar_kota as $val){?>
                                <tr>
                                    <td><?=$val['nama_kota'];?></td>
                                    <td><?=$val['ongkos_kirim'];?></td>
                                    <td><a href="<?=site_url('admin/update_registerkota/'.md5($val['id_kota']))?>"><i class="icon-pencil6"></i></a>
                                    </td>
                                </tr>
                        <?php } ?>
                    </table>
                    <?php echo $this->pagination->create_links();?>
				<!-- /default styling -->
