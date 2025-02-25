
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
      height: 540px;
      border-radius: 10px;
      border: 1px #fff solid;
      justify-content: center;
      place-content: center;
    }
    
    .first-section-div h1{
        font-family: 'Poppins', sans;
    }

    input{
      font-family: 'Poppins', sans;
      background-color: transparent;
      color: #fff;
      border: 1px white solid;
      height: 49px;
      padding-left: 20px;
      width: 269px;
    }

    input::placeholder{
      color: #fff;
      font-family: 'Poppins', sans;

    }

    label{
      font-family: 'Poppins', sans;

      text-align: start;
      letter-spacing: 2px;
      padding-bottom: 10px;
    }

    .submit{
      width: 150px;
      margin-top: 20px;
      border-radius: 30px;
    }

    .submit:hover{
      color: #000;
      background-color: #fff;
    }
</style>

@include('header')
<section>
      <div class="container-fluid" id="section1" style=" background-image:url('{{ asset('images/background.png')}}');">
        <div class="first-section-div">
         <h1>
           Log in 
         </h1>
        <p>
           Don't have an account? <a href="/signup">Sign up</a> 
        </p>

         <form action="#">
      

            <label for="email">
                EMAIL <br>
                <input id="email" type="email" placeholder="Jiaramartins@gmail.com">
            </label>



            <label for="password">
                PASSWORD <br>
                <input id="password" type="password" placeholder="*********">
            </label>

        
            <br>

            <input  class="submit" type="submit" value="SIGN UP">

         </form>
        </div>
         
      
      </div>
    </section>

@include('footer')
