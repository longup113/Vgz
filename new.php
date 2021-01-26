<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "stressworld";
$conn = mysqli_connect($servername,$username,$pass,$dbname);
if (!$conn) {
    die("". mysqli_connect_error());
}
else
{
    echo "";
}   

?>



<?php
include('inc/conn.php');
include('inc/header.php');
?>

<div class="row">
    <div class="leftcolumn">

        <?php
        //?page=2 => $_GET['page'] - 3 =>

        if (!empty($_GET['page'])) 
        {
            $page=$_GET['page']-1;
        }
        else
        {
            $page = 0;
        }
        //$page =!empty($_GET['page']) ? ($_GET['page'] - 1): 0 ; //lay page hien thi
        $new_per_page = 6; //1 trang 6 san pham
             $offset = $new_per_page * $page; //offset chinh la phan can bo qua

        $sql ="SELECT * FROM new LIMIT $offset,$new_per_page";
        $rs = mysqli_query($conn, $sql);

        if (mysqli_num_rows($rs) > 0) {
                while ($row = mysqli_fetch_assoc($rs) ){
        ?> 
            <a href="single-product.php?id=<?php echo $row['ID']?>" class="new">    
                <h2 class="product-title"><?php echo $row['Name'] ?></h2>
                <div class="product-image"><img src="img/<?php echo $row['Image'] ?>">
                </div> 
                <p class="new-price"><?php echo $row['Price'] ."$" ?> </p> 

            </a>  
        <?php  
          
                }//end while
             }//check so hang tra ve > 0
?>
<?php include('inc/pagination.php'); ?> 
   </div>   
   <!--END left colum --> 
<?php 
    include('inc/footer.php');
?>

