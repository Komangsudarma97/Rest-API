<!-- Default styling -->
<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Data Produk</h5>
						<div class="heading-elements">
	                	</div>
					</div>

                    <a href="<?=site_url('admin/register')?>">
                    <div class="text-left">
							<button type="submit" class="btn btn-danger">Tambah Produk </button>
					</div></a>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr class="bg-blue">
                                    <th>Id Produk</th>
                                    <th>Nama Kategori</th>
                                    <th>Nama Produk</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
								</tr>
							</thead>
							<?php foreach($daftar_produk as $val){?>
                                <tr>
                                    <td><?=$val['id_produk'];?></td>
                                    <td><?=$val['nama_kategori'];?></td>
                                    <td><?=$val['nama_produk'];?></td>
                                    <td><?=$val['deskripsi'];?></td>
                                    <td><?=$val['harga'];?></td>
                                    <td><?=$val['stok'];?></td>
                                    <td><img width="80" src="<?=base_url('media/images/'. $val['gambar']);?>"></td>
                                    <td>
                                    <a href="<?=site_url('admin/update_register/'.md5($val['id_kategori']))?>"><i class="icon-pencil6"></i></a>
                                    <a href="<?=site_url('admin/delete/'.md5($val['id_produk']))?>"onclick="return confirm('yakin ingin menghapus data ini');" class="glyphicon glyphicon-trash"></i></a>
                                    </td>
                                </tr>
                        <?php } ?>
                    </table>
                    <?php echo $this->pagination->create_links();?>
				<!-- /default styling -->
