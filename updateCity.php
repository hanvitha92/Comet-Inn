<?php  include 'menu.php';
    require_once('config.php');
    if(!isset($_SESSION["sess_userid"])){
        echo '<script type="text/javascript">location.href = "index.php";</script>';
        echo '<script type="text/javascript">alert("please login");</script>';	
    }
?>
<?php
    if(isset($_GET["cityId"])){
        $db = new PDO("mysql:dbname=".DBNAME.";host=".DBHOST, DBUSER, DBPASS);  
        $cityId = $db->quote($_GET["cityId"]);
        $query = $db->prepare("SELECT * FROM hotel where hotel_id=$cityId and status=1");
        $query->execute();
        $cities=$query->fetchAll();
    }
?>

<div class="search-page search-grid-full">
    <div class="booking">
        <div class="container">
            <div class="reservation-form">
                <div class="col-md-9 reservation-right">
                    <form method="POST" name="cityInfo" class="edit">
                        <h4>City Name</h4>         			
                        <input type="text" name="name" value="<?php echo $cities[0]["city_name"] ?>" placeholder="City Name" required>
                        <h4>Address</h4>         			
                        <input type="text" name="address" value="<?php echo $cities[0]["address"] ?>" placeholder="Address" required>
                        <h4>Zipcode</h4>         		
                        <input type="number" name="zipcode" value="<?php echo $cities[0]["zipcode"] ?>" placeholder="Zipcode" required>                        
                        <input type="submit" name="submitted" class="btn1 btn-1 btn-1e" value="UPDATE NOW">
                    </form>
                </div>
            </div>    
        </div>
    </div>
</div>

<?php
    if(isset($_POST['submitted'])){
        editCity();
    }
    function editCity(){
        try{    
            $db = new PDO("mysql:dbname=".DBNAME.";host=".DBHOST, DBUSER, DBPASS);  
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            $id = $db->quote($_GET["cityId"]);
            $name = $db->quote($_POST["name"]);
            $address = $db->quote($_POST["address"]);
            $zipcode = $db->quote($_POST["zipcode"]);
            $updateQuery =  $db->prepare("UPDATE hotel SET city_name=$name, address=$address, zipcode=$zipcode WHERE hotel_id=$id");  
            $result = $updateQuery->execute();
            echo '<script type="text/javascript">location.href = "manageHotel.php";</script>';
        }catch(PDOException $ex){
            echo "<script type='text/javascript'>alert('$ex');</script>"; 
        }
    }
?>