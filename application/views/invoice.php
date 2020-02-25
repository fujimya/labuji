<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Invoice</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/Invoice/style.css">
	<script src="<?php echo base_url(); ?>assets/Invoice/script.js"></script>
</head>
<body>
	<header>
		<h1>Invoice</h1>
		<address contenteditable>
			<?php foreach ($uji as $uj) {?>
				<p><?php echo $uj->nama; ?></p>
				<p><?php echo $uj->alamat; ?></p>
				<p><?php echo $uj->nope; ?></p>
			<?php }?>
		</address>
		<span><img alt="" src="logo.png"><input type="file" accept="image/*"></span>
	</header>
	<article>
		<address contenteditable>
			<p>LAB UBL<br>TEKNIK SIPIL</p>
		</address>
		<table class="meta">
			<?php foreach ($uji as $uj) {?>
				<tr>
					<th><span contenteditable>Invoice #</span></th>
					<td><span contenteditable><?php echo $uj->faktur; ?></span></td>
				</tr>
				<tr>
					<th><span contenteditable>Tanggal</span></th>
					<td><span contenteditable><?php echo $uj->tanggal_uji; ?></span></td>
				</tr>
				<tr>
					<th><span contenteditable>Biaya</span></th>
					<td><span id="prefix" contenteditable>Rp </span><span><?php echo number_format($uj->harga,0,',','.'); ?></span></td>
				</tr>
			<?php }?>
		</table>
		<table class="inventory">
			<thead>
				<tr>
					<th>Kategori Pengujian</th>
					<th>Nama Pengujian</th>
					<th>Harga</th>
					<th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($uji as $uj) {?>
					<tr>
						<td><?php echo $uj->kategori; ?></td>
						<td><?php echo $uj->item_uji; ?></td>
						<td>Rp <?php echo number_format($uj->harga,0,',','.'); ?></td>
						<td><?php echo $uj->keterangan; ?></td>

					</tr>
				<?php } ?>
			</tbody>
		</table>
		<table class="balance">
			<?php foreach ($uji as $uj) {?>
			<tr>
				<th><span contenteditable>Total</span></th>
				<td><span data-prefix>Rp <?php echo number_format($uj->harga,0,',','.'); ?></span></td>
			</tr>
			<?php } ?>
		</table>
	</article>
	<aside>
		<h1><span contenteditable></h1>
		<div contenteditable>
			<p>Tranfer : Bank-001030400</p>
		</div>
	</aside>
</body>
<script type="text/javascript">
<!--
window.print();
//-->
</script>
</html>