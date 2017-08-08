<?php
	include_once '../fejlec.php';
	
	$entity = null;
	if($_GET['id'] == -1) {
		$entity = new SysTodo();
		$entity -> setAllapotCd(1);
	} else {
		$entity = SysTodo::find($_GET['id']);
	}
	
	$mdDao = new MasterDataDao();
	$todoAllapotList = $mdDao -> getMdListByGroupName('TODO_ALLAPOT');
	
?>

<script type="text/javascript">
	$( document ).ready(function() {
		$("#btnCancel").click(function() {
			window.location = 'todoList.php';
		});

		$("#allapotCd").select2({
			placeholder: "Kérem válasszon!",
			allowClear: true
		});

	});

</script>

<body>
	<h1>hunjoy - ToDoHacerIdeasRecuerdos</h1>
	
	<input type="button" id="btnCancel" value="Bezárás" />
	
	<form method="post">
		<table>
			<tr>
				<td>
					<label>Javaslat:</label> 
				</td>
				<td>
					<textarea name="javaslat"><?php echo $entity -> getJavaslat(); ?></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<label>Hiba:</label> 
				</td>
				<td>
					<input type="radio" name="hiba10" value="true" <?php if($entity -> isHiba10()) echo 'checked="checked"' ?> >Igen<br>
					<input type="radio" name="hiba10" value="false" <?php if(!$entity -> isHiba10()) echo 'checked="checked"' ?> >Nem<br>
				</td>
			</tr>
			<tr>
				<td>
					<label>Állapot:</label> 
				</td>
				<td>
					<select name = "allapotCd" id = "allapotCd" disabled="disabled">
						<option></option>
						<?php
							if($todoAllapotList != null) {
								foreach ($todoAllapotList AS $value) {
									if($entity -> getAllapotCd() != null && $value -> getId() == $entity -> getAllapotCd()){
										echo '<option selected="true" value="'.$value -> getid().'">'.$value -> getCimke().'</option>';
									} else {
										echo '<option value="'.$value -> getid().'">'.$value -> getCimke().'</option>';
									}
								}
							}
						?>
					</select>
				</td>
			</tr>
		</table>
	</form>
</body>

<?php include_once '../lablec.php'; ?>