<?php
$conn = mysqli_connect("localhost", "root", "", "jobproject");
if (mysqli_errno($conn)) {
  echo "failed to connect to DB" . mysqli_errno($conn);
  mysqli_close($conn);
}
