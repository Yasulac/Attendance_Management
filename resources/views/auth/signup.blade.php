
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
     a:hover{
        font-weight: bold;
        color: #fff !important;
    }


    #login{
      height: 807px;  
      
    }


    #section1{ 
     
     height: 807px;
     object-fit: contain;
     background-repeat: round;
     opacity: 0.9;
     display: flex;
     justify-items: center;
     align-items: center;
     color: #fff;
     
     
   }


   .first-section-div{
      background-color: rgba(0, 0, 0, .5);
      text-align: center;
      width: 100%;
      padding: 30px;
      width: 600px;
      height: 600px;
      border-radius: 10px;
    }
    
    .first-section-div h1{
        font-family: 'Poppins', sans;
    }
</style>

@include('header')
<section>
      <div class="container-fluid" id="section1" style=" background-image:url('{{ asset('images/background.png')}}');">
        <div class="first-section-div">
         <h1>
            Create new Account
         </h1>
        <p>
           Already Registered? <a href="">Log in</a> 
        </p>

         <form action="#">
            <label for="name">
                NAME <br>
                <input id="name" type="text">
            </label>
         </form>
        </div>
         
      
      </div>
    </section>

@include('footer')
