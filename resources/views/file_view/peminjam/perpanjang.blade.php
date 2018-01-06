<!-- load header in page/header -->
@include('page/header')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- load sidebar in page/sidebar -->
@include('page/sidebar')
<script>
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	function cek_kartu() {
		var nomor = $("#input_anggota").val();
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
					{{ Form::open(['url' => "/proses_perpanjang", 'method' => 'post']) }}
					<div class="content">
						<div class="row">
							<div class="col-md-6">
					@foreach($query as $k)			
								<h5>Dari tanggal : {{ $k->dari_tanggal }} | Sampai tanggal : {{ $k->sampai_tanggal }} </h5>
								<label>Sampai tanggal</label>
									<input type="text" style="display:none;" name="kde" value="{{ $k->id }}" required>
								<div class="input-group">
									<input type="text" name="sampai_tanggal" class="form-control" id="datepicker2" required>
									<span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar" ></span>
									</span>

								</div>
								<small style="font-size:10px;">Max peminjaman 2 minggu</small>

							</div>
						</div>

						@endforeach
						<button type="submit" id="tumbul" class="btn btn-info btn-fill pull-right">Submit</button>


						<div class="clearfix"></div>

						</form>



&copy; Andro;
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(function() {
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
