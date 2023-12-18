<?php

include 'config.php';

if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$message = $_POST['message'];
	$email = $_POST['email'];

	$sql = "INSERT INTO komentar (name, message, email) VALUES ('$name', '$message', '$email')";

	if ($conn->query($sql) === TRUE) {
		echo "";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!--css-->
    <link rel="stylesheet" href="cssapip.css" />

    <title>SUZUKI</title>
  </head>
  <body>  
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
      <div class="container">
        <img src="img/logosuzuki.png" alt="" width="150px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link link" aria-current="page" href="#carouselExampleControls" >Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link" href="#aboutus">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link" href="#product">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link" href="#contactus">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link" href="#feedback">Feedback</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--akhir navbar-->

    <!--slide-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/suzukipabrik.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="img/backgroundmobil.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="img/bekgron.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--akhir slide-->

    <!--about us-->
    <div class="aboutus" id="aboutus">
      <section>
        <div class="container p-3 col-11">
          <h1 class="text-center">About Us</h1>
          <p class="text-center">
            Suzuki Indonesia merupakan kelompok usaha yang bergerak dibidang industri otomotif yang memproduksi, memasarkan, memperniagakan motor, mobil dan motor tempel (outboard- motor). Hal tersebut juga diidukung dengan pelayanan purna jual suku cadang serta perbaikan/ pemeliharaan di seluruh Indonesia yang solid dan terintegrasi dalam melayani para pelanggan Suzuki. Suzuki Indonesia telah memberikan kontribusi untuk bangsa dan masyarakat dengan memberikan produk-produk bermanfaat bagi perkembangan bangsa. Pelayanan profesional dibidang pemasaran produk dan jasa pelayanan juga menjadi komitmen utama kami untuk memberikan yang terbaik bagi para pelanggan setia Suzuki. Saling percaya dan menghormati merupakan nilai yang kami tanam dalam setiap kerja sama yang dijalani antara karyawan, pemasok, dealer-dealer diseluruh Indonesia.</p>
        
      
          <h2 class="text-center">Visi</h2>
          <p class="text-center">Membangun merek yang dipercaya melalui produk dan layanan yang berkualitas tinggi berorientasi pada kebutuhan konsumen.</p>
     
        
          <h2 class="text-center">Misi</h2>
          <div class="text-center">
            <p>Menjadi Pilar ke-3 SUZUKI Group di dunia.</p>

            <p>1. Mempertahankan dominasi pasar komersial dan mengembangkan pasar penumpang dalam negeri.</p>
             <p>2. Memperkuat ekspor dengan meningkatkan volume dan negara tujuan.</p> 
             <p> 3. Selalu memaksimalkan penggunaan sumber daya.</p>
             <p> 4. Meningkatan kualitas sumber daya manusia secara berkelanjutan untuk menghasilkan produk dan layanan terbaik.</p>
              <p>5. Membangun rantai bisnis yang handal dengan mutual partnership dan digitalisasi.</p>
             <p> 6. Berkontribusi terhadap kelestarian lingkungan dengan menjadi bagian dari SUZUKI Green (Green Policy, Technology, Activity).</p>
            
          
        </div>
      </section>
    </div>
    <!--akhir about us-->

    <!--product-->
    <div class="product" id="product">
      <section class="container">
        <h1 class="text-center">Produk</h1>

        <div class="row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card container">
              <div class="card-body">
                <h3 class="card-title text-center"> Motor</h3>
                <img src="img/motor gsx.png" width="400px" class="container">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card container">
              <div class="card-body">
                <h3 class="card-title text-center">Mobil</h3>
                <img src="img/mobilom.png" width="400px" class="container">
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <br>

    <!--akhir product-->

    <!--contact us-->
    <div class="contactus" id="contactus">
      <section class="container">
        <h1 class="text-center">Contact Us</h1>

        <div class="d-flex">
          <div>
            <div class="card text-dark bg-primary mb-3" style="max-width: 18rem;">
              <div class="card-header">Contact</div>
              <div class="card-body">
                <p class="card-text">Jl. Diponegoro No.Km. 38, RW.2, Jatimulya, Kec. Tambun Sel., Kabupaten Bekasi, Jawa Barat 17510</p>
                <p class="card-text">Telepon. :(021) 88347883 (Adm. Office), (021) 8801251</p>
                <p class="card-text">WhatsApp: 0800 1100 800</p>
                <p class="card-text">Instagram : @suzuki_id</p>
                <p class="card-text">E-mail : <suzuki class="co id">@suzuki.co.id</suzuki></p>
              </div>
            </div>  
           
          </div>
          <div class="px-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63457.290183940066!2d107.03533982783195!3d-6.253106105009051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698f9a5ddeb2ab%3A0xe483712d83ff1ed1!2sPT.%20Suzuki%20Indomobil%20Motor%20Plan%20Tambun%202!5e0!3m2!1sid!2sid!4v1700462717367!5m2!1sid!2sid" width="820" height="355" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <br>
      </section>
    </div>      
    
    <!--akhir contact-->

    <!--awal feedback-->
    
    <div class="feedback" id="feedback">
      <section class="container">
    <h1 class="text-center">Feedback</h1>
    <br>
<div class="d-flex">
    <div class="container col-sm-6">
    <form method="post" action="#feedback">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input class="form-control" id="exampleFormControlInput1" placeholder="Name" name="name" >
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@gmail.com" name='email' required>
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comment" name="message" ></textarea>
</div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>

<br>

<div class="border rounded container col-sm-6">
        <?php
            // date_default_timezone_set("Asia/Jakarta");

            $sql = "SELECT * FROM komentar";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // output data of each row
                    $timestamp = strtotime($row['timestamp']);
                    $formatted_timestamp = date('d M Y', $timestamp);
        ?>
                    <div>
                        <h3 id="name"><?php echo $row['name']; ?></h3>
                        <p id="message"><?php echo $row['message']; ?></p>
                        <p>Posted on: <?php echo $formatted_timestamp; ?></p>
                    </div>
        <?php
                }
            }
        ?>
    </div>
