<?php

class Task extends DB
{


	function getTask()
	{

		$query = "SELECT * FROM tb_to_do";


		return $this->execute($query);
	}

	//input data
	function addTask($tname, $tdetails, $tsubject, $tpriority, $tdeadline)
	{

		$query = "INSERT INTO tb_to_do (name_td, details_td, subject_td, priority_td, deadline_td, status_td)
		VALUES ('$tname', '$tdetails', '$tsubject', '$tpriority', '$tdeadline', 'Belum')";

		return $this->execute($query);
	}

	//hapus data
	function deleteTask($id)
	{

		$query = "DELETE FROM tb_to_do WHERE id = $id";


		return $this->execute($query);
	}

	//Data selesai
	function doneTask($id)
	{

		$query = "UPDATE tb_to_do SET status_td = 'Sudah' WHERE id = $id";

		return $this->execute($query);
	}

	//sorting 
	function sort($base)
	{
		$query = "SELECT * FROM tb_to_do ORDER BY $base ASC";

		return $this->execute($query);
	}
}
