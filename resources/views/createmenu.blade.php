<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

        <link rel="stylesheet" href="{{asset('/css/createmenu.css')}}">
        <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

@include('header')

    <!-- component -->
<div class="containerAll bg-green-200 py-32 px-10 min-h-screen ">
  <!--   tip; mx-auto -- jagab ilusti keskele  -->
  <div class="containerItems bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto">

    <form action="">

      <!--       flex - asjad korvuti, nb! flex-1 - element kogu ylejaanud laius -->
      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="plate" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Plate</label>
        <input type="text" id="plate" name="plate" placeholder="Plate" 
               class="inputStyle flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none">
      </div>

      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="description" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">Description</label>
        <input type="text" id="description" name="description" placeholder="description" 
               class="inputStyle flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none">
      </div>

     

      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for=file" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">File</label>
        <input type="file" id="file" name="file" placeholder="file" 
               class="fileStyle flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none">
      </div>

      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="countries" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">day</label>
  <select id="countries" class="inputStyle flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none">
    <option selected>Choose a day</option>
    <option value="monday">Monday</option>
    <option value="tuesday">Tuesday</option>
    <option value="wednesday">Wednesday</option>
    <option value="thursday">Thursday</option>
    <option value="friday">Friday</option>
    <option value="saturday">Saturday</option>
    <option value="sunday">Sunday</option>
  </select>
      </div>


   

      <div class="text-right">
        <button class="buttonStyle py-3 px-8 bg-green-400 text-white font-bold">Submit</button> 
      </div>

    </form>
  </div>
</div>


    
</body>
</html>