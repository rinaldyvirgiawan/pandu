<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table" id="pandu" data-tables="true">
    <thead>
      <tr>
        <th>no</th>
        <th>nama</th>
        <th>umur</th>
        <th>action</th>
      </tr>
    </thead>

  </table>
</div>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
	$(function () {
		$('[data-tables=true]').on('click', '[data-button=delete-button]', function (e) {
			if (confirm('You are about to delete this row, are you sure ?')) {
				$.ajax({
					url: "{{ url("master_ppk")  }}/" + $(this).attr('data-id'),
					type: "POST",
					dataType: 'json',
					headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
					success: function (res) {
						loadData();
					},
					error: function (res) {
						window.alert(res.message);
					}
				})
			}
		});

		function loadData() {
			$('#pandu').DataTable({
				destroy: true,
				serverSide: true,
				processing: true,
				ajax: "{{url('/pandu/datatables')}}",
				columns: [
					{data: 'rownum', searchable: false},
					{data: 'nama'},
					{data: 'umur'},
					{data: 'action', name: 'action', orderable: false, searchable: false}
				],
				dom: "<'row'<'col-sm-6'i><'col-sm-6'f>><'table-responsive'tr><'row'<'col-sm-6'l><'col-sm-6'p>>",
                    language: {
                        paginate: {
                            previous: "&laquo;",
                            next: "&raquo;"
                        },
                        search: "_INPUT_",
                        searchPlaceholder: "Search"
                    },
                });
            }

            loadData();
        });
    </script>

</body>
</html>
