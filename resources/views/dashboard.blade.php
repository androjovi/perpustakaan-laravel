<!-- load header in page/header -->
@include('page/header')

<!-- load sidebar in page/sidebar -->
@include('page/sidebar')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/r-2.2.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/jq-3.2.1/dt-1.10.16/r-2.2.1/datatables.min.js"></script>

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
<!-- Load message session here coy -->
				<div class="card card-plain table-plain-bg">
					<div class="card-header ">
						<a href="{{ URL::to('/tambah_buku') }}" class="btn btn-primary btn-sm pull-right">Tambah buku</a>
						<h4 class="card-title">List buku tersimpan</h4>
						<p class="card-category"></p>
					</div>
					<div class="card-body table-full-width table-responsive">
						<table class="table table-hover" id="dt">
							<thead>
								<th>Kode buku</th>
								<th>Judul</th>
								<th>Kategori</th>
								<th>Pengarang</th>
								<th>Penerbit</th>
								<th>Aksi</th>
							</thead>
							<tbody>
								@foreach ($query as $k)
								<tr>
									<td>{{ $k->kode_buku }}</td>
									<td>{{ $k->judul_buku }}</td>
									<td>{{ $k->kategori_buku }}</td>
									<td>{{ $k->pengarang_buku }}</td>
									<td>{{ $k->penerbit_buku }}</td>
									<td><a id="hapus" href="{{ URL::to('/hapus_buku/'.$k->id) }}" class="btn btn-danger btn-xs ssd">HAPUS</a></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

 <script>
        jQuery(document).ready(function($){
            $('.ssd').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                        title: 'Alert',
                        text: 'Hapus Data?',
                        html: true,
                        confirmButtonColor: '#d9534f',
                        showCancelButton: true,
                        },function(){
                        window.location.href = getLink
                    });
                return false;
            });
			$("#dt").dataTable();
        });
	 
    </script>
@include('page/footer')

</body>

<!--   Core JS Files   -->
@include('page/js')

</html>
