<?php
	require_once dirname(dirname(__FILE__)).'/src/allandok.php';

	$tl = new TodoList();
	
	class TodoList {
		public function initList() {
			$htmlResult = '';
			
			foreach (SysTodosView::find('all') as $value) {
				$htmlResult .= '<tr>';
				$htmlResult .= '<td>'.$value -> getId().'</td>';
				$htmlResult .= '<td>'.$value -> getJavaslat().'</td>';
				$htmlResult .= '<td>'.$value -> getHiba().'</td>';
				$htmlResult .= '</tr>';
			}
			
			return $htmlResult;
		}
	}

?>

<script type="text/javascript">
	$( document ).ready(function() {
		$('#tbl_megtekinthet tfoot th').each(function() {
			$(this).html( '<input type="search" placeholder="Keresés" style="width: 50%;" />' );
		});

		var table = $('#tbl_megtekinthet').DataTable({
			"sScrollX": "100%",
			"bScrollCollapse": true,

			"order": [[ 1, "desc" ]],

			"fnRowCallback" : function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
				$(nRow).attr("id", aData[0]);
			}
		});

		table.columns().every(function() {
			var that = this;
			$('input', this.footer()).on('keyup change', function() {
				if ( that.search() !== this.value ) {
					that.search( this.value ).draw();
				}
			});
		});

		$('#tbl_megtekinthet tbody').on( 'click', 'tr', function () {
			$('tr').removeClass('selected');
			$(this).addClass('selected');
			selectedId = $(this).attr('id');
		});


		$("#tbl_megtekinthet tbody").dblclick(function() {
			if(selectedId != undefined){
				window.location = 'todoForm.php?id=' + selectedId;
			}
		});

		$("#btnCreateRecord").click(function() {
			window.location = 'todoForm.php?id=-1';
		});

	});

</script>
	
<body>
	<h1>hunjoy - ToDoHacerIdeasRecuerdos</h1>
	
	<input type="button" id="btnCreateRecord" value="Felvitel" />
		
	<table id="tbl_megtekinthet" class="display">
		<thead>
			<tr>
				<th>Azonosító</th>
				<th>Javaslat</th>
				<th>Hiba</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th></th>
				<th></th>
				<th></th>
			</tr>
		</tfoot>
		<tbody>
			<?php echo $tl -> initList();?>
		</tbody>
	</table>
</body>