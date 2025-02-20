

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Balthazar&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
    
    body{
      width: 100%;
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

    #section1  h1{
      font-weight: 450;
      font-size: 70px;
      font-family: 'Poppins', sans;
      text-align: center;
    }
    </style>
  </head>



<body>
      
    @include('header') 
    <section>
      <div class="container-fluid" id="section1" style=" background-image:url('{{ asset('images/background.png')}}');">
        <h1>
          Student Attendance
        </h1>
      </div>
    </section>
    @include('footer')
    </div>
</body>
</html>