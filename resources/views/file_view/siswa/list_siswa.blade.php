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
					<i class="pe-7s-attention"></i> <i>Anda tidak memiliki hak untuk mengubah data</i>
					<div class="card-header ">
						<h4 class="card-title">Siswa terdaftar</h4>
						<p class="card-category"></p>
					</div>
					<div class="card-body table-full-width table-responsive">
						<table class="table table-hover" id="dt">
							<thead>
								<th>NIS</th>
								<th>Nama</th>
								<th>Kelas</th>	
								<th>Jurusan</th>
							</thead>
							<tbody>
								@foreach ($query as $k)
								<tr>
									<td>{{ $k->nis }}</td>
									<td>{{ $k->nama }}</td>
									<td>{{ $k->kelas }}</td>
									<td>{{ $k->jurusan }}</td>
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
