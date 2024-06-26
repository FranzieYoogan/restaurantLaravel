<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

        <link rel="stylesheet" href="{{asset('/css/menu.css')}}">

</head>
<body>

@include('header')


<section class="containerAll">
    
<div>



@if(isset($plates) && $plates)

<form class="containerCrud" method="POST" action="/delete">
    @csrf
    @foreach ($plates as $plate )
        
    <div style="position: relative;">
    
    <button type="submit" class="closeStyle"><img  src="{{asset('/icons/close.png')}}" alt=""></button>
    <h1 class="titleStyle">{{ucfirst($plate->plateDay)}} - Menu</h1>
    <input style="display: none" name="id" type="text" value="{{$plate->id}}">
    <h1 class="titlePlate">{{$plate->plateName}}</h1>

    <p class="description">{{$plate->plateDescription}}</p>
    <div>

    <img class="imgStyle" src="{{'storage/' . $plate->plateImg}}" alt="">

    </div>


    </div>

    @endforeach


</form>

@elseif(isset($_POST['submit']))

<div class="errorStyle p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
  <span class="font-medium">ERROR!</span> NO MENU REGISTERED.
</div>

@endif




<form class="containerItems flex items-center mb-5" method="POST" action="/menu">
      @csrf
    
        <div>

       
  <select id="day" name="day" class="inputStyle flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none" required>
    <option selected>Choose a day</option>
    <option value="monday">Monday</option>
    <option value="tuesday">Tuesday</option>
    <option value="wednesday">Wednesday</option>
    <option value="thursday">Thursday</option>
    <option value="friday">Friday</option>
    <option value="saturday">Saturday</option>
    <option value="sunday">Sunday</option>
  </select>
 

  <div>
  <button type="submit" name="submit" class="menuButton text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Show Menu</button>
  </div>

  </div>
      </form>

      </div>
      </section>


      

</body>
</html>