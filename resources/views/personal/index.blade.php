 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Personal</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
 </head>

 <body>
     <div class="container">
         <h1 class="text text-primary my-4 text-center">Persons</h1>
         <a href="{{ route('personal.create') }}" class="btn btn-primary mb-3">Create New Person</a>
         <table class="table table-bordered">
             <thead>
                 <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>City</th>
                     <th>Email</th>
                     <th>Phone</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($personal as $person)
                 <tr>
                     <td>{{ $person->id }}</td>
                     <td>{{ $person->name }}</td>
                     <td>{{ $person->city }}</td>
                     <td>{{ $person->email }}</td>
                     <td>{{ $person->phone }}</td>
                 </tr>
                 @endforeach
             </tbody>
     </div>
 </body>

 </html>