@extends('layouts.master')
@push('css')
<!-- <link rel="stylesheet" type="text/css" href="css/b.css"> -->
<style>
/* * {box-sizing: border-box}
body {font-family: "Lato", sans-serif;} */

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
 width: 100%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 100%;
  border-left: none;
  height: 300px;
}
#customers {
font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 100%;
}

#customers td, #customers th {
border: 1px solid #ddd;
padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #4CAF50;
color: white;
}
.btn {


color: black;
font-size: 16px;
padding: 16px 30px;
border: none;
cursor: pointer;
border-radius: 5px;
text-align: center;
}
</style>
@endpush()
@push('scripts')
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

@endpush
@section('contect')
<div class="container">
<div class="row">
    <div class="col-md-3">
        <div class="tab">
          <button class="tablinks" onclick="openCity(event, 'InBox')" id="defaultOpen">InBox</button>
          <button class="tablinks" onclick="openCity(event, 'OutBox')">OutBox</button>
          <button class="tablinks" onclick="openCity(event, 'messages')">messages</button>
        </div>
    </div>
    <div class="col-md-9">
        <div id="InBox" class="tabcontent">
            <table id="customers">
              <tr>
                <th>messages</th>
                <th>show</th>
                <th>Edit</th>
                <th>delete</th>
                <th>reply</th>
              </tr>


                  @foreach ($inbox as $one)
                    <tr>




                  <td>{{$one->title}}</td>
            <td>
            <a href="{{ route('posts.show', $one->id) }}" class="btn btn-primary mr-3">Show</a>

            </td>
            <td>
            <a href="{{ route('posts.edit', $one->id) }}" class="btn btn-info text-white ml-3">Edit</a>

            </td>
            <td>
            <form action="{{ route('posts.destroy',$one->id) }}" method="POST" >
                @csrf
                @method('DELETE')
                             <button type="submit" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</button>
                             </form>
            </td>

            <td>
            <a href="{{ route('posts.reply', $one->id) }}" class="btn btn-info text-white ml-3">reply</a>

            </td>
            </tr>
                    @endforeach




            </table>

        </div>
        <div id="OutBox" class="tabcontent">
            <table id="customers">
              <tr>
                <th>messages</th>
                <th>show</th>
                <th>Edit</th>
                <th>delete</th>
                <th>reply</th>
              </tr>


                  @foreach ($outBox as $one)
                    <tr>




                  <td>{{$one->title}}</td>
            <td>
            <a href="{{ route('posts.show', $one->id) }}" class="btn btn-primary mr-3">Show</a>

            </td>
            <td>
            <a href="{{ route('posts.edit', $one->id) }}" class="btn btn-info text-white ml-3">Edit</a>

            </td>
            <td>
            <form action="{{ route('posts.destroy',$one->id) }}" method="POST" >
                @csrf
                @method('DELETE')
                             <button type="submit" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</button>
                             </form>
            </td>

            <td>
            <a href="{{ route('posts.reply', $one->id) }}" class="btn btn-info text-white ml-3">reply</a>

            </td>
            </tr>
                    @endforeach




            </table>
        </div>

        <div id="messages" class="tabcontent">

        <form class="" action="{{route('posts.add')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="email">email:</label>
              <input type="email" name="to" class="form-control"  placeholder="to" id="email">
            </div>

            <div class="form-group">
              <label for="Adderss">Adderss:</label>
              <input type="text" name="Adderss" class="form-control"  placeholder="Adderss" id="Adderss">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">message</label>
                <textarea  name="message" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="1"></textarea>
            </div>

                <input type="file" name="file" class=""  placeholder="file">
                <input type="submit" style="height:35px;width: 66px;padding:1px" name="submit"  Value="Send" class="btn btn-primary"  >




        </form>


        </div>

    </div>
    </div>
    </div>

@endsection
