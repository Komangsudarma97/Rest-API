<!-- Default styling -->
<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Data Kategori</h5>
						<div class="heading-elements">
	                	</div>
					</div>

                    <a href="<?=site_url('admin/register3')?>">
                    <div class="text-left">
							<button type="submit" class="btn btn-danger">Tambah Kategori </button>
					</div></a>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr class="bg-blue">
                                    <th>Id Kategori</th>
                                    <th>Nama Kategori</th>
                                    <th></th>
								</tr>
							</thead>
							<?php foreach($daftar_kategori as $val){?>
                                <tr>
                                    <td><?=$val['id_kategori'];?></td>
                                    <td><?=$val['nama_kategori'];?></td>
                                    <td><a href="<?=site_url('admin/update_registerkategori/'.md5($val['id_kategori']))?>"><i class="icon-pencil6"></i></a>
                                    </td>
                                </tr>
                        <?php } ?>
                    </table>
                    <?php echo $this->pagination->create_links();?>
				<!-- /default styling -->
