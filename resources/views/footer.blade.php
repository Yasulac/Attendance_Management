<style>
    body{
        margin: 0px;
        padding: 0px;
    }
    .footer .container-fluid{
    
        height: 453px !important;


    }

    footer .row{
        height: 399px;
        background-color: #000;
    }

    footer .col{
        display: flex;
        justify-content: center;
        padding: 40px 0px 40px 0px;
    }

    .logo{
        filter: invert(1);
    }

    span{
        font-family: "Poppins", sans;
        font-weight: bold;
        color: #fff;
        margin-bottom: 20px;
    }

    #col-1{
        display: grid;
    }

    #col-1 li{
        
        padding: 0px 0px 20px 0px;
        font-weight: 400;
        
    }

    a:hover{
        font-weight: bold;
        color: #fff !important;
    }

    .row2{
        padding: 17px;
        height: 54px;
        text-align: center;
    }

    p{
        font-family: "Poppins", sans;
    }
</style>
<footer>

    <section class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <img src="{{ asset('images/logo.png' )}}" class="logo"  alt="">
            </div>
            <div class="col" id="col-1">
                <span>
                    QUICK NAVIGATION
                </span>

                <ul class="list-group list-group-vertical">
                    <li class="list-group-item"> <a href="{{ route('welcome') }}">Home</a></li>
                    <li class="list-group-item"> <a href="{{ route('welcome') }}">About</a></li>
                    <li class="list-group-item"> <a href="{{ route('welcome') }}">Services</a></li>
                    <li class="list-group-item"> <a href="{{ route('welcome') }}">Contact</a></li>
                    <li class="list-group-item"> <a href="{{ route('welcome') }}">Academics</a></li>
                </ul>
            </div>
            <div class="col" id="col-1">
                <span>
                        STAY CONNECTED
                </span>

                <ul class="list-group list-group-vertical">
                    <li class="list-group-item"> <a href="{{ route('welcome') }}">Facebook</a></li>
                    <li class="list-group-item"> <a href="{{ route('welcome') }}">Twitter</a></li>
                    <li class="list-group-item"> <a href="{{ route('welcome') }}">Instagram</a></li>
                    <li class="list-group-item"> <a href="{{ route('welcome') }}">Youtube</a></li>
                </ul>
            </div>
            <div class="col" id="col-1">
            <span>
                        GIT IN TOUCH
                </span>

                <ul class="list-group list-group-vertical" style="font-family: poppins;">
                    <li class="list-group-item">Centro Rizal </li>
                    <li class="list-group-item">8400, Surigao City</li>
                    <li class="list-group-item"> Tel: 09123456789</li>
                    <li class="list-group-item"> lcalusay@ssct.edu.ph</li>
                </ul>
            </div>
        </div>
      
    
        <div class="row2">
            <p>© 2035 by Calusay. Powered and secured by Calusay</p>
        </div>
    </div>


    </section>
    
</footer>