<?php $__env->startSection('content'); ?>
<h1>Tunjangan Pegawai</h1>
<a  href="<?php echo e(url('tunjanganp/create')); ?>" class="btn btn-success  form-control">Tambah</a>
	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Kategori Tunjangan</th>
				<th>Nama Pegawai</th>
				<th colspan="1"><center>Action</center></th>
			</tr>
		</thead>
		<?php  $no=1;  ?>
		<tbody>
			<?php $__currentLoopData = $tunjanganp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr>
				<td><?php echo e($no++); ?></td>
				<td><?php echo e($data->kode_tunjangan_id); ?></td>
				<td><?php echo e($data->pegawai->user->name); ?></td>
				
					
				</td>
				<td>
					<?php echo Form::open(['method'=>'DELETE','route'=>['tunjanganp.destroy',$data->id]]); ?>

					<?php echo Form::submit('Delete',['class'=>'btn btn-danger']); ?>

					<?php echo Form::close(); ?>

				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</tbody>
	</table>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>