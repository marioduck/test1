<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php find_selected_page(); ?>
<?php include("includes/header.php"); ?>

<table id="structure">
	<tr>
		<td id="navigation">
				<?php echo navigation($sel_subject, $sel_page); ?>
				<br/>
				<a href="new_subject.php">+ Add a new subject</a>
		</td>
		<td id="page">
			<h2>
				<?php
						if(isset($_GET['subj'])) {
								echo $sel_subject['menu_name'] . "</h2>";
						} elseif (isset($_GET['page'])) {
								echo $sel_page['menu_name'] . "</h2>";
								echo "<div class=\"page-content\">";
								echo $sel_page['content'];
								echo "</div>";
						}
				?>
			
			
			<?php
				
				//echo $sel_page . "<br/>";
			?>
		</td>
	</tr>
</table>

<?php require("includes/footer.php"); ?>
