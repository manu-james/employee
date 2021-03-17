@extends("theme")
@section("content")
<div><h1>Employee</h1></div>
<body><div class="container"><table class="table table-borderless">
    
    <tr>
        <td>Employee name</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>emp code</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Destination</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>salary</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>DOB</td>
        <td><input type="date" class="form-control"></td>
    </tr>
    <tr>
        <td>Pincode</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Phno</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td></td>
        <td><Button class="btn-btn-sucess">Submit</Button></td>
    </tr>   
     </table></div>
     
@endsection