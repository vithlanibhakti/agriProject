<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Formdesign</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>

<!--Accordion wrapper-->
<div class="accordion md-accordion container " id="accordionEx" role="tablist" aria-multiselectable="true">
  <form method="POST" class="form" id="comment_form" action="testinsert.php">
    <!-- Accordion card -->
    <div class="card">

      <div class="card-title bg-success p-2">
        <h4 class=" text-white">કપ્યુટરાઈઝ સોફટવેર ખેતી પ્રણાલી ( જે લાગુ પડતું હોઇ તેમાં ટીક કરવું અથવા વિગત ભરવી )</h4>
      </div>
      <!-- Card header -->
      <div class="card-header" role="tab" id="headingOne1">
        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
          <h5 class="mb-0">
            વિગતો - ૧
            <i class="fas fa-angle-down rotate-icon"></i>
          </h5>
        </a>
      </div>

      <!-- Card body -->
      <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
        <div class="card-body">


          <!-- Farmer name -->
          <div class="md-form">
            <input type="text" name="fname" id="fname" class="form-control">
            <label for="fname">ખેડુતનું નામ</label>
          </div>

          <!-- Mobile no -->
          <div class="md-form">
            <input type="number" name="phn" id="phn" class="form-control">
            <label for="phn">ખેડુતનો એન્ડ્રોઇડ મો . નંબર</label>
          </div>

          <!-- Village -->
          <div class="md-form">
            <input type="email" name="mail" id="mail" class="form-control">
            <label for="email">ઈમેઈલ</label>
          </div>

          <!-- Survey No -->
          <div class="md-form">
            <textarea type="texT" name="address" id="address" class="form-control rounded-0" rows="3" placeholder="પુર સરનામું"></textarea>
          </div>


          <!-- Taluka -->
          <div class="md-form">
            <input type="number" name="pin" id="pin" class="form-control">
            <label for="pin">પીનકોડ</label>
          </div>

          <!-- ========================================================================== -->

        </div>
      </div>

    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card">

      <!-- Card header -->
      <div class="card-header" role="tab" id="headingTwo2">
        <a class="collapsed " data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
          <h5 class="mb-0">
            વિગતો - ૨ <i class="fas fa-angle-down rotate-icon"></i>
          </h5>
        </a>
      </div>

      <!-- Card body -->
      <div id="collapseTwo2" class="collapse " role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
        <div class="card-body">
          <div class="row d-flex justify-content-around">
            <div class="col-12 card-title">
              માટીનો પ્રકાર
            </div>

            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="soilt1" id="soilt1">
              <label class="custom-control-label" for="soilt1">કાળી</label>
            </div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="soilt2" id="soilt2">
              <label class="custom-control-label" for="soilt2">મધ્યમ કાળી</label>
            </div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="soilt3" id="soilt3">
              <label class="custom-control-label" for="soilt3">ગોરાળ</label>
            </div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="soilt4" id="soilt4">
              <label class="custom-control-label" for="soilt4">રેતાળ</label>
            </div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="soilt5" id="soilt5">
              <label class="custom-control-label" for="soilt5">મોરમ / રફવાળી</label>
            </div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="soilt6" id="soilt6">
              <label class="custom-control-label" for="soilt6">ક્ષારવાની</label>
            </div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="soilt7" id="soilt7">
              <label class="custom-control-label" for="soilt7">અન્ય</label>
            </div>
          </div>
          <div class="row d-flex justify-content-around">

            <div class="col-12 card-title">
              સિંચાઇનો પ્રકાર :
            </div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="irrigation1" id="irrigation1">
              <label class="custom-control-label" for="irrigation1">રેડ ( ખુલ્લું ) પાણી</label>
            </div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="irrigation2" id="irrigation2">
              <label class="custom-control-label" for="irrigation2">ડ્રીપથી સિંચાઈ</label>
            </div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="irrigation3" id="irrigation3">
              <label class="custom-control-label" for="irrigation3">સ્પ્રિંકલરથી સિંચાઇ </label>
            </div>

            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="irrigation4" id="irrigation4">
              <label class="custom-control-label" for="irrigation4">અન્ય</label>
            </div>
          </div>

          <div class="row d-flex  justify-content-around">
            <div class="col-12 card-title">
              સિંચાઇના સાઘન :
            </div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="equipment1" id="equipment1">
              <label class="custom-control-label" for="equipment1">બોરવેલ</label>
            </div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="equipment2" id="equipment2">
              <label class="custom-control-label" for="equipment2">કુવો</label>
            </div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="equipment3" id="equipment3">
              <label class="custom-control-label" for="equipment3">નદી</label>
            </div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="equipment4" id="equipment4">
              <label class="custom-control-label" for="equipment4">નાળા</label>
            </div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="equipment5" id="equipment5">
              <label class="custom-control-label" for="equipment5">તળાવ</label>
            </div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="equipment6" id="equipment6">
              <label class="custom-control-label" for="equipment6">અન્ય</label>
            </div>

            <!-- --------------------------------- -->

          </div>

          <div class="card-title">
            પાણી સંગ્રહ શક્તિ :
          </div>
          <br>
          <div class=" form-inline ">
            <label class="col-6" for="afterrain">વરસાદ અંદાજે બે ઇંચ પડયા પછી કામ કરવાની સ્થિતિ કેટલા દિવસે થાય :</label>
            <input type="text" name="afterrain" id="afterrain" class="col-6 form-control">
          </div>

          <div class=" p-3">
            <div class="row d-flex justify-content-around">
              <label class="col-12" for="crackedt1">ખેતરમાં પાણી બંધ કર્યા પછી ૩૫ દિવસ પછી કેવી તીરાડ પડે છે :</label>
              <div class="custom-control custom-checkbox ">
                <input type="checkbox" class="custom-control-input" name="crackedt1" id="crackedt1">
                <label class="custom-control-label" for="crackedt1">મોટી</label>
              </div>
              <div class="custom-control custom-checkbox ">
                <input type="checkbox" class="custom-control-input" name="crackedt2" id="crackedt2">
                <label class="custom-control-label" for="crackedt2">મધ્યમ</label>
              </div>
              <div class="custom-control custom-checkbox ">
                <input type="checkbox" class="custom-control-input" name="crackedt3" id="crackedt3">
                <label class="custom-control-label" for="crackedt3">નાની</label>

              </div>
            </div>


          </div>
          <div class="row">
            <div class='card-title'>
              પશુધનની સંખ્યા :
            </div>
            <div class="md-form">
              ગાય
              <input type="number" id="cowcount" name="cowcount">
            </div>
            <div class="md-form">
              ભેંસ
              <input type="number" id="bufflowcount" name="bufflowcount">
            </div>
            <div class="md-form">
              બળદ
              <input type="number" id="bullcount" name="bullcount">
            </div>
            <div class="md-form">
              અન્ય
              <input type="number" id="othercount" name="othercount">
            </div>
          </div>

          <div class="card-title">ગર્ચા વર્ષે લીઘેલ પાક :</div>
          <table class="table table-responsive-md">
            <tr>
              <th>ચોમાસું</th>
              <td><input tyle="mpak1" name="lastmcrop1" class="form-control"></td>
              <td><input tyle="mpak2" name="lastmcrop2" class="form-control"></td>
              <td><input tyle="mpak3" name="lastmcrop3" class="form-control"></td>

            </tr>
            <tr>
              <th>શિયાળુ</th>
              <td><input tyle="wpak1" name="lastwcrop1" class="form-control"></td>
              <td><input tyle="wpak2" name="lastwcrop2" class="form-control"></td>
              <td><input tyle="wpak3" name="lastwcrop3" class="form-control"></td>
            </tr>
            <tr>
              <th>ઉનાળું</th>
              <td><input tyle="spak1" name="lastscrop1" class="form-control"></td>
              <td><input tyle="spak2" name="lastscrop2" class="form-control"></td>
              <td><input tyle="spak3" name="lastscrop3" class="form-control"></td>
            </tr>
          </table>

          <div class="row ">
            <div class="card-title">પાછલા પાકની સફાઈ :</div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="clean1" id="clean1">
              <label class="custom-control-label" for="clean1">ખેતરની બહાર</label>
            </div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="clean2" id="clean2">
              <label class="custom-control-label" for="clean2">ખેતરમાં</label>
            </div>

          </div>

          <div class="row ">
            <div class="card-title">પાછલા પાકના અવશેષો :</div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="cropremains1" id="cropremains1">
              <label class="custom-control-label" for="cropremains1"> ખેતરમાં ભુકો કરી દાટીયા</label>
            </div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="cropremains2" id="cropremains2">
              <label class="custom-control-label" for="cropremains2">ખેતરમાં સળગાવેલ</label>
            </div>
            <div class="custom-control custom-checkbox mb-4">
              <input type="checkbox" class="custom-control-input" name="cropremains3s" id="cropremains3">
              <label class="custom-control-label" for="cropremains3">ખેતર બહાર કાઢેલ</label>
            </div>

          </div>

          <div>
            <div class="card-title">પાછલા વર્ષના પાકનું ઉત્પાદન :</div>
            <table class="table table-responsive-md">
              <th></th>
              <th>કિલો </th>
              <th>મણ</th>
              <tr>
                <th>પ્રતિ હેક્ટર</th>
                <td><input tyle="hector1" name="Producthec1" class="form-control"></td>
                <td><input tyle="hector2" name="Producthec2" class="form-control"></td>

              </tr>
              <tr>
                <th>પ્રતિ એકર</th>
                <td><input tyle="acceer1" name="Productac1" class="form-control"></td>
                <td><input tyle="acceer2" name="Productac2" class="form-control"></td>
              </tr>
              <tr>
                <th>પ્રતિ વીઘા</th>
                <td><input tyle="vigh1" name="Productvigha1" class="form-control"></td>
                <td><input tyle="vigh2" name="Productvigha2" class="form-control"></td>
              </tr>
            </table>
          </div>

          <div>
            <div class="card-title">પાછલા પાઇમાં થયેલ સમસ્યા :</div>
            <div class="row d-flex justify-content-lg-around">
              <div class="form-group">
                ચોમાસું:
                <input class="form-control" type="text" name="mproblem">
              </div>
              <div class="form-group">
                શિયાળો:
                <input class="form-control" type="text" name="wproblem">
              </div>
              <div class="form-group">
                ઉનાળો:
                <input class="form-control" type="text" name="sproblem">
              </div>
            </div>
          </div>

          <div class="d-flex flex-column">
            <div class="card-title "><span> વાવેતર કરવાનો પાકની વિગત : </span></div>
            <div class="form-inline m-2">
              <label for="season">ઋતુ :</label>
              <input tyle="text" id="season" name="season" class="form-control">

            </div>
          </div>
          <table class="table table-responsive-md border">
            <tr>
              <th>ફીલ્ડ ક્રોપ</th>
              <td><input type="text" name="fildcrop1" class="form-control"></td>
              <td><input type="text" name="fildcrop2" class="form-control"></td>
              <td><input type="text" name="fildcrop3" class="form-control"></td>
            </tr>
            <tr>
              <th>ફળ પાક</th>
              <td><input type="text" name="frutcrop1" class="form-control"></td>
              <td><input type="text" name="frutcrop2" class="form-control"></td>
              <td><input type="text" name="frutcrop3" class="form-control"></td>
            </tr>
            <tr>
              <th>શાક્ભજી</th>
              <td><input type="text" name="vegcrop1" class="form-control"></td>
              <td><input type="text" name="vegcrop2" class="form-control"></td>
              <td><input type="text" name="vegcrop3" class="form-control"></td>
            </tr>
            <tr>
              <th>ફુલછોડ</th>
              <td><input type="text" name="flowercrop1" class="form-control"></td>
              <td><input type="text" name="flowercrop2" class="form-control"></td>
              <td><input type="text" name="flowercrop3" class="form-control"></td>
            </tr>
            <tr>
              <th>ઔષધિ પાક</th>
              <td><input type="text" name="medicrop1" class="form-control"></td>
              <td><input type="text" name="medicrop2" class="form-control"></td>
              <td><input type="text" name="medicrop3" class="form-control"></td>
            </tr>
          </table>


          <div class="row p-2">
            <div class="md-form col-6">
              <input type="text" class="form-control" name="cropname" id="cropname">
              <label for="cropname">પાકનું નામ </label>
            </div>
            <div class="md-form col-6">
              <label for="cropcast">જાત</label>
              <input type="text" class="form-control" name="cropcast" id="cropcast">
            </div>
            <div class="md-form col-6">
              <input type="date" class="form-control" name="dateofplant" id="dateofplant">
              <label for="dateofplant">વાવેતરની તારીખ </label>
            </div>
          </div>

          <div class="d-flex flex-column">
            <div class="form-inline m-2">
              <label for="vigha">બિયારણનો દર: </label>
              <input name="vigha" id="seedsvigha" class="form-control" />
              <spna>/વીઘા</spna>
              <input name="accor" id="seedsaccor" class="form-control" />
              <spna>/એકર</spna>
              <input name="heccor" id="seedsheccor" class="form-control" />
              <spna>/હેક્ટર</spna>
            </div>

            <div class="form-inline m-2">
              <label for="rowcm">બે હાર વચ્ચેનું અંતર : </label>
              <input name="rowcm" id="rowcm" class="form-control" />
              <spna>/સેમી </spna>
              <input name="rowinch" id="rowinch" class="form-control" />
              <spna>/ઇંચ</spna>
            </div>

            <div class="form-inline m-2">
              <label for="cm">બે છોડ વચ્ચેનું અંતર : </label>
              <input name="plantcm" id="plantcm" class="form-control" />
              <spna>/સેમી </spna>
              <input name="plantinch" id="plantinch" class="form-control" />
              <spna>/ઇંચ</spna>
            </div>
          </div>

        </div>

      </div>

    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card">

      <!-- Card header -->
      <div class="card-header" role="tab" id="headingThree3">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
          <h5 class="mb-0">
            વિગતો - ૩ <i class="fas fa-angle-down rotate-icon"></i>
          </h5>
        </a>
      </div>

      <!-- Card body -->
      <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
        <div class="card-body">
          <div class="row p-2">
            <div class="md-form col-6">
              <input type="text" class="form-control" name="treename" id="treename">
              <label for="treename">ઝાડનું નામ </label>
            </div>
            <div class="md-form col-6">
              <label for="cast">જાત</label>
              <input type="text" class="form-control" name="treecast" id="treecast">
            </div>
            <div class="md-form col-6">
              <input type="date" class="form-control" name="treeplant" id="treeplant">
              <label for="treeplant">વાવેતરની તારીખ </label>
            </div>

          </div>

          <div class="d-flex flex-column">
            <div class="form-inline m-2">
              <label for="vigha">બિયારણનો દર: </label>
              <input name="treevigha" id="treevigha" class="form-control" />
              <spna>/વીઘા</spna>
              <input name="treeaccor" id="treeaccor" class="form-control" />
              <spna>/એકર</spna>
              <input name="treeheccor" id="treeheccor" class="form-control" />
              <spna>/હેક્ટર</spna>
            </div>

            <div class="form-inline m-2">
              <label for="treerowcm">બે - હાર વચ્ચેનું અંતર : </label>
              <input name="treerowcm" id="treerowcm" class="form-control" />
              <spna>/સેમી </spna>
              <input name="treerowinch" id="treerowinch" class="form-control" />
              <spna>/ઇંચ</spna>
            </div>

            <div class="form-inline m-2">
              <label for="treerowcm1">બે - હાર વચ્ચેનું અંતર : </label>
              <input name="treerowcm1" id="treerowcm1" class="form-control" />
              <spna>/સેમી </spna>
              <input name="treerowinch1" id="treerowinch1" class="form-control" />
              <spna>/ઇંચ</spna>
            </div>

          </div>
        </div>
      </div>

    </div>
    <center>
      <button class="btn btn-success" type="submit" id="post" name="submit">Post</button>
    </center>
    <!-- Accordion card -->
  </form>
</div>
<!-- Accordion wrapper -->

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<script>
  // $('#comment_form').on('submit', function(event) {
  //         debugger;
  //         event.preventDefault();
  //         if (true) {
  //           var form_data = $(this).serialize();
  //           $.ajax({
  //             url: "testinsert.php",
  //             method: "POST",
  //             data: form_data,
  //             success: function(data) {
  //               //$('#comment_form')[0].reset();
  //               //alert("sucess");
  //               window.location.href = 'testinsert.php';
  //               //load_unseen_notification();
  //             }
  //           });
  //         } else {
  //           alert("please fill required details");
  //         }
  //       });
</script>