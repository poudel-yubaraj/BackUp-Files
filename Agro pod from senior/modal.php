<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modal</title>
</head>
<body>
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"> Best Farmer Scholarship </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <img src="notices/images/<?php  if(isset($_SESSION['noticefilename'])){ echo $_SESSION['noticefilename'];}?>" alt="sample modal content" style="height: 400px;width: 100%;">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <a href="images/samplemodalcontent.jpg" download> <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Donload</button>
        </a>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</body>
</html>