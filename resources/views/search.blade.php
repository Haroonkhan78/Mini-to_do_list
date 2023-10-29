<!DOCTYPE html>
<html lang="en">
<head>
    <title>Simple To Do List</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!--Stylesheet-->
    <link rel="stylesheet" href="css/style.css">
    <style>
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
        th, td {
          padding: 5px;
          text-align: left;
        }
        </style>
</head>
<body>
    <div class="container">
     
        <div id="tasks" >

  
               
                   
<table style="width:100%">
 
    <tr>
      <th class="text-center">Today Tasks</th>
      <th class="text-center" colspan="2">Actions</th>
    </tr>
 
        @foreach ($data as $task)
        <tr>
        <td style="width: 100%">{{$task->taskname}}</td>
      
        <td class="text-center"><a class="btn btn-danger" href="{{route('deltask', $task->id)}}">Delete</td>
    </tr>
        @endforeach
    
     
 
    
  </table>

 
               
        </div>
    </div>
</body>
</html>