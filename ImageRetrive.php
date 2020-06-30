<style>



*,
*::before,
*::after {
    box-sizing: border-box;
}

body {
    font-family: "Open Sans", Arial, sans-serif;
    min-height: 100vh;
    background-color: #fafafa;
    color: #262626;
    padding-bottom: 3rem;
}

.img {
    display: block;
}

.container {
    max-width: 93.5rem;
    margin: 0 auto;
    padding: 0 2rem;
}
/* Gallery Section */

.gallery {
    display: flex;
    flex-wrap: wrap;
    margin: -1rem -1rem;
    padding-bottom: 3rem;
}

.gallery-item {
    position: relative;
    flex: 1 0 22rem;
    margin: 1rem;
    color: #fff;
    cursor: pointer;
}

.gallery-item:hover .gallery-item-info,
.gallery-item:focus .gallery-item-info {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
}

.gallery-item-info {
    display: none;
}

.gallery-item-info li {
    display: inline-block;
    font-size: 1.7rem;
    font-weight: 600;
}


.gallery-item-type {
    position: absolute;
    top: 1rem;
    right: 1rem;
    font-size: 2.5rem;
    text-shadow: 0.2rem 0.2rem 0.2rem rgba(0, 0, 0, 0.1);
}

.gallery-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

@supports (display: grid) {
    .profile {
        display: grid;
        grid-template-columns: 1fr 2fr;
        grid-template-rows: repeat(3, auto);
        grid-column-gap: 3rem;
        align-items: center;
    }

    .profile-image {
        grid-row: 1 / -1;
    }

    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(22rem, 1fr));
        grid-gap: 2rem;
    }

}

</style>


<?php 
include("header.php");
// Include the database configuration file  

require_once 'dbConfig.php'; 
 
// Get image data from database 
$result = mysql_query("SELECT * FROM images ORDER BY uploaded DESC"); 
$num=mysql_num_rows($result);
$data = array();
?>

<?php if($num > 0){ ?> 
   
	<main>

	<div class="container">

		<div class="m-1">

			<div class="row">

        <?php while($row = mysql_fetch_assoc($result)){ ?>
            <div class="row" >
            <div class="col-sm-12 col-6 m-1">
            <img class="img-fluid" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        </div>
        </div>
        <?php } ?> 
		
			</div>

    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } include("footer.html")?>