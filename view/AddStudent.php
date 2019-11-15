
<div>
	<h1 align="center">ลงทะเบียนนักศึกษา</h1>

	<div id="body" align="center">
	<form action="../control/addStudent.php" method="post" enctype="multipart/form-data">
	<table style="width:50%" border="0">
	<tr>
		<th colspan="2"></th>
		<th></th>
	</tr>
	<tr>
		<td>รหัสนักศึกษา </td>
		<td>
			<input type="text" name="stu_id" placeholder="รหัสนักศึกษา">
		</td>
	</tr>
    <tr>
		<td>เพศ</td>
		<td>
		<select name="gender">
			<option value="1">ชาย</option>
			<option value="2">หญิง</option>
			<option value="3">อื่น ๆ</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>ชื่อ - นามสกุล</td>
		<td>
			<input type="text" name="stu_name" placeholder="ชื่อ - นามสกุล">
		</td>
	</tr>
	<tr>
		<td>สาขา</td>
		<td>
		<input type="text" name="stu_major" placeholder="สาขา">		
		</td>
	</tr>
	
	
	<tr>
		<td>คณะ </td>
		<td>
        <input type="text" name="stu_faculty" placeholder="คณะ">	
		</td>
	</tr>	
	<tr>
		<td>รูป </td>
		<td>
			<input name="stu_image" type="file">
		</td>
	</tr>	
	<tr>
		<td> 
			
		</td>
		<td>
		  <input type="submit" value="ลงทะเบียนร้าน"><input type="reset" name="เคลียร์ข้อมูล">
		</td>
	</tr>	

	</table>
	</form>
	</div>

	
</div>
