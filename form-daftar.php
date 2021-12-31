<!DOCTYPE html>
<html>

<head>
    <title>Formulir Pendaftaran Siswa Baru | ITS Coding</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <style type="text/css">
        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        body {
            padding: 1em;
            font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 15px;
            color: #b9b9b9;
            background-color: #e3e3e3;
        }

        h1,
        h4 {
            color: #f0a500;
        }

        input,
        input[type="radio"]+label,
        input[type="checkbox"]+label:before,
        select option,
        select {
            width: 100%;
            padding: 1em;
            line-height: 1.4;
            background-color: #f9f9f9;
            border: 1px solid #e5e5e5;
            border-radius: 3px;
            -webkit-transition: 0.35s ease-in-out;
            -moz-transition: 0.35s ease-in-out;
            -o-transition: 0.35s ease-in-out;
            transition: 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
        }

        input:focus {
            outline: 0;
            border-color: #bd8200;
        }

        input:focus+.input-icon i {
            color: #f0a500;
        }

        input:focus+.input-icon:after {
            border-right-color: #f0a500;
        }

        input[type="radio"] {
            display: none;
        }

        input[type="radio"]+label,
        select {
            display: inline-block;
            width: 50%;
            text-align: center;
            float: left;
            border-radius: 0;
        }

        input[type="radio"]+label:first-of-type {
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        input[type="radio"]+label:last-of-type {
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
        }

        input[type="radio"]+label i {
            padding-right: 0.4em;
        }

        input[type="radio"]:checked+label,
        input:checked+label:before,
        select:focus,
        select:active {
            background-color: #f0a500;
            color: #fff;
            border-color: #bd8200;
        }

        input[type="checkbox"] {
            display: none;
        }

        input[type="checkbox"]+label {
            position: relative;
            display: block;
            padding-left: 1.6em;
        }

        input[type="checkbox"]+label:before {
            position: absolute;
            top: 0.2em;
            left: 0;
            display: block;
            width: 1em;
            height: 1em;
            padding: 0;
            content: "";
        }

        input[type="checkbox"]+label:after {
            position: absolute;
            top: 0.45em;
            left: 0.2em;
            font-size: 0.8em;
            color: #fff;
            opacity: 0;
            font-family: FontAwesome;
            content: "\f00c";
        }

        input:checked+label:after {
            opacity: 1;
        }

        select {
            height: 3.4em;
            line-height: 2;
        }

        select:first-of-type {
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        select:last-of-type {
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
        }

        select:focus,
        select:active {
            outline: 0;
        }

        select option {
            background-color: #f0a500;
            color: #fff;
        }

        .input-group {
            margin-bottom: 1em;
            zoom: 1;
        }

        .input-group:before,
        .input-group:after {
            content: "";
            display: table;
        }

        .input-group:after {
            clear: both;
        }

        .input-group-icon {
            position: relative;
        }

        .input-group-icon input {
            padding-left: 4.4em;
        }

        .input-group-icon .input-icon {
            position: absolute;
            top: 0;
            left: 0;
            width: 3.4em;
            height: 3.4em;
            line-height: 3.4em;
            text-align: center;
            pointer-events: none;
        }

        .input-group-icon .input-icon:after {
            position: absolute;
            top: 0.6em;
            bottom: 0.6em;
            left: 3.4em;
            display: block;
            border-right: 1px solid #e5e5e5;
            content: "";
            -webkit-transition: 0.35s ease-in-out;
            -moz-transition: 0.35s ease-in-out;
            -o-transition: 0.35s ease-in-out;
            transition: 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
        }

        .input-group-icon .input-icon i {
            -webkit-transition: 0.35s ease-in-out;
            -moz-transition: 0.35s ease-in-out;
            -o-transition: 0.35s ease-in-out;
            transition: 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
        }

        .container {
            max-width: 38em;
            padding: 1em 3em 2em 3em;
            margin: 0em auto;
            background-color: #fff;
            border-radius: 4.2px;
            box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
        }

        .row {
            zoom: 1;
        }

        .row:before,
        .row:after {
            content: "";
            display: table;
        }

        .row:after {
            clear: both;
        }

        .col-half {
            padding-right: 10px;
            float: left;
            width: 50%;
        }

        .col-half:last-of-type {
            padding-right: 0;
        }

        .col-third {
            padding-right: 10px;
            float: left;
            width: 33.33333333%;
        }

        .col-third:last-of-type {
            padding-right: 0;
        }

        @media only screen and (max-width: 540px) {
            .col-half {
                width: 100%;
                padding-right: 0;
            }
        }

        .button-42 {
            background-color: initial;
            background-image: linear-gradient(-180deg, #FF7E31, #E62C03);
            border-radius: 6px;
            box-shadow: rgba(0, 0, 0, 0.1) 0 2px 4px;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: Inter, -apple-system, system-ui, Roboto, "Helvetica Neue", Arial, sans-serif;
            height: 35px;
            line-height: 35px;
            outline: 0;
            overflow: hidden;
            padding: 0 20px;
            pointer-events: auto;
            position: relative;
            text-align: center;
            touch-action: manipulation;
            user-select: none;
            -webkit-user-select: none;
            vertical-align: top;
            white-space: nowrap;
            width: 20%;
            z-index: 9;
            border: 0;
            transition: box-shadow .2s;
        }

        .button-42:hover {
            box-shadow: rgba(253, 76, 0, 0.5) 0 3px 8px;
        }
    </style>
</head>

<body>
    <!-- <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header> -->
    <div class="container">
        <form action="proses-pendaftaran.php" method="POST">

            <!-- <fieldset> -->

            <div class="row">
                <h1>Formulir Pendaftaran Siswa Baru</h1>
                <h4>Nama Lengkap</h4>
                <div class="input-group input-group-icon">
                    <input for="nama" type="text" name="nama" placeholder="Full Name" />
                    <div class="input-icon"></div>
                </div>
                <h4>Alamat</h4>
                <div class="input-group input-group-icon">
                    <input for="alamat" name="alamat" type="text" placeholder="Address" />
                    <div class="input-icon"></div>
                </div>
                <!-- <div class="input-group input-group-icon">
                <input type="password" placeholder="Password"/>
                <div class="input-icon"></div>
            </div> -->
            </div>
            <div class="row">
                <!-- <div class="col-half">
                <h4>Date of Birth</h4>
                <div class="input-group">
                <div class="col-third">
                    <input type="text" placeholder="DD"/>
                </div>
                <div class="col-third">
                    <input type="text" placeholder="MM"/>
                </div>
                <div class="col-third">
                    <input type="text" placeholder="YYYY"/>
                </div>
                </div>
            </div> -->
                <div class="col-half">
                    <h4>Jenis Kelamin</h4>
                    <div class="input-group">
                        <input id="gender_male" type="radio" name="jenis_kelamin" value="laki-laki" />
                        <label for="gender_male">Male</label>
                        <input id="gender_female" type="radio" name="jenis_kelamin" value="perempuan" />
                        <label for="gender_female">Female</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <h4>Agama</h4>
                <div class="input-group">
                    <select for="agama" name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Buddha</option>
                        <option>Atheis</option>
                    </select>
                </div>
                <h4>Sekolah Asal</h4>
                <div class="input-group input-group-icon">
                    <input type="text" for="sekolah_asal" name="sekolah_asal" placeholder="School" />
                    <div class="input-icon"></div>
                </div>
                <!-- <div class="col-half">
                <div class="input-group input-group-icon">
                <input type="text" placeholder="Card CVC"/>
                <div class="input-icon"><i class="fa fa-user"></i></div>
                </div>
            </div>
            <div class="col-half">
                <div class="input-group">
                <select>
                    <option>01 Jan</option>
                    <option>02 Jan</option>
                </select>
                <select>
                    <option>2015</option>
                    <option>2016</option>
                </select>
                </div>
            </div> -->
            </div>
            <div class="row">
                <h4>Terms and Conditions</h4>
                <div class="input-group">
                    <input id="terms" type="checkbox" />
                    <label for="terms">I accept the terms and conditions for registering to this ITS Campus, and hereby confirm I have read the privacy policy.</label>
                </div></br>
                <div class="row">
                    <button type="submit" value="Daftar" name="daftar" class="button-42">Daftar</button>
                    <a href="index.php"><button type="button" class="button-42">Batal</button></a>
                </div>
            </div>


            <!-- <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p> -->

            <!-- </fieldset> -->

        </form>
    </div>

</body>

</html>