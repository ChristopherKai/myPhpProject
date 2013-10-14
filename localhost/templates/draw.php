<h4 style="width:615px; padding-top:3px; padding-bottom:3px;margin:auto ;border-radius: 5px;">Could you draw a(an) <span id = 'word' style="color:green ;font-size:30px"><?=$word?></span> for us? :)</h4>
<div id = "canvas">
<canvas id = "draw" height = "400" width = "610" >
</canvas>
</div>
<div id = "tools" style= "margin:20px display:inline-block" class="btn-group" data-toggle="buttons-radio">
    <button type="button" class="btn btn-danger" onclick="penColorRed()">Red</button>
    <button type="button" class="btn btn-primary" onclick="penColorBlue()">Blue</button>
    <button type="button" class="btn btn-success" onclick="penColorGreen()">Green</button>
    <button type="button" class="btn btn-warning" onclick="penColorOrange()">Orange</button>
    <button type="button" class="btn btn-info" onclick="penColorCyan()">Cyan</button>
    <button type="button" class="btn btn-inverse" onclick="penColorBlack()">Black</button>
    <button type="button" class="btn " onclick="penColorWhite()">White</button>
</div>

<div id = "tools" style= "margin:20px " class="btn-group" data-toggle="buttons-radio">
    <button type="button" class="btn btn-inverse" onclick="small()">Small</button>
    <button type="button" class="btn btn-inverse" onclick="medium()">Medium</button>
    <button type="button" class="btn btn-inverse" onclick="big()">Big</button>
</div>
<div style= "margin:20px">
<button type="button" class="btn" onclick="clearCanvas()">Clear</button>
<button type="button" class="btn" onclick="saveCanvas()">Submit!</button>
<input type="text" name="email" placeholder="E-mail" style="position:relative;top:5px;"/>
<button type="button" class="btn" onclick="email()">E-mail!</button>
</div>
<div id="save"style="font-size:30px">
</div>
