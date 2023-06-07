<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script> 
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>
<body>

<style>

body {
  background-color: #2b3035 !important;
  color: white !important;
}

.active{
    background-color: transparent;
    border-radius: 0;
}

    .headline_szenario_h3 {
  width: 100vw;
  position: fixed;
  margin-top: 23vh;
  text-align: center;
}

.textbox_big_szenario_new {
  /* position: fixed; */
  margin-left: 10vw;
  margin-right: 10vw;
  margin-top: 30vh;
  width: 80vw;
  padding: 15px;
  height: 30vh;
  border: solid 3px #03b670;
  border-radius: 15px;
}
.overflow_big_szenario {
  overflow: scroll;
  height: 25vh;
}

</style>

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="headline_szenario_h3">
                <h3>Phase 1</h3>
            </div>
            <div class="textbox_big_szenario_new" data-bs-theme="dark">
                <div class="overflow_big_szenario">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Auswahl</th>
                                <th>Steuerung</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- create carousel items for each phase --}}
        <div class="carousel-item">
            <div class="headline_szenario_h3">
                <h3>Phase 2</h3>
            </div>
            <div class="textbox_big_szenario_new" data-bs-theme="dark">
                <div class="overflow_big_szenario">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Auswahl</th>
                                <th>Steuerung</th>
                            </tr>
                        </thead>
                        <tbody>                                
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>

<a class="carousel-control-prev" data-bs-target="#carouselExample" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" data-bs-target="#carouselExample" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</body>
</html>
