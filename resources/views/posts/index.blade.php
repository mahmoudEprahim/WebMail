<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" type="text/css" href="css/b.css">
    <style>
    * {box-sizing: border-box}
    body {font-family: "Lato", sans-serif;}

    /* Style the tab */
    .tab {
      float: left;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
      width: 30%;
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
    .tab button:hover a:hover {
      background-color: #ddd;
    }

    /* Create an active/current "tab button" class */
    .tab button.active, a:active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
      float: left;
      padding: 0px 12px;
      /* border: 1px solid #ccc; */
      width: 70%;
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
</head>
<body>


		<div class="header">



				<h1> WebMail</h1>

				<div style="padding:4px;width:231px;float: right;margin-top: -39px;">
		<table border="0" align="center" cellpadding="0">
		<tbody><tr><td>
		<input type="text" name="q" size="25" style="width: 116px; float: left; border: 1px solid rgb(51, 124, 239); padding: 5px; border-radius: 10px; color: black;" maxlength="255" value="Site Search" onfocus="if(this.value==this.defaultValue)this.value=''; this.style.color='black';" onblur="if(this.value=='')this.value=this.defaultValue; ">
		<input type="submit" value="إبحث" style="color: #ffffff;background: #337cef;padding: 5px 10px;border-radius: 10px;border: 0;margin-left: 5px;">
		<input type="hidden" name="sitesearch" value="ju.edu.jo"></td></tr>
		</tbody></table>
				</div>
				<a href="#"> <img src="index.png" height="50" width="80"></a>
			</div>

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


          @foreach ($message as $one)
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
    <div class="input__filed"></div>
                <input type="email" name="to" class="a" placeholder="to" >
                <input type="text" name="Adderss" class="a" placeholder="Adderss">
                <textarea type="text" name="message" rows="25" class="a" placeholder="message" ></textarea>
                <input type="file" name="file" >
                <input type="submit" name="submit" value="Send"></p>


</form>


</div>


        </div>
    </div>
</div>




































</div>










	</header>




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




































































































</div>
</body>
</html>
