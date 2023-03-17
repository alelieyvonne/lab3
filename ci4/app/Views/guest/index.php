<html>
    <head>
        <title> Website </title>
        <link rel="stylesheet" href="style1.css"> </link>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <style>
.error {color: #FF0000;}
        body{
            margin: 0;
    padding: 0;
    font-family: sans-serif;
}
.banners{
    width: 100%;
    height: 100%;
    background-image: url(images/background.png.jpg);
    background-size: cover;
    background-position: center;
}

html, body {
  height: 100%;
  margin: 0;
  font-family: Lato;
  color: rgb(123, 85, 85);
}

#page1 { background: #f6e0b5; }


.wrapper {
  display: table;
  height: 100%; width: 100%;
  margin-top: 0%;
}

.stage1 {
  display: table-cell;
  vertical-align: middle;
}

.tabled, .middled1 {
  text-align: center;
  margin: 0 auto;
}

h1 { text-transform: uppercase; }
h1 ~ span, p { color: #2d2d2d; }
.thin { font-weight: 300; }
.thick { font-weight: 900; }

p {
  position: absolute;
  bottom: 0;
  text-align: right;
  right: 1em;
  font-size: 80%;
}

.column1 {
    float: left;
    display: flex;
    background: #dfe0cc;
    margin-left: 50px;
    padding: 10px;
    width: 40%;
    min-height: 500px;
    background-size: 20px;
    border: 5px rgb(94, 68, 68) solid
    
}

h1 {
  font-size: 20px;
  font-style: italic;
  position: relative;
  margin-left: 25%;
  margin-top: 10%;
  color:rgb(118, 79, 79);
  text-align: center;
}

p, a{
  margin-bottom: 20%;
  margin-right: 20%;
  font-size: 20px;
  font-style: normal;
  color: #babc9a;
  text-align: center;
}


.column2 {
    float: right;
    display: flex;
    background: #dfe0cc;
    margin-right: 50px;
    padding: 10px;
    width: 40%;
    min-height: 500px;
    border: 5px rgb(94, 68, 68) solid;
}
img {
  width: 100%;
  height: 100%;
  margin-top: 70px;
  display: block;
  margin: auto;
}


#page2 { background: #efc1b0; }

.wrapper {
  display: table;
  height: 100%; width: 100%;
  margin-top: 0%;
}

.stage2 {
  display: table-cell;
  vertical-align: middle;
}

.tabled, .middled2 {
  text-align: center;
  margin: 0 auto;
}

h1 { text-transform: uppercase; }
h1 ~ span, p { color: #2d2d2d; }
.thin { font-weight: 300; }
.thick { font-weight: 900; }

p {
  position: absolute;
  bottom: 0;
  text-align: right;
  right: 1em;
  font-size: 80%;
}

.column3 {
    float: left;
    display: flex;
    background: #dfe0cc;
    margin-left: 5px;
    margin-right: 0;
    padding: 5px;
    width: 97%;
    max-height: 100%;
    background-size: 5px;
    border: 5px rgb(94, 68, 68) solid
    
}

h2{
  position: relative;
  align-items: center;
  text-align: center;
}

p, a{
  position: relative;
  text-align: center;
}

#page3 { background: #aa6f73; }

.wrapper {
  display: table;
  height: 100%; width: 100%;
  margin-top: 0%;
}

.stage3 {
  display: table-cell;
  vertical-align: middle;
}

.tabled, .middled3 {
  text-align: center;
  margin: 0 auto;
}

h1 { text-transform: uppercase; }
h1 ~ span, p { color: #2d2d2d; }
.thin { font-weight: 300; }
.thick { font-weight: 900; }

p {
  position: absolute;
  bottom: 0;
  text-align: right;
  right: 1em;
  font-size: 80%;
}

.column4 {
    float: left;
    display: flex;
    background: #dfe0cc;
    margin-left: 5px;
    margin-right: 0;
    padding: 5px;
    width: 97%;
    max-height: 100%;
    background-size: 5px;
    border: 5px rgb(94, 68, 68) solid
    
}

h2{
  position: relative;
  align-items: center;
  text-align: center;
}

p, a{
  position: relative;
  text-align: center;
}



</style>
<div class="wrapper tabled">
  <div class="stage2" id="page2">
    <div class="middled2">
      
      <div class="row2">
        <div class="column3">
          

          <div class="card">
<h2><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>

        <div class="main">
		<br>
		<b>
		<table>
		<tr>
		<th>-----</th>
		 <th><?= esc($guest_item['name']) ?> </th>
         <th><?= esc($guest_item['email']) ?> </th>
		 <th><?= esc($guest_item['comment']) ?> </th>
		</tr>
		</table>
        </div>
    <?php endforeach ?>

<?php else: ?>
    <h3>No guest</h3>
    <p>Unable to find any guest for you.</p>

<?php endif ?>
  
</div>

</div>
</div>



</div>
</div>
</div>

</html>