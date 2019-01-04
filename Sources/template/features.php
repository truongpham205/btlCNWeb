<!DOCTYPE html>
<?php
require('config.php');
mysqli_set_charset($connect, 'UTF8');
 ?>

		<!-- End Header -->

		<main class="page">
	 	<section>
	 		<div class="container">
		        <div class="row">
              <div class="col-md-12 text-center">
                <h2>Danh sách truyện</h2>
              </div>
		        </div>
		        <div>
		        	<form action="index.php" method="post">
		        		<div class="row">
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Nhập tên truyện" name="timkiem">
                  </div>
                  <div class="col-md-4" style="margin-right: -30px">
                    <select class="form-control" name="danhmuc">
                      <?php
                        $result = mysqli_query($connect, "select * from groupstory");
                        while($data = mysqli_fetch_assoc($result)){
                          echo "<option value='$data[ID]'>$data[Name]</option>";
                        }
                      ?>
                        </select>
                  </div>
                  <div class="col-md-2">
                    <button type="submit" class="btn btn-primary btn-block" name="click">Tìm kiếm</button>
                  </div>
                </div>
              </form>
            </div>
		        <div class="content" style="margin-top: 40px">
	 				<div class="row">
	 					<div class="col-md-12 col-lg-12">
	 						<div class="items">
					 					<?php
					 						$id = 1;
					 						$tukhoa = 0;
					 						if(isset($_GET['id']))
					 							$id = $_GET['id'];
					 						if(isset($_POST['danhmuc']))
					 							$id = $_POST['danhmuc'];
					 						if(isset($_POST['timkiem'])){
					 							$tukhoa = $_POST['timkiem'];
					 							$timkiem = mysqli_query($connect, "select * from story where Name like N'%$tukhoa%'");
					 						}

					 						if($tukhoa != null){
					 							$rs = mysqli_num_rows($timkiem);
					 							if($rs == null) echo "Khong co du lieu";
					 							else{
					 								for($i=0 ; $i<$rs ; $i++){
		                        						$data=mysqli_fetch_array($timkiem);
							 							echo "<div class='product'>";
							 							echo "<div class='row'>";
							 							echo "<div class='col-md-3'>";
		                        echo '<img class="mx-auto d-block image" src="data:image;base64,'.base64_encode( $data['avatar']).'" style="width: 170px; height: 200px"/>';
							 							echo "</div>";
							 							echo "<div class='col-md-8'>";
							 							echo "<div class='info'>";
							 							echo "<div class='row'>";
							 							echo "<div class='col-md-5 product-name'>";
							 							echo "<div class='product-name'>";
							 							echo "<a href='detailStory.php?id=$data[ID]'>$data[Name]</a>";
							 							echo "<div class='product-info'>";
							 							echo "<div>Thời gian: <span class='value'>$data[CreateDate]</span></div>";
							 							echo '</div>';
							 							echo '</div>';
							 							echo '</div>';
							 							echo '</div>';
							 							echo '</div>';
							 							echo '</div>';
							 							echo '</div>';
							 							echo '</div>';

							 						}

					 							}
					 						}
					 						else{
					 							$result = mysqli_query($connect, "select * from Story where GroupStoryID = $id");
					 						
	                      						$num=mysqli_num_rows($result);

						 						for($i=0 ; $i<$num ; $i++){
	                        						$data=mysqli_fetch_array($result);
						 							echo "<div class='product'>";
						 							echo "<div class='row'>";
						 							echo "<div class='col-md-3'>";
	                       							echo '<img class="img-fluid mx-auto d-block image" src="data:image;base64,'.base64_encode( $data['Avatar'] ).'" style="width: 170px; height: 200px"/>';
						 							echo "</div>";
						 							echo "<div class='col-md-8'>";
						 							echo "<div class='info'>";
						 							echo "<div class='row'>";
						 							echo "<div class='col-md-5 product-name'>";
						 							echo "<div class='product-name'>";
						 							echo "<a href='detailStory.php?id=$data[ID]'>$data[Name]</a>";
						 							echo "<div class='product-info'>";
						 							echo "<div>Thời gian: <span class='value'>$data[CreateDate]</span></div>";
						 							echo '</div>';
						 							echo '</div>';
						 							echo '</div>';
						 							echo '</div>';
						 							echo '</div>';
						 							echo '</div>';
						 							echo '</div>';
						 							echo '</div>';

						 						}

					 						}
					 						
					 					?>
				 			</div>
			 			</div>
		 			</div>
		 		</div>
	 		</div>
		</section>
	</main>
  </body>
</html>
