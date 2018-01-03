<!-- load header in page/header -->
@include('page/header')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- load sidebar in page/sidebar -->
@include('page/sidebar')
<script>
	function cek_kartu() {
		var nomor = $("#input_anggota").val();
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			type: "post",
//			dataType: "JSON",
			url: " {{URL::to('/get_kartu')}} ",
			data: {
				kartu: nomor
			},
			success: function(data) {
				$("#hasil_kartu").html(data);
			}
		})
		$("#hasil_kartu").empty();
	}

	function cek_buku() {
		var buku = $("#input_buku").val();
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			type: "post",
			//dataType: "JSON",
			url: "{{ URL::to('/get_buku') }}",
			data: {
				kode_buku: buku
			},
			success: function(data) {
				$("#hasil_buku").html(data);
				/* $.each(data, function(i, n){
				     $("#hasil_buku").append(
				         '<p>JUDUL BUKU : '+n.judul_buku+'</p><p>KATEGORI BUKU :'+n.kategori_buku+'</p><p>PENGARANG BUKU : '+n.pengarang_buku+'</p>'
				     )
				  })*/

			}
		});
		$("#hasil_buku").empty();
	}

</script>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Daftar peminjam</h4>
					</div>
					<div class="content">
						<div class="row">
							<div class="col-md-12">
								<label>Nomor kartu anggota</label>
								<div class="input-group">
									<input type="text" name="no_anggota" id="input_anggota" class="form-control" placeholder="Nomor keanggotaan" required>
									<span class="input-group-btn">
                                        <button class="btn btn-danger" onclick="cek_kartu()" type="button">CEK ANGGOTA</button>
                                    </span>
								</div>
								<div id="hasil_kartu"></div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<label>Kode buku</label>
								<div class="input-group">
									<input type="text" name="kode_buku" id="input_buku" class="form-control" placeholder="Kode buku" required>
									<span class="input-group-btn">
                                        <button class="btn btn-info" onclick="cek_buku()" type="button">CEK BUKU</button>
                                    </span>
								</div>
								<div id="hasil_buku"></div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<label>Dari tanggal</label>
								<div class="input-group">
									<input type="text" name="dari_tanggal" class="form-control" id="datepicker" required>
									<span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
							<div class="col-md-6">
								<label>Sampai tanggal</label>
								<div class="input-group">
									<input type="text" name="sampai_tanggal" class="form-control" id="datepicker2" required>
									<span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar" ></span>
									</span>

								</div>
								<small style="font-size:10px;">Max peminjaman 2 minggu</small>

							</div>
						</div>


						<button type="submit" id="tumbul" onclick="return hapus_confirm()" class="btn btn-info btn-fill pull-right">Submit</button>


						<div class="clearfix"></div>

						</form>




					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(function() {
		jQuery("#datepicker").datepicker({

			dateFormat: "dd-mm-yy",
			showAnim: "",
			minDate: -0,
			maxDate: "+1D",

		});

		jQuery("#datepicker2").datepicker({

			dateFormat: "dd-mm-yy",
			showAnim: "",
			minDate: -0,
			maxDate: "+2W",

		});
		var data = $("#input_nis").val();
		console.log(data);
	});

</script>
@include('page/footer')

</body>

<!--   Core JS Files   -->
@include('page/js')

</html>
