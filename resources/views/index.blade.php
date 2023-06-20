<!--UI Developed by Shebin Jose Jacob-->
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fish Feeder</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type='module' src='https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js'></script>
    <script nomodule='' src='https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/mdtimepicker.css">
    <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-database.js"></script>
    <script src="{{ asset('assets') }}/js/mdtimepicker.js"></script>
</head>

<body translate="no">
    <div class="container">
        <div class="components" id="1">
            <div class="clock">
                <div class="hand hours"></div>
                <div class="hand minutes"></div>
                <div class="hand seconds"></div>
                <div class="point"></div>
                <div class="marker">
                    <span class="marker__1"></span>
                    <span class="marker__2"></span>
                    <span class="marker__3"></span>
                    <span class="marker__4"></span>
                </div>
            </div>
            <div class="btn btn__primary" onclick="feednow()">
                <p>Feed Now</p>
            </div>
            {{-- <div class="btn btn__secondary" onclick="toggleDiv()">
                <p>Schedule</p>
            </div> --}}
            <div class="components2" id="2">
                <div id="wrapper" class="wrapper">
                </div>
                <div class="icon" onclick="addStore()" id="timepicker">
                    <div class="icon__add">
                        <ion-icon name="add"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script id="rendered-js" src="{{ asset('assets') }}/js/script.js"></script>
    <script src="{{ asset('assets') }}/js/mdtimepicker.js"></script>
</body>

</html>
