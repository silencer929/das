<?php
							include('config.php');
							if(isset($_GET['id'])){
								$id=$_GET['id'];
							// sql to delete a record
							$sql = "DELETE FROM booking WHERE booking_id=$id";
							if (mysqli_query($conn, $sql)) {
							    echo "<script>alert('Your booking has been Canceled!');</script>";
							    header("location: dashboard.php");
							} else {
							     echo "<script>alert('There was an Error')<script>";
							}

							mysqli_close($conn);
						}
					?> 