<!-- 
<?php

$sql = "SELECT * FROM komentar";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // output data of each row
        $timestamp = strtotime($row['timestamp']);
        $formatted_timestamp = date('d M Y ', $timestamp);

        ?>
        <div>
            <h3 id="name"><?php echo $row['name']; ?></h3>
            <p id="message"><?php echo $row['message']; ?></p>
            <p>Posted on: <?php echo $formatted_timestamp; ?></p>
        </div>
        <?php
    }
}
?>

    -->
  </div>
</div>
  </section>
    </div>

    <script>
		//PESAN
		var sensor = ["ajg", "bot", "cuki", "anjing", "jelek", "kemem", "bangsat", "kontol", "peler", "pler", "meki", "memek", "ngentot", "babi", "ayam", "jenglot", "kimak", "xxx", "Anjing", "goblok",  ]
		function replaceTextInElements(elements) {
			elements.forEach(function (element) {

				var originalText = element.textContent;


				var newText = originalText.replace(new RegExp(sensor.join('|'), 'gi'), function (match) {

					return '*'.repeat(match.length);
				});


				element.textContent = newText;
			});
		}


		var messageElements = document.querySelectorAll('p#message');


		replaceTextInElements(messageElements);

		//NAMA
		var sensor = ["anjing", "jelek", "kemem", "bangsat", "kontol", "peler", "pler", "memek", "ngentot", "babi", "ayam", "jenglot", "xxx"]
		function replaceTextInElements(elements) {
			elements.forEach(function (element) {

				var originalText = element.textContent;


				var newText = originalText.replace(new RegExp(sensor.join('|'), 'gi'), function (match) {

					return '*'.repeat(match.length);
				});


				element.textContent = newText;
			});
		}


		var messageElements = document.querySelectorAll('h3#name');


		replaceTextInElements(messageElements);





    const navItem = document.querySelectorAll(".nav-item");
    navItem.forEach(e => {
      e.addEventListener("click", () => {
         navItem.forEach(e => {
          e.classList.remove("activelist")
         })
         e.classList.add("activelist")

      })
    })


	</script>


    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      var counter = 1;
      setInterval(function () {
        document.getElementById("radio" + counter).checked = true;
        counter++;
        if (counter > 3) {
          counter = 1;
        }
      }, 5000);
    </script>
    <script src="script.js" ></script>  
  </body>
</html>
