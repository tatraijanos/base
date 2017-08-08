<?php
	include_once './fejlec.php';

	require_once 'src/allandok.php';

	$idx = new Index();
	
	class Index {
		public function belep() {
			if(!empty($_POST['usr']) && !empty($_POST['psw'])) {
				$sysUserService = SysUserServiceImpl::getInstance();
				try {
					if($sysUserService -> validUser($_POST['usr'], sha1($_POST['psw']))) {
						$_SESSION['projectKod'] = 'MEMO';
						header("Location: webapp/menu.php");
					}
				} catch (Exception $e) {
					throw new LoginException($e -> getMessage());
				}
			} else {
				throw new LoginException("Kérem tőltse ki a Felhsználó és Jelszó mezőket!");
			}
		}
		
		public function getHibaEllenoriz() {
			if(!empty($_GET['errorCode'])) {
				if($_GET['errorCode'] == 1) {
					throw new LoginException("Még nem jelentkeztél be a rendszerbe vagy lejárt a munkameneted!");
				}
			}
		}
		
	}
?>

<body>
	<h1>hunjoy - ToDoHacerIdeasRecuerdos</h1>
	<fieldset>
		<legend>Bejelentkezés</legend>
		<form method="post">
			<table>
				<tr>
					<td>
						<label>Felhsználó:</label> 
					</td>
					<td>
						<input type="text" name="usr" value="<?php if(isset($_POST['usr'])) echo $_POST['usr']; ?>" />
					</td>
				</tr>
				<tr>
					<td>
						<label>Jelszó:</label> 
					</td>
					<td>
						<input type="password" name="psw" />
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="belep" value="Bejelentkezés" class="menuButton" />
					</td>
				</tr>
			</table>
			<?php 
				try {
					$idx -> getHibaEllenoriz();
				} catch (LoginException $e) {
					print_r($e -> getMessage());
				}
				if(isset($_POST['belep'])) {
					try {
						$idx -> belep();
					} catch (LoginException $le) {
						print_r($le -> getMessage());
					}
				}
			 ?>
		</form>
	</fieldset>	
</body>

<?php include_once './lablec.php'; ?>