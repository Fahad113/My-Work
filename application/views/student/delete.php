
<?php echo validation_errors(); ?>

<?php echo form_open('student/delete') ?>
<HTML>
	<body>
		<table BORDER="1" align="center" cellspacing="5">
			<caption><h2>Delete Student </h2></caption>
				<tr>
					<td><label for="name">Enter Student Id </label></td>
					<td><input type="input" name="id" /><br /></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="submit" value="Delete" /></td>
				</tr>
		</table>
	</body>
</HTML>
</form>