<!-- Default styling -->
<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Data Login</h5>
						<div class="heading-elements">
	                	</div>
					</div>

                    <a href="<?=site_url('admin/register2')?>">
                    <div class="text-left">
							<button type="submit" class="btn btn-danger">Tambah User Login </button>
					</div></a>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr class="bg-blue">
                                    <th>Id Customer</th>
                                    <th>Nama Customer</th>
                                    <th>Password</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Nomer Telepon</th>
                                    <th>Id Kota</th>
                                    <th></th>
								</tr>
							</thead>
							<?php foreach($daftar_login as $val){?>
                                <tr>
                                    <td><?=$val['id_costomer'];?></td>
                                    <td><?=$val['nama_costomer'];?></td>
                                    <td><?=$val['password'];?></td>
                                    <td><?=$val['alamat'];?></td>
                                    <td><?=$val['email'];?></td>
                                    <td><?=$val['no_telp'];?></td>
                                    <td><?=$val['id_kota'];?></td>
                                    <td><a href="<?=site_url('admin/update_registerlogin/'.md5($val['id_kategori']))?>"><i class="icon-pencil6"></i></a>
                                    </td>
                                </tr>
                        <?php } ?>
                    </table>
                    <?php echo $this->pagination->create_links();?>
				<!-- /default styling -->
