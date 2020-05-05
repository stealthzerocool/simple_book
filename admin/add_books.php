<?php
if(isset($add))
{
	$sql=mysqli_query($con,"select * from book where Book_id='$bno'");
	if(mysqli_num_rows($sql))
	{
	echo "this book is already added";
	}
	else
	{
	mysqli_query($con,"insert into book values('$bno','$name','$type','$author','$price','$details')");
	echo "Book added successfully";
	}
}
?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">

	<tr>
		<th>Book No</th>
		<td><input type="text" name="bno"  class="form-control"/>
		</td>
	</tr>

	<tr>
		<th>Book Name</th>
		<td><input type="text" name="name"  class="form-control"/></td>
	</tr>

	<tr>
		<th>Book Genre</th>
		<td><input type="text" name="type"  class="form-control"/>
		</td>
	</tr>

	<tr>
		<th>Author Name</th>
		<td><input type="text" name="author"  class="form-control"/></td>
	</tr>


	<tr>
		<th>Price</th>
		<td><input type="text" name="price"  class="form-control"/>
		</td>
	</tr>

	<tr>
		<th>Details</th>
		<td><textarea name="details"  class="form-control"></textarea>
		</td>
	</tr>


	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Add Book Details" name="add"/>
		</td>
	</tr>
</table>
</form>
